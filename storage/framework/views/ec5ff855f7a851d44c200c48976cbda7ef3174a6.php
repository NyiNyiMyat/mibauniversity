  

<?php $__env->startSection('content'); ?>
       
<div class="page-heading">
<h4>Create New Celebration</h4>
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
    <section class="section">
        <form action="<?php echo e(route('celebration.store')); ?>" method="post" enctype="multipart/form-data">
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
                                   
                                    <img src="" id="img3" class="img-fluid">
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
                                        <input type="text" name="name" class="form-control" placeholder="Enter graduation events or student activities and other celebration."
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
                            <input type="text" name="date" class="form-control" placeholder="Enter Date"
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
                            <input type="text" name="time" class="form-control" placeholder="Enter Time"
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
                           
                            <textarea  class="form-control" cols="5" rows="6" name="location"></textarea>
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
                        <textarea id="dark1" cols="50" rows="30" name="description"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-1">
                    <div class="input-group mb-3">
                        <button type="submit"  class="btn btn-primary rounded-pill">Add New</button>
                        &nbsp;  &nbsp;  &nbsp; 
                        <button type="reset"  class="btn btn-primary rounded-pill">Cancel</button>
                    </div>
    
                </div>

    

    </form>
    </section>
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

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\mibauni\resources\views/backend/celebration/create.blade.php ENDPATH**/ ?>