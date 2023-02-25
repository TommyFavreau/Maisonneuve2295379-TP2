
<?php $__env->startSection('title', 'Ajouter un étudiant'); ?>
<?php $__env->startSection('content'); ?>

<div class="form-body">
    <div class="container">
        <div class="form-holder">
            <div class="form-content">
                <h1 class="display-one"> Ajouter un étudiant au registre </h1>
                <div class="form-items border-thick-rounded m-3">

                    <form class="" method="post">
                        <?php echo csrf_field(); ?>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="name">Nom </label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="address">Adresse</label>
                            <div class="col-sm-10">
                                <input type="text" id="address" name="address" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="email">Courriel</label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="phone">Téléphone</label>
                            <div class="col-sm-10">
                                <input type="tel" id="phone" name="phone" class="form-control mt-3" value="" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="birthday">Naissance</label>
                            <div class="col-sm-10">
                                <input type="date" id="birthday" name="birthday" class="form-control mt-3" value="" required>
                            </div>
                        </div>

                        <div class="mt-3 form-group row">
                            <label class="col-form-label col-sm-2 mt-2" for="ville_id"> Ville </label>
                            <div class="col-sm-10">
                                <select class="form-select" name="ville_id" id="ville_id" required>
                                    <option selected disabled value="">Choisir une ville...</option>
                                    <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-button mt-3">
                            <input type="submit" value="Ajouter" class="btn btn-outline-success">
                            <a href="<?php echo e(route('index')); ?>" class="btn btn-outline-danger m-2 justify-self-end">Annuler</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/create.blade.php ENDPATH**/ ?>