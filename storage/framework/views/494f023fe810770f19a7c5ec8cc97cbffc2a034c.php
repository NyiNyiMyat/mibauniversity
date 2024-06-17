  

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
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <div class="container">
    <?php if(Session::has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

                <?php
                    Session::forget('success');
                ?>
            </div>
    <?php endif; ?>
    </div>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">

<!------------------------------------------------------------>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;color:#000;">
                    <thead>
                        <tr>
                            <!--th><input type="checkbox" id="chkCheckAll"/></th--->
                            <th>No.</th>
                            <th>Record Date:</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr id="sid<?php echo e($contact->id); ?>">
                            <!--td>
                        <input type="checkbox" class="checkBoxClass" id="<?php echo e($contact->id); ?>" name="ids" value="<?php echo e($contact->id); ?>" >
                            
                        </td--->
                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($contact->created_at); ?></td>
                            
                            <td><?php echo e($contact->Fullname); ?></td>
                            <td><?php echo e($contact->email); ?></td>
                            <td><?php echo e($contact->phone); ?></td>
                            <td><?php echo e($contact->subject); ?></td>
                            <td><?php echo e($contact->message); ?></td>
                            <td> 
                     <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del<?php echo e($contact->id); ?>"><img src="https://img.icons8.com/plasticine/25/000000/filled-trash.png"/>
                        Delete
                        </button>
                            </td>

                            <div class="modal fade" id="del<?php echo e($contact->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="<?php echo e(route('contactUs.destroy',$contact->id)); ?>" method="POST">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button id="del" class="btn btn-danger">
                                                     Yes, delete it!</button>
                                                </form>
    
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Cancel</span>
                                                </button>
                                            </center>
                                            </div>

                                        </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </tr>
                            
                      
<!------------------------------------------------------------>
                          <!-------------------------end details--------------------->
     
                        <?php ($no++); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                    <tfoot>
                        <!---tr>
                            <td>
                                <a href="" class="btn btn-danger" style="width:150px;">
                                Delete Selected</a>
                            
                            </td>
                            <td colspan="7"></td>
                        </tr--->
                                       
                                      </tfoot>
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/contactUs/index.blade.php ENDPATH**/ ?>