
<?php $__env->startSection('title', trans('lang.student_update')); ?>
<?php $__env->startSection('content'); ?>

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one mr-3">
                    <?php echo app('translator')->get('lang.student_update'); ?>
                </h1>

                <div class="form-items border-thick-rounded">
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
                    <form method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name"><?php echo app('translator')->get('lang.student_name'); ?> </label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo e($etudiant->name); ?>" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="address"><?php echo app('translator')->get('lang.student_address'); ?></label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" class="form-control" value="<?php echo e($etudiant->address); ?>" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="email"><?php echo app('translator')->get('lang.student_email'); ?></label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" class="form-control" value="<?php echo e($etudiant->email); ?>" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="phone"><?php echo app('translator')->get('lang.student_phone'); ?></label>
                            <div class="col-sm-10">
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="<?php echo e($etudiant->phone); ?>" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="birthday"><?php echo app('translator')->get('lang.student_birthday'); ?></label>
                            <div class="col-sm-10">
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="<?php echo e($etudiant->birthday); ?>" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id"><?php echo app('translator')->get('lang.student_city'); ?></label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($etudiant->ville_id == $ville->id): ?>
                                    <option value="<?php echo e($ville->id); ?>" selected><?php echo e($ville->name); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->name); ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="users_id" name="users_id" class="form-control mt-3" value="<?php echo e($etudiant->users_id); ?>">
                        <div class="form-button mt-3 my-auto">
                            <input type="submit" value="<?php echo app('translator')->get('lang.update'); ?>" class="btn btn-outline-success">
                            <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-danger m-2 justify-self-end"><?php echo app('translator')->get('lang.cancel'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/etudiant/edit.blade.php ENDPATH**/ ?>