<?php $__env->startSection('title', trans('lang.registration')); ?>
<?php $__env->startSection('content'); ?>
<main class="login-form">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center text-dark">
                        <?php echo app('translator')->get('lang.registration'); ?>
                    </h3>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> <?php echo e(session('success')); ?></strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('auth.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="<?php echo app('translator')->get('lang.student_name'); ?>" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                <?php if($errors->has('name')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('name')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" placeholder="<?php echo app('translator')->get('lang.student_email'); ?>" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
                                <?php if($errors->has('email')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('email')); ?>

                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="<?php echo app('translator')->get('lang.password'); ?>" class="form-control" name="password">
                                <?php if($errors->has('password')): ?>
                                    <div class="text-danger mt-2">
                                        <?php echo e($errors->first('password')); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/auth/create.blade.php ENDPATH**/ ?>