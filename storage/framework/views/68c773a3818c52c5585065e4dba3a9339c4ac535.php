
<?php $__env->startSection('title', trans('lang.post')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>
<?php $user = Auth::user() ?>

<div class="container flex-grow">
    <div class="row">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="text-danger"><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="col-12 pt-2">
            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-outline-info btn-sm mt-4"><?php echo app('translator')->get('lang.back_list'); ?></a>
            <?php if($locale == "fr"): ?>
            <h4 class="display-one mt-5 py-4 text-uppercase"><?php if(!$blog->title_fr): ?> <?php echo e($blog->title); ?> <?php else: ?> <?php echo e($blog->title_fr); ?> <?php endif; ?> </h4>
            <?php else: ?>
            <h4 class="display-one mt-5 py-4 text-uppercase"><?php if(!$blog->title): ?> <?php echo e($blog->title_fr); ?> <?php else: ?> <?php echo e($blog->title); ?> <?php endif; ?> </h4>
            <?php endif; ?>
            <div class="d-flex flex-column border-thick-rounded p-4 mb-5">
                <?php if($locale == "fr"): ?>
                <div class="col-6">
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_title'); ?> :</span><?php if(!$blog->title_fr): ?> <?php echo e($blog->title); ?> <?php else: ?> <?php echo e($blog->title_fr); ?> <?php endif; ?></p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_content'); ?> :</span> <?php if(!$blog->body_fr): ?> <?php echo e($blog->body); ?> <?php else: ?> <?php echo e($blog->body_fr); ?> <?php endif; ?> </p>
                </div>
                <?php else: ?>
                <div class="col-6">
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_title'); ?> :</span> <?php if(!$blog->title): ?> <?php echo e($blog->title_fr); ?> <?php else: ?> <?php echo e($blog->title); ?> <?php endif; ?> </p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_content'); ?> :</span> <?php if(!$blog->body): ?> <?php echo e($blog->body_fr); ?> <?php else: ?> <?php echo e($blog->body); ?> <?php endif; ?> </p>
                </div>
                <?php endif; ?>
                <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_date_create'); ?> : </span> <?php echo e($blog->date); ?> </p>
                <p><span class="text-white-50"><?php echo app('translator')->get('lang.article_author'); ?> : </span> <?php echo e($blog->blogHasUser->name); ?> </p>
            </div>
            <?php if($blog->user_id == $user->id): ?>
            <div class="col-6 my-3">
                <div class="d-flex flex-row mb-5 justify-content-left">
                    <a href="<?php echo e(route('blog.edit', $blog->id)); ?>" class="btn btn-outline-warning m-2 "><?php echo app('translator')->get('lang.modify'); ?></a>
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
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel"><?php echo app('translator')->get('lang.delete_post'); ?></h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                <?php echo app('translator')->get('lang.confirm_delete'); ?>
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal"><?php echo app('translator')->get('lang.cancel'); ?></button>
                <form action="<?php echo e(route('blog.edit', $blog->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" class="btn btn-outline-danger" value="<?php echo app('translator')->get('lang.delete'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/blog/show.blade.php ENDPATH**/ ?>