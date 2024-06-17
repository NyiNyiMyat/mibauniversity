<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\CategoriesCourse;
use App\Models\payment;
class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=payment::latest()->get();
        return view('frontend.dashboard',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.payment.create');
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

            'payment_invoice'=>'required|mimes:jpeg,jpg,png,gif',
          

            'name'=>'required',
            'phone'=>'required',
            'course'=>'required',
            'email'=>'required',
            'address'=>'required',
            'amount'=>'required',
            'payment_type'=>'required'
            
           ]); 

            
           $invoice=rand(0,999999)."_".$request->file('payment_invoice')->getClientOriginalName();
           $pathinvoice= Storage::putFileAs('public/payment',$request->file('payment_invoice'),$invoice);


           payment::create([

            'id_stu'=>$request->id_stu,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'course'=>$request->course,
            'email'=>$request->email,
            'address'=>$request->address,
            'amount'=>$request->amount,
            'payment_type'=>$request->payment_type,
            'payment_installment'=>$request->payment_installment,

            'payment_invoice'=>$invoice,
           

           ]);

           return back()->with('success','Successfully saved....');
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
