
<?php $__env->startSection('title', trans('lang.add_new_file')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>


<div class="form-body flex-grow">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one text-right"> <?php echo app('translator')->get('lang.add_new_file'); ?> </h1>
                <div class="form-items border-thick-rounded m-3">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php if($locale == "fr"): ?>
                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="name_fr"> <?php echo app('translator')->get('lang.files_name'); ?> :</label>
                            <div class="col-sm-9">
                                <input type="text" id="name_fr" name="name_fr" class="form-control m-2 justify-self-end" value="<?php echo e(old('name_fr')); ?>" required>
                            </div>
                        </div>
                        <?php if($errors->has('name_fr')): ?>
                        <div class="text-danger mt-2">
                            <?php echo e($errors->first('name_fr')); ?>

                        </div>
                        <?php endif; ?>
                        <?php else: ?>
                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="name"> <?php echo app('translator')->get('lang.files_name'); ?> :</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="name" class="form-control m-2 justify-self-end " value="<?php echo e(old('name')); ?>" required>
                            </div>
                        </div>
                        <?php if($errors->has('name')): ?>
                        <div class="text-danger mt-2">
                            <?php echo e($errors->first('name')); ?>

                        </div>
                        <?php endif; ?>
                        <?php endif; ?>

                        <div class="mt-3 form-group row align-items-center">
                            <label class="col-form-label col-sm-3" for="file"><?php echo app('translator')->get('lang.files_file'); ?> :</label>
                            <div class="col-sm-9">
                                <input class="btn btn-outline-light m-2 justify-self-end form-control" type="file" name="file" id="file">
                            </div>
                        </div>
                        <?php if($errors->has('file')): ?>
                        <div class="text-danger mt-2">
                            <?php echo e($errors->first('file')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="mt-4">
                            <button class="btn btn-outline-success mr-2 justify-self-end" type="submit"><?php echo app('translator')->get('lang.files_upload'); ?></button>
                            <a href="<?php echo e(route('file.index')); ?>" class="btn btn-outline-danger m-2 justify-self-end"><?php echo app('translator')->get('lang.cancel'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/file/create.blade.php ENDPATH**/ ?>