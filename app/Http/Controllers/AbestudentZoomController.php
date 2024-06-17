<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\AbestudentZoom;
use Illuminate\Http\Request;

class AbestudentZoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abestudentszoom=AbestudentZoom::all();
        return view('frontend.abediplomaZoom.index',compact('abestudentszoom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.abediplomaZoom.create'); 
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

           Abestudent::create([

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

           return back()->with('success','Successfully Registration...Please check your email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AbestudentZoom  $abestudentZoom
     * @return \Illuminate\Http\Response
     */
    public function show(AbestudentZoom $abestudentZoom)
    {
        return view('frontend.abediplomaZoom.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AbestudentZoom  $abestudentZoom
     * @return \Illuminate\Http\Response
     */
    public function edit(AbestudentZoom $abestudentZoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AbestudentZoom  $abestudentZoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbestudentZoom $abestudentZoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AbestudentZoom  $abestudentZoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbestudentZoom $abestudentZoom)
    {
        //
    }
}
