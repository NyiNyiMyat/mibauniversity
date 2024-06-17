<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\contactUs;
use App\Models\enquiry;
use App\Models\Coursetype;
use App\Models\CategoriesCourse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Courses::all();
        $enquiry=enquiry::all();
        $categories=CategoriesCourse::all();
        $coursetype=Coursetype::latest()->get();
        $contacts=contactUs::latest()->get();

        return view('backend.courses.index',compact('categories','coursetype','courses','contacts','enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=CategoriesCourse::all();
        $coursetype=Coursetype::all();
        return view('backend.courses.create',compact('categories','coursetype'));
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
            'category'=>'required',
            'coursetype'=>'required',
            'banner'=>'required|mimes:jpeg,jpg,png,gif',
            'tumbnail'=>'required|mimes:jpeg,jpg,png,gif',
            'coursename'=>'required',
        

        ]); 
        
        $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
        $pathbanner= Storage::putFileAs('public/courseimg/courseBanner',$request->file('banner'),$banner);

        $img=rand(0,999999)."_".$request->file('tumbnail')->getClientOriginalName();
        $pathimg= Storage::putFileAs('public/courseimg/courseTumb',$request->file('tumbnail'),$img);

        Courses::create([
        'banner'=>$banner,
        'tumbnail'=>$img,
        'category'=>$request->category,
        'coursetype'=>$request->coursetype,
        'coursename'=>$request->coursename,
        'description1'=>$request->description1,
        'description2'=>$request->description2,
        'description3'=>$request->description3,
        'description4'=>$request->description4,
        
       ]);

       return back()->with('success','Successfully saved...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses=Courses::find($id);
        return view('backend.courses.detail',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Courses::find($id);
        $coursetype=Coursetype::all();
        $categories=CategoriesCourse::all();
        return view('backend.courses.edit',compact('course','categories','coursetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            
            'banner'=>'mimes:jpeg,jpg,png,gif',
            'tumbnail'=>'mimes:jpeg,jpg,png,gif',
         

        ]); 

        $courses=Courses::find($id);
       
        $courses->coursename=$request->coursename;
        $courses->category=$request->category;
        $courses->coursetype=$request->coursetype;
        $courses->description1=$request->description1;
        $courses->description2=$request->description2;
        $courses->description3=$request->description3;
        $courses->description4=$request->description4;

        if($request->hasfile('banner'))
        {

            //dd("Testing True... ");
            /*
            $destnation ='public/abeimages/'.$abestudent->pro;
            if(Storage::exists($destnation)){
                Storage::delete($destnation);
            }*/

            //delete exisiting image
            unlink(storage_path('app/public/courseimg/courseBanner/'.$courses->banner));

            $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
            $pathbanner= Storage::putFileAs('public/courseimg/courseBanner',$request->file('banner'),$banner);

            $courses->banner=$banner;
        }

        if($request->hasfile('tumbnail'))
        {

            //dd("Testing True... ");
            /*
            $destnation ='public/abeimages/'.$abestudent->pro;
            if(Storage::exists($destnation)){
                Storage::delete($destnation);
            }*/

            //delete exisiting image
            unlink(storage_path('app/public/courseimg/courseTumb/'.$courses->tumbnail));

            $tumbnail=rand(0,999999)."_".$request->file('tumbnail')->getClientOriginalName();
            $pathtumbnail= Storage::putFileAs('public/courseimg/courseTumb',$request->file('tumbnail'),$tumbnail);

            $courses->tumbnail=$tumbnail;
          
        }

        $courses->update();

        return back()->with('success','successfully updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Courses::find($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success','Deleted successfully....');
    }
}
