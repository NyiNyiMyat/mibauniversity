<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\enquiry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class CoursetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::all();
        $categories=CategoriesCourse::all();
        $coursetype=Coursetype::latest()->get();
        $contacts=contactUs::latest()->get();
        $enquiry=enquiry::all();
        return view('backend.coursetype.index',compact('coursetype','courses','categories','contacts','enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.coursetype.create');
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
            'coursetype'=>'required',
        ]); 
        
        Coursetype::create([
        'coursetype'=>$request->coursetype,
       ]);

       return back()->with('success','Successfully Added...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursetype  $coursetype
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coursetype=Coursetype::find($id);
        return view('backend.coursetype.detail',compact('coursetype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursetype  $coursetype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coursetype=Coursetype::find($id);
        return view('backend.coursetype.edit',compact('coursetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursetype  $coursetype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
        $coursetype=Coursetype::find($id);
        $coursetype->coursetype=$request->coursetype;
        $coursetype->update();

        return back()->with('success','successfully updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursetype  $coursetype
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursetype=Coursetype::find($id);
        $coursetype->delete();
        return back()->with('success','Deleted successfully....');
    }
}
