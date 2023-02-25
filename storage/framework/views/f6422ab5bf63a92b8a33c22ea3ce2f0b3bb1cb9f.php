
<?php $__env->startSection('title', trans('lang.student')); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-info btn-sm mt-4"><?php echo app('translator')->get('lang.back_list'); ?></a>
            <h4 class="display-one mt-2 py-4 text-uppercase">
                <?php echo e($etudiant->name); ?>

            </h4>
            <div class="d-md-inline-flex border-thick-rounded p-4">
                <div class="col-6">
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.student_email'); ?> :</span> <?php echo e($etudiant->email); ?> </p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.student_phone'); ?> : </span> <?php echo e($etudiant->phone); ?> </p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.student_birthday'); ?> : </span> <?php echo e($etudiant->birthday); ?> </p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.student_address'); ?> : </span>  <?php echo e($etudiant->address); ?> </p>
                    <p><span class="text-white-50"><?php echo app('translator')->get('lang.student_city'); ?> : </span> <?php echo e($etudiant->etudiantHasVille->name); ?> </p>
                </div>
                <div class="col-6">
                    <div class="col-6 m-5 d-grid justify-content-center">
                        <a href="<?php echo e(route('etudiant.edit', $etudiant->id)); ?>" class="btn btn-outline-warning mt-1 justify-content-end"><?php echo app('translator')->get('lang.modify'); ?></a>
                    </div>
                    <div class="col-6 m-5 d-flex justify-content-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-danger mt-1 justify-content-end" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <?php echo app('translator')->get('lang.delete'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark-theme p-3">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header no-border justify-content-center">
                <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel"><?php echo app('translator')->get('lang.student_delete'); ?></h1>
            </div>
            <div class="modal-body no-border justify-content-center text-center">
                <?php echo app('translator')->get('lang.student_confirm_delete'); ?>
            </div>
            <div class="modal-footer no-border justify-content-center">
                <button type="button" class="btn btn-outline-info mx-2" data-bs-dismiss="modal"><?php echo app('translator')->get('lang.cancel'); ?></button>
                <form action="<?php echo e(route('etudiant.edit', $etudiant->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input type="submit" class="btn btn-outline-danger mx-2" value="<?php echo app('translator')->get('lang.delete'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/etudiant/show.blade.php ENDPATH**/ ?>