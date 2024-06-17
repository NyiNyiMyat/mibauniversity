@extends('backend.layouts.master')  

@section('content')



<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                    <i class="iconly-boldCalling"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="{{route('contactUs.index')}}">
                                       Contact Lists</a></h6>
                                        <h6 class="font-extrabold mb-0">{{$contacts->count()}}</h6>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                    <i class="iconly-boldChat"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"><a href="{{route('enquiry.index')}}">
                                       Enquiry Lists</a></h6>
                                        <h6 class="font-extrabold mb-0">{{$enquiry->count()}}</h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                    <i class="iconly-boldWallet"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="{{route('studentpayment.index')}}">
                                      Payment Lists</a></h6>
                                    </h6>
                                    <h6 class="font-extrabold mb-0">{{$account1->count()}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                    <i class="iconly-boldMessage"></i>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="{{route('allmail.index')}}">All Mail</a>
                                    </h6>
                                    <h6 class="font-extrabold mb-0">{{$mail->count()}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                            <i class="iconly-boldSetting"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                        <h6 class="text-muted font-semibold">
                            <a href="{{route('account.index')}}">Setting</a></h6>
                        <h6 class="font-extrabold mb-0">All User {{$allacc->count()}}</h6>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </section>
</div>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Control</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

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
<!-- Nav pills -->
<ul class="nav nav-pills" style="color:#000;">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#home"><i class="bi bi-person"></i>  Create New Account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Accounts</a>
  </li>

</ul>
<br>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="{{asset('images/banner/regi.png')}}" class="img-fluid">
                   
                </div>
                <h4 class="mt-3"><center>  Create New Account</center></h4>

                <div class="card-body">
                    <form method="POST" action="{{ route('account.store') }}">
                        @csrf
                        

                        <div class="row mb-2">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                            <font style="color:red;font-size:16px;">* Required</font><br>
                                <label for="name" class="col-form-label" style="color:#000;">{{ __('Fullname') }}  <font style="color:red;font-size:16px;">*</font></label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" placeholder="Enter Creater Name" type="text" class="form-control @error('fullname') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>

                        </div>


                        <div class="row mb-2">
                            
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input type="file" name="photo" hidden>
                                <label for="name" class="col-form-label" style="color:#000;">{{ __('Phone') }}</label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" placeholder="Enter Phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="email" class="col-form-label" style="color:#000;">{{ __('Username') }} <font style="color:red;font-size:16px;">*</font></label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>


                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="email" class="col-form-label" style="color:#000;">{{ __('Account Role') }} <font style="color:red;font-size:16px;">*</font></label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="user_type" required="required">
                                               

                                @if( Auth::user()->user_type==1)
                                               <option value="1">Super Admin</option>
                                
                       @else
                        
                       <option>Supper admin not allow create.</option>
                     @endif

                                               <option value="2">Admin</option>
                                               <option value="3">Student</option>
                                           
                                               </select>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password" class="col-form-label" style="color:#000;">{{ __('Password') }} <font style="color:red;font-size:16px;">*</font></label>
                                <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">

                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label" style="color:#000;">{{ __('Confirm Password') }} <font style="color:red;font-size:16px;">*</font></label>
                                <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0" style="color: #000;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn" style="border:1px solid rgb(99, 95, 95);">
                                    <font style="color:000;">Create Account</font>
                                </button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

              
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
  </div>

<?php

function checkUser($usertype){

    $type="";
    if($usertype==1){
        $type="Super Admin";
    }
    else if($usertype==2){
        $type="Admin";
    }
    else if($usertype==3){
        $type="Student";
    }

    return $type;
}


?>

  <div class="tab-pane container fade" id="menu1">

    <!-- Basic Tables start -->
       <!-- Basic Tables start -->
       <section class="section">
        <div class="card">
            <div class="card-header" style="color: #000;">
All Account Lists<br>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;">
                    <thead>
                        <tr>
                          
                            <th>No.</th>
                            <th>Reg Date</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>User Type</th>
                            <th>Phone</th>
                            <th>Address</th>
                            
                            <th>Account Profile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php($no=1)
                        @foreach($accounts as $mailstudent)

                        <tr style="color:#000;">
                           
                            <td>{{$no}}.</td>
                            <td>{{$mailstudent->created_at}}</td>
                            <td>{{$mailstudent->name}}</td>
                            <td>{{$mailstudent->email}}</td>
                            <td>{{checkUser($mailstudent->user_type)}} </td>
                            <td>{{$mailstudent->phone}}</td>
                            <td>{{$mailstudent->address}}</td>
                            <td>
                               
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollablemess{{$mailstudent->id}}" style="color:#000;">View</a>
                            </td>

                            <td>
                                 @if( Auth::user()->user_type==1)
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollableimg{{$mailstudent->id}}" style="color:#000;">Edit</a>
                            @else
                             
                        <p>not allow</p>
                     @endif

                           </td>

                            <td> 
                            @if( Auth::user()->user_type==1)
                            <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del{{$mailstudent->id}}">
                            <i class="bi bi-x-square-fill" style="color:red;"></i>
                           </button>
                           @else
                        
                        <p>not allow</p>
                     @endif

                           
                            </td>

                            <div class="modal fade" id="del{{$mailstudent->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">

                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="{{route('account.destroy',$mailstudent->id)}}" method="POST">
                                                    @METHOD('DELETE')
                                                    @csrf
                                                    <button id="del" class="btn btn-danger">
                                                     Yes, delete it!</button>
                                                </form>
    
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Cancel</span>
                                                </button>
                                            </center>
                                            </div>

                                        </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </tr>
                              <!--scrolling content Modal -->
                              <div class="modal fade" id="exampleModalScrollablemess{{$mailstudent->id}}" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Account Profile
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                      <center>
                                      <div class="avatar avatar-xl me-3">
                                     
                                        <img src="{{asset('storage/app/public/accproimg/'.$mailstudent->photo)}}" style="width:150px;height:100px">
                                       
                                        </div>
</center>
                                        <br><br>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollableimg{{$mailstudent->id}}" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Edit Account
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
<form  action="{{ route('account.update',$mailstudent->id) }}" enctype="multipart/form-data" method="POST">
            
              @csrf   
              @method('PUT')                     
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Fullname" value="{{$mailstudent->name}}">
                                      </div>


                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Email" value="{{$mailstudent->email}}">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Enter Phone" value="{{$mailstudent->phone}}">
                                      </div>
                                        
                                      <input type="hidden" name="curr_photo" value="{{$mailstudent->photo}}">
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Profile photo</label>
                                        <input type="file" class="form-control" id="exampleFormControlInput1" name="photo">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{$mailstudent->address}}</textarea>
                                      </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Account Role</label>
                                    
                                      <select class="form-select mb-3" aria-label=".form-select-lg example" name="user_type" required="required">
                                               <option value="{{$mailstudent->user_type}}" selected></option>
                                               @if( Auth::user()->user_type==1)
                                               <option value="1">Super Admin</option>
                                
                       @else
                        
                       <option>Supper admin not allow create.</option>
                     @endif
                                               <option value="2">Admin</option>
                                               <option value="3">Student</option>
                            
                                        </select>

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
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="modal fade" id="exampleModalScrollableimg{{$mailstudent->id}}" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                          Your Profile
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
 
                                      

                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
                
                        @php($no++)

                        @endforeach
                      
                    </tbody>
    
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->


  </div>

</div>
</div>


@endsection
