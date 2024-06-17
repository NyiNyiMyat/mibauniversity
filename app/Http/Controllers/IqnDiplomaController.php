<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\iqnDiploma;
use App\Models\CategoriesCourse;
use Illuminate\Http\Request;

class IqnDiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=CategoriesCourse::all();
        $iqnstudents=iqnDiploma::all();
        return view('frontend.iqndiploma.index',compact('iqnstudents','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.iqndiploma.create');
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
           
           $degreefile="none";

          

           if($request->file('degreefile')!=null){
            $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
            //dd(rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName());
            $pathdegree= Storage::putFileAs('public/iqnposimages/degree',$request->file('degreefile'),$degreefile);
            
           }
          
           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/iqnposimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/iqnposimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/iqnposimages',$request->file('nrcb'),$nrcb);

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
     * @param  \App\Models\iqnDiploma  $iqnDiploma
     * @return \Illuminate\Http\Response
     */
    public function show(iqnDiploma $iqnDiploma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\iqnDiploma  $iqnDiploma
     * @return \Illuminate\Http\Response
     */
    public function edit(iqnDiploma $iqnDiploma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\iqnDiploma  $iqnDiploma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, iqnDiploma $iqnDiploma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\iqnDiploma  $iqnDiploma
     * @return \Illuminate\Http\Response
     */
    public function destroy(iqnDiploma $iqnDiploma)
    {
        //
    }
}
