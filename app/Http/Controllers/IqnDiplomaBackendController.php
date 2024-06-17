<?php

namespace App\Http\Controllers;
use App\Models\MiniMBA;
use App\Models\Abestudent;
use App\Models\iqnDiploma;
use App\Models\SbsStudent;
use App\Models\Lincoln;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class IqnDiplomaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        
        $certificate=Certificate::all();
      $iqnstudents=iqnDiploma::latest()->get();
      return view('backend.iqnbackendpos.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.iqnbackendpos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'pro'=>'required|mimes:jpeg,jpg,png,gif',
            'pay'=>'required|mimes:jpeg,jpg,png,gif',
            'nrcf'=>'required|mimes:jpeg,jpg,png,gif',
            'nrcb'=>'required|mimes:jpeg,jpg,png,gif',
            'degreefile'=>'mimes:pdf',

            'course'=>'required',
            'campus'=>'required',
            'intake'=>'required',
            'type'=>'required',
            'fullname'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'nrc'=>'required',

            'nation'=>'required',
            'relig'=>'required',
            'father'=>'required',
            'stu_ph'=>'required',
            'email'=>'required',
            'address'=>'required',
            'em_name'=>'required',
            'em_rela'=>'required',
            'em_comph'=>'required'

           ]); 

           $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
           $pathpro= Storage::putFileAs('public/iqnposimages',$request->file('pro'),$pro);
           
       
          
           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/iqnposimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/iqnposimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/iqnposimages',$request->file('nrcb'),$nrcb);


           $degreefile="none";

          

           if($request->file('degreefile')!=null){
            $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
            //dd(rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName());
            $pathdegree= Storage::putFileAs('public/iqnposimages/degree',$request->file('degreefile'),$degreefile);
            
           }

           
           $receiver=$request->email;

       $details = [
           
           'pro'=>$pro,
           'pay'=>$pay,
           'nrcf'=>$nrcf,
           'nrcb'=>$nrcb,

           'course'=>$request->course,
           'degreefile'=>$request->degreefile,
           'campus'=>$request->campus,
           'intake'=>$request->intake,
           'type'=>$request->type,
           'fullname'=>$request->fullname,
           'gender'=>$request->gender,
           'dob'=>$request->dob,
    
           'nrc'=>$request->nrc,

           'nation'=>$request->nation,
           'relig'=>$request->relig,
           'father'=>$request->father,
           'stu_ph'=>$request->stu_ph,
           'email'=>$request->email,
           'address'=>$request->address,

           'occupation'=>$request->occupation,
           'com_name'=>$request->com_name,
           'com_ph'=>$request->com_ph,
           'ad_year'=>$request->ad_year,
           'university'=>$request->university,
           'degree'=>$request->degree,
           'major'=>$request->major,
           'other_ql'=>$request->other_ql,
           'location'=>$request->location,
           'certificate'=>$request->certificate,

           'ad_date'=>$request->ad_date,
           'em_name'=>$request->em_name,
           'em_rela'=>$request->em_rela,
           'em_comph'=>$request->em_comph,
           
       ];

       $send1= storage_path('app/public/iqnposimages/'.$pro);
       $send2= storage_path('app/public/iqnposimages/'.$pay);
       $send3= storage_path('app/public/iqnposimages/'.$nrcf);
       $send4= storage_path('app/public/iqnposimages/'.$nrcb);
       
