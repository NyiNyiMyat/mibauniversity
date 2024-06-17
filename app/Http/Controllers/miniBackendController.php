<?php

namespace App\Http\Controllers;
use App\Models\SbsStudent;
use App\Models\Lincoln;
use App\Models\MiniMBA;
use App\Models\Abestudent;
use App\Models\iqnDiploma;
use App\Models\Certificate;

use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class miniBackendController extends Controller
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
      
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();

        $certificate=Certificate::all();
        $mini=MiniMBA::latest()->get();
        return view('backend.miniMba.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.miniMba.create');
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
           $pathpro= Storage::putFileAs('public/miniimages',$request->file('pro'),$pro);

           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/miniimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/miniimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/miniimages',$request->file('nrcb'),$nrcb);

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
   
           $send1= storage_path('app/public/miniimages/'.$pro);
           $send2= storage_path('app/public/miniimages/'.$pay);
           $send3= storage_path('app/public/miniimages/'.$nrcf);
           $send4= storage_path('app/public/miniimages/'.$nrcb);
           
   
           \Mail::to($receiver)->send(new \App\Mail\minionlineMail($details,$send1,$send2,$send3,$send4));

           MiniMBA::create([

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
        $mini=MiniMBA::find($id);
        return view('backend.miniMba.detail',compact('mini'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mini=MiniMBA::find($id);
        return view('backend.miniMba.edit',compact('mini'));
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
            $mini=MiniMBA::find($id);
            
            $mini->course=$request->course;
            $mini->campus=$request->campus;
            $mini->intake=$request->intake;
            $mini->type=$request->type;
            $mini->fullname=$request->fullname;
            $mini->gender=$request->gender;
            $mini->dob=$request->dob;
            $mini->day=$request->day;
            $mini->month=$request->month;
            $mini->nrc=$request->nrc;

            $mini->nation=$request->nation;
            $mini->relig=$request->relig;
            $mini->father=$request->father;
            $mini->stu_ph=$request->stu_ph;
            $mini->email=$request->email;
            $mini->address=$request->address;

            $mini->occupation=$request->occupation;
            $mini->com_name=$request->com_name;
            $mini->com_ph=$request->com_ph;
            $mini->ad_year=$request->ad_year;
            $mini->university=$request->university;
            $mini->degree=$request->degree;
            $mini->major=$request->major;
            $mini->other_ql=$request->other_ql;
            $mini->location=$request->location;
            $mini->certificate=$request->certificate;

            $mini->ad_date=$request->ad_date;
            $mini->em_name=$request->em_name;
            $mini->em_rela=$request->em_rela;
            $mini->em_comph=$request->em_comph;

            if($request->hasfile('pro'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/miniimages/'.$mini->pro));

                $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/miniimages',$request->file('pro'),$pro);

                $mini->pro=$pro;
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
                unlink(storage_path('app/public/miniimages/'.$mini->pay));

                $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/miniimages',$request->file('pay'),$pay);

                $mini->pay=$pay;
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
                unlink(storage_path('app/public/miniimages/'.$mini->pay));

                $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
                $pathnrcf= Storage::putFileAs('public/miniimages',$request->file('nrcf'),$nrcf);

                $mini->nrcf=$nrcf;
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
                unlink(storage_path('app/public/miniimages/'.$mini->nrcb));

                $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
                $pathnrcb= Storage::putFileAs('public/miniimages',$request->file('nrcb'),$nrcb);

                $mini->nrcb=$nrcb;
            }



             $mini->update();

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
        $mini=MiniMBA::find($id);
        $mini->delete();
        return redirect()->route('miniMBA.index')->with('success','Deleted successfully....');
    }


    public function facetoface($type){

    
        if($type==1){
          $type_name ="Face-To-Face-On-Campus";
        }
 
 
         $mini=MiniMBA::where("type",$type_name)->get();
 
        //dd($certificate);
         // $certificate=Certificate::where("type",)->latest()->get();
         
         $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
      
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();

        $certificate=Certificate::all();
         return view('backend.miniMba.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
     }
 
     public function elearning($type){
 
     
         if($type==2){
           $type_name ="E-Learning-Platform";
         }
  
  
          $mini=MiniMBA::where("type",$type_name)->get();
  
          $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
      
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();

        $certificate=Certificate::all();
         return view('backend.miniMba.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
      
 
      public function zoom($type){
 
      if($type==3){
           $type_name ="Online-Learning-(Zoom-Class)";
         }
  
  
          $mini=MiniMBA::where("type",$type_name)->get();
  
          $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
      
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();

        $certificate=Certificate::all();
         return view('backend.miniMba.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
      }
}
