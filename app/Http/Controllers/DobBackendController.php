<?php

namespace App\Http\Controllers;
use App\Models\iqnDiploma;
use App\Models\Abestudent;
use App\Models\Certificate;
use App\Models\Lincoln;
use App\Models\MiniMBA;
use App\Models\SbsStudent;
use App\Models\mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DobBackendController extends Controller
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

        $mini=MiniMBA::where('day','=',$day)->get();
 
        $abestudents=Abestudent::where('day','=',$day)->get(); 
        
        $iqnstudents=iqnDiploma::where('day','=',$day)->get();

        $certificate=Certificate::where('day','=',$day)->get(); 
    
        $mailstudents=mail::where('day','=',$day)->get();
       
       return view('backend.mailing.allstudentBD',compact('mailstudents','abestudents','certificate','iqnstudents','linMba','sbsStu','mini'));
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
        //
    }
}
