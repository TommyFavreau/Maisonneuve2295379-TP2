
<?php $__env->startSection('title', trans('lang.files_list')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>

<div class="container flex-grow">    
    <div class="row">
        
        <div class="col-12 text-center pt-5">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="<?php echo e(route('file.create')); ?>" class="btn btn-outline-info">
                        <?php echo app('translator')->get('lang.add_new_file'); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white"><?php echo app('translator')->get('lang.files_list'); ?></h2>
                </div>
            </div>
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> <?php echo e(session('success')); ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center align-items-center">
                            <?php echo e($files); ?>

                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th><?php echo app('translator')->get('lang.files_name'); ?></th>
                                    <th><?php echo app('translator')->get('lang.files_path'); ?></th>
                                    <th><?php echo app('translator')->get('lang.files_user'); ?></th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <?php if($locale === "fr"): ?>
                                            <th><a href="<?php echo e(route('file.show', $file->id)); ?>" class="text-decoration-none text-warning my-2"><?php if(!$file->name_fr): ?> <?php echo e($file->name); ?> <?php else: ?> <?php echo e($file->name_fr); ?> <?php endif; ?></a></th>
                                        <?php else: ?>
                                            <th><a href="<?php echo e(route('file.show', $file->id)); ?>" class="text-decoration-none text-warning my-2"><?php if(!$file->name): ?> <?php echo e($file->name_fr); ?> <?php else: ?> <?php echo e($file->name); ?> <?php endif; ?></a></th>
                                        <?php endif; ?>
                                        <td class="align-middle"><?php echo e(Str::limit($file->path, 30)); ?></td>
                                        <td class="align-middle"><?php echo e($file->fileHasUser->name); ?></td>
                                        <td class="align-middle"><?php echo e($file->created_at); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('file.show', $file->id)); ?>" class="btn btn-outline-warning mt-1"> <?php echo app('translator')->get('lang.details'); ?> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td class="text-danger"><?php echo app('translator')->get('lang.files_empty'); ?></td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center align-items-center mt-30">
                            <?php echo e($files); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/file/index.blade.php ENDPATH**/ ?>