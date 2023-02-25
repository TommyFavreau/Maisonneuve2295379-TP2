<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> : <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/LineIcons.2.0.css')); ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>" />

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column">
    <?php $locale = session()->get('locale'); ?>
    <?php $user = Auth::user() ?>


    <!-- Start Header Area -->
    <header class="header navbar-area">
        <!-- Toolbar Start -->
        <div class="toolbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="toolbar-social">
                            <ul>
                                <li><span class="title text-warning"><?php echo app('translator')->get('lang.hello'); ?> <?php if(Auth::check()): ?> <?php echo e(Auth::user()->name); ?> <?php else: ?> <?php echo app('translator')->get('lang.guest'); ?> <?php endif; ?></span></li>
                                <li><a class="" href="<?php echo e(route('lang', 'en')); ?>">EN</a></li>
                                <li><a class="nav-link" href="<?php echo e(route('lang', 'fr')); ?>">FR</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="toolbar-login">
                            <div class="button">
                                <?php if(auth()->guard()->guest()): ?>
                                <a class="btn" href="<?php echo e(route('auth.create')); ?>"><?php echo app('translator')->get('lang.registration'); ?></a>
                                <a class="btn" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('lang.login'); ?></a>
                                <?php else: ?>
                                <a class="nav-link" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('lang.logout'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(asset('assets/images/logo/logo6.svg')); ?>" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto" data-js="nav-bar">
                                    <li class="nav-item"><a class="" data-js="nav-tab" href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('lang.home'); ?></a></li>
                                    <li class="nav-item"><a class="" data-js="nav-tab" href="<?php echo e(route('index')); ?>"><?php echo app('translator')->get('lang.student_list'); ?></a></li>
                                    <li class="nav-item"> <a class="" data-js="nav-tab" href="<?php echo e(route('file.index')); ?>"><?php echo app('translator')->get('lang.files_list'); ?></a>
                                    </li>

                                    <li class="nav-item"> <a class="" data-js="nav-tab" href="<?php echo e(route('blog.index')); ?>"><?php echo app('translator')->get('lang.blog'); ?></a>
                                    </li>
                                    <?php if(Auth::user()): ?>
                                    <li class="nav-item"><a class="" data-js="nav-tab" href="<?php echo e(route('blog.user', $user->id)); ?>"><?php echo app('translator')->get('lang.myblogs'); ?></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <?php echo $__env->yieldContent('content'); ?>


    <footer class="text-white text-center text-lg-start" style="background-color: #141e26;">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row mt-4">
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0 ">
                    <h6 class="text-uppercase mb-4 text-center"><?php echo app('translator')->get('lang.about_college'); ?></h6>

                    <p><?php echo app('translator')->get('lang.college_info_short'); ?></p>
                    <!-- <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti.
                    </p>

                    <p>
                        Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas
                        molestias.
                    </p> -->

                    <div class="toolbar-social mt-4">
                        <ul class="d-flex flex-row">
                            <li><a href="javascript:void(0)"><i class="lni pe-3 lni-facebook-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni px-3 lni-twitter-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni px-3 lni-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni px-3 lni-linkedin-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni px-3 lni-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                    <h6 class="text-uppercase mb-4">Contact</h6>

                    <ul class="fa-ul">
                        <li class="mb-3">
                            <span>Montréal, QC H1X 2A2, CA</span>
                        </li>
                        <li class="mb-3">
                            <span>info@cmaisonneuve.com</span>
                        </li>
                        <li class="mb-3">
                            <span>(514) 254-7131</span>
                        </li>
                        <li class="mb-3">
                            <span>+ 01 234 567 89</span>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0 text-center">
                    <h6 class="text-uppercase mb-4"><?php echo app('translator')->get('lang.open'); ?></h6>

                    <table class="table text-center text-white">
                        <tbody class="font-weight-normal">
                            <tr>
                                <td><?php echo app('translator')->get('lang.weekDays'); ?>:</td>
                                <td>8am - 10pm</td>
                            </tr>
                            <tr>
                                <td><?php echo app('translator')->get('lang.sat'); ?>:</td>
                                <td>8am - 1pm</td>
                            </tr>
                            <tr>
                                <td><?php echo app('translator')->get('lang.sun'); ?>:</td>
                                <td>9am - 1pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 text-22">
        <?php echo e(config('app.name')); ?> © 2023 - <?php echo app('translator')->get('lang.copyright'); ?>
        </div>
        <!-- Copyright -->
    </footer>


</body>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

</html><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/layouts/app.blade.php ENDPATH**/ ?>