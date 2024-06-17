<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\User;
class accountFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $request->validate([

            'photo'=>'mimes:jpeg,jpg,png,gif',
            'password' => ['confirmed']

        ]); 
            $accounts=User::find($id);
            $accounts->photo=$request->photo;
            $accounts->name=$request->name;
            $accounts->email=$request->email;
           
            $accounts->phone=$request->phone;
            $accounts->address=$request->address;
            $accounts->password= Hash::make($request->password);
            

          
            $photo=$request->file('photo');

           if(isset($photo)){

            if($request->hasfile('photo'))
            {

                //dd("Testing True... ");
                
                $destnation ='app/public/accproimg/'.$accounts->photo;
                if(Storage::exists($destnation)){
                    unlink(storage_path('app/public/accproimg/'.$accounts->photo));
                }

                //delete exisiting image
                //unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));

                $photo=rand(0,999999)."_".$request->file('photo')->getClientOriginalName();
                $pathphoto= Storage::putFileAs('public/accproimg',$request->file('photo'),$photo);

                $accounts->photo=$photo;
            }

        }
        else{
            $accounts->photo=$request->curr_photo;
        }



             $accounts->update();

           return back()->with('success','successfully updated...');
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
