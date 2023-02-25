
<?php $__env->startSection('title', trans('lang.files_modify')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">

                <h1 class="display-one"> <?php echo app('translator')->get('lang.files_modify'); ?> </h1>
                <div class="form-items border-thick-rounded m-3">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>

                        <?php if($locale === "fr"): ?>
                            <div class="mt-3 form-group row">
                                <label class="col-form-label col-sm-2 mt-2" for="name_fr"> <?php echo app('translator')->get('lang.files_name'); ?> </label>
                                <div class="col-sm-10">
                                    <input type="text" id="name_fr" name="name_fr" class="form-control" value="<?php echo e($file->name_fr); ?>" required>
                                </div>
                            </div>
                            <?php if($errors->has('name_fr')): ?>
                                <div class="text-danger mt-2">
                                    <?php echo e($errors->first('name_fr')); ?>

                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="mt-3 form-group row">
                                <label class="col-form-label col-sm-2 mt-2" for="name"> <?php echo app('translator')->get('lang.files_name'); ?> </label>
                                <div class="col-sm-10">
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo e($file->name); ?>" required>
                                </div>
                            </div>
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger mt-2">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <div>
                            <label for="file"><?php echo app('translator')->get('lang.files_file'); ?></label>
                            <input class="btn btn-outline-success m-2 justify-self-end" type="file" name="file" id="file">
                        </div>
                        <?php if($errors->has('file')): ?>
                            <div class="text-danger mt-2">
                                <?php echo e($errors->first('file')); ?>

                            </div>
                        <?php endif; ?>

                        <button class="btn btn-outline-warning m-2 justify-self-end" type="submit"><?php echo app('translator')->get('lang.modify'); ?></button>
                        <a href="<?php echo e(route('file.show', [$file->id])); ?>" class="btn btn-outline-danger m-2 justify-self-end"><?php echo app('translator')->get('lang.cancel'); ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/file/edit.blade.php ENDPATH**/ ?>