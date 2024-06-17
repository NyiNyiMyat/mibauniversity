  

<?php $__env->startSection('content'); ?>


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
All Payment Student Lists<br>
<hr>
            <div class="card-content">
            <div class="card-body">
                
            <div class="table-responsive">
              <table id="table1" class="table" style="color: #000;">
        <thead>
            <tr class="table-success">
                <th>No.</th>
                <th>Rec Date</th>
                <th>University/School</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Email</th>
                <th>Address</th>
                <th>Payment Type</th>
                <th>Payment Installment</th>
                <th>Amount</th>
                <th>Payment Invoice (Screenshot)</th>
                <th>Payment Receipt (Screenshot)</th>
                <th>Payment total (only PDF)</th>
                <th>Edit</th>
                <th>Send Email</th>
            </tr>
        </thead>
        <tbody>
        <?php ($no=1); ?>
        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($no); ?>.</td>
                <td><?php echo e($student->created_at); ?></td>
                <td>PPBS</td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><?php echo e($student->course); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->address); ?></td>
                <td><?php echo e($student->payment_type); ?></td>
                <td><?php echo e($student->payment_installment); ?></td>
                <td><?php echo e($student->amount); ?></td>

                <td>
                <a href="" class="btn btn-secondary" data-bs-toggle="modal"
                 data-bs-target="#myModalinvoice<?php echo e($student->id); ?>" style="color:#fff;"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> View</a>
                </td>

                <td>
                <a href="" class="btn btn-secondary" data-bs-toggle="modal"
                 data-bs-target="#myModalrece<?php echo e($student->id); ?>" style="color:#fff;"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> View</a>
                </td>

                <td>
                <a href="" class="btn btn-secondary" data-bs-toggle="modal"
                 data-bs-target="#myModalpdf<?php echo e($student->id); ?>" style="color:#fff;"><img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> View</a>
                </td>

                <td>
                <a href="" class="btn btn-secondary" data-bs-toggle="modal"
                 data-bs-target="#myModaledit<?php echo e($student->id); ?>" style="color:#fff;">Edit</a>
                </td>


                <td>
                <a href="#" data-bs-toggle="modal"
                data-bs-target="#sendmail<?php echo e($student->id); ?>">
                <img src="https://img.icons8.com/color/28/000000/filled-sent.png"/> Send 
                </a>
                </td>
                
            </tr>


<!--------------------------------------->
            <div class="modal fade" id="myModalinvoice<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Invoice File
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
 
                                      <img src="<?php echo e(asset('storage/payment/'.$student->payment_invoice)); ?>" id="img1" class="img-fluid">

                                      </div>
                                      <div class="modal-footer">
                                      <a class="btn btn-primary" href="<?php echo e(asset('storage/payment/'.$student->payment_invoice)); ?>" download>
                                        Download</a>
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
            <!-- End Modal -->



            <!--------------------------------------->
            <div class="modal fade" id="myModalrece<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Receipt File
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
 
                                      <img src="<?php echo e(asset('storage/payment/'.$student->payment_receipt)); ?>" id="img1" class="img-fluid">

                                      </div>
                                      <div class="modal-footer">
                                      <a class="btn btn-primary" href="<?php echo e(asset('storage/payment/'.$student->payment_receipt)); ?>" download>
  Download</a>
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
            <!-- End Modal -->


                        <!--------------------------------------->
                        <div class="modal fade" id="myModalpdf<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document" >
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                            Total Payment
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body" style="height:500px;">
 
                                      <iframe src="<?php echo e(asset('storage/payment/payment_pdf/'.$student->total_payment)); ?>" height="500px" width="100%" allowfullscreen></iframe>
                                      </div>
                                      <div class="modal-footer">
                                      <a class="btn btn-primary"  href="<?php echo e(asset('storage/payment/payment_pdf/'.$student->total_payment)); ?>" download>
                                        Download</a>
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block" style="color:#000;">Close</span>
                                          </button>
                                         
                                      </div>
                                  </div>
                              </div>
                          </div>
            <!-- End Modal -->

                <!--------------------------------------->
                <div class="modal fade" id="myModaledit<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                         Edit
                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
<form action="<?php echo e(route('studentBackendpayment.update',$student->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo method_field('PUT'); ?>
<?php echo csrf_field(); ?>

<div class="mb-3 mt-3">

  <font style="color:red;font-size:20px;">*</font> Required<br><br>
    <label for="fullname" class="form-label">Fullname:</label>
    <input type="text" class="form-control" id="name" value="<?php echo e($student->name); ?>" value="" name="name">
</div>

