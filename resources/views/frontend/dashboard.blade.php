@extends('frontend.layouts.master')

@section('content')
<main id="main">
 <!-- End Header -->
    <!-- ======= About Us Section ======= -->
    <section id="about">


    @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="container">
@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
			@php
				Session::forget('success');
			@endphp
		</div>
@endif
</div>
    <div class="container">
      <br>
   <center>
    <a href="{{route('registrationPage')}}">
  <button style="width:250px;height:150px;font-size:20px;" class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" 
  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
  <img src="https://img.icons8.com/external-ddara-flat-ddara/50/000000/external-registration-medical-ddara-flat-ddara.png"/><br>
   Registration <br>For Course</button>
</a>

   <button style="width:250px;height:150px;font-size:20px;" class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample2" 
  role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
  <img src="https://img.icons8.com/external-inipagistudio-lineal-color-inipagistudio/50/000000/external-payment-retail-store-inipagistudio-lineal-color-inipagistudio.png"/><br>
   Payment <br>For Course</button>

   <button style="width:250px;height:150px;font-size:20px;" class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample3" 
  role="button" aria-expanded="false" aria-controls="multiCollapseExample3">
  
  <i class="bi bi-person-circle" style="font-size:100px;text-align:center;"></i></button>

  <br>
</center>
</div>

<div class="container" style="margin-top:50px;">
<div class="row">

<div class="col-lg-6">
    <div class="collapse" id="multiCollapseExample3">
    <i class="bi bi-x-lg" data-bs-toggle="collapse" href="#multiCollapseExample3" 
  role="button" aria-expanded="false" aria-controls="multiCollapseExample3" 
  style="color:#000;font-size:25px;"></i>
      
  <div class="card card-body">
       <center>
      
      <img src="{{asset('storage/app/public/accproimg/'.Auth::user()->photo)}}" style="width:150px;height:150px;border-radius:100%;">
       </center>
      
      
      <br><br>
      <font style="line-height: 2em;font-family: sans-serif;font-size:15px;">
      <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-person-check-fill"></i> Fullname</label><br>
      {{ Auth::user()->name }}<hr>

      <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-envelope-check"></i> Username</label><br>
      {{ Auth::user()->email }}<hr>

      <label for="exampleFormControlInput1" class="form-label"><i class="bi bi-phone"></i> Phone</label><br>
      {{ Auth::user()->phone }}<hr>

      <label for="exampleFormControlInput1" class="form-label"<i class="bi bi-house"></i> Address</label><br>
      {{ Auth::user()->address }}<hr>
    

      
    </font><hr>
    <img src="{{asset('images/banner/download.png')}}" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="collapse" id="multiCollapseExample3">
    <i class="bi bi-x-circle" style="color:#fff;font-size:25px;"></i>
      <div class="card card-body">
      <img src="{{asset('images/banner/regi1.png')}}" class="img-fluid">
      <br>
       <p<i class="bi bi-pencil-fill"></i> Edit profile and account</p>
<form  action="{{ route('accountChange.update',Auth::user()->id ) }}" enctype="multipart/form-data" method="POST">
@csrf   
@method('PUT')      
       <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Fullname" value="  {{ Auth::user()->name }}">
                                      </div>


                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" readonly placeholder="Enter Email" value="  {{ Auth::user()->email }}">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Enter Phone" value="  {{ Auth::user()->phone }}">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Profile photo</label>
                                        <input type="hidden" name="curr_photo" value="{{ Auth::user()->photo }}">
                                        <input type="file" class="form-control" id="exampleFormControlInput1" name="photo">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" value="{{ Auth::user()->address }}">  {{ Auth::user()->address }}</textarea>
                                      </div>


                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">New Password</label>
                                        <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Comfirm Password</label>
                                        <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                      </div>

                                      <button type="submit" class="btn btn-primary"> Update </button>

</form>
      </div>
    </div>
  </div>
</div>
</div>

  <div class="container-fluid" style="margin-top:50px;">

<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="collapse" id="multiCollapseExample2">
    <i class="bi bi-x-lg" data-bs-toggle="collapse" href="#multiCollapseExample2" 
  role="button" aria-expanded="false" aria-controls="multiCollapseExample2" 
  style="color:#000;font-size:25px;"></i>
      <div class="card card-body">
      <h5 class="animate__animated animate__fadeInDown">
              Your Payment Lists</h5>
              <hr><br>
              <a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration:none;">
              <button type="button" class="btn btn-secondary">Add New Payment</button>
</a>
              <br><br>
<div class="table-responsive">
              <table id="example1" class="table">
        <thead>
            <tr class="table-success">
                <th>No.</th>
                <th>University/School</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Email</th>
                <th>Address</th>
                <th>Payment Type</th>
                <th>Payment Installment</th>
                <th>Amount</th>
                <th>Payment Invoice (Screenshot)</th>
                <th>Payment Receipt (Screenshot)</th>
                <th>Payment total (only PDF)</th>
            </tr>
        </thead>
        <tbody>
        @php($no=1)
        @foreach($payment as $student)
            <tr>
                <td>{{$no}}.</td>
                <td>PPBS</td>
                <td>{{$student->name}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->payment_type}}</td>
                <td>{{$student->payment_installment}}</td>
                <td>{{$student->amount}}</td>
                <td>
                <a href="" data-toggle="modal" data-target="#myModalinvoice{{$student->id}}" style="text-decoration:none;">
                    <button type="button" class="btn btn-secondary"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/>
                     view</button>
                </a>
                </td>

                <td>
                <a href="" data-toggle="modal" data-target="#myModalreceipt{{$student->id}}" style="text-decoration:none;">
                    <button type="button" class="btn btn-secondary"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/>
                     view</button>
                </a>
                </td>

                <td>
                <a href="" data-toggle="modal" data-target="#myModalpdf{{$student->id}}" style="text-decoration:none;">
                    <button type="button" class="btn btn-secondary"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/>
                     view</button>
                </a>
                </td>
                
            </tr>

            <!-- The Modal -->
