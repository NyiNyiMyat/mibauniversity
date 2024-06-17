

<?php $__env->startSection('content'); ?>
<section id="contact" class="contact">
                        <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="<?php echo e(asset('images/banner/Campus.jpg')); ?>" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div><br>
      <div class="container">
        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch" style="font-size:15px;">
            <div class="info-box">
                <h3>MICT Center</h3>
                <img src="<?php echo e(asset('images/banner/Mict Park Campus.jpg')); ?>" class="img-fluid" style="height:220px;border:1px solid #0667b2;border-radius:10px;box-shadow:1px 2px 1px #333;"><br><br>
                <i class="bx bx-map"></i><h3>Address</h3>
                4th Floor , Building ( 9 ) , MICT Park 
                Hlaing Township , Yangon , Myanmar<hr>
                <h3>Phone</h3>
                09 - 424455552
                <h3>Email</h3>
                mict@ppbsmyanmar.com
                
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" style="font-size:15px;">
            <div class="info-box">
                <img src="<?php echo e(asset('images/banner/welcome.png')); ?>" class="img-fluid" style="width:320px;">
                <br><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.510665842496!2d96.1274889153176!3d16.85061462249771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1956c5f98656f%3A0x5441a1620e7094da!2sMICT%20Park%20Building%209!5e0!3m2!1sen!2smm!4v1644389967568!5m2!1sen!2smm" 
                    style="border:0;height:300px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" style="font-size:15px;">
            <div class="info-box ">
                <h3>Mandalay Center</h3>
                <img src="<?php echo e(asset('images/banner/Mingalar Mandalay Campus.jpg')); ?>" class="img-fluid" style="height:220px;border:1px solid #0667b2;border-radius:10px;box-shadow:1px 2px 1px #333;"><br><br>
                <i class="bx bx-map"></i><h3>Address</h3>
                 Building 3 , Block 1 , Unit -3 , Water Street,   Mingalar Mandalay Compound,
                 Chanmyatharsi  Township , Mandalay , Myanmar<hr>
                <h3>Phone</h3>
                09 - 962142222
                <h3>Email</h3>
                mandalay@ppbsmyanmar.com
            </div>
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
            <form action="<?php echo e(route('contact-us.store')); ?>" method="post">
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
                  <input type="text" name="phone" class="form-control" id="name" placeholder="Your Phone" required/>
                </div>
                
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required/>
                </div>
              </div>
            
             <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
            
             
              <div class="text-center">
                  <button type="submit" name="sub">Send Message</button>
              </div>
            </form>

          </div>

          <div class="col-lg-12">


          </div>
        </div>

      </div>
    </section><!-- End Contact Us Section -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/frontend/contact-us.blade.php ENDPATH**/ ?>