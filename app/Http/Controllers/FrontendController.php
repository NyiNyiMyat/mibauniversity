<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
use App\Models\Courses;
use App\Models\coursetype;
use App\Models\Celebrate;
class FrontendController extends Controller
{
    
    public function index(){
        //$str=$_GET['search_str'];
        //$courses=Courses::where("coursename","LIKE","%".$_GET['search_str']."%")->get();
        $categories=CategoriesCourse::all();
        return view('frontend.index',compact('categories'));
    }

    public function school(){
        $categories=CategoriesCourse::all();
        return view('frontend.the-school',compact('categories'));
    }

    public function contact(){
        $categories=CategoriesCourse::all();
        return view('frontend.contact-us',compact('categories'));
    }

    public function privacy(){
        $categories=CategoriesCourse::all();
        return view('frontend.privacy-and-data-protection',compact('categories'));
    }

    public function alumni(){
        $categories=CategoriesCourse::all();
        return view('frontend.Alumni-Privacy-Notice',compact('categories'));
    }

    public function marketing(){
        $categories=CategoriesCourse::all();
        return view('frontend.Marketing-Privacy-Notice',compact('categories'));
    }

    public function studentPri(){
        $categories=CategoriesCourse::all();
        return view('frontend.Student-Privacy-Notice',compact('categories'));
    }

    public function storyPhoto(){
        $categories=CategoriesCourse::all();
        return view('frontend.Story-Photo-Privacy-Notice',compact('categories'));
    }


    public function sbs(){
        $categories=CategoriesCourse::all();
        return view('frontend.sbs-info',compact('categories'));
    }


    public function graduation($id){
       
        $cele=Celebrate::find($id);
        $categories=CategoriesCourse::all();
        return view('frontend.events.index',compact('categories','cele'));
    }

  

    public function lincoln(){
        $categories=CategoriesCourse::all();
        return view('frontend.lincoln-info',compact('categories'));
    }

    public function help(){
        $categories=CategoriesCourse::all();
        return view('frontend.helpuniversity-info',compact('categories'));
    }


    public function abediploma(){
       // $categories=CategoriesCourse::all();
       // return view('frontend.abediploma',compact('categories'));
    }

    
    public function abediplomaZoom(){
       // $categories=CategoriesCourse::all();
       // return view('frontend.abediplomaZoom.index',compact('categories'));
    }


    public function iqndiploma(){
      //  $categories=CategoriesCourse::all();
       // return view('frontend.iqndiploma.index',compact('categories'));
    }

    public function sbsmbaStudent(){
       // $categories=CategoriesCourse::all();
       // return view('frontend.sbsmba',compact('categories'));
    }

    public function lincolnmbaStudent(){
       // $categories=CategoriesCourse::all();
       // return view('frontend.lincolnmba.index',compact('categories'));
    }

    public function ourprograms($category){
        $categories=CategoriesCourse::all();
        $cate=CategoriesCourse::where("category",$category)->get();
        $courses=Courses::where("category",$category)->paginate(5);
        $allcourses=Courses::all();
        return view('frontend.our-programs.index',compact('categories','courses','cate','allcourses'));
    }

    public function minimba(){
        //$categories=CategoriesCourse::all();
        //return view('frontend.miniMBA.index',compact('categories'));
    }
    public function certi(){
       // $categories=CategoriesCourse::all();
       // return view('frontend.certificate.index',compact('categories'));
    }

    public function showCourseDetails($id){
        $categories=CategoriesCourse::all();
        $courses=Courses::find($id);
        $allcourses=Courses::all();
        return view('frontend.our-programs.detail',compact('courses','categories','allcourses'));
    }

    public function searchDetails(){

        
        $str=$_GET['search_str'];
        
        $categories=CategoriesCourse::all();
       
        $courses=Courses::where("coursename","LIKE","%".$str."%")->get();

        return view('frontend.index',compact('categories','courses'));


    }

/*
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search_str');
    
        // Search in the title and body columns from the posts table
        $posts = Courses::query()
            ->where('coursename', 'LIKE', "%{$search}%")
         
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('posts'));
    }

    */

   

  
}

