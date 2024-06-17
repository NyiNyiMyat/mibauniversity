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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Today Birthday Student Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
 <!-- Basic Tables start -->

 <section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For Lincoln MBA Students<br>
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
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
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
                    @foreach($linMba as $student)

                    <tr id="sid{{$student->id}}" style="color:#000;">
                    
                        <td>{{$no}}.</td>
                        <td>{{$student->created_at}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable{{$student->id}}">{{$student->fullname}}</a></td>
                        <td>{{$student->dob}}</td>
                        <td>{{$student->email}}</td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail{{$student->id}}">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable{{$student->id}}" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                          Student ID #{{$student->id}} / Data Input Date: {{$student->created_at}}
                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="{{asset('storage/linmbaimages/'.$student->pro)}}" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);">{{$student->fullname}}</font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);">{{$student->course}}</font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);">{{$student->dob}}</font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);">{{$student->email}}</font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);">{{$student->comm}}</font></b><hr>
                                  
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
<div class="modal fade" id="sendmail{{$student->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #{{$student->id}} / Data Input Date: {{$student->created_at}}
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
                            name="id_stu" value="{{$student->id}}" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="{{$student->fullname}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">D.O.B</label>
                            <input type="date" id="first-name-column" class="form-control"
                            name="dob" value="{{$student->dob}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="{{$student->email}}" readonly>
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
</div>
@endsection
