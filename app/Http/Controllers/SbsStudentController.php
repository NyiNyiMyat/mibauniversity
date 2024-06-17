<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\SbsStudent;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
class SbsStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=CategoriesCourse::all();
        $sbsmbastudents=SbsStudent::all();
        return view('frontend.sbsmba',compact('sbsmbastudents','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.sbsmba.create');
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
            
            'pro'=>'required|image|mimes:jpeg,jpg,png,gif|max:5120',
            'pay'=>'required|image|mimes:jpeg,jpg,png,gif|max:5120',
            'nrcf'=>'required|image|mimes:jpeg,jpg,png,gif|max:5120',
            'nrcb'=>'required|image|mimes:jpeg,jpg,png,gif|max:5120',
            'degreefile'=>'required|mimes:pdf|max:5120',
            
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
           $pathpro= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('pro'),$pro);

           $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
           $pathdegree= Storage::putFileAs('public/sbsmbaimages/degree',$request->file('degreefile'),$degreefile);

           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('nrcb'),$nrcb);

           $receiver=$request->email;

        $details = [
            
            'pro'=>$pro,
            'pay'=>$pay,
            'nrcf'=>$nrcf,
            'nrcb'=>$nrcb,

            'course'=>$request->course,
            'degreefile'=>$degreefile,
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

        $send1= storage_path('app/public/sbsmbaimages/sbsimages/'.$pro);
        $send2= storage_path('app/public/sbsmbaimages/sbsimages/'.$pay);
        $send3= storage_path('app/public/sbsmbaimages/sbsimages/'.$nrcf);
        $send4= storage_path('app/public/sbsmbaimages/sbsimages/'.$nrcb);
        $send5= storage_path('app/public/sbsmbaimages/degree/'.$degreefile);


        \Mail::to($receiver)->send(new \App\Mail\sbsMail($details,$send1,$send2,$send3,$send4,$send5));


        SbsStudent::create([

            'pro'=>$pro,
            'pay'=>$pay,
            'nrcf'=>$nrcf,
            'nrcb'=>$nrcb,

            'course'=>$request->course,
            'degreefile'=>$degreefile,
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

           return back()->with('success','Successfully Your Registration...Please your check your email.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SbsStudent  $sbsStudent
     * @return \Illuminate\Http\Response
     */
    public function show(SbsStudent $sbsStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SbsStudent  $sbsStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(SbsStudent $sbsStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SbsStudent  $sbsStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SbsStudent $sbsStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SbsStudent  $sbsStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SbsStudent $sbsStudent)
    {
        //
    }
}
