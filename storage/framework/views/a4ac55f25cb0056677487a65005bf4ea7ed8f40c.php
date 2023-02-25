
<?php $__env->startSection('title', trans('lang.files_file')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>
<?php $user = Auth::user() ?>

<div class="container flex-grow">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="<?php echo e(route('file.index')); ?>" class="btn btn-outline-info btn-sm mt-4"><?php echo app('translator')->get('lang.back_list'); ?></a>

            <?php if($locale == "fr"): ?>
            <h4 class="display-one mt-5 py-4 text-uppercase"><?php if(!$file->name_fr): ?> <?php echo e($file->name); ?> <?php else: ?> <?php echo e($file->name_fr); ?> <?php endif; ?> </h4>
            <?php else: ?>
            <h4 class="display-one mt-5 py-4 text-uppercase"><?php if(!$file->name): ?> <?php echo e($file->name_fr); ?> <?php else: ?> <?php echo e($file->name); ?> <?php endif; ?> </h4>
            <?php endif; ?>

            <div class="d-inline-flex border-thick-rounded p-4 mb-5">
                <div class="col-12 my-1">
                    <?php if($locale == "fr"): ?>
                    <p class="p-2"><span class="text-white-50"><?php echo app('translator')->get('lang.files_name'); ?> :</span><?php if(!$file->name_fr): ?> <?php echo e($file->name); ?> <?php else: ?> <?php echo e($file->name_fr); ?> <?php endif; ?></p>
                    <?php else: ?>
                    <p class="p-2"><span class="text-white-50"><?php echo app('translator')->get('lang.files_name'); ?> :</span> <?php if(!$file->name): ?> <?php echo e($file->name_fr); ?> <?php else: ?> <?php echo e($file->name); ?> <?php endif; ?> </p>
                    <?php endif; ?>
                    <p class="p-2"><span class="text-white-50"><?php echo app('translator')->get('lang.files_path'); ?> : </span> <?php echo e($file->path); ?> </p>
                    <p class="p-2"><span class="text-white-50"><?php echo app('translator')->get('lang.files_user'); ?> : </span> <?php echo e($file->fileHasUser->name); ?> </p>
                    <p class="p-2"><span class="text-white-50"><?php echo app('translator')->get('lang.files_date'); ?> : </span> <?php echo e($file->created_at); ?> </p>
                </div>

            </div>
            <?php if($file->users_id == $user->id): ?>
            <div class="col-6 row my-3">
                <div class="d-flex flex-row mb-5 justify-content-left">
                    <a href="<?php echo e(route('file.edit', $file->id)); ?>" class="btn btn-outline-warning m-2"><?php echo app('translator')->get('lang.modify'); ?></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger m-2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <?php echo app('translator')->get('lang.delete'); ?>
                    </button>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark-theme p-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header no-border justify-content-center">
                <h1 class="modal-name fs-5 text-uppercase" id="exampleModalLabel"><?php echo app('translator')->get('lang.files_delete'); ?></h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                <?php echo app('translator')->get('lang.files_confirm_delete'); ?>
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal"><?php echo app('translator')->get('lang.cancel'); ?></button>
                <form action="<?php echo e(route('file.edit', $file->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" class="btn btn-outline-danger" value="<?php echo app('translator')->get('lang.delete'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/file/show.blade.php ENDPATH**/ ?>