<?php

namespace App\Http\Controllers;
use App\Models\MiniMBA;
use App\Models\Abestudent;
use App\Models\iqnDiploma;
use App\Models\SbsStudent;
use App\Models\Lincoln;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
class AbeBackendController extends Controller
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
      
        $iqnstudents=iqnDiploma::all();
        $certificate=Certificate::all();

      $abestudents=Abestudent::latest()->get();
      return view('backend.abebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.abebackend.create');
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
           $pathpro= Storage::putFileAs('public/abeimages',$request->file('pro'),$pro);

           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/abeimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/abeimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/abeimages',$request->file('nrcb'),$nrcb);

           $receiver=$request->email;

           $details = [
               
               'pro'=>$pro,
               'pay'=>$pay,
               'nrcf'=>$nrcf,
               'nrcb'=>$nrcb,
   
               'course'=>$request->course,
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
   
           $send1= storage_path('app/public/abeimages/'.$pro);
           $send2= storage_path('app/public/abeimages/'.$pay);
           $send3= storage_path('app/public/abeimages/'.$nrcf);
           $send4= storage_path('app/public/abeimages/'.$nrcb);
           
   
           \Mail::to($receiver)->send(new \App\Mail\abeonlineMail($details,$send1,$send2,$send3,$send4));

           Abestudent::create([

            'pro'=>$pro,
            'pay'=>$pay,
            'nrcf'=>$nrcf,
            'nrcb'=>$nrcb,

            'course'=>$request->course,
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
        $abestudent=Abestudent::find($id);
        return view('backend.abebackend.detail',compact('abestudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abestudent=Abestudent::find($id);
        return view('backend.abebackend.edit',compact('abestudent'));
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

        ]); 
            $abestudent=Abestudent::find($id);
            
            $abestudent->course=$request->course;
            $abestudent->campus=$request->campus;
            $abestudent->intake=$request->intake;
            $abestudent->type=$request->type;
            $abestudent->fullname=$request->fullname;
            $abestudent->gender=$request->gender;
            $abestudent->dob=$request->dob;
            $abestudent->month=$request->month;
            $abestudent->day=$request->day;
           

            $abestudent->nation=$request->nation;
            $abestudent->relig=$request->relig;
            $abestudent->father=$request->father;
            $abestudent->stu_ph=$request->stu_ph;
            $abestudent->email=$request->email;
            $abestudent->address=$request->address;

            $abestudent->occupation=$request->occupation;
            $abestudent->com_name=$request->com_name;
            $abestudent->com_ph=$request->com_ph;
            $abestudent->ad_year=$request->ad_year;
            $abestudent->university=$request->university;
            $abestudent->degree=$request->degree;
            $abestudent->major=$request->major;
            $abestudent->other_ql=$request->other_ql;
            $abestudent->location=$request->location;
            $abestudent->certificate=$request->certificate;

            $abestudent->ad_date=$request->ad_date;
            $abestudent->em_name=$request->em_name;
            $abestudent->em_rela=$request->em_rela;
            $abestudent->em_comph=$request->em_comph;

            if($request->hasfile('pro'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/abeimages/'.$abestudent->pro));

                $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/abeimages',$request->file('pro'),$pro);

                $abestudent->pro=$pro;
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
                unlink(storage_path('app/public/abeimages/'.$abestudent->pay));

                $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/abeimages',$request->file('pay'),$pay);

                $abestudent->pay=$pay;
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
                unlink(storage_path('app/public/abeimages/'.$abestudent->pay));

                $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
                $pathnrcf= Storage::putFileAs('public/abeimages',$request->file('nrcf'),$nrcf);

                $abestudent->nrcf=$nrcf;
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
                unlink(storage_path('app/public/abeimages/'.$abestudent->nrcb));

                $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
                $pathnrcb= Storage::putFileAs('public/abeimages',$request->file('nrcb'),$nrcb);

                $abestudent->nrcb=$nrcb;
            }



             $abestudent->update();

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
        $abestudent=Abestudent::find($id);
        $abestudent->delete();
        return redirect()->route('abebackend.index')->with('success','Deleted successfully....');
    }

    public function deleteAll(Request $request)
    {
        $ids=$request->ids;
        Abestudent::whereIn('id',$ids)->delete();
        return redirect()->route('abebackendZoom.index')->with('success','Deleted successfully....');
    }


    public function facetoface($type){

    
        if($type==1){
          $type_name ="Face-To-Face-On-Campus";
        }
 
  $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
      
        $iqnstudents=iqnDiploma::all();
        $certificate=Certificate::all();
          $abestudents=Abestudent::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.abebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
     }
 
     public function elearning($type){
 
     
         if($type==2){
           $type_name ="E-Learning-Platform";
         }
  
  
           $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
      
        $iqnstudents=iqnDiploma::all();
        $certificate=Certificate::all();
          $abestudents=Abestudent::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.abebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
 
      public function zoom($type){
 
     
         if($type==3){
           $type_name ="Online-Learning-(Zoom-Class)";
         }
  
              $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
      
        $iqnstudents=iqnDiploma::all();
        $certificate=Certificate::all();
          $abestudents=Abestudent::where("type",$type_name)->get();
  
         //dd($certificate);
          // $certificate=Certificate::where("type",)->latest()->get();
          return view('backend.abebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
}
