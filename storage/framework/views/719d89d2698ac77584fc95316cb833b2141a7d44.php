

<?php $__env->startSection('content'); ?>


<main id="main">
<section class="counts section-bg">
     <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="<?php echo e(asset('storage/celeimages/'.$cele->banner)); ?>" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div> 
      <div class="container-fluid" style="margin-top:20px;">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="count-box" style="padding:30px;background-color:#005393;">
                <h6 style="font-size:14px;color:#fff;line-height:2;">
                <?php
              $celebrations=App\Models\Celebrate::all();
            ?>
            <?php $__currentLoopData = $celebrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celebrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('events',$celebrate->id)); ?>" style="color:#fff;"><b style="font-family: Satoshi, 69pt regular;color:#fff;">
              <?php echo e($celebrate->name); ?></b><hr></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h6>
            </div>
          </div>


          <div class="col-lg-8 col-md-6">
            <div class="row">

                   <div class="col-lg-12 col-md-12"  id="swiss">
                       <div class="count-box" style="padding:20px;">
                           <br>
                         <h6 style="font-size:16px;color:#000;"><b><?php echo e($cele->name); ?></b><h6>
                             <br>
                           
                             <h6 style="font-size:16px;color:#000;line-height:2;">
                              
                             <?php echo e($cele->name); ?><br>
                                    Place       :  <?php echo e($cele->location); ?> <br>
                                    Date        :  <?php echo e($cele->date); ?><br>
                                    Time        :  <?php echo e($cele->time); ?><br>

                            <h6><br>
                           
                            </b>
                                <p>
                                <h6 style="font-size:16px;color:#000;line-height:2;">
                                       
                                <?php echo html_entity_decode($cele->description); ?>


                                    </h6>


                                </p>
                                
  
                      </div>
                      </div>
            </div>
            
             <div class="row">

                   <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">
               
<br>
                          <img src="<?php echo e(asset('storage/celeimages/'.$cele->image1)); ?>" class="img-fluid">
    
                      </div>
                      </div>


                      <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">
               
<br>
                          
                          <img src="<?php echo e(asset('storage/celeimages/'.$cele->image2)); ?>" class="img-fluid">
 
                      </div>
                      </div>

                      
                   <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">
               
<br>
                          <img src="<?php echo e(asset('storage/celeimages/'.$cele->image3)); ?>" class="img-fluid">
    
                      </div>
                      </div>


                      <div class="col-lg-6">
                       <div class="count-box" style="padding:10px;">
               
<br>
                          
                          <img src="<?php echo e(asset('storage/celeimages/'.$cele->image4)); ?>" class="img-fluid">
 
                      </div>
                      </div>


            </div>

          </div>

     

        </div>

      </div>
    </section><!-- End Counts Section -->

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/frontend/events/index.blade.php ENDPATH**/ ?>