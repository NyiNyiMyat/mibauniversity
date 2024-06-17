<?php $__env->startSection('content'); ?>
<style>

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center><img src="<?php echo e(asset('images/logo/logo.png')); ?>" class="img-fluid">

                </div>
                <h4 class="mt-3"><center> <?php echo e(__('Sign up for MIBA')); ?></center></h4>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('accountregister')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="<?php echo e(url('/google-login')); ?>" class="form-control btn btn btn-block" style="border:1px solid #000;">
                                    <img src="https://img.icons8.com/color/28/000000/google-logo.png"/> Login with Google</a>

                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="" class="form-control btn btn-primary btn-block">
                                <img src="https://img.icons8.com/color/25/000000/facebook-new.png"/> Login with Facebook</a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <label for="name" class="col-form-label" style="color:#000;"><?php echo e(__('Fullname')); ?></label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" type="text" class="form-control <?php $__errorArgs = ['fullname'];
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
                                <label for="name" class="col-form-label" style="color:#000;"><?php echo e(__('Phone')); ?></label>
                                <input id="name" style="border:1px solid rgb(100, 98, 98);" type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autocomplete="phone" autofocus>

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
                                <label for="email" class="col-form-label" style="color:#000;"><?php echo e(__('Email Address')); ?></label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" class="form-control <?php $__errorArgs = ['email'];
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
                                <label for="password" class="col-form-label" style="color:#000;"><?php echo e(__('Password')); ?></label>
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
                                <label for="password-confirm" class="col-form-label" style="color:#000;"><?php echo e(__('Confirm Password')); ?></label>
                                <input id="password-confirm" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0" style="color: #000;">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn" style="border:1px solid rgb(99, 95, 95);">
                                    <font style="color:000;"><?php echo e(__('Sign Up')); ?></font>
                                </button>&nbsp;&nbsp;
                                Already a member? <a href="<?php echo e(route('login')); ?>" style="text-decoration: none;color:#000"> Sign in</a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    // Check for SweetAlert success message
    document.addEventListener('DOMContentLoaded', function () {
        <?php if(session('sweet_success')): ?>
            Swal.fire({
                title: 'Success!',
                text: '<?php echo e(session('sweet_success')); ?>',
                icon: 'success',
                timer: 3000, // Set the timer to close the alert after 3 seconds
                showConfirmButton: false
            });
        <?php endif; ?>
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\mibauni\resources\views/auth/register.blade.php ENDPATH**/ ?>