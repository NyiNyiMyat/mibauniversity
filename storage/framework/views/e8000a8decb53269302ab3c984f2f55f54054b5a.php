  

<?php $__env->startSection('content'); ?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="card"  style="border-radius: 30px;">
                  <img src="<?php echo e(asset('images/banner/birthday.png')); ?>" class="img-fluid"  style="border-radius: 30px;border:3px solid blue;">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Today Birthday Student Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
 <!-- Basic Tables start -->
 <div class="page-heading">

    <section class="section">
        <div class="row">
            <div class="col-4 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4> Lincoln MBA</h4>  
                    
                    </div>
                    <div class="card-body">
                        <div class="alert">
                            <img src="<?php echo e(asset('images/logo/lin.png')); ?>" class="img-fluid" style="height:50px;">
                            
                            
                        </div>
                        <div class="card-footer">
                            <font style="color: #000;"> Lincoln MBA Student</font>
                          <i class="bi bi-bell-fill" style="color:#000;font-size:20px;"></i> 
                          <sup style="color: #000;font-size: 15px;"><?php echo e($linMba->count()); ?></sup>
                          <br><br>
                          <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
                        </div>
                    </div>

                </div>
        </div>

        <div class="col-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>SBS MBA</h4>
                </div>
                <div class="card-body">
                    <div class="alert">
                        <img src="<?php echo e(asset('images/logo/sbs.png')); ?>" class="img-fluid" style="height:50px;">
                    </div>

                </div>
                <div class="card-footer">
                    <font style="color: #000;"> SBS MBA Student</font>
                    <i class="bi bi-bell-fill" style="color:#000;font-size:20px;"></i> 
                    <sup style="color: #000;font-size: 15px;"><?php echo e($sbsStu->count()); ?></sup>
                    <br><br>
                    <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
                  </div>
            </div>
    </div>

    <div class="col-4 col-md-4">
        <div class="card">
            <div class="card-header">
              
            </div>
            <div class="card-body">
                <div class="alert alert-primary">
                <h4 style="color:#fff;">Mini MBA Programs</h4>
           <i class="bi bi-bell-fill" style="color:#fff;font-size:20px;"></i> 
           <sup style="color: #fff;font-size: 15px;"><?php echo e($mini->count()); ?></sup>
           <br>
                </div>

            </div>
            <div class="card-footer">
        
            <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
              </div>
        </div>
</div>

<div class="col-4 col-md-4">
    <div class="card">
        <div class="card-header">
           
        </div>
        <div class="card-body">
            <div class="alert alert-primary">
            <h4 style="color:#fff;">ABE Diploma Programs</h4>
            <i class="bi bi-bell-fill" style="color:#fff;font-size:20px;"></i> 
           <sup style="color: #fff;font-size: 15px;"><?php echo e($abestudents->count()); ?></sup>
           <br>
            </div>

        </div>
        <div class="card-footer">
            
        <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
          </div>
    </div>
</div>

<div class="col-4 col-md-4">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="alert alert-primary">
            <h4 style="color:#fff;">IQN Diploma Programs</h4>
            <i class="bi bi-bell-fill" style="color:#fff;font-size:20px;"></i> 
           <sup style="color: #fff;font-size: 15px;"><?php echo e($iqnstudents->count()); ?></sup>
           <br>
            </div>

        </div>
        <div class="card-footer">
           
        <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
          </div>
    </div>
</div>

<div class="col-4 col-md-4">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="alert alert-primary">
            <h4 style="color:#fff;">Certificate Programs</h4>
            <i class="bi bi-bell-fill" style="color:#fff;font-size:20px;"></i> 
           <sup style="color: #fff;font-size: 15px;"><?php echo e($certificate->count()); ?></sup>
           <br>
            </div>

        </div>
        <div class="card-footer">
            
         <center><a href="<?php echo e(route('allstudentDOB.index')); ?>"><i class="bi bi-arrow-right-circle" style="font-size: 30px;"></i></a></center>
          </div>
    </div>
</div>


    </section>
</div>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/backend/mailing/index.blade.php ENDPATH**/ ?>