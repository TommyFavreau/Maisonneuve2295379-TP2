<?php $__env->startSection('title', trans('lang.new-pass')); ?>
<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center text-dark">
                        <?php echo app('translator')->get('lang.new-pass'); ?>
                    </h3>
                    <div class="card-body">
                        <?php if(!$errors->isEmpty()): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>

                        <form action="<?php echo e(route('new.pass')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="<?php echo app('translator')->get('lang.student_email'); ?>" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('email')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="<?php echo app('translator')->get('lang.new_password'); ?>" class="form-control" name="password">
                                <?php if($errors->has('password')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('password')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="<?php echo app('translator')->get('lang.confirm_password'); ?>" class="form-control" name="password_confirmation">
                                <?php if($errors->has('password_confirmation')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('password_confirmation')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="d-grid mx-auto">
                                <input type="submit" value="<?php echo app('translator')->get('lang.save'); ?>" class="btn btn-dark btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/auth/new-password.blade.php ENDPATH**/ ?>