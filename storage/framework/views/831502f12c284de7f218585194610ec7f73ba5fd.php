

<?php $__env->startSection('content'); ?>

<section  id="about" class="about">
     <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <img src="<?php echo e(asset('storage/courseBanner/'.$category->banner)); ?>" class="img-fluid"  style="width:100%;">
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
        </div>
    </div> 
      <div class="container"  style="margin-top: 20px;background-color: #fff;">
      <p class="animate__animated animate__fadeInUp">
          <h2 class="animate__animated animate__fadeInDown">
            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php echo e($cat->category); ?> Program</h2>
                    <h6 style="color:#000;line-height:1.5;font-size:16px;text-align: justify;">
                      <?php echo e($category->description); ?>

                    </h6></p><hr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="row no-gutters">
                   <!------------------------------------------->
                   <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <div class="col-lg-4 col-md-6 content-item">
                    <img src="<?php echo e(asset('storage/courseimg/courseTumb/'.$course->tumbnail)); ?>" style="width:300px;height:200px">
                  </div>
                   
                    <div class="col-lg-8 col-md-6 content-item">
                         <h3 style="color:#000;">
                          <img src="https://img.icons8.com/color/20/000000/courses.png"/> <?php echo e($course->coursename); ?></h3>
                    <p style="color:#000;font-size:15px;font-family:Helvetica 30 Roman;text-align:left;">
                        <h6 style="color:#000;line-height:1.5;font-size:16px;">
                          <?php echo html_entity_decode($course->description1); ?>

                     </h6>
                       <br>
                      <a href="<?php echo e(route('frontend.our-programs.detail',$course->id)); ?>">
                        <button type="button" class="btn btn-outline-primary"><font style="color:#000;font-size: 15px;"><b><i class="bi bi-arrow-right-circle"></i> Read More</b></font></button></a>
                    </p>
                  </div>
                <hr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="row mt-4 mb-4 p-2">
           <?php echo e($courses->links()); ?>

        </div>


      </div>
    </section><!-- End About Lists Section -->
      </div>

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
      <img src="<?php echo e(asset('storage/courseimg/courseTumb/'.$course->tumbnail)); ?>" class="card-img-top" alt="...">
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
    
    </section><!-- End Features Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/frontend/our-programs/index.blade.php ENDPATH**/ ?>