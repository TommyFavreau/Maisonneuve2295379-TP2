
<?php $__env->startSection('title', trans('lang.modify_post')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>
<?php $user = Auth::user() ?>

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one"> <?php echo app('translator')->get('lang.modify_post'); ?> </h1>
                <div class="form-items border-thick-rounded m-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="text-danger"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <form method="post">
                        <?php echo csrf_field(); ?>         
                        <?php echo method_field('put'); ?> 
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-en-tab" data-bs-toggle="tab" data-bs-target="#nav-en" type="button" role="tab" aria-controls="nav-en" aria-selected="true">EN</button>
                                <button class="nav-link" id="nav-fr-tab" data-bs-toggle="tab" data-bs-target="#nav-fr" type="button" role="tab" aria-controls="nav-fr" aria-selected="false">FR</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-en" role="tabpanel" aria-labelledby="nav-en-tab" tabindex="0">
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="title">Title :</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title" name="title" class="form-control" value="<?php echo e($blog->title); ?>">
                                    </div>
                                </div>
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="body">Content :</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="body" name="body" rows="3"><?php echo e($blog->body); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-fr" role="tabpanel" aria-labelledby="nav-fr-tab" tabindex="0">
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="title_fr">Titre :</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="title_fr" name="title_fr" class="form-control" value="<?php echo e($blog->title_fr); ?>">
                                    </div>
                                </div>
                                <div class="mt-3 form-group row">
                                    <label class="col-form-label col-sm-2 mt-2" for="body_fr">Contenu :</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" id="body_fr" name="body_fr" rows="3" ><?php echo e($blog->body_fr); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-button mt-3">
                            <input type="submit" value="<?php echo app('translator')->get('lang.modify'); ?>" class="btn btn-outline-warning">
                            <a href="<?php echo e(route('blog.index')); ?>" class="btn btn-outline-danger m-2 justify-self-end"><?php echo app('translator')->get('lang.cancel'); ?></a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/blog/edit.blade.php ENDPATH**/ ?>