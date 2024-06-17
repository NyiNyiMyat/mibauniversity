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
                        <li class="breadcrumb-item"><a href="{{route('miniMba.index')}}">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">MiniMBA Student Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
Mini MBA Student Details<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-primary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" href="{{route('abebackend.create')}}"><span class="fa-fw select-all fas"></span> Add New Student</a></li>
      <li><a class="dropdown-item" href="{{asset('storage/app/public/miniimages/'.$mini->pro)}}" download><span class="fa-fw select-all fas"></span> Student Photo</a></li>
    
    <li><a class="dropdown-item" href="{{asset('storage/app/public/miniimages/'.$mini->nrcf)}}" download><span class="fa-fw select-all fas"></span> N.R.C Front Image</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/miniimages/'.$mini->nrcb)}}" download><span class="fa-fw select-all fas"></span> N.R.C Back Image</a></li>
    <li><a class="dropdown-item" href="{{asset('storage/app/public/miniimages/'.$mini->pay)}}" download><span class="fa-fw select-all fas"></span> Payment Screenshot Image</a></li>
      <li><a href="" class="dropdown-item" onclick="printDiv('printableArea')">
      <span class="fa-fw select-all fas"></span> Print or Download</a></li>
      <li><a class="dropdown-item" href="{{route('miniMba.edit',$mini->id)}}"><span class="fa-fw select-all fas"></span> Edit Student</a></li>
    </ul>
  </div>
</div>
<hr>
<div class="modal fade" id="del" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-body">

        <div class="row">
            <div class="col-md-12 col-12">

                <center>
                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                <p style="color:#000;">Do you want to delete?</p>
                <form action="{{route('miniMba.destroy',$mini->id)}}" method="POST">
                    @METHOD('DELETE')
                    @csrf
                    <button id="del" class="btn btn-danger">
                     Yes, delete !</button>
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
                <div class="table-responsive" id="printableArea">
                <table class="table table-lg">
                               
<tbody>
    <tr style="color:#000;">
     <th colspan="3"></th>
     <th><img src="{{asset('storage/app/public/miniimages/'.$mini->pro)}}" style="width:100px;height:100px"></th>
    </tr>

    <tr>
     <th colspan="3" style="color:#000;">{{$mini->course}}</th>
     <th style="color:#000;">{{$mini->type}}</th>
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
    <td class="text-bold-500">{{$mini->created_at}}</td>
    <td class="text-bold-500">{{$mini->fullname}}</td>
    <td class="text-bold-500">{{$mini->intake}}</td>
    <td class="text-bold-500">{{$mini->gender}}</td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Email</th>
    <th class="text-bold-500" >N.R.C</th>
    <th class="text-bold-500">Phone No:</th>
    <th class="text-bold-500">DOB</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$mini->email}}</td>
    <td class="text-bold-500">{{$mini->nrc}}</td>
    <td class="text-bold-500">{{$mini->stu_ph}}</td>
    <td class="text-bold-500">{{$mini->dob}}</td>
    </tr>


    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Nationality</th>
    <th class="text-bold-500" >Religion</th>
    <th class="text-bold-500">Father</th>
    <th class="text-bold-500">Address</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$mini->nation}}</td>
    <td class="text-bold-500">{{$mini->relig}}</td>
    <td class="text-bold-500">{{$mini->father}}</td>
    <td class="text-bold-500">{{$mini->address}}</td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Occupation</th>
    <th class="text-bold-500" >Company Name</th>
    <th class="text-bold-500">Company Phone</th>
    <th class="text-bold-500"></th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$mini->occupation}}</td>
    <td class="text-bold-500">{{$mini->com_name}}</td>
    <td class="text-bold-500">{{$mini->com_ph}}</td>
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
    <td class="text-bold-500">{{$mini->ad_year}}</td>
    <td class="text-bold-500">{{$mini->university}}</td>
    <td class="text-bold-500">{{$mini->degree}}</td>
    <td class="text-bold-500">{{$mini->major}}</td>
    </tr>
    
    <tr style="color:#000;">
    <th class="text-bold-500">Qualification Year</th>
    <th class="text-bold-500" >Location</th>
    <th class="text-bold-500">Certificate</th>
    <th class="text-bold-500">Date</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500">{{$mini->other_ql}}</td>
    <td class="text-bold-500">{{$mini->location}}</td>
    <td class="text-bold-500">{{$mini->certificate}}</td>
    <td class="text-bold-500">{{$mini->ad_date}}</td>
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
    <td class="text-bold-500">{{$mini->em_name}}</td>
    <td class="text-bold-500">{{$mini->em_rela}}</td>
    <td class="text-bold-500">{{$mini->em_comph}}</td>
    <td class="text-bold-500"></td>
    </tr>
</tbody>
</table>
                </div>
            </div>
            </div>

            

        </div>

    </section>
    <!-- Basic Tables end -->
</div>

@endsection
