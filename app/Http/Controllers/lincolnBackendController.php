<?php

namespace App\Http\Controllers;
use App\Models\Lincoln;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\SbsStudent;
class lincolnBackendController extends Controller
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
        return view('backend.lincolnbackend.index',compact('linmbastudents','sbsmbastudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.lincolnbackend.create');
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
           $pathpro= Storage::putFileAs('public/linmbaimages',$request->file('pro'),$pro);

           $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
           $pathdegree= Storage::putFileAs('public/linmbaimages/degree',$request->file('degreefile'),$degreefile);

           $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
           $pathpay= Storage::putFileAs('public/linmbaimages',$request->file('pay'),$pay);

           $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
           $pathnrcf= Storage::putFileAs('public/linmbaimages',$request->file('nrcf'),$nrcf);

           $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
           $pathnrcb= Storage::putFileAs('public/linmbaimages',$request->file('nrcb'),$nrcb);

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

        $send1= storage_path('app/public/linmbaimages/'.$pro);
        $send2= storage_path('app/public/linmbaimages/'.$pay);
        $send3= storage_path('app/public/linmbaimages/'.$nrcf);
        $send4= storage_path('app/public/linmbaimages/'.$nrcb);
        $send5= storage_path('app/public/linmbaimages/degree/'.$degreefile);


        \Mail::to($receiver)->send(new \App\Mail\lincolnMail($details,$send1,$send2,$send3,$send4,$send5));


           Lincoln::create([

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
        $lincolnstudent=Lincoln::find($id);
        return view('backend.lincolnbackend.detail',compact('lincolnstudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $linstudent=Lincoln::find($id);
        return view('backend.lincolnbackend.edit',compact('linstudent'));
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
       
        $linstudent=Lincoln::find($id);
            
        $linstudent->course=$request->course;
        $linstudent->campus=$request->campus;
        $linstudent->intake=$request->intake;
        $linstudent->fullname=$request->fullname;
        $linstudent->gender=$request->gender;
        $linstudent->dob=$request->dob;
        $linstudent->day=$request->day;
        $linstudent->month=$request->month;

        $linstudent->nrc=$request->nrc;
        $linstudent->nation=$request->nation;
        $linstudent->relig=$request->relig;
        $linstudent->father=$request->father;
        $linstudent->stu_ph=$request->stu_ph;
        $linstudent->email=$request->email;
        $linstudent->address=$request->address;

        $linstudent->occupation=$request->occupation;
        $linstudent->com_name=$request->com_name;
        $linstudent->com_ph=$request->com_ph;
        $linstudent->ad_year=$request->ad_year;
        $linstudent->university=$request->university;
        $linstudent->degree=$request->degree;
        $linstudent->major=$request->major;
        $linstudent->other_ql=$request->other_ql;
        $linstudent->location=$request->location;
        $linstudent->certificate=$request->certificate;

        $linstudent->ad_date=$request->ad_date;
        $linstudent->em_name=$request->em_name;
        $linstudent->em_rela=$request->em_rela;
        $linstudent->em_comph=$request->em_comph;

        if($request->hasfile('pro'))
        {

            //dd("Testing True... ");
            /*
            $destnation ='public/abeimages/'.$abestudent->pro;
            if(Storage::exists($destnation)){
                Storage::delete($destnation);
            }*/

            //delete exisiting image
            unlink(storage_path('app/public/linmbaimages/'.$linstudent->pro));

            $pro=rand(0,999999)."_".$request->file('pro')->getClientOriginalName();
            $pathpro= Storage::putFileAs('public/linmbaimages',$request->file('pro'),$pro);

            $linstudent->pro=$pro;
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
            unlink(storage_path('app/public/linmbaimages/'.$linstudent->pay));

            $pay=rand(0,999999)."_".$request->file('pay')->getClientOriginalName();
            $pathpay= Storage::putFileAs('public/linmbaimages',$request->file('pay'),$pay);

            $linstudent->pay=$pay;
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
            unlink(storage_path('app/public/linmbaimages/'.$linstudent->nrcf));

            $nrcf=rand(0,999999)."_".$request->file('nrcf')->getClientOriginalName();
            $pathpro= Storage::putFileAs('public/linmbaimages',$request->file('nrcf'),$nrcf);

            $linstudent->nrcf=$nrcf;
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
            unlink(storage_path('app/public/linmbaimages/'.$linstudent->nrcb));

            $nrcb=rand(0,999999)."_".$request->file('nrcb')->getClientOriginalName();
            $pathpay= Storage::putFileAs('public/linmbaimages',$request->file('nrcb'),$nrcb);

            $linstudent->nrcb=$nrcb;
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
            unlink(storage_path('app/public/linmbaimages/degreefile/'.$linstudent->degreefile));

            $degreefile=rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName();
            $pathdegree= Storage::putFileAs('public/linmbaimages/degree',$request->file('degreefile'),$degreefile);

            $linstudent->degreefile=$degreefile;
        }


         $linstudent->update();

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
        $lincolnstudent=Lincoln::find($id);
        $lincolnstudent->delete();
        return redirect()->route('lincolnbackend.index')->with('success','Deleted successfully....');
    }
}
