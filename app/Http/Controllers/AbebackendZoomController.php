<?php

namespace App\Http\Controllers;
use App\Models\AbestudentZoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AbebackendZoomController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
     $abestudentsZoom = AbestudentZoom::latest()->get();
     return view('backend.abebackendZoom.index',compact('abestudentsZoom'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    return view('backend.abebackendZoom.create');
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
       $pathpro= Storage::putFileAs('public/abezoomimages',$request->file('pro'),$pro);

       $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
       $pathpay= Storage::putFileAs('public/abezoomimages',$request->file('pay'),$pay);

       $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
       $pathnrcf= Storage::putFileAs('public/abezoomimages',$request->file('nrcf'),$nrcf);

       $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
       $pathnrcb= Storage::putFileAs('public/abezoomimages',$request->file('nrcb'),$nrcb);

       $receiver=$request->email;

       $details = [
           
           'pro'=>$pro,
           'pay'=>$pay,
           'nrcf'=>$nrcf,
           'nrcb'=>$nrcb,

           'course'=>$request->course,
           'campus'=>$request->campus,
           'intake'=>$request->intake,
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

       $send1= storage_path('app/public/abezoomimages/'.$pro);
       $send2= storage_path('app/public/abezoomimages/'.$pay);
       $send3= storage_path('app/public/abezoomimages/'.$nrcf);
       $send4= storage_path('app/public/abezoomimages/'.$nrcb);
       

       \Mail::to($receiver)->send(new \App\Mail\abezoomMail($details,$send1,$send2,$send3,$send4));

       AbestudentZoom::create([

        'pro'=>$pro,
        'pay'=>$pay,
        'nrcf'=>$nrcf,
        'nrcb'=>$nrcb,

        'course'=>$request->course,
        'campus'=>$request->campus,
        'intake'=>$request->intake,
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

       return back()->with('success','Successfully Registration...Send email');
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $abestudentzoom=AbestudentZoom::find($id);
       return view('backend.abebackendZoom.detail',compact('abestudentzoom'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $abestudentzoom=AbestudentZoom::find($id);
       return view('backend.abebackendZoom.edit',compact('abestudentzoom'));
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

    $abestudent=AbestudentZoom::find($id);
            
    $abestudent->course=$request->course;
    $abestudent->campus=$request->campus;
    $abestudent->intake=$request->intake;
    $abestudent->fullname=$request->fullname;
    $abestudent->gender=$request->gender;
    $abestudent->dob=$request->dob;
    $abestudent->nrc=$request->nrc;

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
        unlink(storage_path('app/public/abezoomimages/'.$abestudent->pro));

        $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
        $pathpro= Storage::putFileAs('public/abezoomimages',$request->file('pro'),$pro);

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
        unlink(storage_path('app/public/abezoomimages/'.$abestudent->pay));

        $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
        $pathpay= Storage::putFileAs('public/abezoomimages',$request->file('pay'),$pay);

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
        unlink(storage_path('app/public/abezoomimages/'.$abestudent->pay));

        $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
        $pathnrcf= Storage::putFileAs('public/abezoomimages',$request->file('nrcf'),$nrcf);

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
        unlink(storage_path('app/public/abezoomimages/'.$abestudent->nrcb));

        $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
        $pathnrcb= Storage::putFileAs('public/abezoomimages',$request->file('nrcb'),$nrcb);

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
       $abestudentZoom=AbestudentZoom::find($id);
       $abestudentZoom->delete();
       return redirect()->route('abebackendZoom.index')->with('success','Deleted successfully....');
   }

   public function deleteAll(Request $request)
   {
       $ids=$request->ids;
       AbestudentZoom::whereIn('id',$ids)->delete();
       return redirect()->route('abebackendZoom.index')->with('success','Deleted successfully....');
   }
}
