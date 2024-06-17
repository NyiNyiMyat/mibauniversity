@extends('backend.layouts.master')  

@section('content')
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
  <!-- // Basic multiple Column Form section start -->
  <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">IQN Diploma Student Details</h4>
                    </div>
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

	@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
                    <div class="card-content">
                        <div class="card-body">
                    <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column" style="color:red;">Personal Particulars</label>
                                    </div>
                                </div>
                                <hr>
                                <form class="form" action="{{route('iqnbackendpos.update',$iqnstudent->id)}}" enctype="multipart/form-data" method="POST">
                                    
                                @METHOD('PUT')
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Course</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                             name="course" value="{{$iqnstudent->course}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Campus</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                             name="campus" value="{{$iqnstudent->campus}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Intake</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                             name="intake" value="{{$iqnstudent->intake}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">

<div class="form-group">
      <label for="first-name-column"><h6><font style="font-size:15px;">Learning Type</font></h6></label>
        <select class="form-select" aria-label=".form-select-lg example" name="type" required="required">
            <option selected>{{$iqnstudent->type}}</option>
<option value="Face-To-Face-On-Campus">Face To Face On Campus</option>
<option value="E-Learning-Platform">E-Learning Platform</option>
<option value="Online-Learning-(Zoom-Class)">Online Learning (Zoom Class)</option>

</select>
      </div>
      </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">FullName</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                             name="fullname" value="{{$iqnstudent->fullname}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Gender</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                            value="{{$iqnstudent->gender}}" name="gender">
                                        </div>
                                    </div>

                              
                                    <hr>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="city-column">D.O.B (* If you change DOB,You do change Month and Date together.)</label>
                                            <input type="date" id="city-column" class="form-control col-md-4" placeholder="Date Of Birth"
                                                name="dob" value="{{$iqnstudent->dob}}">
                                                <label for="city-column">Month</label>
                                                <input type="text" id="city-column" class="form-control col-md-4" placeholder="Date Of Birth"
                                                name="month" value="{{$iqnstudent->month}}">
                                                <label for="city-column">Day</label>
                                                <input type="text" id="city-column" class="form-control col-md-4" placeholder="Date Of Birth"
                                                name="day" value="{{$iqnstudent->day}}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">N.R.C</label>
                                            <input type="text" id="country-floating" class="form-control"
                                                name="nrc" value="{{$iqnstudent->nrc}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Nationality</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="nation" value="{{$iqnstudent->nation}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Religion</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="relig" value="{{$iqnstudent->relig}}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Father Name</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="father" value="{{$iqnstudent->father}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Student's Phone</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="stu_ph" value="{{$iqnstudent->stu_ph}}">
                                        </div>
                                    </div>


                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Student's Email</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="email" value="{{$iqnstudent->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Student's Address</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="address" value="{{$iqnstudent->address}}">
                                        </div>
                                    </div>


                                     
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Occupation</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="occupation" value="{{$iqnstudent->occupation}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Company's Name</label>
                                            <input type="text" id="email-id-column" class="form-control"
                                                name="com_name" value="{{$iqnstudent->com_name}}">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Company's Phone</label>
                                            <input type="text" id="company-column" class="form-control"
                                                name="com_ph" value="{{$iqnstudent->com_ph}}">
                                        </div>
                                    </div>
                                   
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column" style="color:red;">Academic Qualifications</label>
                                    </div>
                                </div>
                                <hr>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="first-name-column">Academic Year</label>
                        <input type="text" id="first-name-column" class="form-control"
                         name="ad_year" value="{{$iqnstudent->ad_year}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="last-name-column">University</label>
                        <input type="text" id="last-name-column" class="form-control"
                        value="{{$iqnstudent->university}}" name="university">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="city-column">Degree</label>
                        <input type="text" id="city-column" class="form-control"
                            name="degree" value="{{$iqnstudent->degree}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="country-floating">Major</label>
                        <input type="text" id="country-floating" class="form-control"
                            name="major" value="{{$iqnstudent->major}}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column">Qualification Year</label>
                        <input type="text" id="company-column" class="form-control"
                            name="ad_year" value="{{$iqnstudent->ad_year}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="email-id-column">Location</label>
                        <input type="text" id="email-id-column" class="form-control"
                            name="location" value="{{$iqnstudent->location}}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column">Certificate</label>
                        <input type="text" id="company-column" class="form-control"
                            name="certificate" value="{{$iqnstudent->certificate}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="email-id-column">Date</label>
                        <input type="text" id="email-id-column" class="form-control"
                            name="ad_date" value="{{$iqnstudent->ad_date}}">
                    </div>
                </div>


                
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column">Student's Email</label>
                        <input type="text" id="company-column" class="form-control"
                            name="email" value="{{$iqnstudent->email}}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="email-id-column">Student's Address</label>
                        <input type="text" id="email-id-column" class="form-control"
                            name="address" value="{{$iqnstudent->address}}">
                    </div>
                </div>


      
                <br><br>

                                 <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column" style="color:red;">Emergency Contact Information Please provide name, relationship and phone number of an emergency</label>
                                    </div>
                                </div>
                                <hr>
             
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Name</label>
                                        <input type="text" id="company-column" class="form-control"
                                            name="em_name" value="{{$iqnstudent->em_name}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email-id-column">Relationship</label>
                                        <input type="text" id="email-id-column" class="form-control"
                                            name="em_rela" value="{{$iqnstudent->em_rela}}">
                                    </div>
                                </div>
                
                
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Phone Number</label>
                                        <input type="text" id="company-column" class="form-control"
                                            name="em_comph" value="{{$iqnstudent->em_comph}}">
                                    </div>
                                </div>

                            
               
                                <hr>

                                <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                     
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-4">
                                        <div class="list-group" role="tablist">
                                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                                                data-bs-toggle="list" href="#list-home" role="tab"><i class="bi bi-eye-fill"></i> Student's Profile Photo</a>
                                            <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                data-bs-toggle="list" href="#list-profile" role="tab"><i class="bi bi-eye-fill"></i>  Student's Invoice Photo</a>
                                            <a class="list-group-item list-group-item-action" id="list-messages-list"
                                                data-bs-toggle="list" href="#list-messages" role="tab"><i class="bi bi-eye-fill"></i>  Student's N.R.C Front Photo</a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list"
                                                data-bs-toggle="list" href="#list-settings" role="tab"><i class="bi bi-eye-fill"></i>  Student's N.R.C Back Photo</a>
                                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                                data-bs-toggle="list" href="#list-degree" role="tab"><i class="bi bi-eye-fill"></i>  Student's Degree file</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-8 mt-1">
                                        <div class="tab-content text-justify" id="nav-tabContent">
                                            <div class="tab-pane show active" id="list-home" role="tabpanel"
                                                aria-labelledby="list-home-list">
                                                <div class="page-heading">
                                                    <section class="section">
                                                        <div class="row">
                                                        <div class="col-12 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title">Student's Profile Photo</h5>
                                                                  
                                                                    <div class="modal fade text-left" id="profile" tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabelprofile" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-primary">
                                                                                <h5 class="modal-title white" id="myModalLabelprofile">
                                                                                    {{$iqnstudent->fullname}}
                                                                                </h5>
                                                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <i data-feather="x"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <img src="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->pro)}}" class="img-fluid">
                                                                            
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
                                                                    </div>
                                                             
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <input type="file" name="pro" class="form-control">
                                                                            <br><br>
                                                                            <button type="button" class="btn btn-outline-primary me-1 mb-1" data-bs-toggle="modal"
                                                                            data-bs-target="#profile">
                                                                            Preview
                                                                        </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="list-profile" role="tabpanel"
                                                aria-labelledby="list-profile-list">
                                                <div class="page-heading">
                                                    <section class="section">
                                                        <div class="row">
                                                        <div class="col-12 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title">Student's Invoice vocher</h5>
                                                                        <div class="modal fade text-left" id="invoice" tabindex="-1" role="dialog"
                                                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-primary">
                                                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                                                        {{$iqnstudent->fullname}}
                                                                                    </h5>
                                                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <i data-feather="x"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->pay)}}" class="img-fluid">
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
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <input type="file" name="pay" class="form-control">
                                                                           <br><br>
                                                                            <button type="button" class="btn btn-outline-primary me-1 mb-1" data-bs-toggle="modal"
                                                                            data-bs-target="#invoice">
                                                                            Preview
                                                                        </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
    
                                            <div class="tab-pane" id="list-messages" role="tabpanel"
                                                aria-labelledby="list-messages-list">
                                                <div class="page-heading">
                                                    <section class="section">
                                                        <div class="row">
                                                        <div class="col-12 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title">Student's N.R.C Front Photo</h5>
                                                                        <div class="modal fade text-left" id="nrcf" tabindex="-1" role="dialog"
                                                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-primary">
                                                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                                                        {{$iqnstudent->fullname}}
                                                                                    </h5>
                                                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <i data-feather="x"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                <img src="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->nrcf)}}" class="img-fluid">
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
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <input type="file" name="nrcf" class="form-control">
                                                                            <br><br>
                                                                            <button type="button" class="btn btn-outline-primary me-1 mb-1" data-bs-toggle="modal"
                                                                            data-bs-target="#nrcf">
                                                                            Preview
                                                                        </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                        
                                                        </div>
                                                    </section>
                                                </div>
                                        
                                            </div>
    
                                            <div class="tab-pane" id="list-settings" role="tabpanel"
                                                aria-labelledby="list-settings-list">
                                            
                                                <div class="page-heading">
                                                    <section class="section">
                                                        <div class="row">
                                                        <div class="col-12 col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5 class="card-title">Student's N.R.C Back Photo</h5>
                                                                        <div class="modal fade text-left" id="nrcb" tabindex="-1" role="dialog"
                                                                        aria-labelledby="myModalLabel160" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-primary">
                                                                                    <h5 class="modal-title white" id="myModalLabel160">
                                                                                        {{$iqnstudent->fullname}}
                                                                                    </h5>
                                                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <i data-feather="x"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <img src="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->nrcb)}}" class="img-fluid">
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
                                                                    </div>
                                                                    <div class="card-content">
                                                                        <div class="card-body">
                                                                            <!-- File uploader with image preview -->
                                                                            <input type="file" name="nrcb" class="form-control">
                                                                              <br><br>
                                                                              <button type="button" class="btn btn-outline-primary me-1 mb-1" data-bs-toggle="modal"
                                                                              data-bs-target="#nrcb">
                                                                              Preview
                                                                          </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            
                                        
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="list-degree" role="tabpanel"
                                            aria-labelledby="list-settings-list">
                                        
                                            <div class="page-heading">
                                                <section class="section">
                                                    <div class="row">
                                                    <div class="col-12 col-md-6">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-title">Student's Degree File ( Only for Post Graduate Course)</h5>
                                                                    <div class="modal fade text-left" id="degree" tabindex="-1" role="dialog"
                                                                    aria-labelledby="myModalLabel160" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-primary">
                                                                                <h5 class="modal-title white" id="myModalLabel160">
                                                                                    {{$iqnstudent->fullname}}
                                                                                </h5>
                                                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <i data-feather="x"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="ratio ratio-16x9">
                                                                                <iframe width="1000px"src="{{asset('storage/app/public/iqnposimages/degree/'.$iqnstudent->degreefile)}}" title="Degree" allowfullscreen></iframe>
                                                                                  </div>
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
                                                                </div>
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <!-- File uploader with image preview -->
                                                                        <input type="hidden" name="curr_de" value="{{$iqnstudent->degreefile}}">
                                                                        <input type="file" name="degreefile" class="form-control">
                                                                          <br><br>
                                                                          <button type="button" class="btn btn-outline-primary me-1 mb-1" data-bs-toggle="modal"
                                                                          data-bs-target="#degree">
                                                                          Preview
                                                                      </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        
                                    
                                                    </div>
                                                </section>
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </form>   
               
    </section>

    

    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    
    <!-- image editor -->
    <script
        src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // register desired plugins...
    FilePond.registerPlugin(
        // validates the size of the file...
        FilePondPluginFileValidateSize,
        // validates the file type...
        FilePondPluginFileValidateType,

        // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
        FilePondPluginImageCrop,
        // preview the image file type...
        FilePondPluginImagePreview,
        // filter the image file
        FilePondPluginImageFilter,
        // corrects mobile image orientation...
        FilePondPluginImageExifOrientation,
        // calculates & adds resize information...
        FilePondPluginImageResize,
    );

    // Filepond: Basic
    FilePond.create(document.querySelector('.basic-filepond'), {
        allowImagePreview: false,
        allowMultiple: false,
        allowFileEncode: false,
        required: false
    });

    // Filepond: Multiple Files
    FilePond.create(document.querySelector('.multiple-files-filepond'), {
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: false
    });

    // Filepond: With Validation
    FilePond.create(document.querySelector('.with-validation-filepond'), {
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: true,
        acceptedFileTypes: ['image/png'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: ImgBB with server property
    FilePond.create(document.querySelector('.imgbb-filepond'), {
        allowImagePreview: false,
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort) => {
                // We ignore the metadata property and only send the file

                const formData = new FormData();
                formData.append(fieldName, file, file.name);

                const request = new XMLHttpRequest();
                // you can change it by your client api key
                request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

                request.upload.onprogress = (e) => {
                    progress(e.lengthComputable, e.loaded, e.total);
                };

                request.onload = function () {
                    if (request.status >= 200 && request.status < 300) {
                        load(request.responseText);
                    }
                    else {
                        error('oh no');
                    }
                };

                request.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            let response = JSON.parse(this.responseText);

                            Toastify({
                                text: "Success uploading to imgbb! see console f12",
                                duration: 3000,
                                close: true,
                                gravity: "bottom",
                                position: "right",
                                backgroundColor: "#4fbe87",
                            }).showToast();

                            console.log(response);
                        } else {
                            Toastify({
                                text: "Failed uploading to imgbb! see console f12",
                                duration: 3000,
                                close: true,
                                gravity: "bottom",
                                position: "right",
                                backgroundColor: "#ff0000",
                            }).showToast();

                            console.log("Error", this.statusText);
                        }
                    }
                };

                request.send(formData);
            }
        }
    });

    // Filepond: Image Preview
    FilePond.create(document.querySelector('.image-preview-filepond1'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

        // Filepond: Image Preview
        FilePond.create(document.querySelector('.image-preview-filepond2'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });


           // Filepond: Image Preview
           FilePond.create(document.querySelector('.image-preview-filepond3'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });


           // Filepond: Image Preview
           FilePond.create(document.querySelector('.image-preview-filepond4'), {
        allowImagePreview: true,
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png', 'image/jpg', 'image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });


</script>
@endsection
