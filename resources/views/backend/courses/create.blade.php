@extends('backend.layouts.master')  

@section('content')
       
<div class="page-heading">
<h4>Create New Course</h4>
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
    <section class="section">
        <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Banner (5288x838)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" onchange="up1()" class="form-control" name="banner" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                   
                                    <img src="" id="img1" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Tumbnail (1800x1200)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up2()" name="tumbnail" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                   
                                    <img src="" id="img2" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Category</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01" style="color:#000;">Categories</label>
                                        <select class="form-select" name="category" id="inputGroupSelect01">
                                            @foreach($categories as $category)
                                            <option value="{{$category->category}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Type</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01" style="color:#000;">Course Types</label>
                                        <select class="form-select" name="coursetype" id="inputGroupSelect01">
                                            @foreach($coursetype as $type)
                                            <option value="{{$type->coursetype}}">{{$type->coursetype}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Name</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="color:#000;" >Course Name</span>
                                        <input type="text" name="coursename" class="form-control" placeholder="Enter Course Name"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 1</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark1" cols="30" rows="10" name="description1" value="-">-</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 2</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark2" cols="30" rows="10" name="description2" value="-">-</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 3</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark3" cols="30" rows="10" name="description3" value="-">-</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 4</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark4" cols="30" rows="10" name="description4" value="-">-</textarea>
                    </div>
                </div>

                <div class="col-lg-6 mb-1">
                    <div class="input-group mb-3">
                        <button type="submit"  class="btn btn-primary rounded-pill">Add New Course</button>
                        &nbsp;  &nbsp;  &nbsp; 
                        <button type="reset"  class="btn btn-primary rounded-pill">Cancel</button>
                    </div>
    
                </div>
            </div>
        </div>

    </form>
    </section>
</div>

@endsection
