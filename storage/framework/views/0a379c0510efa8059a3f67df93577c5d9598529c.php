<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> : <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>" />
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
</head>
<body>
    
<?php $locale = session()->get('locale'); ?>
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hello <?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php else: ?> Guest <?php endif; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php if(auth()->guard()->guest()): ?>
                <a class="nav-link" href="<?php echo e(route('create')); ?>">Registration</a>
                <a class="nav-link" href="">Login</a>
                <!-- <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a> -->
            <?php else: ?>
                <a class="nav-link" href="<?php echo e(route('index')); ?>">Blogs</a>
                <!-- <a class="nav-link" href="<?php echo e(route('logout')); ?>">Logout</a>   -->
            <?php endif; ?>
            <a class="nav-link <?php if($locale=='en'): ?> bg-secondary <?php endif; ?>" href="<?php echo e(route('lang', 'en')); ?>"><i class="flag flag-united-states"></i></a>
            <a class="nav-link <?php echo e($locale =='fr' ? 'bg-secondary' : ''); ?>" href="<?php echo e(route('lang', 'fr')); ?>"><i class="flag flag-france"></i></a>
        </div>
        </div>
    </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/layouts/layout.blade.php ENDPATH**/ ?>