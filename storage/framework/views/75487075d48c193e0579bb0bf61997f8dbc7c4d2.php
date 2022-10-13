<!DOCTYPE html>
<html lang="en">
<meta name="keywords" content="<?php echo $__env->yieldContent('meta-keyword','website PGRI Kab Pasuruan'); ?>">
<meta name="description" content="<?php echo $__env->yieldContent('meta-descriptions','website yang dipergunakan sebagai profil PGRI Kab. Pasuruan Jawa Timur'); ?>">
<meta name="google-site-verification" content="Ek61wzBaTHlRpiOw0MEwasai4GaUpJ3SqO3fzjiXaAM" />
<title>PGRI KAB Pasuruan</title>

<?php echo $__env->yieldContent('social-media'); ?>
<style>
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 1000;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 2rem;
        transition: all 0.3s linear;
    }

    .loader img {
        height: 10rem;
        width: 10rem;
    }

    .loader-line {
        width: 13rem;
        height: 1rem;
        position: relative;
        overflow: hidden;
        background-color: #ddd;

        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }

    .loader-line:before {
        content: "";
        position: absolute;
        left: -50%;
        height: 1rem;
        width: 40%;
        background-color: red;
        -webkit-animation: lineAnim 1s linear infinite;
        -moz-animation: lineAnim 1s linear infinite;
        animation: lineAnim 1s linear infinite;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
    }

    @keyframes  lineAnim {
        0% {
            left: -40%;
        }

        50% {
            left: 20%;
            width: 80%;
        }

        100% {
            left: 100%;
            width: 100%;
        }
    }
</style>
<?php echo $__env->make('frontend.layout/link', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="loader">
        <img src="<?php echo e(asset('./frontend/assets/img/logo.png')); ?>" alt="">
        <div class="loader-line"></div>
    </div>

    <?php echo $__env->make('frontend.layout/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="global-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php if (isset($component)) { $__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Frontend\Footer::class, []); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb)): ?>
<?php $component = $__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb; ?>
<?php unset($__componentOriginalcf1b38e24f6313691245ea870737e9b955d012cb); ?>
<?php endif; ?>
    <script src="<?php echo e(asset('./frontend/js/jquery.js')); ?>"></script>
    <?php echo $__env->make('frontend.layout/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/index.blade.php ENDPATH**/ ?>