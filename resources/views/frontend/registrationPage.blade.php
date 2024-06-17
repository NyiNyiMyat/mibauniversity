@extends('frontend.layouts.master')

@section('content')


<main id="main">
<!-- ======= Awarding Lists Section ======= -->

<section class="about-lists" id="program">

        <div class="row no-gutters">

          <div class="col-lg-9 col-md-8 content-item" style="padding: top 100px;">

          <img src="{{asset('images/banner/reg.png')}}" class="img-fluid">

          <br><br>
          <h2 class="animate__animated animate__fadeInDown">
                MIBA University</h2>
                <p class="animate__animated" style="font-size:20px;">
                    <h4 style="color:#000;line-height:1.5;font-size:20px;">To be the affordable and quality international education provider that enable students to develop the know-how to achieve their professional goals,
                    improve productivity in their organizations and provide values to their communities.</h4></p>
                <a href="{{route('the-school')}}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                <br><br>
                <img src="{{asset('images/banner/regi1.png')}}" class="img-fluid">
         </div>
     <!----------------------------------->

     <div class="col-lg-3 col-md-3 content-item">
     <div class="row no-gutters">

     <div class="col-lg-12 col-md-12 content-item">
     <img src="{{asset('images/logo/sbs.png')}}" class="img-fluid" style="height:50px;">
     <br><br>
     <h5>SBS MBA</h5>
     <a href="{{route('sbsmba_registraton')}}" style="color:#fff;text-decoration:none;"><button type="button" style="background-color:gray;">Registration Now</button></a>
     </div>

     <div class="col-lg-12 col-md-12 content-item">
     <img src="{{asset('images/logo/lin.png')}}" class="img-fluid" style="height:50px;">
     <br><br>
     <h5>Lincoln MBA</h5>
     <a href="{{route('lincolnmba_registraton')}}" style="color:#fff;text-decoration:none;">
      <button type="button" style="background-color:gray;">Registration Now</button></a>
     </div>



      </div>
      </div>
        <!----------------------------------->
        </div>
<!------------------------------------------------------------------------------------------------------------>

</div>




<!---------------------------------------------------------------------------------------------------------------->
      </div>
    </section><!-- End About Lists Section -->
<hr>
        <!-- ======= Awarding Lists Section ======= -->

</main>
@endsection
