

<?php $__env->startSection('content'); ?>
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?php echo e(asset('images/slide/1.png')); ?>);">
            <div class="carousel-container">
              <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">
                PACIFIC PRIME BUSINESS SCHOOL</h2>
                <p class="animate__animated animate__fadeInUp">
                    <h4 style="color:#fff;line-height:1.5;">To be the affordable and quality international education provider that enable students to develop the know-how to achieve their professional goals, 
                    improve productivity in their organizations and provide values to their communities.</h4></p>
                <a href="<?php echo e(route('the-school')); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?php echo e(asset('images/slide/2.png')); ?>);">
            <div class="carousel-container">
              <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">
                PACIFIC PRIME BUSINESS SCHOOL</h2>
                <p class="animate__animated animate__fadeInUp">
                    <h4 style="color:#fff;line-height:1.5;">To be the affordable and quality international education provider that enable students to develop the know-how to achieve their professional goals, 
                    improve productivity in their organizations and provide values to their communities.</h4></p>
                <a href="<?php echo e(route('the-school')); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?php echo e(asset('images/slide/3.png')); ?>);">
            <div class="carousel-container">
              <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">
                PACIFIC PRIME BUSINESS SCHOOL</h2>
                <p class="animate__animated animate__fadeInUp">
                    <h4 style="color:#fff;line-height:1.5;">To be the affordable and quality international education provider that enable students to develop the know-how to achieve their professional goals, 
                    improve productivity in their organizations and provide values to their communities.</h4></p>
                <a href="<?php echo e(route('the-school')); ?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

                <!-- Slide 4 -->
                <div class="carousel-item" style="background-image: url(<?php echo e(asset('images/slide/web4.jpg')); ?>);">
            <div class="carousel-container">
              <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">
                PACIFIC PRIME BUSINESS SCHOOL</h2>
                <p class="animate__animated animate__fadeInUp">
                    <h4 style="color:#fff;line-height:1.5;">To be the affordable and quality international education provider that enable students to develop the know-how to achieve their professional goals, 
                    improve productivity in their organizations and provide values to their communities.</h4></p>
                <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<main id="main">
<!-- ======= Awarding Lists Section ======= -->

<section class="about-lists" id="program">
      <div class="container">
        <!-----------------------------div class="row">          
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8"> 
          <form  action="<?php echo e(route('search_course')); ?>" method="GET">
            <?php echo csrf_field(); ?>
            <input type="text" name="search_str" class="form-control form-control-lg" placeholder="Search Your Course" style="height: 40px;">
           
         
        </div>
        <div class="col-lg-2">
          <button type="submit" name="search_course" class="btn btn-primary btn-small" style="height: 40px;"><i class="bi bi-search"></i> Search</button></div>
       
   
        </div>

      </form>
    </div---------------------------------------------------->

   
<hr>
<center><h3>Our Awarding Partners</h3></center>
        <div class="row no-gutters">
  <div class="col-lg-2 col-md-4 content-item">
            

          </div>
          <div class="col-lg-4 col-md-6 content-item">
           <center><img src="<?php echo e(asset('images/logo/sbs.png')); ?>" class="img-fluid"></center><hr>
                   <h6 style="font-size:17px;color:#000;text-align:left;line-height:150%;">  
                
SBS is a management institution dedicated to preparing students for the careers of the global economy. 
We offer programs, which specialize in International Management, Finance, Marketing and other fields.
<br>
<a href="<?php echo e(route('sbs-info')); ?>" style="color:red;">Read More</a></b>
</h6>
                           
          </div>
          <!----------------------------------->
          
          <div class="col-lg-4 col-md-6 content-item">
             <center> 
            <img src="<?php echo e(asset('images/logo/lin.png')); ?>" class="img-fluid" style="height:100px;">
            </center>
            <hr>
             <h6 style="font-size:17px;color:#000;text-align:left;line-height:150%;">  
                
                 Lincoln University College (LUC), 
             located at Petaling Jaya, Malaysia was established in the year 2002 as Lincoln College (LC) and later upgraded to Lincoln University 
             College in the year 2011.<br>
            <a href="<?php echo e(route('lincoln-info')); ?>" style="color:red;">Read More</a>   
           
             </h6>
          </div>
           <!----------------------------------->
           
          <div class="col-lg-2 col-md-4 content-item">
            

          </div>
           <!----------------------------------->
        </div>

      </div>
    </section><!-- End About Lists Section -->
<hr>
        <!-- ======= Programs Lists Section ======= -->
        <section class="about-lists" id="program"  style="background-color:#005393;">
      <div class="container-fluid">
        <div class="row no-gutters">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 col-md-5 content-item">
               <h5 style="color:#fff;"><i class="bi bi-journal-check" style="color:#fff;font-size:30px;"></i> <?php echo e($category->category); ?></h5>
             <h6 style="font-size:17px;color:#fff;text-align:left;line-height:150%;">
              <?php echo e(\Illuminate\Support\Str::limit($category->description, 160, $end='...')); ?>

         
</h6><a href="<?php echo e(route('frontend.our-programs',$category->category)); ?>">
  <button type="button" class="btn btn-primary">Read More</button></a>
          </div>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <!----------------------------------->
        </div>

      </div>
    </section><!-- End About Lists Section --> 

<section class="about-lists" id="program">    
<div class="container"> 
  <div class="row">
