  

<?php $__env->startSection('content'); ?>


<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">
                                    <a href="<?php echo e(route('lincolnbackend.index')); ?>">Lincoln MBA Student Registration Lists</a>
                                    </h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($linmbastudents->count()); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                    <i class="iconly-boldDocument"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"> <a href="<?php echo e(route('sbsbackend.index')); ?>">
                                        SBS MBA Student Registration Lists</a></h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($sbsmbastudents->count()); ?></h6>
                                </div>
                            </div>
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
                        <li class="breadcrumb-item active" aria-current="page">SBS MBA Student Lists</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

 <?php if(Session::has('success')): ?>
<div class="alert alert-primary alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><?php echo e(Session::get('success')); ?></strong>
  </div>
<?php endif; ?>
<br>
    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
            SBS MBA  Students<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-secondary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" href="<?php echo e(route('sbsbackend.create')); ?>">Add New Student</a></li>
      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#export">All Export</a></li>
    </ul>
  </div>
</div>

            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;color:#000;">
                    <thead>
                        <tr>
                            <!--th><input type="checkbox" id="chkCheckAll"/></th--->
                            <th>No.</th>
                            <th>Reg Date:</th>
                            <th>Fullname</th>
                            <th>University</th>
                            <th>Campus</th>
                            <th>Email</th>
                            <th>NRC</th>
                            <th>Student Ph</th>
                            <th>Download</th>
                            <th>Send</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $sbsmbastudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!---tr id="sid<?php echo e($student->id); ?>">
                            <td>
                        <input type="checkbox" class="checkBoxClass" id="<?php echo e($student->id); ?>" name="ids" value="<?php echo e($student->id); ?>" >
                            
                        </td--->
                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($student->created_at); ?></td>
                            <td><a href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModalScrollable<?php echo e($student->id); ?>"><?php echo e($student->fullname); ?></a></td>
                            <td><?php echo e($student->course); ?></td>
                            <td><?php echo e($student->campus); ?></td>
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->nrc); ?></td>
                            <td><?php echo e($student->stu_ph); ?></td>
                            <td>
                            <div class="dropdown">
  <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="color:#000;">
 <span class="fa-fw select-all fas"></span>Download Items
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/degree'.$student->degreefile)); ?>" download><span class="fa-fw select-all fas"></span>Degree File</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$student->pro)); ?>" download><span class="fa-fw select-all fas"></span>Student Photo</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$student->nrcf)); ?>" download><span class="fa-fw select-all fas"></span>N.R.C Front Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$student->nrcb)); ?>" download><span class="fa-fw select-all fas"></span>N.R.C Back Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$student->pay)); ?>" download><span class="fa-fw select-all fas"></span>Payment Screenshot Image</a></li>
  </ul>
</div>
                            </td>
                            <td>
                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#sendmail<?php echo e($student->id); ?>">
                                <img src="https://img.icons8.com/color/28/000000/filled-sent.png"/>
                            </a>
                            </td>
                            
                            <td>
                            <a href="<?php echo e(route('sbsbackend.edit',$student->id)); ?>">
                            <dt class="the-icon"><span class="fa-fw select-all fas"></span></dt>
                            </a>
                            </td>
                            <td> 
                            <?php if( Auth::user()->user_type==1): ?>
                            <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del<?php echo e($student->id); ?>">  <img src="https://img.icons8.com/plasticine/25/000000/filled-trash.png"/></button>
                            <?php else: ?>
                        
                        <p>not allow</p>
                     <?php endif; ?>

                        
                        </td>

                            <div class="modal fade" id="del<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">

                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="<?php echo e(route('sbsbackend.destroy',$student->id)); ?>" method="POST">
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
                              <div class="modal fade" id="exampleModalScrollable<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
                              aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalScrollableTitle">
                                              Student ID #<?php echo e($student->id); ?> / Registration Date: <?php echo e($student->created_at); ?>

                                           </h5>
                                          <button type="button" class="close" data-bs-dismiss="modal"
                                              aria-label="Close">
                                              <i data-feather="x"></i>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="avatar avatar-xl me-3">
                                            <img src="<?php echo e(asset('storage/app/public/sbsmbaimages/sbsimages/'.$student->pro)); ?>" style="width:100px;height:100px">
                                        </div>
                                        <br><br>
                                        <h5 style="color: red;">Personal Particulars</h5><hr>
                                        <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->fullname); ?></font>
                                        </b><hr>
                                        <b>Course |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->course); ?></font></b><hr>
                                        <b>Campus |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->campus); ?></font></b><hr>
                                        <b>Email  |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->email); ?></font></b><hr>
                                        <b>N.R.C  |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->nrc); ?></font></b><hr>
                                        <b>Student Phone Number |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->stu_ph); ?></font></b><hr>
                                        <b>D.O.B |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->dob); ?></font></b><hr>
                                        <b>Nationality |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->nation); ?></font></b><hr>
                                        <b>Religion |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->relig); ?></font></b><hr>
                                        <b>Father Name |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->father); ?></font></b><hr>
                                        <b>Student's Address |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->address); ?></font></b><hr>
                                        <b>Occupation |&nbsp;<font style="color: rgb(54, 52, 52);"></font><?php echo e($student->occupation); ?></b><hr>
                                        <b>Company's Name |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->com_name); ?></font></b><hr>
                                        <b>Company's Phone |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->com_ph); ?></font></b><hr>
                                        
                                        <h5 style="color: red;">Academic Qualifications</h5><hr>
                                        <b>Academic Year |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->ad_year); ?></font></b><hr>
                                        <b>Universty |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->university); ?></font></b><hr>
                                        <b>Degree |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->degree); ?></font></b><hr>
                                        <b>Major |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->major); ?></font></b><hr>
                                        <b>Qualification Year |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->other_ql); ?></font></b><hr>
                                        <b>Location |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->location); ?></font></b><hr>
                                        <b>Certificate |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->certificate); ?></font></b><hr>
                                        <b>Date |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->ad_date); ?></font></b><hr>

                                        <h5 style="color: red;">Emergency Contact Information Please provide name, relationship and phone number of an emergency</h5><hr>
                                        <b>Name |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->em_name); ?></font></b><hr>
                                        <b>Relationship |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->em_rela); ?></font></b><hr>
                                        <b>Phone Number |&nbsp;<font style="color: rgb(54, 52, 52);"><?php echo e($student->em_comph); ?></font></b><hr>
                                        
                                       
                                        
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-light-secondary"
                                              data-bs-dismiss="modal">
                                              <i class="bx bx-x d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block">Close</span>
                                          </button>
                                          <a href="<?php echo e(route('sbsbackend.show',$student->id)); ?>" style="color:#000;">
                                        
                                              <i class="bx bx-check d-block d-sm-none"></i>
                                              <span class="d-none d-sm-block">
                                                  
                                                 <button class="btn btn-primary"> See More Data</button></span>
                                        
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-------------------------end details--------------------->
        <!--scrolling content Modal -->
        <div class="modal fade" id="sendmail<?php echo e($student->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Student ID #<?php echo e($student->id); ?> <br>
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
                            name="name" value="<?php echo e($student->fullname); ?>" readonly>
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
                    <tfoot>
                        <!---tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-danger" style="width:150px;">
                                Delete Selected</a>
                            
                            </td>
                            <td colspan="7"></td>
                        </tr---->
                                       
                    </tfoot>
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>



