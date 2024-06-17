<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\MiniMBA;
use App\Models\Abestudent;
use App\Models\iqnDiploma;
use App\Models\SbsStudent;
use App\Models\Lincoln;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
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
        $iqnstudents=iqnDiploma::all();
       
        $certificate=Certificate::latest()->get();
        // $certificate=Certificate::where("type",)->latest()->get();
        return view('backend.certificatebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.certificatebackend.create');
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

           ]); 

           $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
           $pathpro= Storage::putFileAs('public/certiimages',$request->file('pro'),$pro);

           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/certiimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/certiimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/certiimages',$request->file('nrcb'),$nrcb);

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
   
               
   
           ];
   
           $send1= storage_path('app/public/certiimages/'.$pro);
           $send2= storage_path('app/public/certiimages/'.$pay);
           $send3= storage_path('app/public/certiimages/'.$nrcf);
           $send4= storage_path('app/public/certiimages/'.$nrcb);
           
   
           \Mail::to($receiver)->send(new \App\Mail\certificateMail($details,$send1,$send2,$send3,$send4));

           Certificate::create([

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

            'month'=>$dob[1],
            'day'=>$dob[2]

           ]);

           return back()->with('success','Successfully saved...Mail Send');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificate=Certificate::find($id);
        return view('backend.certificatebackend.detail',compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $certificate=Certificate::find($id);
        return view('backend.certificatebackend.edit',compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
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
            $certificate=Certificate::find($id);
            
            $certificate->course=$request->course;
            $certificate->campus=$request->campus;
            $certificate->intake=$request->intake;
            $certificate->type=$request->type;
            $certificate->fullname=$request->fullname;
            $certificate->gender=$request->gender;
            $certificate->dob=$request->dob;
            $certificate->month=$request->month;
            $certificate->day=$request->day;

            $certificate->nrc=$request->nrc;

            $certificate->nation=$request->nation;
            $certificate->relig=$request->relig;
            $certificate->father=$request->father;
            $certificate->stu_ph=$request->stu_ph;
            $certificate->email=$request->email;
            $certificate->address=$request->address;

            if($request->hasfile('pro'))
            {

                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/

                //delete exisiting image
                unlink(storage_path('app/public/certiimages/'.$certificate->pro));

                $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/certiimages',$request->file('pro'),$pro);

                $certificate->pro=$pro;
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
                unlink(storage_path('app/public/certiimages/'.$certificate->pay));

                $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/certiimages',$request->file('pay'),$pay);

                $certificate->pay=$pay;
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
                unlink(storage_path('app/public/certiimages/'.$certificate->pay));

                $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
                $pathnrcf= Storage::putFileAs('public/certiimages',$request->file('nrcf'),$nrcf);

                $certificate->nrcf=$nrcf;
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
                unlink(storage_path('app/public/certiimages/'.$certificate->nrcb));

                $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
                $pathnrcb= Storage::putFileAs('public/certiimages',$request->file('nrcb'),$nrcb);

                $certificate->nrcb=$nrcb;
            }



             $certificate->update();

           return back()->with('success','successfully updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate=Certificate::find($id);
        $certificate->delete();
        return redirect()->route('certificatebackend.index')->with('success','Deleted successfully....');
    }

    public function facetoface($type){

    
       if($type==1){
         $type_name ="Face-To-Face-On-Campus";
       }

   $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();
         $certificate=Certificate::where("type",$type_name)->get();
 
        //dd($certificate);
         // $certificate=Certificate::where("type",)->latest()->get();
         return view('backend.certificatebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
    }

    public function elearning($type){

    
        if($type==2){
          $type_name ="E-Learning-Platform";
        }
 
 
            $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();
         $certificate=Certificate::where("type",$type_name)->get();
 
        //dd($certificate);
         // $certificate=Certificate::where("type",)->latest()->get();
         return view('backend.certificatebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
     }

     public function zoom($type){

    
        if($type==3){
          $type_name ="Online-Learning-(Zoom-Class)";
        }
 
    $sbsmbastudents=SbsStudent::all();
        $linmbastudents=Lincoln::all();
        $mini=MiniMBA::all();
        $abestudents=Abestudent::all();
        $iqnstudents=iqnDiploma::all();
         $certificate=Certificate::where("type",$type_name)->get();
 
        //dd($certificate);
         // $certificate=Certificate::where("type",)->latest()->get();
         return view('backend.certificatebackend.index',compact('mini','sbsmbastudents','linmbastudents','abestudents','iqnstudents','certificate'));
     }

}
