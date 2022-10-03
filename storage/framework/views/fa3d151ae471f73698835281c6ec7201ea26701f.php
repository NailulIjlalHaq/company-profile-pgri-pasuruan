
<?php $__env->startSection('meta-keyword', $page->title); ?>
<?php $__env->startSection('meta-description', strip_tags($page->content)); ?>
<?php $__env->startSection('social-media'); ?>
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(route('feProfil', $page->id_pages)); ?>">
    <meta property="og:title" content="<?php echo e($page->title); ?>">
    <meta property="og:description" content="<?php echo e(strip_tags($page->content)); ?>">
    <meta property="og:image" content="<?php echo e(url($page->cover_img)); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo e(route('feProfil', $page->id_pages)); ?>">
    <meta property="twitter:title" content="<?php echo e($page->title); ?>">
    <meta property="twitter:description" content="<?php echo e(strip_tags($page->content)); ?>">
    <meta property="twitter:image" content="<?php echo e(url($page->cover_img)); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="about__sejarah mt-top">
        <div class="about__sejarah-wrapper">
            <div class="about__sejarah-wrapper-img" style="background-image: url('<?php echo e(asset($page->cover_img)); ?>')">
            </div>
            <h1 style="margin-bottom: 0px;margin-top: 80px;font-size: 30px;font-weight: bold;"><?php echo e($page->title); ?></h1>
            <div class="about__sejarah-wrapper-info" style="padding: 1rem 10rem;text-align:left;width:100%;">
                <?php echo $page->content; ?>

            </div>
            <div class="about__sejarah-wrapper-btn">
                <div class="share-btn">
                    <div class="share-btn-wrapper">

                        <a class="share-btn-wrapper-btn"
                            href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('feProfil', $page->id_pages)); ?>">
                            <ion-icon name="logo-facebook"></ion-icon>Facebook
                        </a>
                        <div class="share-btn-wrapper-btn">
                            <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                        </div>
                        <a class="share-btn-wrapper-btn"
                            href="https://twitter.com/intent/tweet/?text=<?php echo e($page->title); ?>&url=<?php echo e(route('feProfil', $page->id_pages)); ?>">
                            <ion-icon name="logo-twitter"></ion-icon>twitter
                        </a>
                    </div>
                    <div class="share-btn-share">
                        <ion-icon name="share-social"></ion-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/profile-page.blade.php ENDPATH**/ ?>