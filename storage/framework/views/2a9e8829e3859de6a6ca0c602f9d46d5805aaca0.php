

<?php $__env->startSection('content'); ?>
<main id="main">
<section class="counts section-bg">
         <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="<?php echo e(asset('pdfcollection/img/Marketing Privacy Notice.jpg')); ?>" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div> 
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-12">
             <div class="embed-responsive embed-responsive-21by9" style="height:1000px;">
               <iframe src="<?php echo e(asset('pdfcollection/Marketing Privacy Notice.pdf#toolbar=0&navpanes=0&scrollbar=0')); ?>" class="responsive-iframe"></iframe>
              </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u389310514/domains/ppbsmyanmar.com/public_html/resources/views/frontend/Marketing-Privacy-Notice.blade.php ENDPATH**/ ?>