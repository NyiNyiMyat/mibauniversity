<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
use App\Models\Courses;
use App\Models\coursetype;
class ContactUsController extends Controller
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
        return view('frontend.contact-us.create');
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
            'email'=>'required',
            'phone'=>'required',
  
            'subject'=>'required',
            'message'=>'required',
           ]); 

           $receiver=$request->email;

           $details = [

               'fullname'=>$request->fullname,
               'email'=>$request->email,
               'phone'=>$request->phone,
             
               'subject'=>$request->subject,
               'message'=>$request->message,  
   
           ];
             
   
           \Mail::to($receiver)->send(new \App\Mail\ContactMail($details));

           contactUs::create([

            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'phone'=>$request->phone,
          
            'subject'=>$request->subject,
            'message'=>$request->message, 
           

           ]);

           return back()->with('success','Thanks a lot for Your Contact...Please check your email');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(contactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(contactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactUs $contactUs)
    {
        //
    }
}
