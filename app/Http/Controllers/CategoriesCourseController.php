<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Courses;
use App\Models\Coursetype;
use App\Models\contactUs;
use App\Models\CategoriesCourse;
use Illuminate\Http\Request;
use App\Models\enquiry;
class CategoriesCourseController extends Controller
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
        $enquiry=enquiry::latest()->get();
        return view('backend.categories.index',compact('categories','courses','coursetype','contacts','enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'description'=>'required',
            'banner'=>'required|mimes:jpeg,jpg,png,gif',
        ]); 
        
        $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
        $pathbanner= Storage::putFileAs('public/courseBanner',$request->file('banner'),$banner);

        CategoriesCourse::create([
        'category'=>$request->category,
        'description'=>$request->description,
        'banner'=>$banner,
       ]);

       return back()->with('success','Successfully saved...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoriesCourse  $categoriesCourse
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=CategoriesCourse::find($id);
        return view('backend.categories.detail',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoriesCourse  $categoriesCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=CategoriesCourse::find($id);
        return view('backend.categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoriesCourse  $categoriesCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $categories=CategoriesCourse::find($id);
        $categories->category=$request->category;
        $categories->description=$request->description;
        if($request->hasfile('banner'))
        {

            //dd("Testing True... ");
            /*
            $destnation ='public/abeimages/'.$abestudent->pro;
            if(Storage::exists($destnation)){
                Storage::delete($destnation);
            }*/

            //delete exisiting image
            unlink(storage_path('app/public/courseBanner/'.$categories->banner));

            $banner=rand(0,999999)."_".$request->file('banner')->getClientOriginalName();
            $pathbanner= Storage::putFileAs('public/courseBanner',$request->file('banner'),$banner);

            $categories->banner=$banner;
        }
        $categories->update();

        return back()->with('success','successfully updated...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoriesCourse  $categoriesCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=CategoriesCourse::find($id);
        $categories->delete();
        return redirect()->route('categories.index')->with('success','Deleted successfully....');
    }
}
