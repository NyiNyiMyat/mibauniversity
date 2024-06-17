<?php

namespace App\Http\Controllers;
use App\Models\mail;
use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\enquiry;
use App\Models\payment;

use App\Models\User;


class allmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       
        $user=User::all();
        $allacc=User::all();
        $enquiry=enquiry::all();
        $contacts=ContactUs::all();

        $accounts=User::where("user_type",3)->get();
       $mailstudents=mail::latest()->get();
       return view('backend.allmail.index',compact('mailstudents','user','accounts','allacc','contacts','enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mailing.create');
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
        $mailstudents=mail::find($id);
        $mailstudents->delete();
        return redirect()->route('allmail.index')->with('success','Deleted successfully....');
    }
}
