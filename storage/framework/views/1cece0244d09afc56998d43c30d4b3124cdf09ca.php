
<?php $__env->startSection('title', trans('lang.add_student')); ?>
<?php $__env->startSection('content'); ?>

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one"> <?php echo app('translator')->get('lang.add_student'); ?> </h1>
                <div class="form-items border-thick-rounded m-3">
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
                    <form class="" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name"><?php echo app('translator')->get('lang.student_name'); ?></label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name')); ?>" required>
                            </div>
                            <?php if($errors->has('name')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('name')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="address"><?php echo app('translator')->get('lang.student_address'); ?></label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" class="form-control" value="<?php echo e(old('address')); ?>" required>
                            </div>
                            <?php if($errors->has('address')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('address')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="email"><?php echo app('translator')->get('lang.student_email'); ?></label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required>
                            </div>
                            <?php if($errors->has('email')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('email')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="phone"><?php echo app('translator')->get('lang.student_phone'); ?></label>
                            <div class="col-sm-10">
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="<?php echo e(old('phone')); ?>" required>
                            </div>
                            <?php if($errors->has('phone')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('phone')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="birthday"><?php echo app('translator')->get('lang.student_birthday'); ?></label>
                            <div class="col-sm-10">
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="<?php echo e(old('birthday')); ?>" required>
                            </div>
                            <?php if($errors->has('birthday')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('birthday')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id"> <?php echo app('translator')->get('lang.student_city'); ?> </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    <option selected disabled value=""><?php echo app('translator')->get('lang.city_list'); ?></option>
                                    <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php if($errors->has('ville_id')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('ville_id')); ?>

                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="form-button mt-3">
                            <input type="submit" value="<?php echo app('translator')->get('lang.confirm'); ?>" class="btn btn-outline-success">
                            <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-danger m-2 justify-self-end"><?php echo app('translator')->get('lang.cancel'); ?></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/etudiant/create.blade.php ENDPATH**/ ?>