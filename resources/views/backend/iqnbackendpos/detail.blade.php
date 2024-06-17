@extends('backend.layouts.master')  

@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('abebackend.index')}}">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ABE Student Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

 @if (Session::has('success'))
<div class="alert alert-primary alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>{{ Session::get('success') }}</strong>
  </div>
@endif
<br>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
IQN Diploma Student Details<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-primary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" href="{{route('iqnbackendpos.create')}}"><span class="fa-fw select-all fas"></span> Add New Student</a></li>
      <li><a class="dropdown-item" href="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->pro)}}" download><span class="fa-fw select-all fas"></span> Student Photo</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/iqnposimages/degree/'.$iqnstudent->degreefile)}}" download><span class="fa-fw select-all fas"></span> Degree File</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->nrcf)}}" download><span class="fa-fw select-all fas"></span> N.R.C Front Image</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->nrcb)}}" download><span class="fa-fw select-all fas"></span> N.R.C Back Image</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->pay)}}" download><span class="fa-fw select-all fas"></span> Payment Screenshot Image</a></li>
      <li><a href="" class="dropdown-item" onclick="printDiv('printableArea')">
      <span class="fa-fw select-all fas"></span> Print or Download</a></li>
      <li><a class="dropdown-item" href="{{route('iqnbackendpos.edit',$iqnstudent->id)}}"><span class="fa-fw select-all fas"></span> Edit Student</a></li>
    </ul>
  </div>
</div>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive" id="printableArea">
                <table class="table table-lg">
                               
<tbody>
    <tr style="color:#000;">
     <th colspan="3"></th>
     <th><img src="{{asset('storage/app/public/iqnposimages/'.$iqnstudent->pro)}}" style="width:100px;height:100px"></th>
    </tr>

    <tr>
     <th colspan="4" style="color:#000;">{{$iqnstudent->course}}</th>
    </tr>
    <tr class="table-primary">
     <th colspan="4" style="color:red;"> Personal Information</th>
    </tr>
         
    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Reg Date</th>
    <th class="text-bold-500" >Full Name</th>
    <th class="text-bold-500">Intake</th>
    <th class="text-bold-500">Gender</th>
    </tr> 
    
    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->created_at}}</td>
    <td class="text-bold-500">{{$iqnstudent->fullname}}</td>
    <td class="text-bold-500">{{$iqnstudent->intake}}</td>
    <td class="text-bold-500">{{$iqnstudent->gender}}</td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Email</th>
    <th class="text-bold-500" >N.R.C</th>
    <th class="text-bold-500">Phone No:</th>
    <th class="text-bold-500">DOB</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->email}}</td>
    <td class="text-bold-500">{{$iqnstudent->nrc}}</td>
    <td class="text-bold-500">{{$iqnstudent->stu_ph}}</td>
    <td class="text-bold-500">{{$iqnstudent->dob}}</td>
    </tr>


    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Nationality</th>
    <th class="text-bold-500" >Religion</th>
    <th class="text-bold-500">Father</th>
    <th class="text-bold-500">Address</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->nation}}</td>
    <td class="text-bold-500">{{$iqnstudent->relig}}</td>
    <td class="text-bold-500">{{$iqnstudent->father}}</td>
    <td class="text-bold-500">{{$iqnstudent->address}}</td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Occupation</th>
    <th class="text-bold-500" >Company Name</th>
    <th class="text-bold-500">Company Phone</th>
    <th class="text-bold-500"></th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->occupation}}</td>
    <td class="text-bold-500">{{$iqnstudent->com_name}}</td>
    <td class="text-bold-500">{{$iqnstudent->com_ph}}</td>
    <td></td>
    </tr>

    <tr class="table-primary">
     <th colspan="4" style="color:red;"> Academic Qualifications</th>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Academic Year</th>
    <th class="text-bold-500" >Universty</th>
    <th class="text-bold-500">Degree</th>
    <th class="text-bold-500">Major</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->ad_year}}</td>
    <td class="text-bold-500">{{$iqnstudent->university}}</td>
    <td class="text-bold-500">{{$iqnstudent->degree}}</td>
    <td class="text-bold-500">{{$iqnstudent->major}}</td>
    </tr>
    
    <tr style="color:#000;">
    <th class="text-bold-500">Qualification Year</th>
    <th class="text-bold-500" >Location</th>
    <th class="text-bold-500">Certificate</th>
    <th class="text-bold-500">Date</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->other_ql}}</td>
    <td class="text-bold-500">{{$iqnstudent->location}}</td>
    <td class="text-bold-500">{{$iqnstudent->certificate}}</td>
    <td class="text-bold-500">{{$iqnstudent->ad_date}}</td>
    </tr>

    <tr>
     <th class="table-primary" colspan="4" style="color:red;"> Emergency Contact Information Please provide name, relationship and phone number of an emergency</th>
    </tr>

    <tr style="color:#000;">
    <th class="text-bold-500">Name</th>
    <th class="text-bold-500" >Relationship</th>
    <th class="text-bold-500">Phone Number</th>
    <th class="text-bold-500"></th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$iqnstudent->em_name}}</td>
    <td class="text-bold-500">{{$iqnstudent->em_rela}}</td>
    <td class="text-bold-500">{{$iqnstudent->em_comph}}</td>
    <td class="text-bold-500"></td>
    </tr>
</tbody>
</table>
                </div>
            </div>
            </div>

            


    </section>
    <!-- Basic Tables end -->
</div>

@endsection
