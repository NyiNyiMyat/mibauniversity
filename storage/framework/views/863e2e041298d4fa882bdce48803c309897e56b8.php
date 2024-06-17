  

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

 <section class="section" style="color:#000;">
    <div class="card">
        <div class="card-header">
Mailing System For Lincoln MBA Students<br>
<hr>

        <div class="card-content">
        <div class="card-body">
            <?php if(Session::has('success')): ?>
            <div class="alert alert-primary alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong><?php echo e(Session::get('success')); ?></strong>
              </div>
            <?php endif; ?>
            <br>

            <?php if($errors->any()): ?>
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
<?php endif; ?>
<br>
            <div class="table-responsive">
            <table class="table" id="table1" style="font-size:15px;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reg Date</th>
                        <th>Full Name</th>
                        <th>D.O.B</th>
                        <th>Email</th>
                        <th>Send</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php ($no=1); ?>
                    <?php $__currentLoopData = $linMba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr id="sid<?php echo e($student->id); ?>" style="color:#000;">
                    
                        <td><?php echo e($no); ?>.</td>
                        <td><?php echo e($student->created_at); ?></td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalScrollable<?php echo e($student->id); ?>"><?php echo e($student->fullname); ?></a></td>
                        <td><?php echo e($student->dob); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><a href="#" data-bs-toggle="modal"
                            data-bs-target="#sendmail<?php echo e($student->id); ?>">Send</a></td>
                        <td>
                            <i class="bi bi-send style="color:red;"></i>
                        </td>
                      
                    </tr>
                          <!--scrolling content Modal -->
                          <div class="modal fade" id="exampleModalScrollable<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-scrollable" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalScrollableTitle">
                                          Student ID #<?php echo e($student->id); ?> / Data Input Date: <?php echo e($student->created_at); ?>

                                       </h5>
                                      <button type="button" class="close" data-bs-dismiss="modal"
                                          aria-label="Close">
                                          <i data-feather="x"></i>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="avatar avatar-xl me-3">
                                    <img src="<?php echo e(asset('storage/linmbaimages/'.$student->pro)); ?>" class="img-fluid" style="width:100px;height:100px">
                                    </div>
                                    <hr>
                                   <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->fullname); ?></font>
                                    </b><hr>
                                    <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->course); ?></font>
                                    </b><hr>
                                    <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->dob); ?></font></b><hr>
                                    <b>Email |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->email); ?></font></b><hr>
                                    <b>Birthday Wish Texts |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->comm); ?></font></b><hr>
                                  
                                    <hr>
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
<div class="modal fade" id="sendmail<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #<?php echo e($student->id); ?> / Data Input Date: <?php echo e($student->created_at); ?>

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
                            name="name" value="<?php echo e($student->fullname); ?>" readonly>
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

                    <?php ($no++); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>
                
            </table>
            </div>
        </div>
        </div>
    </div>

</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/lincolnDOB/index.blade.php ENDPATH**/ ?>