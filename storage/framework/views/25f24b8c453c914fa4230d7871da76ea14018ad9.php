  

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
                                    <h6 class="font-extrabold mb-0"><?php echo e($account1->count()); ?></h6>
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
                        <li class="breadcrumb-item"><a href=""></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account Control</li>
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
<!-- Nav pills -->
<ul class="nav nav-pills" style="color:#000;">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="pill" href="#home"><i class="bi bi-person"></i>  Create New Account</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="pill" href="#menu1">Accounts</a>
  </li>

</ul>
<br>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="<?php echo e(asset('images/banner/regi.png')); ?>" class="img-fluid">
                   
                </div>
                <h4 class="mt-3"><center>  Create New Account</center></h4>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('account.store')); ?>">
                        <?php echo csrf_field(); ?>
                        

                        <div class="row mb-2">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                            <font style="color:red;font-size:16px;">* Required</font><br>
                                <label for="name" class="col-form-label" style="color:#000;"><?php echo e(__('Fullname')); ?>  <font style="color:red;font-size:16px;">*</font></label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" placeholder="Enter Creater Name" type="text" class="form-control <?php $__errorArgs = ['fullname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-3"></div>

                        </div>


                        <div class="row mb-2">
                            
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input type="file" name="photo" hidden>
                                <label for="name" class="col-form-label" style="color:#000;"><?php echo e(__('Phone')); ?></label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" placeholder="Enter Phone" type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" autocomplete="phone" autofocus>

                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="email" class="col-form-label" style="color:#000;"><?php echo e(__('Username')); ?> <font style="color:red;font-size:16px;">*</font></label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" placeholder="example@gmail.com" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-3"></div>
                        </div>


                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="email" class="col-form-label" style="color:#000;"><?php echo e(__('Account Role')); ?> <font style="color:red;font-size:16px;">*</font></label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" name="user_type" required="required">
                                               

                                <?php if( Auth::user()->user_type==1): ?>
                                               <option value="1">Super Admin</option>
                                
                       <?php else: ?>
                        
                       <option>Supper admin not allow create.</option>
                     <?php endif; ?>

                                               <option value="2">Admin</option>
                                               <option value="3">Student</option>
                                           
                                               </select>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">
                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password" class="col-form-label" style="color:#000;"><?php echo e(__('Password')); ?> <font style="color:red;font-size:16px;">*</font></label>
                                <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-3">

                           
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label" style="color:#000;"><?php echo e(__('Confirm Password')); ?> <font style="color:red;font-size:16px;">*</font></label>
                                <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0" style="color: #000;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn" style="border:1px solid rgb(99, 95, 95);">
                                    <font style="color:000;">Create Account</font>
                                </button>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

              
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
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

  <div class="tab-pane container fade" id="menu1">

    <!-- Basic Tables start -->
       <!-- Basic Tables start -->
       <section class="section">
        <div class="card">
            <div class="card-header" style="color: #000;">
All Account Lists<br>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;">
                    <thead>
                        <tr>
                          
                            <th>No.</th>
                            <th>Reg Date</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>User Type</th>
                            <th>Phone</th>
                            <th>Address</th>
                            
                            <th>Account Profile</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
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
                               
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollablemess<?php echo e($mailstudent->id); ?>" style="color:#000;">View</a>
                            </td>

                            <td>
                                 <?php if( Auth::user()->user_type==1): ?>
                                <a href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollableimg<?php echo e($mailstudent->id); ?>" style="color:#000;">Edit</a>
                            <?php else: ?>
                             
                        <p>not allow</p>
                     <?php endif; ?>

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
                                                <form action="<?php echo e(route('account.destroy',$mailstudent->id)); ?>" method="POST">
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
                                            Account Profile
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                      <center>
                                      <div class="avatar avatar-xl me-3">
                                     
                                        <img src="<?php echo e(asset('storage/app/public/accproimg/'.$mailstudent->photo)); ?>" style="width:150px;height:100px">
                                       
                                        </div>
</center>
                                        <br><br>
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
                                            Edit Account
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
<form  action="<?php echo e(route('account.update',$mailstudent->id)); ?>" enctype="multipart/form-data" method="POST">
            
              <?php echo csrf_field(); ?>   
              <?php echo method_field('PUT'); ?>                     
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Fullname</label>
                                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Fullname" value="<?php echo e($mailstudent->name); ?>">
                                      </div>


                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Email" value="<?php echo e($mailstudent->email); ?>">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Enter Phone" value="<?php echo e($mailstudent->phone); ?>">
                                      </div>
                                        
                                      <input type="hidden" name="curr_photo" value="<?php echo e($mailstudent->photo); ?>">
                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Profile photo</label>
                                        <input type="file" class="form-control" id="exampleFormControlInput1" name="photo">
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Address</label>
                                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo e($mailstudent->address); ?></textarea>
                                      </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Account Role</label>
                                    
                                      <select class="form-select mb-3" aria-label=".form-select-lg example" name="user_type" required="required">
                                               <option value="<?php echo e($mailstudent->user_type); ?>" selected></option>
                                               <?php if( Auth::user()->user_type==1): ?>
                                               <option value="1">Super Admin</option>
                                
                       <?php else: ?>
                        
                       <option>Supper admin not allow create.</option>
                     <?php endif; ?>
                                               <option value="2">Admin</option>
                                               <option value="3">Student</option>
                            
                                        </select>

                                    </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">New Password</label>
                                        <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" autocomplete="new-password">

<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
    </span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                      </div>

                                      <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Comfirm Password</label>
                                        <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                      </div>

                                      <button type="submit" class="btn btn-primary"> Update </button>
                                      </form> 
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
                          
                          <div class="modal fade" id="exampleModalScrollableimg<?php echo e($mailstudent->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                          Your Profile
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
 
                                      

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

</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/backend/account/index.blade.php ENDPATH**/ ?>