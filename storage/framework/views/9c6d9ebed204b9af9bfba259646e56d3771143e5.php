<?php $__env->startSection('title', trans('lang.home')); ?>
<?php $__env->startSection('content'); ?>
<?php $locale = session()->get('locale'); ?>

<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="about-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s"> <?php echo app('translator')->get('lang.about_college'); ?></span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"> <?php echo app('translator')->get('lang.welcome_campus'); ?> </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo app('translator')->get('lang.college_info'); ?></p>
                        <div class="button wow fadeInUp" data-wow-delay="1s">
                            <a href="" class="btn"><?php echo app('translator')->get('lang.read_more'); ?></a>
                            <a href="https://www.youtube.com/watch?v=7h0ndoYeOCY" target="_blank" class="glightbox video btn"> <?php echo app('translator')->get('lang.play_video'); ?><i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="<?php echo e(asset('assets/images/about/about-img22.png')); ?>" alt="Students and stuff">
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web21647\CadricielWeb\FavreauTommy-TP2\Maisonneuve2295379\resources\views/welcome.blade.php ENDPATH**/ ?>