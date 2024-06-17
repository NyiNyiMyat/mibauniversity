<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use Illuminate\Http\Request;

class CourseDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categories=CategoriesCourse::all(); 
      $courses=Courses::latest()->get();
      return view('frontend.our-programs.index',compact('courses','categories'));
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
        $categories=CategoriesCourse::all();
        $cate=CategoriesCourse::find($id)->skip(10)->take(10)->latest()->get();
        $courses=Courses::find($id);
        return view('frontend.our-programs.detail',compact('courses','categories','cate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses=Courses::find($id);
        return view('frontend.our-programs.detail',compact('courses'));
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
        //
    }
}
