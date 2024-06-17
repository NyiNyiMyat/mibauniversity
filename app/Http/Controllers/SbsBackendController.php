<?php

namespace App\Http\Controllers;
use App\Models\SbsStudent;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Lincoln;
class SbsBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linmbastudents=Lincoln::latest()->get();
        $sbsmbastudents=SbsStudent::latest()->get();
        return view('backend.sbsbackend.index',compact('sbsmbastudents','linmbastudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sbsbackend.create');
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
            'degreefile'=>'required|mimes:pdf',
            
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

           return back()->with('success','Successfully Your Registration...Email send');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sbsstudent=Sbsstudent::find($id);
        return view('backend.sbsbackend.detail',compact('sbsstudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sbsstudent=SbsStudent::find($id);
        return view('backend.sbsbackend.edit',compact('sbsstudent'));
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


        
            $sbsstudent=SbsStudent::find($id);
            
            $sbsstudent->course=$request->course;
            $sbsstudent->campus=$request->campus;
            $sbsstudent->intake=$request->intake;
            $sbsstudent->fullname=$request->fullname;
            $sbsstudent->gender=$request->gender;
            $sbsstudent->dob=$request->dob;
            $sbsstudent->day=$request->day;
            $sbsstudent->month=$request->month;

            $sbsstudent->nrc=$request->nrc;

            $sbsstudent->nation=$request->nation;
            $sbsstudent->relig=$request->relig;
            $sbsstudent->father=$request->father;
            $sbsstudent->stu_ph=$request->stu_ph;
            $sbsstudent->email=$request->email;
            $sbsstudent->address=$request->address;

            $sbsstudent->occupation=$request->occupation;
            $sbsstudent->com_name=$request->com_name;
            $sbsstudent->com_ph=$request->com_ph;
            $sbsstudent->ad_year=$request->ad_year;
            $sbsstudent->university=$request->university;
            $sbsstudent->degree=$request->degree;
            $sbsstudent->major=$request->major;
            $sbsstudent->other_ql=$request->other_ql;
            $sbsstudent->location=$request->location;
            $sbsstudent->certificate=$request->certificate;

            $sbsstudent->ad_date=$request->ad_date;
            $sbsstudent->em_name=$request->em_name;
            $sbsstudent->em_rela=$request->em_rela;
            $sbsstudent->em_comph=$request->em_comph;

            if($request->hasfile('pro'))
            {
    
                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/
    
                //delete exisiting image
                unlink(storage_path('app/public/sbsmbaimages/sbsimages/'.$sbsstudent->pro));
    
                $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('pro'),$pro);
    
                $sbsstudent->pro=$pro;
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
                unlink(storage_path('app/public/sbsmbaimages/sbsimages/'.$sbsstudent->pay));
    
                $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('pay'),$pay);
    
                $sbsstudent->pay=$pay;
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
                unlink(storage_path('app/public/sbsmbaimages/sbsimages/'.$sbsstudent->nrcf));
    
                $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
                $pathpro= Storage::putFileAs('public/sbsmbaimages/sbsimages',$request->file('nrcf'),$nrcf);
    
                $sbsstudent->nrcf=$nrcf;
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
                unlink(storage_path('app/public/sbsmbaimages/sbsimages/'.$sbsstudent->nrcb));
    
                $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
                $pathpay= Storage::putFileAs('public/sbsmbaimages/sbsimages/',$request->file('nrcb'),$nrcb);
    
                $sbsstudent->nrcb=$nrcb;
            }
    
            if($request->hasfile('degreefile'))
            {
    
                //dd("Testing True... ");
                /*
                $destnation ='public/abeimages/'.$abestudent->pro;
                if(Storage::exists($destnation)){
                    Storage::delete($destnation);
                }*/
    
                //delete exisiting image
                unlink(storage_path('app/public/sbsmbaimages/degree/'.$sbsstudent->degreefile));
    
                $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
                $pathdegree= Storage::putFileAs('public/sbsmbaimages/degree',$request->file('degreefile'),$degreefile);
    
                $sbsstudent->degreefile=$degreefile;
            }
    
            $sbsstudent->update();

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
        $sbsstudent=SbsStudent::find($id);
        $sbsstudent->delete();
        return redirect()->route('sbsbackend.index')->with('success','Deleted successfully....');
    }
}
