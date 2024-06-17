<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){

        $categories=CategoriesCourse::all();
        return view('frontend.registrationPage',compact('categories'));
    }

    public function AccountFrontend(Request $request) {
        // Fetch all categories
        // dd('hi');
        $categories = CategoriesCourse::all();

        // Define the validation rules
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Return the registration page view with categories
        return redirect()->route('home')->with(compact('categories'))->with('sweet_success', 'Successfully logged in!');
    }



}
