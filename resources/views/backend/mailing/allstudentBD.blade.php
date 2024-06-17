@extends('backend.layouts.master')  

@section('content')

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="card"  style="border-radius: 30px;">
                  <img src="{{asset('images/banner/birthday.png')}}" class="img-fluid"  style="border-radius: 30px;border:3px solid blue;">
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
                       
                        <li class="breadcrumb-item active" aria-current="page">Today Birthday Student Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
 <!-- Basic Tables start -->
 <div class="card">
        <div class="card-header">
<font color="#000">Mailing System For Lincoln MBA Students</font><br>
<hr>

        <div class="card-content">
        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>{{ Session::get('success') }}</strong>
              </div>
            @endif
            <br>

            @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error1)
				<li>{{ $error1 }}</li>
			@endforeach
		</ul>
	</div>
@endif
<br>
 <section class="section" style="color:#000;">

            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;color:#000;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($linMba as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable1{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail1{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable1{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                        Lincoln MBA
                                          Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/linmbaimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail1{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Lincoln MBA<hr>
                    Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
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
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!--------------------------------------------------------------------------->




<section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For SBS MBA Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
       
	</div>

<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;color:#000;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($sbsStu as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable2{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail2{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable2{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                        SBS MBA<hr>
                                          Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/sbsmbaimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail2{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    SBS MBA<hr>
                    Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
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
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!--------------------------------------------------------------------------->




<section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For Mini MBA Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
       
	</div>

<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;color:#000;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($mini as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable3{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail3{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable3{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                        Mini MBA<hr>
                                          Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/sbsmbaimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail3{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Mini MBA<hr>
                    Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
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
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!-------------------------------------------------------------------------->

<section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For ABE Diploma Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
       
	</div>

<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($abestudents as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable4{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail4{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable4{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            IQN Diploma<hr>
                                          Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/abeimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail4{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    ABE Diploma<hr>
                    Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
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
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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

<!------------------------------------------------------------------------------------>



                    @php($no++)

                    @endforeach
                  
                </tbody>
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!--------------------------------------------------------------------------->

<section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For IQN Diploma Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
       
	</div>

<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;color:#000;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($iqnstudents as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable5{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail5{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable5{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                      IQN Diploma<br>
                                          Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/iqnimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail5{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                   IQN Diploma<hr>
                    Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
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
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!-------------------------------------------------------------------------->


<section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For Certificate Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
   
	</div>

<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;color:#000;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    @php($no=1)
                    @foreach($certificate as $abestudent)

                    <tr id="id{{$abestudent->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$abestudent->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable{{$abestudent->id}}">{{$abestudent->fullname}}</a></td>
                        <td>{{$abestudent->dob}}</td>
                        <td>{{$abestudent->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail{{$abestudent->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable{{$abestudent->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                        Certificate<hr>
                                        Student ID #{{$abestudent->id}} <br> Data Input Date: {{$abestudent->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/certiimages/'.$abestudent->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->course}}</font>
                                    </b><hr>

                                    <b>Learning Type |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->type}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$abestudent->comm}}</font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail{{$abestudent->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #{{$abestudent->id}} / Data Input Date: {{$abestudent->created_at}}
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
                            name="id_stu" value="{{$abestudent->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$abestudent->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="{{$abestudent->course}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Learning Type</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="type" value="{{$abestudent->type}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">D.O.B</label>
                            <input type="date" id="first-name-column" class="form-control"
                            name="dob" value="{{$abestudent->dob}}" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$abestudent->email}}" readonly>
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

                    @php($no++)

                    @endforeach
                  
                </tbody>
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
<!-------------------------------------------------------------------------->

</div>
@endsection
