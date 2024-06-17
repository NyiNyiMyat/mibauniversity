  

<?php $__env->startSection('content'); ?>
       
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('courses.index')); ?>">Courses</a></li>
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
    <section class="section">
        <form action="<?php echo e(route('courses.update',$course->id)); ?>" method="post" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Banner (5288x838)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" onchange="up1()" class="form-control" name="banner" value="" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                   
                                <img src="<?php echo e(asset('storage/app/public/courseimg/courseBanner/'.$course->banner)); ?>" id="img1" class="img-fluid">
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
                        <h4 class="card-title">Course Tumbnail (1800x1200)</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" onchange="up2()" name="tumbnail" id="inputGroupFile01">
                                        </div>

                                    </div>

                                   
                                </div>

                                <div class="col-md-6 mb-1">
                                   
                                   <img src="<?php echo e(asset('storage/app/public/courseimg/courseTumb/'.$course->tumbnail)); ?>" id="img2" class="img-fluid">
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
                        <h4 class="card-title">Course Category</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                  <font style="color:#000;"><b><?php echo e($course->category); ?></b></font><br><br>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01" style="color:#000;">Categories
                                    </label>
                                        <select class="form-select" name="category" id="inputGroupSelect01">
                                        
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($category->category); ?>"><?php echo e($category->category); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Type</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                <font style="color:#000;"><b><?php echo e($course->coursetype); ?></b></font><br><br>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01" style="color:#000;">Course Types</label>
                                        <select class="form-select" name="coursetype" id="inputGroupSelect01">
                                            <?php $__currentLoopData = $coursetype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($type->coursetype); ?>"><?php echo e($type->coursetype); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Name</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="color:#000;" >Course Name</span>
                                        <input type="text" name="coursename" class="form-control" placeholder="Enter Course Name"
                                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo e($course->coursename); ?>">
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
                        <h4 class="card-title">Course Description 1</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark1" cols="30" rows="10" name="description1" ><?php echo e($course->description1); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 2</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark2" cols="30" rows="10" name="description2"><?php echo e($course->description2); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 3</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark3" cols="30" rows="10" name="description3"><?php echo e($course->description3); ?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Description 4</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark4" cols="30" rows="10" name="description4"><?php echo e($course->description4); ?></textarea>
                    </div>
                </div>

                <div class="col-lg-6 mb-1">
                    <div class="input-group mb-3">
                        <button type="submit"  class="btn btn-primary rounded-pill">Update</button>
                        &nbsp;  &nbsp;  &nbsp; 
                        <button type="reset"  class="btn btn-primary rounded-pill">Cancel</button>
                    </div>
    
                </div>
            </div>
        </div>

    </form>
    </section>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u389310514/domains/ppbsmyanmar.com/public_html/resources/views/backend/courses/edit.blade.php ENDPATH**/ ?>