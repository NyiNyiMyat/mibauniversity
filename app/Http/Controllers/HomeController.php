<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesCourse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //dd("testing....");
        $categories=CategoriesCourse::all();
        return view('frontend.registrationPage',compact('categories'));
    }

    public function logout()
    {

       // dd("Logout Page..");

        return redirect()->route('index');
    }
}