if($degreefile=="none"){
    \Mail::to($receiver)->send(new \App\Mail\iqnonlineMail($details,$send1,$send2,$send3,$send4));

}else{

    $send5= storage_path('app/public/iqnposimages/degree/'.$degreefile);
    \Mail::to($receiver)->send(new \App\Mail\iqnonlineMail5($details,$send1,$send2,$send3,$send4,$send5));
        
}
     
      
       iqnDiploma::create([

            'pro'=>$pro,
            'pay'=>$pay,
            'nrcf'=>$nrcf,
            'nrcb'=>$nrcb,

            'course'=>$request->course,
            'degreefile'=>$degreefile,
            'campus'=>$request->campus,
            'intake'=>$request->intake,
            'type'=>$request->type,
            'fullname'=>$request->fullname,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
             $dob = explode("-", $request->dob),
            'nrc'=>$request->nrc,

            'nation'=>$request->nation,
            'relig'=>$request->relig,
            'father'=>$request->father,
            'stu_ph'=>$request->stu_ph,
            'email'=>$request->email,
            'address'=>$request->address,

            'occupation'=>$request->occupation,
            'com_name'=>$request->com_name,
            'com_ph'=>$request->com_ph,
            'ad_year'=>$request->ad_year,
            'university'=>$request->university,
            'degree'=>$request->degree,
            'major'=>$request->major,
            'other_ql'=>$request->other_ql,
            'location'=>$request->location,
            'certificate'=>$request->certificate,

            'ad_date'=>$request->ad_date,
            'em_name'=>$request->em_name,
            'em_rela'=>$request->em_rela,
            'em_comph'=>$request->em_comph,
            'month'=>$dob[1],
            'day'=>$dob[2]

           ]);

           return back()->with('success','Successfully saved...Mail Send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iqnstudent=iqnDiploma::find($id);
        return view('backend.iqnbackendpos.detail',compact('iqnstudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iqnstudent=iqnDiploma::find($id);
        return view('backend.iqnbackendpos.edit',compact('iqnstudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $request->validate([

            'pro'=>'mimes:jpeg,jpg,png,gif',
            'pay'=>'mimes:jpeg,jpg,png,gif',
            'nrcf'=>'mimes:jpeg,jpg,png,gif',
            'nrcb'=>'mimes:jpeg,jpg,png,gif',
            'degreefile'=>'mimes:pdf',

        ]); 
            $iqnstudents=iqnDiploma::find($id);
            
            $iqnstudents->course=$request->course;
            $iqnstudents->degreefile=$request->degreefile;
            $iqnstudents->campus=$request->campus;
            $iqnstudents->intake=$request->intake;
            $iqnstudents->type=$request->type;
            $iqnstudents->fullname=$request->fullname;
            $iqnstudents->gender=$request->gender;
            $iqnstudents->dob=$request->dob;
            $iqnstudents->month=$request->month;
            $iqnstudents->day=$request->day;
           

            $iqnstudents->nation=$request->nation;
            $iqnstudents->relig=$request->relig;
            $iqnstudents->father=$request->father;
            $iqnstudents->stu_ph=$request->stu_ph;
            $iqnstudents->email=$request->email;
            $iqnstudents->address=$request->address;

            $iqnstudents->occupation=$request->occupation;
            $iqnstudents->com_name=$request->com_name;
            $iqnstudents->com_ph=$request->com_ph;
            $iqnstudents->ad_year=$request->ad_year;
            $iqnstudents->university=$request->university;
            $iqnstudents->degree=$request->degree;
            $iqnstudents->major=$request->major;
            $iqnstudents->other_ql=$request->other_ql;
            $iqnstudents->location=$request->location;
            $iqnstudents->certificate=$request->certificate;

            $iqnstudents->ad_date=$request->ad_date;
            $iqnstudents->em_name=$request->em_name;
            $iqnstudents->em_rela=$request->em_rela;
            $iqnstudents->em_comph=$request->em_comph;

            if($request->hasfile('pro'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/iqnposimages/'.$iqnstudents->pro));

                $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/iqnposimages',$request->file('pro'),$pro);

                $iqnstudents->pro=$pro;
            }


            

            if($request->hasfile('pay'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/iqnposimages/'.$iqnstudents->pay));

                $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/iqnposimages',$request->file('pay'),$pay);

                $iqnstudents->pay=$pay;
            }

            if($request->hasfile('nrcf'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/iqnposimages/'.$iqnstudents->pay));

                $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
                $pathnrcf= Storage::putFileAs('public/iqnposimages',$request->file('nrcf'),$nrcf);

                $iqnstudents->nrcf=$nrcf;
            }


            if($request->hasfile('nrcb'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/iqnposimages/'.$iqnstudents->nrcb));

                $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
                $pathnrcb= Storage::putFileAs('public/iqnposimages',$request->file('nrcb'),$nrcb);

                $iqnstudents->nrcb=$nrcb;
            }


            if($request->hasfile('degreefile'))
            {

                //dd("Testing True... ");
                
                $destnation ='app/public/iqnposimages/degree/'.$iqnstudents->degreefile;
                if(Storage::exists($destnation)){
                    unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));
                }

                //delete exisiting image
                //unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));

                $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
                $pathdege= Storage::putFileAs('public/iqnposimages/degree',$request->file('degreefile'),$degreefile);

                $iqnstudents->degreefile=$degreefile;
            }else{
                $iqnstudents->degreefile=$request->curr_de;
            }
    
           

             $iqnstudents->update();

           return back()->with('success','successfully updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iqnDiploma=iqnDiploma::find($id);
        $iqnDiploma->delete();
        return back()->with('success','Deleted successfully....');
    }


    public function facetoface($type){

    
        if($type==1){
          $type_name ="Face-To-Face-On-Campus";
        }
 
 $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        
        $certificate=Certificate::all();
          $iqnstudents=iqnDiploma::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.iqnbackendpos.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
     }
 
     public function elearning($type){
 
     
         if($type==2){
           $type_name ="E-Learning-Platform";
         }
  
  
        $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        
        $certificate=Certificate::all();
          $iqnstudents=iqnDiploma::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.iqnbackendpos.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
 
      public function zoom($type){
 
     
         if($type==3){
           $type_name ="Online-Learning-(Zoom-Class)";
         }
  
   $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        
        $certificate=Certificate::all();
          $iqnstudents=iqnDiploma::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.iqnbackendpos.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
}
