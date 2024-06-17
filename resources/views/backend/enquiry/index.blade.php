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
                                    <h6 class="font-extrabold mb-0">{{$accounts->count()}}</h6>
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
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiry Lists</li>
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
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">

<!------------------------------------------------------------>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;color:#000;">
                    <thead>
                        <tr>
                         
                            <th>No.</th>
                            <th>Record Date:</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Age</th>
                            <th>Work Experience</th>
                            <th>Education Background</th>
                            <th>course</th>
                            <th>location</th>
                            <th>Message</th>
                            <th>Send</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no=1)
                        @foreach($enquiry as $contact)
      
                        <tr id="sid{{$contact->id}}">
                         
                            <td>{{$no}}.</td>
                            <td>{{$contact->created_at}}</td>
                            
                            <td>{{$contact->fullname}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>{{$contact->age}}</td>
                            <td>{{$contact->work_experience}}</td>
                            <td>{{$contact->education_background}}</td>
                            <td>{{$contact->course}}</td>
                            <td>{{$contact->location}}</td>
                            <td><button id="mess" class="btn" data-bs-toggle="modal" style="color:#000;"
                            data-bs-target="#message{{$contact->id}}">
                            view message
                           </button></td>

                            <td>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#sendmail{{$contact->id}}">
                                <img src="https://img.icons8.com/color/28/000000/filled-sent.png"/>
                            </a>
                            </td>

                           <td> 
                           @if( Auth::user()->user_type==1)
                            <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del{{$contact->id}}"><img src="https://img.icons8.com/plasticine/25/000000/filled-trash.png"/>
                   
                        </button>

                        @else
                        
                        <p>not allow</p>
                     @endif

                            </td>

                            <div class="modal fade" id="del{{$contact->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="{{route('enquiry.destroy',$contact->id)}}" method="POST">
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



                            <!------------------------------->

                            <div class="modal fade" id="message{{$contact->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                            <p style="color:#000;">
                                            {{$contact->message}}
                                            </p>
                                            </div>

                                        </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </tr>
   
                          <!-------------------------end details--------------------->

                                  <!--scrolling content Modal -->
        <div class="modal fade" id="sendmail{{$contact->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #{{$contact->id}}<br> Data Input Date: {{$contact->created_at}}
                 </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('mailing.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                <div class="col-md-12 col-12">
                        <div class="form-group">
                          
                            <input type="text" id="first-name-column" class="form-control"
                            name="id_stu" value="{{$contact->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$contact->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$contact->course}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                           
                            <input type="text" id="first-name-column" class="form-control"
                            name="type" value="MBA" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">D.O.B</label>
                            <input type="date" id="first-name-column" class="form-control"
                            name="dob" value="{{$contact->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Enquiry">Enquiry</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$contact->email}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                    <div class="form-group with-title mb-3">
    <textarea class="form-control" name="comm" id="exampleFormControlTextarea1" rows="5"></textarea>
    <label>Something Write</label>
</div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Attach File</label>
                            <br><br>
                            <input type="file" id="first-name-column" class="form-control"
                            name="photo">
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="submit">Send</button>
                        </div>
                    </div>


                </form>
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

<!------------------------------------------------------------------------------------>
     
                        @php($no++)

                        @endforeach
                      
                    </tbody>
                    <tfoot>
                        
                     </tfoot>
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>


@endsection
