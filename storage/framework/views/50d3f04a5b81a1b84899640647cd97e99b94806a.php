  

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
                                    <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"><a href="<?php echo e(route('categories.index')); ?>">Course Categories</a></h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($categories->count()); ?></h6>
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
                                    <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">  <a href="<?php echo e(route('type.index')); ?>">Course Types</a></h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($coursetype->count()); ?></h6>
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
                                    <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"><a href="<?php echo e(route('courses.index')); ?>">Course</a></h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($courses->count()); ?></h6>
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
                                    <i class="iconly-boldAdd-User"></i>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold"> <a href="<?php echo e(route('contactUs.index')); ?>">Student Contact Lists</a></h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($contacts->count()); ?></h6>
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
                            <i class="iconly-boldAdd-User"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6 class="text-muted font-semibold"> <a href="<?php echo e(route('enquiry.index')); ?>">Student Enquiry</a></h6>
                            <h6 class="font-extrabold mb-0"><?php echo e($enquiry->count()); ?></h6>
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
                        <li class="breadcrumb-item active" aria-current="page">Course Categories</li>
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
            Course Categories<br>
<hr>
<div class="btn-group">
    <button type="button" class="btn btn-secondary"><span class="fa-fw select-all fas"></span> Action</button>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
      <span class="visually-hidden">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuReference">
      <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Add New Categories</a></li>
    </ul>
  </div>
</div>
   <!--login form Modal -->
   
   <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
   aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-scrollable" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalScrollableTitle">Add New Course Category</h5>
               <button type="button" class="close" data-bs-dismiss="modal"
                   aria-label="Close">
                   <i data-feather="x"></i>
               </button>
           </div>
           <div class="modal-body">
                    <form action="<?php echo e(route('categories.store')); ?>" method="post" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
                   <div class="modal-body">
                       <label style="color:#000">Category: </label>
                       <br><br>
                       <div class="form-group">
                           <input type="text" placeholder="Category"
                               class="form-control" name="category">
                       </div>
                       <br>
                      
                       <div class="form-group">
                       <textarea  class="form-control" cols="30" rows="10" name="description"></textarea>
                       </div>
                       <br>
                       <label style="color:#000">Banner 5288x838: </label>
                       <br><br>
                       <div class="form-group">
                           <input type="file" placeholder="banner"
                               class="form-control" name="banner">
                       </div>
                   
                   </div>
                   
                   <div class="modal-footer">
                       <button type="submit" name="submit">
                           <i class="bx bx-check d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Create</span>
                       </button>

                       <button type="button" class="btn btn-light-secondary"
                           data-bs-dismiss="modal">
                           <i class="bx bx-x d-block d-sm-none"></i>
                           <span class="d-none d-sm-block">Close</span>
                       </button>
                   </div>
               </form>
           </div>

       </div>
   </div>
</div>
<!------------------------------------------------------------>
<hr>
            <div class="card-content">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table" id="table1" style="font-size:15px;color:#000;">
                    <thead>
                        <tr>
                            <!----th><input type="checkbox" id="chkCheckAll"/></th---->
                            <th>No.</th>
                            <th>Record Date:</th>
                            <th>Categories</th>
                            
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($no=1); ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <!---tr id="sid<?php echo e($category->id); ?>">
                            <td>
                        <input type="checkbox" class="checkBoxClass" id="<?php echo e($category->id); ?>" name="ids" value="<?php echo e($category->id); ?>" >
                            
                        </td--->
                            <td><?php echo e($no); ?>.</td>
                            <td><?php echo e($category->created_at); ?></td>
                            
                            <td><?php echo e($category->category); ?></td>
                            
                            <td>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable<?php echo e($category->id); ?>">
                            <img src="https://img.icons8.com/external-soft-fill-juicy-fish/20/000000/external-edit-database-and-storage-soft-fill-soft-fill-juicy-fish.png"/>
                             Edit
                            </a>
                            </td>

                            <td> 
                            <?php if( Auth::user()->user_type==1): ?>
                     <button id="del" class="btn" data-bs-toggle="modal"
                            data-bs-target="#del<?php echo e($category->id); ?>"><img src="https://img.icons8.com/plasticine/25/000000/filled-trash.png"/>
                        Delete
                        </button>

                        <?php else: ?>
                        
                        <p>not allow</p>
                     <?php endif; ?>

                            </td>

                            <div class="modal fade" id="del<?php echo e($category->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                              
                                        <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <center>
                                                    <img src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/52/000000/external-warning-maps-navigation-kmg-design-outline-color-kmg-design.png"/>
                                                <p style="color:#000;">Do you want to delete?</p>
                                                <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="POST">
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
                        <div class="modal fade" id="exampleModalScrollable<?php echo e($category->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add New Course Category</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <i data-feather="x"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                             <form action="<?php echo e(route('categories.update',$category->id)); ?>" method="post" enctype="multipart/form-data">
                                                <?php echo method_field('PUT'); ?>
                                                <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label style="color:#000">Category: </label>
                                                <br><br>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Category"
                                                        class="form-control" name="category" value="<?php echo e($category->category); ?>">
                                                </div>
                                                <br>
                                               
                                                <div class="form-group">
                                                <textarea class="form-control" cols="30" rows="10" name="description"><?php echo e($category->description); ?></textarea>
                                                </div>
                                                <br>
                                                <label style="color:#000">Banner 5288x838: </label>
                                                <br><br>
                                                <div class="form-group">
                                                    <input type="file" placeholder="banner"
                                                        class="form-control" name="banner">
                                                </div>

                                               
                                              
                                         
                
                                              <img src="<?php echo e(asset('storage/app/public/courseBanner/'.$category->banner)); ?>" class="img-fluid" style="width:250px;">
                                             
                                            
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="submit" name="submit">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Update</span>
                                                </button>
                         
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                         
                                </div>
                            </div>
                         </div>
    
<!------------------------------------------------------------>
                          <!-------------------------end details--------------------->
     
                        <?php ($no++); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </tbody>
                    <tfoot>
                        <!----tr>
                            <td>
                                <a href="" class="btn btn-danger" style="width:150px;">
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\mibauni\resources\views/backend/categories/index.blade.php ENDPATH**/ ?>