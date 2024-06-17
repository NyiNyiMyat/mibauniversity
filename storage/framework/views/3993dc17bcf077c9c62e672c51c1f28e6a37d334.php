
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="<?php echo e(route('index')); ?>">
        <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="Logo" class="img-fluid" style="width: 90px;">
        </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar" >
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo e(route('index')); ?>"><b style="font-family: Satoshi, 69pt regular;"><i class="bi bi-house-fill" style="font-size:20px;"></i> Home</b></a></li>


         <li class="dropdown"><a href="#" style="color:#000;"><span><b style="font-family: Satoshi, 69pt regular;">Registration</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul style="color:#000;">
				<li><a href="<?php echo e(route('login')); ?>" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Login</b></a></li>

				<li><a href="<?php echo e(route('register')); ?>" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Register</b></a></li>
				<!---li><a href="terms.php">Terms Of Service</a></li--->
            </ul>
          </li>

		  <li class="dropdown"><a href="#" style="color:#000;"><span><b style="font-family: Satoshi, 69pt regular;">About PPBS</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul style="color:#000;">
				<li><a href="<?php echo e(route('the-school')); ?>" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">About Us</b></a></li>

				<li><a href="<?php echo e(route('privacy-and-data-protection')); ?>" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;">Privacy and Data Protection</b></a></li>
				<!---li><a href="terms.php">Terms Of Service</a></li--->
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;">Our Programs</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>


              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('frontend.our-programs',$category->category)); ?>">
              <b style="font-family: Satoshi, 69pt regular;color:#000;"><?php echo e($category->category); ?></b>
              </a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
            <?php $__currentLoopData = $celebrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celebrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('events',$celebrate->id)); ?>" style="color:#000;"><b style="font-family: Satoshi, 69pt regular;color:#000;">
              <?php echo e($celebrate->name); ?></b></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <!--<li><a href="https://www.youtube.com/channel/UC6rbH9-w5F7Zn4LDtD4jxfw/videos" target="_blank"><b style="font-family: Satoshi, 69pt regular;color:#000;">Video Gallery</b></a></li>-->
            </ul>
          </li>



          <li><a class="nav-link scrollto" href="<?php echo e(route('contact-us')); ?>" style="color:#000;"><b>Contact Us</b></a></li>

          <?php if(Route::has('login')): ?>
              <?php if(auth()->guard()->check()): ?>

                  <li class="dropdown">
                    <a href="#"><span><b style="font-family: Satoshi, 69pt regular;color:#000;"> <i class="bi bi-person-fill" style="font-size:20px;"></i></b></span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li>

                  <a href="#">
                  <b style="font-family: Satoshi, 69pt regular;color:#000;"><?php echo e(Auth::user()->name); ?></b></a>



                </li>
                  <li><a href="<?php echo e(route('dashboard')); ?>"><b style="font-family: Satoshi, 69pt regular;color:#000;">Dashboard</b></a></li>
                  <li>
                    <b>
                  <a  style="font-family: Satoshi, 69pt regular;color:#000;"  href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
</b>
                  </li>
                </ul>
              </li>

               <?php endif; ?>
          <?php else: ?>
          <li><a class="nav-link scrollto" href="<?php echo e(route('login')); ?>" style="color:#000;"><b>Login</b></a></li>

          <?php endif; ?>

        </ul>


        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<?php /**PATH D:\xampp\htdocs\code\resources\views////frontend/parts/header.blade.php ENDPATH**/ ?>