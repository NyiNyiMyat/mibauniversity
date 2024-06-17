@extends('frontend.layouts.master')

@section('content')
<main id="main">
<section class="counts section-bg">
         <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="{{asset('pdfcollection/img/Story Photo Privacy Notice.jpg')}}" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div> 
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-12">
             <div class="embed-responsive embed-responsive-21by9" style="height:1000px;">
               <iframe src="{{asset('pdfcollection/Story Photo Privacy Notice .pdf#toolbar=0&navpanes=0&scrollbar=0')}}" class="responsive-iframe"></iframe>
              </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection