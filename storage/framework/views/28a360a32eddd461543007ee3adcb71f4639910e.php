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
  <footer id="footer" style="background-color:#005393;">
    <div class="footer-top" style="background-color:#005393;">
      <div class="container" style="background-color:#005393;">
          
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
              <h4>ABOUT PPBS</h4><hr>
            <p  style="font-size:15px;line-height: 2;">
            <a href="<?php echo e(route('the-school')); ?>" style="color:#fff;">The School</a><br>
            <a href="<?php echo e(route('the-school')); ?>" style="color:#fff;">Vision & Mission</a><br>
            <a href="https://cpanel01wh.bkk1.cloud.z.com:2096/" style="color:#fff;" target="_blan">Staff E-Mail</a><br>
            <a href="<?php echo e(route('the-school')); ?>" style="color:#fff;">Student Testimonials</a><br>
            <a href="<?php echo e(route('contact-us')); ?>" style="color:#fff;">Contact Us</a><br>
            </p>
          </div>
           <div class="col-lg-3 col-md-6 footer-info">
              <h4>PROGRAMS</h4><hr>
               <p style="font-size:15px;line-height: 2">
           
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a style="color:#fff;" href="<?php echo e(route('frontend.our-programs',$category->category)); ?>"><?php echo e($category->category); ?></a><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
              <h4>STUDENT SUPPORT</h4><hr>
               <p style="font-size:15px;line-height: 2">
            <a href="https://learning.ppbs.education/login/login_new.php" target="_blank" style="color:#fff;">PPBS-SBS LMS </a><br>
            <a href="https://luc.ppbs.education/login/login_new.php" target="_blank" style="color:#fff;">PPBS-LUC LMS </a><br>
            <a href="http://learning.mibauniversity.com/pages/login-form-1" target="_blank" style="color:#fff;">Online Learning Programs</a></br>
            <a href="https://library.maykha.online/" target="_blank" style="color:#fff;">Online Library</a><br>
            </p>
          </div>
          <div class="col-lg-3 col-md-6 footer-info">
              <h4> OTHERS </h4><hr>
               <p style="font-size:15px;line-height: 2">
           
               <?php
              $celebrations=App\Models\Celebrate::all();
            ?>
            <?php $__currentLoopData = $celebrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celebrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('events',$celebrate->id)); ?>" style="color:#fff;"><b style="font-family: Satoshi, 69pt regular;color:#fff;">
              <?php echo e($celebrate->name); ?></b></a><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--a href="" style="color:#fff;">Photo Gallery</a><br>
            <a href="" style="color:#fff;">Video Gallery</a><br--->
            
            <a href="<?php echo e(route('privacy-and-data-protection')); ?>" style="color:#fff;">Privacy and Data Protection</a><br>
            </p>
          </div>
          
 
          <!---div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Location</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.510665842453!2d96.1274889143463!3d16.850614622499865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1956c5f98656f%3A0x5441a1620e7094da!2sMICT%20Park%20Building%209!5e0!3m2!1sen!2smm!4v1605399943575!5m2!1sen!2smm" width="420" height="300" 
                       frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           
          </div--->
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-10 footer-info"></div> 
          <div class="col-lg-4 col-md-6 footer-info">
              <a href="https://www.facebook.com/pacificprimebs" target="_blank"><img src="https://img.icons8.com/nolan/50/facebook-new.png"/></a>
              <a href="https://www.facebook.com/sbsmyanmar" target="_blank"><img src="https://img.icons8.com/color/50/000000/facebook-circled--v1.png"/></a>
              <a href="https://www.youtube.com/channel/UCf1JFa5XShpd89f_Bl7uFWg" target="_blank"><img src="https://img.icons8.com/fluent/50/000000/youtube-play.png"/></a>
              <a href="#"><img src="https://img.icons8.com/fluent/50/000000/instagram-new.png"/></a>
              <a href="#"><img src="https://img.icons8.com/fluent/50/000000/linkedin.png"/></a>
              
           
          </div>
        </div>
       
      </div>
    </div>

    <div class="container">
      <div class="copyright">
         Copyright &copy; 2021 <span>Pacific Prime Business School</span>.<br>
DISCLAIMER: Pacific Prime Business School shall not be liable for any loss or damage caused by the usage of any information obtained from this site.
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
<?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views////frontend/parts/footer.blade.php ENDPATH**/ ?>