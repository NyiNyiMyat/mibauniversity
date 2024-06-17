<?php

namespace App\Http\Controllers;
use App\Models\iqnDiploma;
use App\Models\Abestudent;
use App\Models\MiniMBA;
use App\Models\Lincoln;
use App\Models\SbsStudent;
use App\Models\Certificate;
use App\Models\mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $day = date('d');

       $linMba=Lincoln::where('day','=',$day)->get(); 

       $sbsStu=SbsStudent::where('day','=',$day)->get();

       $mini = MiniMBA::where('day','=',$day)->get();

       $abestudents=Abestudent::where('day','=',$day)->get(); 
     
       $iqnstudents=iqnDiploma::where('day','=',$day)->get();

       $certificate = Certificate::where('day','=',$day)->get();
   
       $mailstudents=mail::where('day','=',$day)->get();
      
      return view('backend.mailing.index',compact('mailstudents','mini','abestudents','iqnstudents','linMba','sbsStu','certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mailing.create');
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
            'photo'=>'required|mimes:jpeg,jpg,png,gif,pdf'
           ]); 

      

        $receiver=$request->email;

        //dd($receiver);
        $photo=rand(0,999999)."_".$request->file('photo')->getClientOriginalName();
        $pathphoto= Storage::putFileAs('public/birthday',$request->file('photo'),$photo);
        
        $details = [
            'title'=>"Greetings from PPBS",
            'id_stu'=>$request->id_stu,
            'name' => $request->name,
            'course' => $request->course,
            'type' => $request->type,
            'dob' => $request->dob,
            'email' => $request->email,
            
            'comm' => $request->comm,
            'photo'=>$photo,
            'month' => $request ->month,
            'day' => $request ->day
        ];

       
           $card= storage_path('app/public/birthday/'.$photo);
           
    
        
        \Mail::to($receiver)->send(new \App\Mail\MyMail($details,$card));

        
       /*
        \Mail::to($receiver)->send('backend.mailing.email', $details, function($message)use($details, $attachfiles) {
            $message->to($details["email"], $details["email"])
                        ->subject($details["title"]);
            foreach ($attachfiles as $file){
                $message->attach($file);
            }

        });
        */

        mail::create([
            
            'id_stu'=>$request->id_stu,
            'name' => $request->name,
            'course' => $request->course,
            'type' => $request->type,
            'dob' => $request->dob,
            'email' => $request->email,
            'emailtype' => $request->emailtype,
            'comm' => $request->comm,
            'photo'=>$photo,
            'month' => $request ->month,
            'day' => $request ->day
        ]);

        return back()->with('success','Successfully saved and Send email...');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mailstudents=mail::find($id);
        return view('backend.mailing.allstudentDb',compact('mailstudents'));
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
        $mailstudent=mail::find($id);
        $mailstudent->delete();
        return redirect()->route('mailing.index')->with('success','Deleted successfully....');
    }

   
}
