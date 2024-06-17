<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\contactUs;
use App\Models\enquiry;
use App\Models\payment;
use App\Models\mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user=User::all();
        $allacc=User::all();
        $enquiry=enquiry::all();
        $contacts=ContactUs::all();
        $mail=mail::all();
      $account1=User::where("user_type",3)->get();
      $accounts=User::latest()->get();
      return view('backend.account.index',compact('accounts','mail','user','account1','allacc','contacts','enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.account.create');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_type' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        

        $photo="none";

        if($request->file('photo')!=null){
         $photo=rand(0,999999)."_".$request->file('photo')->getClientOriginalName();
         //dd(rand(0,999999)."_".$request->file('degreefile')->getClientOriginalName());
         $pathphoto= Storage::putFileAs('public/accproimg',$request->file('photo'),$photo);
         
        }

        User::create([
            'photo'=>$request['photo'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'user_type' => $request['user_type'],
            'password' => Hash::make($request['password']),
            
        ]);


        return back()->with('success','Successfully saved...');
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
        $accounts=User::find($id);
        return view('backend.account.index',compact('accounts'));
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
            $accounts->user_type=$request->user_type;
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
        $accounts=User::find($id);
        $accounts->delete();
        return redirect()->route('account.index')->with('success','Deleted successfully....');
    }
}
