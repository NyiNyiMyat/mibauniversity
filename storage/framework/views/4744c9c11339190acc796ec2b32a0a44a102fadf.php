  

<?php $__env->startSection('content'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                 
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('certificatebackend.index')); ?>">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Certificate Student Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
            <?php echo e($certificate->type); ?><br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-primary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" href="<?php echo e(route('certificatebackend.create')); ?>"><span class="fa-fw select-all fas"></span> Add New Student</a></li>
      <li><a class="dropdown-item" href="<?php echo e(asset('storage/app/public/certiimages/'.$certificate->pro)); ?>" download><span class="fa-fw select-all fas"></span> Student Photo</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/app/public/certiimages/'.$certificate->nrcf)); ?>" download><span class="fa-fw select-all fas"></span> N.R.C Front Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/app/public/certiimages/'.$certificate->nrcb)); ?>" download><span class="fa-fw select-all fas"></span> N.R.C Back Image</a></li>
    <li><a class="dropdown-item" href="<?php echo e(asset('storage/app/public/certiimages/'.$certificate->pay)); ?>" download><span class="fa-fw select-all fas"></span> Payment Screenshot Image</a></li>
      <li><a href="" class="dropdown-item" onclick="printDiv('printableArea')">
      <span class="fa-fw select-all fas"></span> Print or Download</a></li>
      <li><a class="dropdown-item" href="<?php echo e(route('certificatebackend.edit',$certificate->id)); ?>"><span class="fa-fw select-all fas"></span> Edit Student</a></li>
    </ul>
  </div>
</div>
<hr>
<div class="modal fade" id="del" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-body">

        <div class="row">
            <div class="col-md-12 col-12">

                <center>
                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                <p style="color:#000;">Do you want to delete?</p>
                <form action="<?php echo e(route('certificatebackend.destroy',$certificate->id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button id="del" class="btn btn-danger">
                     Yes, delete !</button>
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
                <div class="table-responsive" id="printableArea">
                <table class="table table-lg">
                               
<tbody>
    <tr style="color:#000;">
     <th colspan="3"></th>
     <th><img src="<?php echo e(asset('storage/app/public/certiimages/'.$certificate->pro)); ?>" style="width:100px;height:100px"></th>
    </tr>

    <tr>
    <th><?php echo e($certificate->type); ?></th>
     <th colspan="3" style="color:#000;"><?php echo e($certificate->course); ?></th>
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
    <td class="text-bold-500"><?php echo e($certificate->created_at); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->fullname); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->intake); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->gender); ?></td>
    </tr>

    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Email</th>
    <th class="text-bold-500" >N.R.C</th>
    <th class="text-bold-500">Phone No:</th>
    <th class="text-bold-500">DOB</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($certificate->email); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->nrc); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->stu_ph); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->dob); ?></td>
    </tr>


    <tr class="table-primary" style="color:#000;">
    <th class="text-bold-500">Nationality</th>
    <th class="text-bold-500" >Religion</th>
    <th class="text-bold-500">Father</th>
    <th class="text-bold-500">Address</th>
    </tr> 

    <tr style="color:#000;">
    <td class="text-bold-500"><?php echo e($certificate->nation); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->relig); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->father); ?></td>
    <td class="text-bold-500"><?php echo e($certificate->address); ?></td>
    </tr>

    
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/backend/certificatebackend/detail.blade.php ENDPATH**/ ?>