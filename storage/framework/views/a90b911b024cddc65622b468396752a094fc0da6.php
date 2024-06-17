

<?php $__env->startSection('content'); ?>

<section  id="about" class="about" style="padding-top:6px;">
     <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                
                 <img src="<?php echo e(asset('storage/app/public/courseimg/courseBanner/'.$courses->banner)); ?>" class="img-fluid">
                
             </div>
        </div>
    </div> 

    <div class="container" style="margin-top: 20px;background-color: #fff;">
      <div class="row" style="padding-top: 20px;">
        <div class="col-md-4">
            <img src="<?php echo e(asset('storage/app/public/courseimg/courseTumb/'.$courses->tumbnail)); ?>" class="img-fluid">
        </div>
        <div class="col-md-8">
         <h4><img src="https://img.icons8.com/color/20/000000/courses.png"/> <b><?php echo e($courses->coursename); ?></b></h4>
            <br>
       <p style="line-height:2;">
        <b style="line-height:2;"> 
          <?php echo html_entity_decode($courses->description1); ?></b></p> 
       <p>
    
        <br><br>

        <a class="btn" data-bs-toggle="collapse" style="border-radius:50px;border:1px solid #000;"
        href="#des2" role="button" aria-expanded="false" aria-controls="collapseExample">
        <b><i class="bi bi-arrow-right-circle"></i> Course Description</b>
     </a>&nbsp;&nbsp;&nbsp;

     <a class="btn" data-bs-toggle="collapse" style="border-radius:50px;border:1px solid #000;"
     href="#des3" role="button" aria-expanded="false" aria-controls="collapseExample">
     <b><i class="bi bi-arrow-right-circle"></i> Course Description</b>
  </a>&nbsp;&nbsp;&nbsp;

  <a class="btn" data-bs-toggle="collapse" style="border-radius:50px;border:1px solid #000;"
  href="#des4" role="button" aria-expanded="false" aria-controls="collapseExample">
  <b><i class="bi bi-arrow-right-circle"></i> Course Description</b>
</a>

 
      </p>

      <div class="collapse" id="des2">
        <div class="card card-body">
          <p style="line-height:2;">
            <b style="line-height:2;"> 
              <?php echo html_entity_decode($courses->description2); ?></b></p> 
    
           <p>
        </div>
      </div>

      <div class="collapse" id="des3">
        <div class="card card-body">
          <p style="line-height:2">
            <b style="line-height:2"> 
              <?php echo html_entity_decode($courses->description3); ?></b></p> 
    
           <p>
        </div>
      </div>

      <div class="collapse" id="des4">
        <div class="card card-body">
          <p style="line-height:2">
            <b style="line-height:2"> 
              <?php echo html_entity_decode($courses->description4); ?></b></p> 
           <p>
        </div>
      </div>
<hr>
 <a class="btn btn-primary" href="<?php echo e(route('login')); ?>" style="color:#fff;"><b>Register Now</b></a>

      <br><br>
        </div>

        
   </div>
  </div>
   
  <div class="container">

    <div class="section-title">
      <h2>Enquiry Form</h2>
    </div>
    <?php if($errors->any()): ?>
    <div class="alert alert-primary">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>
  
  <div class="container">
  <?php if(Session::has('success')): ?>
      <div class="alert alert-primary">
        <?php echo e(Session::get('success')); ?>

        <?php
          Session::forget('success');
        ?>
      </div>
  <?php endif; ?>
  </div>
      <div class="col-lg-12">
        <form action="<?php echo e(route('our-programs.store')); ?>" method="post" role="form" class="">
          <?php echo csrf_field(); ?>
          <div class="form-row">
            <div class="col-lg-6 form-group">
              <input type="text" name="fullname" class="form-control" id="name" placeholder="Your Name" required/>
            </div>
            
            <div class="col-lg-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-lg-6 form-group">
              <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone No:" required/>
            </div>
            
            <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="age" id="age" placeholder="Your Age" required/>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-lg-6 form-group">
              <input type="text" name="work_experience" class="form-control" id="work" placeholder="Working Experience" required/>
            </div>
            
            <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="education_background" id="education" placeholder="Education Background" required/>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-lg-6 form-group">
              <input type="text" name="course" class="form-control" id="course" placeholder="Course" value="<?php echo e($courses->coursename); ?>" readonly/>
            </div>
            
            <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="location" id="location" placeholder="Location" required/>
            </div>
          </div>
          
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
         
          <div class="text-center">
              <button type="submit" name="sub">Send Message</button>
          </div>
          <br>
        </form>
      </div>
    </div>
  
    </section><!-- End About Lists Section -->
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" />

    <section id="diploma" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Our Programs</h2>
        </div> 
  <div class="owl-carousel owl-theme">
    <?php $__currentLoopData = $allcourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card item">
      <a href="<?php echo e(route('frontend.our-programs.detail',$course->id)); ?>">
        <img src="<?php echo e(asset('storage/app/public/courseimg/courseTumb/'.$course->tumbnail)); ?>" class="card-img-top" alt="...">
     </a>
  
        <div class="card-body" id="bgcourse" style="height: 10rem;">
          <p class="card-text">
            <i class="bi bi-border-width"></i> <h4><?php echo e($course->coursename); ?></h4>
            </p>
        </div>
        <a style="padding: 10px;" href="<?php echo e(route('frontend.our-programs.detail',$course->id)); ?>"><font style="color:#000;font-size: 15px;"><b><i class="bi bi-arrow-right-circle"></i> Read More</b></font></a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>
  
  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- custom JS code after importing jquery and owl -->
  <script type="text/javascript">
      $(document).ready(function () {
          $(".owl-carousel").owlCarousel();
      });
  
      $('.owl-carousel').owlCarousel({
          loop: false,
          margin: 10,
          nav: true,
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: 3
              },
              1000: {
                  items: 5
              }
          }
      })
  </script>
  </div>
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u389310514/domains/ppbsmyanmar.com/public_html/resources/views/frontend/our-programs/detail.blade.php ENDPATH**/ ?>