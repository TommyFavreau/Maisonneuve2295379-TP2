
<?php $__env->startSection('title', trans('lang.login')); ?>
<?php $__env->startSection('content'); ?>
<main class="login-form flex-grow">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-4">
                <div class="card">
                    <h3 class="card-header text-center text-dark">
                        <?php echo app('translator')->get('lang.login'); ?>
                    </h3>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong> <?php echo e(session('success')); ?></strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
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

                    <div class="card-body">
                        <form action="<?php echo e(route('user.auth')); ?>" method="post">
                            <?php echo csrf_field(); ?>
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

                            <div class="my-3">
                                <a href="<?php echo e(route('new.pass')); ?>"><?php echo app('translator')->get('lang.forgot'); ?></a>
                            </div>

                            <div class="d-grid mx-auto">
                                <input type="submit" value="<?php echo app('translator')->get('lang.connect'); ?>" class="btn btn-dark btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/auth/index.blade.php ENDPATH**/ ?>