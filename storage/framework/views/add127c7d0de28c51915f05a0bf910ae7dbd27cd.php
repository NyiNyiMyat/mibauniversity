  

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
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
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
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Followers</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
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
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Following</h6>
                                    <h6 class="font-extrabold mb-0">80.000</h6>
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
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
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
                                <i class="iconly-boldBookmark"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold">Saved Post</h6>
                            <h6 class="font-extrabold mb-0">112</h6>
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
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('abebackend.index')); ?>">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">SBS MBA Student Details</li>
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
SBS MBA Student Details<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-primary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" href="<?php echo e(route('sbsbackend.create')); ?>"><span class="fa-fw select-all fas"></span> Add New Student</a></li>
      <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$sbsstudent->pro)); ?>" download><span class="fa-fw select-all fas"></span> Student Photo</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/degree/'.$sbsstudent->degreefile)); ?>" download><span class="fa-fw select-all fas"></span> Degree File</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$sbsstudent->nrcf)); ?>" download><span class="fa-fw select-all fas"></span> N.R.C Front Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$sbsstudent->nrcb)); ?>" download><span class="fa-fw select-all fas"></span> N.R.C Back Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$sbsstudent->pay)); ?>" download><span class="fa-fw select-all fas"></span> Payment Screenshot Image</a></li>
      <li><a href="" class="dropdown-item" onclick="printDiv('printableArea')">
      <span class="fa-fw select-all fas"></span> Print or Download</a></li>
      <li><a class="dropdown-item" href="<?php echo e(route('sbsbackend.edit',$sbsstudent->id)); ?>"><span class="fa-fw select-all fas"></span> Edit Student</a></li>
    </ul>
  </div>
</div>

            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive" id="printableArea">
                <table class="table table-lg">
                               
<tbody>
    <tr style="color:#000;">
     <th colspan="3">
     <img src="<?php echo e(asset('adminDemo/images/logo/4.png')); ?>" alt="Logo" class="img-fluid" style="width: 146px;height:65px" srcset="">
     </th>
     <th><img src="<?php echo e(asset('storage/sbsmbaimages/sbsimages/'.$sbsstudent->pro)); ?>" style="width:100px;height:100px"></th>
    </tr>

    <tr>
     <th colspan="4" style="color:#000;"><?php echo e($sbsstudent->course); ?></th>
    </tr>
    <tr class="table-primary">
     <th colspan="4" style="color:red;"> Personal Information</th>
    </tr>
         
    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Reg Date</th>
    <th class="text-bold-500" >Full Name</th>
    <th class="text-bold-500">Intake</th>
    <th class="text-bold-500">Gender</th>
    </tr> 
    
    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->created_at); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->fullname); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->intake); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->gender); ?></td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Email</th>
    <th class="text-bold-500" >N.R.C</th>
    <th class="text-bold-500">Phone No:</th>
    <th class="text-bold-500">DOB</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->email); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->nrc); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->stu_ph); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->dob); ?></td>
    </tr>


    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Nationality</th>
    <th class="text-bold-500" >Religion</th>
    <th class="text-bold-500">Father</th>
    <th class="text-bold-500">Address</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->nation); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->relig); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->father); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->address); ?></td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Occupation</th>
    <th class="text-bold-500" >Company Name</th>
    <th class="text-bold-500">Company Phone</th>
    <th class="text-bold-500"></th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->occupation); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->com_name); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->com_ph); ?></td>
    <td></td>
    </tr>

    <tr class="table-primary">
     <th colspan="4" style="color:red;"> Academic Qualifications</th>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Academic Year</th>
    <th class="text-bold-500" >Universty</th>
    <th class="text-bold-500">Degree</th>
    <th class="text-bold-500">Major</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->ad_year); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->university); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->degree); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->major); ?></td>
    </tr>
    
    <tr style="color:#000;">
    <th class="text-bold-500">Qualification Year</th>
    <th class="text-bold-500" >Location</th>
    <th class="text-bold-500">Certificate</th>
    <th class="text-bold-500">Date</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->other_ql); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->location); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->certificate); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->ad_date); ?></td>
    </tr>

    <tr>
     <th class="table-primary" colspan="4" style="color:red;"> Emergency Contact Information Please provide name, relationship and phone number of an emergency</th>
    </tr>

    <tr style="color:#000;">
    <th class="text-bold-500">Name</th>
    <th class="text-bold-500" >Relationship</th>
    <th class="text-bold-500">Phone Number</th>
    <th class="text-bold-500"></th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($sbsstudent->em_name); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->em_rela); ?></td>
    <td class="text-bold-500"><?php echo e($sbsstudent->em_comph); ?></td>
    <td class="text-bold-500"></td>
    </tr>
</tbody>
</table>
                </div>
            </div>
            </div>

  

    </section>
    <!-- Basic Tables end -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/sbsbackend/detail.blade.php ENDPATH**/ ?>