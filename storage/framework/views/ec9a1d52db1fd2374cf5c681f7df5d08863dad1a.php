<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <img src="<?php echo e(asset('images/banner/regi.png')); ?>" class="img-fluid">
                    <?php echo e(__('Login')); ?>

                </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <h4 class="mt-3"><center> <?php echo e(__('Sign in to PPBS')); ?></center></h4>
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
                            <label for="email" class="col-form-label" style="color:#000"><?php echo e(__('Email Address')); ?></label>
                                <input id="email" style="border:1px solid rgb(100, 98, 98);" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

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

                        <div class="row mb-2">
                        <div class="col-md-3"></div>
                            

                            <div class="col-md-6">
                                <label for="password" class="col-form-label text-md-end" style="color:#000"><?php echo e(__('Password')); ?></label>
                                <input id="password" style="border:1px solid rgb(100, 98, 98);" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

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

                        <div class="row mb-2">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" style="border:1px solid rgb(100, 98, 98);" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember" style="color:#000">
                                        <?php echo e(__('Keep me signed in')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Sign in')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>" style="text-decoration: none;color:#000">
                                        <?php echo e(__('Forgot Password?')); ?>

                                    </a>
                                <?php endif; ?><br><br>
                            <font style="color: #000;">Not a member? &nbsp;
                                <a href="<?php echo e(route('register')); ?>" style="text-decoration: none;color:#000"> Register</a>
                            </font>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/auth/login.blade.php ENDPATH**/ ?>