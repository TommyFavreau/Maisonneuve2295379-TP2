
<?php $__env->startSection('title', trans('lang.article_user_list')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>

<div class="container flex-grow">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one text-white">
            </h1>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-end">
                    <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-outline-info">
                        <?php echo app('translator')->get('lang.write_post'); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white"><?php echo app('translator')->get('lang.article_user_list'); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center m-2">
                            <?php echo e($blogs); ?>

                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th><?php echo app('translator')->get('lang.article_title'); ?></th>
                                    <th><?php echo app('translator')->get('lang.article_content'); ?></th>
                                    <th><?php echo app('translator')->get('lang.article_author'); ?></th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <?php if($locale === "fr"): ?>
                                        <th><a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="text-decoration-none text-warning my-2"><?php if(!$blog->title_fr): ?> <?php echo e($blog->title); ?> <?php else: ?> <?php echo e($blog->title_fr); ?> <?php endif; ?></a></th>
                                        <td class="align-middle"><?php if(!$blog->body_fr): ?> <?php echo e(Str::limit($blog->body, 50)); ?> <?php else: ?> <?php echo e(Str::limit($blog->body_fr, 50)); ?> <?php endif; ?></td>
                                    <?php else: ?>
                                        <th><a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="text-decoration-none text-warning my-2"><?php if(!$blog->title): ?> <?php echo e($blog->title_fr); ?> <?php else: ?> <?php echo e($blog->title); ?> <?php endif; ?></a></th>
                                        <td class="align-middle"><?php if(!$blog->body): ?> <?php echo e(Str::limit($blog->body_fr, 50)); ?> <?php else: ?> <?php echo e(Str::limit($blog->body, 50)); ?> <?php endif; ?></td>
                                    <?php endif; ?>
                                    <td class="align-middle"><?php echo e($blog->blogHasUser->name); ?></td>
                                    <td class="align-middle"><?php echo e($blog->date); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="btn btn-outline-warning mt-1"> <?php echo app('translator')->get('lang.details'); ?> </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td class="text-danger"><?php echo app('translator')->get('lang.article_empty'); ?></td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center m-2">
                            <?php echo e($blogs); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/blog/user.blade.php ENDPATH**/ ?>