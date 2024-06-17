<?php

namespace App\Http\Controllers;
use App\Models\contactUs;
use App\Models\enquiry;
use App\Models\payment;
use App\Models\mail;
use App\Models\User;

use Illuminate\Http\Request;
class enquiryBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $mail=mail::all();
        $user=User::all();
        $accounts=User::where("user_type",3)->get();
        $allacc=User::all();
        $contacts=ContactUs::all();
        $enquiry=enquiry::latest()->get();
        return view('backend.enquiry.index',compact('enquiry','mail','user','accounts','allacc','contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry=enquiry::find($id);
        $enquiry->delete();
        return redirect()->route('enquiry.index')->with('success','Deleted successfully....');
    }
}
