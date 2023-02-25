
<?php $__env->startSection('title', 'Liste des Étudiants'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one text-white">
                <?php echo e(config('app.name')); ?>

            </h1>

            <div class="row">

                <div class="col-md-12 d-flex justify-content-end">
                    <a href="<?php echo e(route('create')); ?>" class="btn btn-outline-info">
                        Ajouter un étudiant
                    </a>
                </div>
            </div>

        </div>


        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section text-white">Liste des Étudiants</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 border-thick-rounded p-4">
                    <div class="table-wrap ">
                        <div class="d-flex justify-content-center">
                            <?php echo e($etudiants); ?>

                        </div>
                        <table class="table text-white">
                            <thead>
                                <tr class="text-white">
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Birthday</th>
                                    <th>City Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th><a href="<?php echo e(route('show', $etudiant->id)); ?>" class="text-decoration-none text-warning"><?php echo e($etudiant->name); ?></a></th>
                                    <td><?php echo e($etudiant->address); ?></td>
                                    <td><?php echo e($etudiant->email); ?></td>
                                    <td><?php echo e($etudiant->phone); ?></td>
                                    <td><?php echo e($etudiant->birthday); ?></td>
                                    <td><?php echo e($etudiant->etudiantHasVille->name); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit', $etudiant->id)); ?>" class="btn btn-outline-warning mt-1"> Modifier </a>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td class="text-danger">Aucun étudiant incscrit au registre</td>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            <?php echo e($etudiants); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP1\Maisonneuve2295379\resources\views/index.blade.php ENDPATH**/ ?>