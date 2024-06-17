  

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
                        <li class="breadcrumb-item active" aria-current="page">Celebration Lists</li>
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
            <div class="card-header">
            Celebration Lists<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-secondary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a href="<?php echo e(route('celebration.create')); ?>">Add New Celebration</a></li>
    </ul>
  </div>
</div>

  
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
                            <th>Celebration Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Banner</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Image 3</th>
                            <th>Image 4</th>
                            <th>Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $celebrates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $celebrate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($celebrate->created_at); ?></td>
                            
                            <td><?php echo e($celebrate->name); ?></td>
                            <td><?php echo e($celebrate->date); ?></td>
                            <td><?php echo e($celebrate->time); ?></td>

                            

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#banner<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#img1<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#img2<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#img3<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#img4<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#des<?php echo e($celebrate->id); ?>">
                            view
                            </a>
                            </td>

                            <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#edit<?php echo e($celebrate->id); ?>">
                            <img src="https://img.icons8.com/external-soft-fill-juicy-fish/20/000000/external-edit-database-and-storage-soft-fill-soft-fill-juicy-fish.png"/>
                             Edit
                            </a>
                            </td>

                            <td> 
                           
                            <?php if( Auth::user()->user_type==1): ?>
                           
                          
                          <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del<?php echo e($celebrate->id); ?>"><img src="https://img.icons8.com/plasticine/25/000000/filled-trash.png"/>
                        Delete
                        </button>

                        
                       <?php else: ?>
                        
                          <p>not allow</p>
                       <?php endif; ?>


                            </td>

                        </tr>
                            
                      
<!------------------------------------------------------------>


<div class="modal fade" id="del<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="<?php echo e(route('celebration.destroy',$celebrate->id)); ?>" method="POST">
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
                          <!-------------------------end details--------------------->


                          <div class="modal fade" id="edit<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   <div class="modal-body" style="color:#000;">

    <form action="<?php echo e(route('celebration.update',$celebrate->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" onchange="upb()" class="form-control" name="banner" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->banner)); ?>" class="img-fluid">
                                <br><br>
                                <img src="" id="imgb" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Imgae One (width:250px;height:190px;)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up1()" name="img1" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image1)); ?>" class="img-fluid" style="width:250px;height:190px;">
                                <img src="" id="img1" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Imgae Two (width:250px;height:190px;)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up2()" name="img2" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image2)); ?>" class="img-fluid" style="width:250px;height:190px;">
                                <img src="" id="img2" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Imgae Three (width:250px;height:190px;)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up3()" name="img3" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image3)); ?>" class="img-fluid" style="width:250px;height:190px;">
                                 <br>   <img src="" id="img3" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Imgae Four (width:250px;height:190px;)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up4()" name="img4" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image4)); ?>" class="img-fluid" style="width:250px;height:190px;">
                                    <img src="" id="img4" class="img-fluid">
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Name</h4>
                        You can create graduation events or student activities and other celebration.
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="color:#000;" >Name</span>
                                        <input type="text" name="name" class="form-control" value="<?php echo e($celebrate->name); ?>" placeholder="Enter graduation events or student activities and other celebration."
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Date</h4>
          
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="color:#000;" >Date</span>
                            <input type="text" name="date" value="<?php echo e($celebrate->date); ?>" class="form-control" placeholder="Enter Date"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="row">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Time</h4>
           
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" style="color:#000;" >Time</span>
                            <input type="text" value="<?php echo e($celebrate->time); ?>" name="time" class="form-control" placeholder="Enter Time"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<div class="row">

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Place / Location</h4>
           
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-1">
                        <div class="input-group mb-3">
                           
                            <textarea  class="form-control" cols="5" rows="6" name="location"><?php echo e($celebrate->location); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Description</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark1" cols="50" rows="40" name="description"><?php echo e($celebrate->description); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-1">
                    <div class="input-group mb-3">
                        <button type="submit"  class="btn btn-primary rounded-pill">Update</button>
                        &nbsp;  &nbsp;  &nbsp; 
                        <button type="reset"  class="btn btn-primary rounded-pill">Cancel</button>
                    </div>
    
                </div>

    

    </form>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->

                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="banner<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Banner</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                              
                                        <div class="modal-body">

                                        <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->banner)); ?>" class="img-fluid" style="width:100%;">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->


                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="img1<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Image one</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                                        <div class="modal-body">

                                        <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image1)); ?>" class="img-fluid" style="width:100%;">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->
   
     

                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="img2<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Image two</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                                        <div class="modal-body">

                                        <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image2)); ?>" class="img-fluid" style="width:100%;">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->


                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="img3<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Image Three</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                                        <div class="modal-body">

                                        <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image3)); ?>" class="img-fluid" style="width:100%;">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->


                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="img4<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Image Four</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                                        <div class="modal-body">

                                        <img src="<?php echo e(asset('storage/celeimages/'.$celebrate->image4)); ?>" class="img-fluid" style="width:100%;">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->


                                  <!-------------------------end details--------------------->


                                  <div class="modal fade" id="des<?php echo e($celebrate->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Description</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
                                        <div class="modal-body">
                                        
                                        <?php echo html_entity_decode($celebrate->description); ?>

                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                          <!-------------------------end details--------------------->


                        <?php ($no++); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                    <tfoot>
                             
                    </tfoot>
                </table>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
</div>
<script>

function upb(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('imgb');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up1(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img1');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up2(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img2');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up3(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img3');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up4(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img4');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/celebration/index.blade.php ENDPATH**/ ?>