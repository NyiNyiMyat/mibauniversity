<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('adminDemo/css/bootstrap.css')}}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('images/logo/titlelo.png')}}" rel="icon">
  <link href="{{asset('images/logo/titlelo.png')}}" rel="logotitle">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('sweetalert::alert')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('images/logo/logo.png')}}" alt="Logo" style="width:120px;" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                        <a style="color:#000;" class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style="color:#000;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color:#000;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <br><br>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <!------div class="container clearfix">
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div--->
  </section>
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color:#8b070b;color:#fff;">
    <div class="footer-top" style="background-color:#8b070b;color:#fff;">
      <div class="container" style="background-color:#8b070b;color:#fff;">

        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info" >
            <br>
              <h5 style="color:#fff;">ABOUT MIBA</h5><hr>
            <p  style="font-size:15px;line-height: 2;">
            <a href="{{route('the-school')}}" style="color:#fff;text-decoration:none;">The School</a><br>
            <a href="{{route('the-school')}}" style="color:#fff;text-decoration:none;">Vision & Mission</a><br>
            <a href="https://cpanel01wh.bkk1.cloud.z.com:2096/" style="color:#fff;text-decoration:none;" target="_blan">Staff E-Mail</a><br>
            <a href="{{route('the-school')}}" style="color:#fff;text-decoration:none;">Student Testimonials</a><br>
            <a href="{{route('contact-us')}}" style="color:#fff;text-decoration:none;">Contact Us</a><br>
            </p>
          </div>
           <div class="col-lg-3 col-md-6 footer-info">
           <br>
              <h5 style="color:#fff;">Our Programs</h5><hr>
               <p style="font-size:15px;line-height: 2">


               <?php
              $categories=App\Models\CategoriesCourse::select('category')->get();
            ?>
           @foreach($categories as $category)
              <li style="list-style:none;"><a href="{{route('frontend.our-programs',$category->category)}}" style="color:#fff;text-decoration:none;font-size:17px;">{{$category->category}}</a></li>
              @endforeach
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
            <br>
              <h5 style="color:#fff;">STUDENT SUPPORT</h5><hr>
               <p style="font-size:15px;line-height: 2">
            <a href="https://learning.ppbs.education/login/login_new.php" target="_blank" style="color:#fff;text-decoration:none;">PPBS-SBS LMS </a><br>
            <a href="https://luc.ppbs.education/login/login_new.php" target="_blank" style="color:#fff;text-decoration:none;">PPBS-LUC LMS </a><br>
            <a href="http://learning.mibauniversity.com/pages/login-form-1" target="_blank" style="color:#fff;text-decoration:none;">Online Learning Programs</a></br>
            <a href="https://library.maykha.online/" target="_blank" style="color:#fff;text-decoration:none;">Online Library</a><br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
          <br>
              <h5 style="color:#fff;"> OTHERS </h5><hr>
               <p style="font-size:15px;line-height: 2">
               <?php
              $celebrations=App\Models\Celebrate::all();
            ?>
            @foreach($celebrations as $celebrate)
             <a href="{{route('events',$celebrate->id)}}" style="color:#fff;text-decoration:none;">{{$celebrate->name}}</a><br>
              @endforeach
            <a href="{{route('privacy-and-data-protection')}}" style="color:#fff;text-decoration:none;">Privacy and Data Protection</a><br>
            </p>
          </div>


          <!---div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Location</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.510665842453!2d96.1274889143463!3d16.850614622499865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1956c5f98656f%3A0x5441a1620e7094da!2sMICT%20Park%20Building%209!5e0!3m2!1sen!2smm!4v1605399943575!5m2!1sen!2smm" width="420" height="300"
                       frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          </div--->
        </div>
        <div class="row">
            <br><br>
            <div class="col-lg-8 col-md-10 footer-info"></div>
          <div class="col-lg-4 col-md-6 footer-info">
              <a style="text-decoration:none;" href="https://www.facebook.com/pacificprimebs" target="_blank"><img src="https://img.icons8.com/nolan/50/facebook-new.png"/></a>
              <a style="text-decoration:none;" href="https://www.facebook.com/sbsmyanmar" target="_blank"><img src="https://img.icons8.com/color/50/000000/facebook-circled--v1.png"/></a>
              <a style="text-decoration:none;" href="https://www.youtube.com/channel/UCf1JFa5XShpd89f_Bl7uFWg" target="_blank"><img src="https://img.icons8.com/fluent/50/000000/youtube-play.png"/></a>
              <a style="text-decoration:none;" href="#"><img src="https://img.icons8.com/fluent/50/000000/instagram-new.png"/></a>
              <a style="text-decoration:none;" href="#"><img src="https://img.icons8.com/fluent/50/000000/linkedin.png"/></a>


          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <br><br>
        <center>
         Copyright &copy; 2021 <span>MIBA University</span>.<br>
DISCLAIMER: MIBA University shall not be liable for any loss or damage caused by the usage of any information obtained from this site.
              </center>
</div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  @yield('js')
</body>
</html>