<div class="modal fade" id="myModalinvoice{{$student->id}}">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your Payment Invoice Screenshot</h5>
</div>
<!-- Modal body -->
<div class="modal-body">
<img src="{{asset('storage/app/public/payment/'.$student->payment_invoice)}}" id="img1" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
<a class="btn btn-primary" href="{{asset('storage/app/public/payment/'.$student->payment_invoice)}}" download>
  Download</a>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>	

            <!-- End Modal -->


            
            <!-- The Modal -->
<div class="modal fade" id="myModalreceipt{{$student->id}}">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your Payment Receipt Screenshot</h5>
</div>
<!-- Modal body -->
<div class="modal-body">
<img src="{{asset('storage/app/public/payment/'.$student->payment_receipt)}}" id="img1" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
<a class="btn btn-primary" href="{{asset('storage/app/public/payment/'.$student->payment_receipt)}}" download>
  Download</a>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>	



      

            
            <!-- The Modal -->
<div class="modal fade" id="myModalpdf{{$student->id}}">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your Payment PDF File</h5>
</div>
<!-- Modal body -->
<div class="modal-body">
<div class="ratio ratio-16x9">
<iframe src="{{asset('storage/app/public/payment/payment_pdf/'.$student->total_payment)}}" id="img1" class="img-fluid" allowfullscreen></iframe>
</div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<a class="btn btn-primary" href="{{asset('storage/app/public/payment/payment_pdf/'.$student->total_payment)}}" download>
  Download</a>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>	

            <!-- End Modal -->
@php($no++)

@endforeach
        </tbody>
        <!------tfoot>
            <tr>
                <th></th>
                <th>University/School</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Course</th>
                <th>Email</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Payment Invoice</th>
                <th>Payment Receipt</th>
                <th>Payment total(only PDF)</th>
            </tr>
        </tfoot--->
    </table>
</div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModal1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Add New Payment</h5>
</div>
<!-- Modal body -->
<div class="modal-body">
<form action="{{route('payment.store')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3 mt-3">

<input type="text" class="form-control" id="id" value="{{ Auth::user()->id }}" name="id_stu" hidden>

  <font style="color:red;font-size:20px;">*</font> Required<br><br>
    <label for="fullname" class="form-label">Fullname:</label>
    <input type="text" class="form-control" id="name" readonly value="{{ Auth::user()->name }}" name="name">
</div>

<div class="mb-3 mt-3">
  
    <label for="phone" class="form-label"><font style="color:red;font-size:20px;">*</font> Phone:</label>
    <input type="number" class="form-control" id="email" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone" required>
</div>

<div class="mb-3 mt-3">
    <label for="course" class="form-label">Course: <font style="color:red;font-size:20px;">*</font></label>
    <input type="text" class="form-control" id="email" placeholder="Enter MBA or Diploma or Certificate" name="course">
</div>

<div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" name="email" readonly>
</div>

<div class="mb-3 mt-3">
    <label for="address" class="form-label">Address: <font style="color:red;font-size:20px;">*</font></label>
    <textarea class="form-control" rows="5" id="comment" value="{{ Auth::user()->address }}" name="address">{{ Auth::user()->address }}</textarea>
</div>
<hr>
<div class="mb-3 mt-3">
    
    <label for="amount" class="form-label">Payment Amount: <font style="color:red;font-size:20px;">*</font></label>
  <input type="number" class="form-control"  placeholder="Enter Amount" name="amount">

</div>
<hr>
<div class="mb-3 mt-3">
    
    <label for="email" class="form-label">Payment Type: <font style="color:red;font-size:20px;">*</font></label>
    <div class="form-check">
  <input type="radio" class="form-check-input" id="radio1" name="payment_type" value="Full Payment" onclick="show1();">Full Payment

</div>


<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2"  name="payment_type" value="Installment" onclick="show2();">Installment
 
</div>
<br><br>
</div>

<div class="mb-3 mt-3" id="div1" class="hide">
<font style="color:red;font-size:20px;">*</font> Required<br>
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="1st Payment"> 1<sup>st</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="2nd Payment"> 2<sup>nd</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="3rd Payment"> 3<sup>rd</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>
  
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="4th Payment"> 4<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="5th Payment"> 5<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="6th Payment"> 6<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>
  
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="7th Payment"> 7<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="8th Payment"> 8<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="9th Payment"> 9<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>

  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="10th Payment"> 10<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="11th Payment"> 11<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="12th Payment"> 12<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>

  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="13th Payment"> 13<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="14th Payment"> 14<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="15th Payment"> 15<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>
  
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="16th Payment"> 16<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="17th Payment"> 17<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;
  <input type="radio" class="form-check-input" id="radio1" name="payment_installment" value="18th Payment"> 18<sup>th</sup> Payment &nbsp;&nbsp;&nbsp;<br><br>

<hr>
</div>

<div class="mb-3 mt-3">
    <label for="course" class="form-label">Payment Invoice Screenshot: <font style="color:red;font-size:20px;">*</font></label>
    <br>
    <img src="" id="img4" class="img-fluid">  <br>
    <input type="file" class="form-control" id="file" name="payment_invoice" oninput="this.className = ''" onchange="up4()" required>

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>	
</main>

<script>
 function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}

function up4(){
									var reader=new FileReader();
									reader.onload= function(){
									var img= document.getElementById('img4');
									img.src=reader.result;
								  }
								  reader.readAsDataURL(event.target.files[0]);
								  }
</script>
@endsection