<div class="mb-3 mt-3">
  
    <label for="phone" class="form-label"><font style="color:red;font-size:20px;">*</font> Phone:</label>
    <input type="number" class="form-control" id="email" value="<?php echo e($student->phone); ?>" name="phone" placeholder="Enter Phone" required>
</div>

<div class="mb-3 mt-3">
    <label for="course" class="form-label">Course: <font style="color:red;font-size:20px;">*</font></label>
    <input type="text" class="form-control" id="email" placeholder="Enter MBA or Diploma or Certificate" name="course" value="<?php echo e($student->course); ?>">
</div>

<div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" value="<?php echo e($student->email); ?>" id="email" value="" name="email" readonly>
</div>

<div class="mb-3 mt-3">
    <label for="address" class="form-label">Address: <font style="color:red;font-size:20px;">*</font></label>
    <textarea class="form-control" rows="5" id="comment" value="<?php echo e($student->address); ?>" name="address"><?php echo e($student->address); ?></textarea>
</div>
<hr>
<div class="mb-3 mt-3">
    
    <label for="amount" class="form-label">Payment Amount: <font style="color:red;font-size:20px;">*</font></label>
  <input type="number" class="form-control" value="<?php echo e($student->amount); ?>" placeholder="Enter Amount" name="amount">

</div>
<hr>

<div class="mb-3 mt-3">
    
    <label for="amount" class="form-label">Payment Type: <font style="color:red;font-size:20px;">*</font> 
full payment / installment</label>
  <input type="text" class="form-control"  placeholder="Enter Amount" value="<?php echo e($student->payment_type); ?>" name="payment_type">

</div>
<hr>

<div class="mb-3 mt-3">
    
    <label for="amount" class="form-label">Payment Installment: <font style="color:red;font-size:20px;">*</font></label>
  <input type="text" class="form-control"  placeholder="Enter Amount" name="payment_installment" value="<?php echo e($student->payment_installment); ?>">

</div>


<input type="hidden" name="curr_invoice" value="<?php echo e($student->payment_invoice); ?>">
<input type="hidden" name="curr_receipt" value="<?php echo e($student->payment_receipt); ?>">
<input type="hidden" name="curr_total" value="<?php echo e($student->total_payment); ?>">
Payment Invoice<br>
<input type="file" name="payment_invoice" class="form-control">
<br>
Payment Receipt<br>
<input type="file" name="payment_receipt" class="form-control"></br>
<br>
Total Payment (only pdf)<br>
<input type="file" name="total_payment" class="form-control">
<br>
<button type="submit" class="btn btn-primary">Update</button>

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
            
            
                          <!-- End Modal -->

                          
        <!--scrolling content Modal -->
        <div class="modal fade" id="sendmail<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #<?php echo e($student->id); ?><br>
                    Data Input Date: <?php echo e($student->created_at); ?>

                 </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('mailing.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="row">
                <div class="col-md-12 col-12">
                        <div class="form-group">
                          
                            <input type="text" id="first-name-column" class="form-control"
                            name="id_stu" value="<?php echo e($student->id); ?>" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="name" value="<?php echo e($student->name); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Course Name</label>
                            <input type="text" id="first-name-column" class="form-control"
                            name="course" value="<?php echo e($student->course); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                           
                            <input type="text" id="first-name-column" class="form-control"
                            name="type" value="MBA" hidden>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">D.O.B</label>
                            <input type="date" id="first-name-column" class="form-control"
                            name="dob" value="<?php echo e($student->dob); ?>" readonly>
                        </div>
                    </div>


                    <div class="col-md-12 col-12">
                    <label for="sel1"><h6><font style="font-size:15px;">Email Type</font></h6></label>
                    <select class="form-select mb-3" aria-label=".form-select-lg example" name="emailtype" required="required">
                    <option value="Birthday">Birthday</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Marketing">Other</option>
                    <option value="Marketing">Payment</option>
                    </select>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Email</label>
                            <input type="email" id="first-name-column" class="form-control"
                            name="email" value="<?php echo e($student->email); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                    <div class="form-group with-title mb-3">
    <textarea class="form-control" name="comm" id="exampleFormControlTextarea1" rows="5"></textarea>
    <label>Something Write</label>
</div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column"  style="color:#000;">Attach File</label>
                            <br><br>
                            <input type="file" id="first-name-column" class="form-control"
                            name="photo">
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="submit">Send</button>
                        </div>
                    </div>


                </form>
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

<!------------------------------------------------------------------------------------>

<?php ($no++); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <!------tfoot>
            <tr>
                <th></th>
                <th>University/School</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Course</th>
                <th>Email</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Payment Invoice</th>
                <th>Payment Receipt</th>
                <th>Payment total(only PDF)</th>
            </tr>
        </tfoot--->
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/studentBackendpayment/index.blade.php ENDPATH**/ ?>