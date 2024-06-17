
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="{{route('index')}}">
        <img src="{{asset('images/logo/logo.png')}}" alt="Logo" class="img-fluid" style="width: 90px;">
        </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('index')}}"><b style="font-family: Satoshi, 69pt regular;"><i class="bi bi-house-fill" style="font-size:20px;"></i> Home</b></a></li>


         <li class="dropdown"><a href="#" style="color:#000;"><span><b style="font-family: Satoshi, 69pt regular;">Registration</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul style="color:#000;">
				<li><a href="{{route('login')}}" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Login</b></a></li>

				<li><a href="{{route('register')}}" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Register</b></a></li>
				<!---li><a href="terms.php">Terms Of Service</a></li--->
            </ul>
          </li>

		  <li class="dropdown"><a href="#" style="color:#000;"><span><b style="font-family: Satoshi, 69pt regular;">About PPBS</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul style="color:#000;">
				<li><a href="{{route('the-school')}}" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">About Us</b></a></li>

				<li><a href="{{route('privacy-and-data-protection')}}" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Privacy and Data Protection</b></a></li>
				<!---li><a href="terms.php">Terms Of Service</a></li--->
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;">Our Programs</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>


              @foreach($categories as $category)
              <li><a href="{{route('frontend.our-programs',$category->category)}}">
              <b style="font-family: Satoshi, 69pt regular;color:#000;">{{$category->category}}</b>
              </a></li>
              @endforeach

            </ul>
          </li>



          <li class="dropdown"><a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;">Student Support</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <!--<li><a href="https://learning.ppbs.education/login/login_new.php" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">PPBS-SBS LMS </b></a></li>-->
           <li><a href="https://luc.ppbs.education/login/login_new.php" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">PPBS-LUC LMS </b></a></li>
           <!--<li><a href="http://learning.mibauniversity.com/pages/login-form-1" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">Online Learning Programs</b></a></li>-->
          <li><a href="https://library.maykha.online/" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">Online Library</b></a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;">Alumni</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <?php
              $celebrations=App\Models\Celebrate::all();
            ?>
            @foreach($celebrations as $celebrate)
              <li><a href="{{route('events',$celebrate->id)}}" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;color:#000;">
              {{$celebrate->name}}</b></a></li>
              @endforeach
              <!--<li><a href="https://www.youtube.com/channel/UC6rbH9-w5F7Zn4LDtD4jxfw/videos" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">Video Gallery</b></a></li>-->
            </ul>
          </li>



          <li><a class="nav-link scrollto" href="{{route('contact-us')}}" style="color:#000;"><b>Contact Us</b></a></li>

          @if(Route::has('login'))
              @auth

                  <li class="dropdown">
                    <a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;"> <i class="bi bi-person-fill" style="font-size:20px;"></i></b></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>

                  <a href="#">
                  <b style="font-family: Satoshi, 69pt regular;color:#000;">{{ Auth::user()->name }}</b></a>
                </li>

                @if (Auth()->user()->user_type==1)
                <li><a href="{{url('backend/account')}}"><b style="font-family: Satoshi, 69pt regular;color:#000;">Admin</b></a></li>
                @endif


                  <li><a href="{{route('dashboard')}}"><b style="font-family: Satoshi, 69pt regular;color:#000;">Dashboard</b></a></li>
                  <li>
                    <b>
                  <a  style="font-family: Satoshi, 69pt regular;color:#000;"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</b>
                  </li>
                </ul>
              </li>

               @endauth
          @else
          <li><a class="nav-link scrollto" href="{{route('login')}}" style="color:#000;"><b>Login</b></a></li>

          @endif

        </ul>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
