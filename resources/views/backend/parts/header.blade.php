<div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="background-color: #f5d1d5;color">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="#"><img src="{{asset('images/logo/logo.png')}}" alt="Logo" class="img-fluid" style="width: 96px;height:35px" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">
            <i class="bi bi-person-circle"></i> <a  href="" data-bs-toggle="modal" data-bs-target="#exampleModal">{{Auth::user()->name}}</a></li>
{{--
            <li
                class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li> --}}

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-book-fill"></i>

                    <span>Course Management</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('type.index')}}">Type</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('courses.index')}}">Course</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-calendar-event-fill"></i>

                    <span>Celebration or Events</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('celebration.index')}}">Celebrate or Event Lists</a>
                    </li>


                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="fa fa-graduation-cap"></i>

                    <span>MBA</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('lincolnbackend.index')}}">Lincoln MBA</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('sbsbackend.index')}}">SBS MBA</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Mini MBA</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item ">
                        <a href="{{route('miniMba.index')}}">All Students</a>
                    </li>
                   <li class="submenu-item ">
                        <a href="{{route('miniMbaone','1')}}">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('miniMbatwo','2')}}">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('miniMbathree','3')}}">Online Learning (Zoom Class)</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>ABE Diploma</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item ">
                        <a href="{{route('abebackend.index')}}">All Students</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('abeone','1')}}">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('abetwo','2')}}">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('abethree','3')}}">Online Learning (Zoom Class)</a>
                    </li>
                </ul>
            </li>


            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-hexagon-fill"></i>
                    <span>IQN Diploma</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item ">
                        <a href="{{route('iqnbackendpos.index')}}">All Students</a>
                    </li>
                <li class="submenu-item ">
                        <a href="{{route('iqnone','1')}}">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('iqntwo','2')}}">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('iqnthree','3')}}">Online Learning (Zoom Class)</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fa fa-sticky-note"></i>
                    <span>Certificate</span>
                </a>
                <ul class="submenu">
                <li class="submenu-item ">
                        <a href="{{route('certificatebackend.index')}}">All Students</a>
                    </li>
                <li class="submenu-item ">
                        <a href="{{route('certificateone','1')}}">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('certificatetwo','2')}}">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{route('certificatethree','3')}}">Online Learning (Zoom Class)</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Contact Us</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('contactUs.index')}}">Contact Lists</a>
                    </li>

                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-columns-gap"></i>
                    <span>Enquiry</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('enquiry.index')}}">Student Enquiry</a>
                    </li>

                </ul>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-credit-card-2-back-fill"></i>
                    <span>Student Payment</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{route('studentpayment.index')}}">Payment</a>
                    </li>

                </ul>
            </li>


            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-envelope-fill"></i>
                    <span>Mailing System</span>
                </a>
                <ul class="submenu ">
                <li class="submenu-item ">
                        <a href="{{route('allmail.index')}}">All Mails</a>
                    </li>
                    <li class="submenu-item">
                        <a href="{{route('mailing.index')}}">Birthday Wish System Panel</a>
                    </li>

                </ul>
            </li>



            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-gear"></i>
                    <span>Setting</span>
                </a>
                <ul class="submenu ">

                    <li class="submenu-item ">
                        <a href="{{route('account.index')}}">Account</a>
                    </li>
                    <li class="submenu-item ">
                    <a  href="" data-bs-toggle="modal"  data-bs-target="#logout1">{{ __('Logout') }}</a>
                    </li>

                </ul>
            </li>


            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>

                    <span></span>
                </a>
                <ul class="submenu ">

                    <li class="submenu-item ">

                    </li>
                    <li class="submenu-item ">

                    </li>

                </ul>
            </li>

        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>


    <?php

function checkUser1($usertype1){

    $type1="";
    if($usertype1==1){
        $type1="Super Admin";
    }
    else if($usertype1==2){
        $type1="Admin";
    }
    else if($usertype1==3){
        $type1="Student";
    }

    return $type1;
}


?>
            <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="color:#000;">
         <center><img src="{{asset('storage/app/public/accproimg/'.Auth::user()->photo)}}" style="width:150px;"class="img-thumbnail" ></center>
          <hr>
          <p style="color:#000;">
        <label for="exampleFormControlInput1" class="form-label">Your Name</label><br>
       {{Auth::user()->name}}<hr>

       <label for="exampleFormControlInput1" class="form-label">Your Email or Username</label><br>
       {{Auth::user()->email}}<hr>

       <label for="exampleFormControlInput1" class="form-label">Your Account Type</label><br>
       {{checkUser1(Auth::user()->user_type)}}<hr>

        <label for="exampleFormControlInput1" class="form-label">Your Phone</label><br>
       {{Auth::user()->phone}}<hr>

         <label for="exampleFormControlInput1" class="form-label">Your Address</label><br>
       {{Auth::user()->address}}<hr>

       </p>



      </div>
      <div class="modal-footer">
        <a href="" data-bs-toggle="modal"  class="btn btn-danger" data-bs-target="#logout1">{{ __('Logout') }}</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


  <div class="modal fade" id="logout1" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">

                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to Logout?</p>
                                            <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <button id="log" class="btn btn-danger">
                                                     Yes, Logout it!</button>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
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
