@extends('frontend.layouts.master')

@section('content')
<section id="hero" style="height:400px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{asset('images/banner/hel.jpg')}});">
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
  <main>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <!--div class="col-lg-5 video-box">
           <img src="assets/img/slide/web5.jpg" class="img-fluid" alt="">
           
          </div--->
          <div class="col-lg-12 d-flex flex-column justify-content-center about-content">
            <div class="section-title">
              <h2><img src="{{asset('images/logo/HELP University Logo.png')}}" class="img-fluid" style="height:100px;"><hr>Help University</h2>
              <p style="text-align: justify;">
                   <h6 style="font-size:16px;color:#000;text-align:justify;line-height:2;"> 
          
                      HELP University was founded in 1986 to provide affordable quality educational opportunities for Malaysians. It has since developed into a leading institution 
                      of higher learning in Malaysia with an international reputation among universities, research organisations, scholars, business, corporate leaders, and governments.
                      HELP University offers a wide and diverse range of programmes covering business, 
                      law, management, economics, IT, the social sciences, and the humanities at undergraduate and graduate levels.<br>
The HELP Group has won numerous awards. It was recognised by Forbes Asia in 2011 as one of the top 200 Top Performing companies in Asia Pacific with capitalization below USD 
1 billion. 
It also won the KPMG Shareholder Value Award in 2010, and was ranked 43 among 1,000 public listed companies on the Malaysian Stock Exchange. HELP was also included in the 
Malaysian Corporate Governance Indext by MSWG, and won the Brand Laureate Award for Best Brand Award for Private Tertiary Education in 2012. In 2011, Group CEO, Datin Chan-Low
Kam Yoke,
was named Woman Entrepreneur of the Year by Ernst & Young.
 <br><br>
Contact Us<br>

HELP University<br>
<img src="https://img.icons8.com/fluent/24/000000/address.png"/>&nbsp;&nbsp;No. 15, Jalan Sri Semantan 1, Off Jalan Semantan, Bukit Damansara 50490 Kuala Lumpur<br>

<img src="https://img.icons8.com/cute-clipart/24/000000/ringing-phone.png"/>&nbsp;&nbsp;Tel: +6 03 2716 2000<br>
 <img src="https://img.icons8.com/nolan/24/fax.png"/>&nbsp;&nbsp;Fax: +6 03 2094 7495<br>
<img src="https://img.icons8.com/nolan/24/email.png"/>&nbsp;&nbsp;Email: marketing@help.edu.my<br>
<img src="https://img.icons8.com/fluent/24/000000/domain.png"/>&nbsp;&nbsp;<a href="https://help.edu.my/">www.help.edu.my</a>
           
              <hr>
</h6>
 </p>
    </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    @endsection