<!-- Modal -->
<div class="modal fade" id="export" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Export All Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
                <table class="display nowrap" style="width:100%;font-size:15px;color:#000;" id="exporttable">
                    <thead>
                        <tr>
                            <!---th><input type="checkbox" id="chkCheckAll"/></th--->
                            <th>No.</th>
                            <th>University/school</th>
                            <th>Course</th>
                            <th>Campus</th>
                            <th>Intake</th>
                            <th>Learning Type</th>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>NRC</th>
                            <th>Nationality</th>
                            <th>Religious</th>
                            <th>Father Name</th>
                            <th>Student Ph</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Occupation</th>
                            <th>Company Name</th>
                            <th>Company Phone</th>
                            <th>Academic Year</th>
                            <th>University</th>
                            <th>Degree</th>
                            <th>Major</th>
                            <th>Other Qualification</th>
                            <th>Location</th>
                            <th>Certificate</th>
                            <th>Academic Date</th>
                            <th>Emergency Name</th>
                            <th>Emergency Relationship</th>
                            <th>Emergency Phone</th>
                            <th>Reg Date</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $sbsmbastudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!--tr id="sid<?php echo e($student->id); ?>">
                            <td>
                        <input type="checkbox" class="checkBoxClass" id="<?php echo e($student->id); ?>" name="ids" value="<?php echo e($student->id); ?>" >
                            
                        </td--->
                            <td><?php echo e($no); ?>.</td>
                            
                            <td>PPBS</td>
                            
                            <td><?php echo e($student->course); ?></td>
                            <td><?php echo e($student->campus); ?></td>
                            <td><?php echo e($student->intake); ?></td>
                            <td><?php echo e($student->type); ?></td>
                            
                            <td><?php echo e($student->fullname); ?></td>
                            <td><?php echo e($student->gender); ?></td>
                            <td><?php echo e($student->dob); ?></td>
                            <td><?php echo e($student->nrc); ?></td>
                            
                            <td><?php echo e($student->nation); ?></td>
                            <td><?php echo e($student->relig); ?></td>
                            <td><?php echo e($student->father); ?></td>
                            <td><?php echo e($student->stu_ph); ?></td>
                            
                            
                            <td><?php echo e($student->email); ?></td>
                            <td><?php echo e($student->address); ?></td>
                            <td><?php echo e($student->occupation); ?></td>
                            <td><?php echo e($student->com_name); ?></td>
                            <td><?php echo e($student->com_ph); ?></td>
                            
                            <td><?php echo e($student->ad_year); ?></td>
                            <td><?php echo e($student->university); ?></td>
                            <td><?php echo e($student->degree); ?></td>
                            <td><?php echo e($student->major); ?></td>
                            <td><?php echo e($student->other_ql); ?></td>
                            
                            <td><?php echo e($student->location); ?></td>
                            <td><?php echo e($student->certificate); ?></td>
                            <td><?php echo e($student->ad_date); ?></td>
                            <td><?php echo e($student->em_name); ?></td>
                            <td><?php echo e($student->em_rela); ?></td>
                            
                            <td><?php echo e($student->em_comph); ?></td>
                            
                            
                            <td><?php echo e($student->created_at); ?></td>
                            
                        <?php ($no++); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                    <tfoot>
                        <!---tr>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-danger" style="width:150px;">
                                Delete Selected</a>
                            
                            </td>
                            <td colspan="7"></td>
                        </tr--->
                                       
                                      </tfoot>
                </table>
                </div>
                            
                                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\mibauni\resources\views/backend/sbsbackend/index.blade.php ENDPATH**/ ?>