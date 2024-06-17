<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
use App\Models\Courses;
use App\Models\coursetype;
use App\Models\payment;
class frontendPageController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
     }

    public function reg(){
        $categories=CategoriesCourse::all();
        
        return view('frontend.registrationPage',compact('categories'));
    }

    public function dashboard(){
        $categories=CategoriesCourse::all();
        $payment=payment::where('email',Auth()->user()->email)->get();
        return view('frontend.dashboard',compact('categories','payment'));
    }



    public function sbsmbaStudentf(){
        //dd("sbs mba student page...");
        $categories=CategoriesCourse::all();
        return view('frontend.sbsmbapage',compact('categories'));
     }

     public function lincolnmbaStudentf(){
        $categories=CategoriesCourse::all();
        return view('frontend.lincolnmbapage',compact('categories'));
     }

     public function abediplomaf(){
        $categories=CategoriesCourse::all();
        return view('frontend.abediplomapage',compact('categories'));
    }


     public function iqndiplomaf(){
        $categories=CategoriesCourse::all();
        return view('frontend.iqndiplomapage',compact('categories'));
      }


      public function minimbaf(){
        $categories=CategoriesCourse::all();
        return view('frontend.minimbapage',compact('categories'));
    }


      public function Certificatef(){
         $categories=CategoriesCourse::all();
         return view('frontend.Certificatepage',compact('categories'));
     }

}
