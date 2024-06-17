  

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
                                    <h6 class="font-extrabold mb-0"><?php echo e($mailstudents->count()); ?></h6>
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
                        <li class="breadcrumb-item active" aria-current="page">Student All Mail</li>
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
       <!-- Basic Tables start -->
       <section class="section">
        <div class="card">
            <div class="card-header" style="color: #000;">
All Student Mails<br>
<hr>
<a href="<?php echo e(route('mailing.create')); ?>" class="btn btn-success">
Add New Student</a>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;">
                    <thead>
                        <tr>
                          
                            <th>No.</th>
                            <th>Reg Date</th>
                            <th>Full Name</th>
                            <th>course</th>
                            <th>Learning Type</th>
                            <th>D.O.B</th>
                            <th>Email</th>
                            <th>Email Type</th>
                            <th>Message</th>
                            <th>Attach image</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $mailstudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mailstudent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr style="color:#000;">
                           
                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($mailstudent->created_at); ?></td>
                            <td><?php echo e($mailstudent->name); ?></td>
                            <td><?php echo e($mailstudent->course); ?></td>
                            <td><?php echo e($mailstudent->type); ?></td>
                            <td><?php echo e($mailstudent->dob); ?></td>
                            <td><?php echo e($mailstudent->email); ?></td>
                            <td><?php echo e($mailstudent->emailtype); ?></td>
                            <td>
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollablemess<?php echo e($mailstudent->id); ?>" style="color:#000;">View</a>
                            </td>

                            <td>
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollableimg<?php echo e($mailstudent->id); ?>" style="color:#000;">View</a>
                           </td>

                            <td> 
                            <?php if( Auth::user()->user_type==1): ?>

                            <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del<?php echo e($mailstudent->id); ?>">
                            <i class="bi bi-x-square-fill" style="color:red;"></i>
                           </button>
                           <?php else: ?>
                        
                        <p>not allow</p>
                     <?php endif; ?>

                            </td>

                            <div class="modal fade" id="del<?php echo e($mailstudent->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">

                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="<?php echo e(route('mailing.destroy',$mailstudent->id)); ?>" method="POST">
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
                              <!--scrolling content Modal -->
                              <div class="modal fade" id="exampleModalScrollablemess<?php echo e($mailstudent->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                             Message
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                      <p><?php echo e($mailstudent->comm); ?></p>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollableimg<?php echo e($mailstudent->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Attach File
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
 
                                        <iframe class="embed-responsive-item" src="<?php echo e(asset('storage/birthday/'.$mailstudent->photo)); ?>" allowfullscreen></iframe>

                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>

                        
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/backend/allmail/index.blade.php ENDPATH**/ ?>