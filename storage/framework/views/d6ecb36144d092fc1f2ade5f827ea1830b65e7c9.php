  

<?php $__env->startSection('content'); ?>


<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                    <i class="iconly-boldCalling"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="<?php echo e(route('contactUs.index')); ?>">
                                       Contact Lists</a></h6>
                                        <h6 class="font-extrabold mb-0"><?php echo e($contacts->count()); ?></h6>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                    <i class="iconly-boldChat"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"><a href="<?php echo e(route('enquiry.index')); ?>">
                                       Enquiry Lists</a></h6>
                                        <h6 class="font-extrabold mb-0"><?php echo e($enquiry->count()); ?></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                    <i class="iconly-boldWallet"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="<?php echo e(route('studentpayment.index')); ?>">
                                      Payment Lists</a></h6>
                                    </h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($accounts->count()); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                    <i class="iconly-boldMessage"></i>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="<?php echo e(route('allmail.index')); ?>">All Mail</a>
                                    </h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($mail->count()); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="stats-icon red">
                            <i class="iconly-boldSetting"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                        <h6 class="text-muted font-semibold">
                            <a href="<?php echo e(route('account.index')); ?>">Setting</a></h6>
                        <h6 class="font-extrabold mb-0">All User <?php echo e($allacc->count()); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </section>
</div>
<?php

function checkUser($usertype){

    $type="";
    if($usertype==1){
        $type="Super Admin";
    }
    else if($usertype==2){
        $type="Admin";
    }
    else if($usertype==3){
        $type="Student";
    }

    return $type;
}


?>

  
    <!-- Basic Tables start -->
       <!-- Basic Tables start -->
       <section class="section">
        <div class="card">
            <div class="card-header" style="color: #000;">
All Payment Student Lists / <a href="<?php echo e(route('studentpayment.index')); ?>">
    Back</a><br>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;color:#000;">
                    <thead>
                        <tr>
                          
                            <th>No.</th>
                            <th>Reg Date</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>User Type</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Payment</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mailstudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr style="color:#000;">
                           
                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($mailstudent->created_at); ?></td>
                            <td><?php echo e($mailstudent->name); ?></td>
                            <td><?php echo e($mailstudent->email); ?></td>
                            <td><?php echo e(checkUser($mailstudent->user_type)); ?> </td>
                            <td><?php echo e($mailstudent->phone); ?></td>
                            <td><?php echo e($mailstudent->address); ?></td>
                            <td>
                                <a href="<?php echo e(route('studentBackendpayment.show',$mailstudent->email)); ?>"  class="btn btn-warning"  style="color:#000;">Payment</a>
                            </td>

                            
                        </tr>
   

                       
                
                        <?php ($no++); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
    
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->



</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u389310514/domains/ppbsmyanmar.com/public_html/resources/views/backend/studentpayment/index.blade.php ENDPATH**/ ?>