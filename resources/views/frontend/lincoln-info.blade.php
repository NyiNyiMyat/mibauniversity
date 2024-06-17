@extends('frontend.layouts.master')

@section('content')
<section id="hero" style="height:450px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{asset('images/banner/lin.jpg')}});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <!--h5 class="animate__animated animate__fadeInDown" style="color:#fff;">
               SBS is a management institution dedicated to preparing students for the careers of the global economy. We offer programs, which specialize in International 
              Management, Finance, Marketing and other fields.</h5--->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <!-- End Header -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
          <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
              <h2><img src="{{asset('images/logo/lin.png')}}" class="img-fluid" style="width:200px;"><hr>Lincoln University College</h2>
              <p style="text-align: justify;">
                   <h6 style="font-size:16px;color:#000;text-align:justify;line-height:2;"> 
              
                      
                       Lincoln University College (LUC), located at Petaling Jaya, Malaysia was established in the year 2002 as Lincoln College (LC) and later upgraded to Lincoln University College in 
                       the year 2011. Lincoln University College is one of the premier private institutions of higher education approved by the Ministry of Higher Education and Malaysian Qualifications Agency (MQA- National Accreditation Board).
                       The University College is also crowned with 5 Star ranking by the Ministry of Higher Education, Malaysia in 2017.
                       Lincoln University College is listed among the top nine Malaysian universities according to the Times Higher Education (THE) University Impact Rankings 2019. LUC is also an ISO 
                       9001:2015 certified academic institution. Lincoln University College is also the associate member of the ‘Association of Indian Universities (AIU)’, Association of Commonwealth 
                       Universities (ACU), London and a member of ‘International Association of Universities (IAU)’, Paris.<br>
                        The founders and administrators of Lincoln are true academicians who are committed to helping the students to achieve their potential in the education, research and employment 
                       world of this exciting new millennium. They bring together almost fifty years of higher education, post-secondary education and language teaching experience. Their backgrounds 
                       include teaching, research and professional training. The main focus of Lincoln University College is student-centred and student-directed. Our philosophy is that everyone has a 
                       claim to education to better their life, advance their career and reach their desired level of personal success.<br><br>
                       
                       Lincoln University College<br>
Main Campus<br>
<img src="https://img.icons8.com/fluent/24/000000/address.png"/>&nbsp;&nbsp;Wisma Lincoln, No. 12-18, Jalan SS 6/12, 47301 Petaling Jaya, Selangor Darul Ehsan, Malaysia<br>
(Near Kelana Jaya Giant and opposite Paradigm Mall, Kelana Jaya)<br>

 <img src="https://img.icons8.com/cute-clipart/24/000000/ringing-phone.png"/>&nbsp;&nbsp;PHONE: 1300 880 111 (Malaysia)<br>
 <img src="https://img.icons8.com/color/24/000000/ringing-phone.png"/>&nbsp;&nbsp;PHONE: +603-7806 3478 (International)<br>
 <img src="https://img.icons8.com/nolan/24/fax.png"/>&nbsp;&nbsp;FAX: +603-7806 3479<br>
 <img src="https://img.icons8.com/fluent/24/000000/domain.png"/>&nbsp;&nbsp;<a href="https://www.lincoln.edu.my/" target="_blank">www.lincoln.edu.my</a>
          
                 </h6>
 </p>
    </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->
@endsection