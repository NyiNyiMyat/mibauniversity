<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\CategoriesCourse;
use App\Models\payment;
class studentBackendpayment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
    public function show($email)
    {
        $payments=payment::where('email',$email)->get();
    
        return view('backend.studentBackendpayment.index',compact('payments'));
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

            'payment_invoice'=>'mimes:jpeg,jpg,png,gif',
            'payment_receipt'=>'mimes:jpeg,jpg,png,gif',
            'total_payment'=>'mimes:pdf',
           

        ]); 
            $payments=payment::find($id);
          
            $payments->name=$request->name;
            $payments->phone=$request->phone;
            $payments->course=$request->course;
            $payments->email=$request->email;
            $payments->address=$request->address;
            $payments->amount=$request->amount;
            $payments->payment_type=$request->payment_type;
            $payments->payment_installment=$request->payment_installment;


           
           $payment_invoice=$request->file('payment_invoice');

           if(isset($payment_invoice)){

            if($request->hasfile('payment_invoice'))
            {

                //dd("Testing True... ");
                
                $destnation ='app/public/payment/'.$payments->payment_invoice;
                if(Storage::exists($destnation)){
                    unlink(storage_path('app/public/payment/'.$payments->payment_invoice));
                }

                //delete exisiting image
                //unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));

                $payment_invoice=rand(0,999999)."_".$request->file('payment_invoice')->getClientOriginalName();
                $pathpayment_invoice= Storage::putFileAs('public/payment',$request->file('payment_invoice'),$payment_invoice);

                $payments->payment_invoice=$payment_invoice;
            }

        }
        else{
            $payments->payment_invoice=$request->curr_invoice;
        }


                   
        $payment_receipt=$request->file('payment_receipt');

        if(isset($payment_receipt)){

         if($request->hasfile('payment_receipt'))
         {

             //dd("Testing True... ");
             
             $destnation ='app/public/payment/'.$payments->payment_receipt;
             if(Storage::exists($destnation)){
                 unlink(storage_path('app/public/payment/'.$payments->payment_receipt));
             }

             //delete exisiting image
             //unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));

             $payment_receipt=rand(0,999999)."_".$request->file('payment_receipt')->getClientOriginalName();
             $pathpayment_receipt= Storage::putFileAs('public/payment',$request->file('payment_receipt'),$payment_receipt);

             $payments->payment_receipt=$payment_receipt;
         }

     }
     else{
         $payments->payment_receipt=$request->curr_receipt;
     }


                     
     $total_payment=$request->file('total_payment');

     if(isset($total_payment)){

      if($request->hasfile('total_payment'))
      {

          //dd("Testing True... ");
          
          $destnation ='app/public/payment/payment_pdf/'.$payments->total_payment;
          if(Storage::exists($destnation)){
              unlink(storage_path('app/public/payment/payment_pdf'.$payments->total_payment));
          }

          //delete exisiting image
          //unlink(storage_path('app/public/iqnposimages/degree/'.$iqnstudents->degreefile));

          $total_payment=rand(0,999999)."_".$request->file('total_payment')->getClientOriginalName();
          $pathtotal_payment= Storage::putFileAs('public/payment/payment_pdf',$request->file('total_payment'),$total_payment);

          $payments->total_payment=$total_payment;
      }

  }
  else{
      $payments->total_payment=$request->curr_total;
  }

             $payments->update();

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
