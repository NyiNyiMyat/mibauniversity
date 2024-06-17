<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use App\Models\enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.enquiry.create');
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

            'fullname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'age'=>'required',
            'work_experience'=>'required',
            'education_background'=>'required',
            'course'=>'required',
            'location'=>'required',
            'message'=>'required',
           ]); 

           $receiver=$request->email;

           $details = [

               'fullname'=>$request->fullname,
               'email'=>$request->email,
               'phone'=>$request->phone,
               'age'=>$request->age,
               'work_experience'=>$request->work_experience,
               'education_background'=>$request->education_background,
               'course'=>$request->course,
               'location'=>$request->location,
               'message'=>$request->message,  
   
           ];
             
   
           \Mail::to($receiver)->send(new \App\Mail\EnquiryMail($details));

           enquiry::create([

            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'age'=>$request->age,
            'work_experience'=>$request->work_experience,
            'education_background'=>$request->education_background,
            'course'=>$request->course,
            'location'=>$request->location,
            'message'=>$request->message, 
           

           ]);

           return back()->with('success','Thanks a lot for Your Enquiry...Please check your email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(enquiry $enquiry)
    {
        //
    }
}
