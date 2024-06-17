<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use Illuminate\Http\Request;

use App\Models\contactUs;
use App\Models\enquiry;
use App\Models\payment;
use App\Models\mail;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class ContactusBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $enquiry=enquiry::all();
        $mail=mail::all();
        $user=User::all();
        $accounts=User::where("user_type",3)->get();
        $allacc=User::all();
        
        $courses=Courses::all();
        $categories=CategoriesCourse::all();
        $coursetype=Coursetype::latest()->get();
        $contacts=contactUs::latest()->get();
        return view('backend.contactUs.index',compact('contacts','courses','categories','coursetype','enquiry','mail','user','accounts','allacc'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contactUs.create');
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
        
        $contacts=contactUs::find($id);
        return view('backend.contactUs.detail',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts=contactUs::find($id);
        return view('backend.contactUs.edit',compact('contacts'));
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
        $contacts=contactUs::find($id);
        $contacts->delete();
        return redirect()->route('contactUs.index')->with('success','Deleted successfully....');
    }
}
