<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminTemplateController extends Controller
{
    public function index(){
        return view('backend.index');
    }
}
