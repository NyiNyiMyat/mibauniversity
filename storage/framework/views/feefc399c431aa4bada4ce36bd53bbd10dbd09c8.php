<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href="#"><img src="<?php echo e(asset('adminDemo/images/logo/4.png')); ?>" alt="Logo" class="img-fluid" style="width: 146px;height:65px" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">
            <i class="bi bi-person-circle"></i> <?php echo e(Auth::user()->name); ?></li>
            
            <li
                class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="bi bi-book-fill"></i>
                
                    <span>Course</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('categories.index')); ?>">Categories</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('type.index')); ?>">Type</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('courses.index')); ?>">Course</a>
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
                        <a href="<?php echo e(route('celebration.index')); ?>">Celebrate or Event Lists</a>
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
                        <a href="<?php echo e(route('lincolnbackend.index')); ?>">Lincoln MBA</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('sbsbackend.index')); ?>">SBS MBA</a>
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
                        <a href="<?php echo e(route('miniMba.index')); ?>">All Students</a>
                    </li>
                   <li class="submenu-item ">
                        <a href="<?php echo e(route('miniMbaone','1')); ?>">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('miniMbatwo','2')); ?>">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('miniMbathree','3')); ?>">Online Learning (Zoom Class)</a>
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
                        <a href="<?php echo e(route('abebackend.index')); ?>">All Students</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('abeone','1')); ?>">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('abetwo','2')); ?>">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('abethree','3')); ?>">Online Learning (Zoom Class)</a>
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
                        <a href="<?php echo e(route('iqnbackendpos.index')); ?>">All Students</a>
                    </li>
                <li class="submenu-item ">
                        <a href="<?php echo e(route('iqnone','1')); ?>">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('iqntwo','2')); ?>">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('iqnthree','3')); ?>">Online Learning (Zoom Class)</a>
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
                        <a href="<?php echo e(route('certificatebackend.index')); ?>">All Students</a>
                    </li>
                <li class="submenu-item ">
                        <a href="<?php echo e(route('certificateone','1')); ?>">Face To Face On Campus</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('certificatetwo','2')); ?>">E-Learning Platform</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo e(route('certificatethree','3')); ?>">Online Learning (Zoom Class)</a>
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
                        <a href="<?php echo e(route('contactUs.index')); ?>">Contact Lists</a>
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
                        <a href="<?php echo e(route('enquiry.index')); ?>">Student Enquiry</a>
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
                        <a href="<?php echo e(route('studentpayment.index')); ?>">Payment</a>
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
                        <a href="<?php echo e(route('allmail.index')); ?>">All Mails</a>
                    </li>
                    <li class="submenu-item">
                        <a href="<?php echo e(route('mailing.index')); ?>">Birthday Wish System Panel</a>
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
                        <a href="<?php echo e(route('account.index')); ?>">Account</a>
                    </li>
                    <li class="submenu-item ">
                    <a  href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
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
            </header><?php /**PATH C:\xampp\htdocs\ppbs\resources\views////backend/parts/header.blade.php ENDPATH**/ ?>