<div class="section-title">
              <h2 class="animate__animated animate__fadeInDown">
                PACIFIC PRIME BUSINESS SCHOOL</h2>
              <p style="text-align: justify;">
              <img src="<?php echo e(asset('images/banner/bann1.png')); ?>" class="img-fluid" id="imgShool">
                   <h6 style="font-size:16px;color:#000;text-align:justify;line-height:2;"> 
                  Pacific Prime Business School (PPBS) was established in May 2018 with the vision of returning education in Myanmar back to the high international 
                  reputation that the country's universities used to enjoy.     PPBS vision is to be the affordable and quality international education provider
                  that enables students to develop the know-how to achieve their professional goals, improve productivity in their organizations and provide values to their 
                  communities.<br><br>

The school focuses on a holistic learning approach, using unique teaching methods such as game-based, project and problem-based learning, to nurture a new generation of
creative, innovative and practical individuals for a dynamic world, especially for the development of Myanmar.   PPBS center of attention is on improving educational quality
and delivering a robust, real world education, it has been able to assemble experienced faculty members and in partnership with leading international universities. Our strong 
business networks also support genuine opportunities for our students’ career development. So, get ready for your future at Pacific Prime Business
School (PPBS) <i>“SCHOOL FOR LEADERS”</i>.

</h6>

               </p>
<hr>
    </div>
</div>
</div>
</section>
<hr>
       <!-- ======= Awarding Lists Section ======= -->
        <section class="about-lists" id="program" style="background-color:#005393;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12">
                 
                     <h3 style="color:#fff;">Our Videos</h3><br><br>
                    
          </div>
          
          <div class="col-lg-3 col-md-6"  style="border:1px solid #333;padding:20px;">
              <div class="embed-responsive embed-responsive-16by9">
               
                  <iframe width="500px" height="500px" src="https://www.youtube.com/embed/3Zq8TwBVbn8" title="SBS Swiss Business School Myanmar Campus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="embed-responsive-item" allowfullscreen></iframe>
              </div>
          </div>
          
             <div class="col-lg-3 col-md-6"  style="border:1px solid #333;padding:20px;">
              <div class="embed-responsive embed-responsive-16by9">
               <iframe width="500" height="500" src="https://www.youtube.com/embed/3Yc8ySSd8es" title="SBS Swiss Business School Myanmar Campus" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="embed-responsive-item" allowfullscreen></iframe>
              </div>
          </div>
          
             <div class="col-lg-3 col-md-6"  style="border:1px solid #333;padding:20px;">
              <div class="embed-responsive embed-responsive-16by9">
               
                 <iframe width="500" height="500" src="https://www.youtube.com/embed/Zfjo0ffiV-8" title="MBA Intake 2,3 Dinner SBS Swiss Business School" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  class="embed-responsive-item" allowfullscreen></iframe>
              </div>
          </div>
          
               <div class="col-lg-3 col-md-6"  style="border:1px solid #333;padding:20px;">
              <div class="embed-responsive embed-responsive-16by9">
               <iframe width="" height="" src="https://www.youtube.com/embed/fVTI-MDfxOg" title="Ph.D at PPBS (Pacific Prime Business School) from LUC (Lincoln University College)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="embed-responsive-item" allowfullscreen></iframe>
              </div>
          </div>
          
              <div class="col-lg-12 col-md-12">
                 
                    <h3><a href="https://www.youtube.com/@ppbs-pacificprimebusinesss645/videos" class="btn btn-primary" target="_blank">More Video</a></h3>
                    
          </div>
        </div>

      </div>
    </section><!-- End About Lists Section -->
    
      <!--------------------------->
    <hr>
        <!-- ======= Awarding Lists Section ======= -->
        <section class="about-lists" id="program">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-12 col-md-12">
                 <center><img src="https://img.icons8.com/dusk/54/000000/university-campus.png"/><br>
                     <h3>Center Locations</h3>
                     </center>
          </div>
          
          <div class="col-lg-2 col-md-6 content-item"></div>

          <div class="col-lg-4 col-md-6 content-item">
                 <img src="<?php echo e(asset('images/address/mict2.jpg')); ?>" class="img-fluid" style="height:220px;border:1px solid blue;border-radius:10px;box-shadow:1px 2px 1px #333;"><br><br>
                 <a href="<?php echo e(route('contact-us')); ?>"><h6 style="color:#000;"><b><img src="https://img.icons8.com/color/30/000000/arrow--v2.png"/>&nbsp;MICT Center</b></h6></a>
          </div>
 
          
          <div class="col-lg-4 col-md-6 content-item">
                 <img src="<?php echo e(asset('images/address/mdy.jpg')); ?>" class="img-fluid" style="height:220px;border:1px solid blue;border-radius:10px;box-shadow:1px 2px 1px #333;"><br><br>
                 <a href="<?php echo e(route('contact-us')); ?>"><h6 style="color:#000;"><b><img src="https://img.icons8.com/color/30/000000/arrow--v2.png"/>&nbsp;Mandalay Center</b></h6></a>
          </div>
          <div class="col-lg-2 col-md-6 content-item"></div>
          <!---------
          <div class="col-lg-6 col-md-8 content-item" data-aos="fade-up">
          <center><img src="https://img.icons8.com/color/48/000000/multiple-choice.png"/><br>
              <h3>Apply Online</h3><br>
              <a href="applyform.php"><button type="button" class="btn btn-primary" style="background-color:#005393;"><h6>Apply Now</h6></button></a>
              </center>
          </div>
      --------------------------->
        </div>

      </div>
    </section><!-- End About Lists Section -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>