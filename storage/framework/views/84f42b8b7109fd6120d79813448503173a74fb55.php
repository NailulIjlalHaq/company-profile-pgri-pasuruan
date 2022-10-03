
<?php $__env->startSection('content'); ?>
    <div class="error mt-top">
        <div class="error__wrapper">
            <div class="error__wrapper--img">
                <img src=<?php echo e(asset('./frontend/assets/img/500.svg')); ?> alt="">
            </div>
            <div class="error__wrapper--text">
                <p>
                    OOOPS ! SERVER ERROR
                </p>
                <p>
                    Sorry the page you are looking for does not exist, if you think
                    something is broken, report a problem
                </p>
            </div>
            <div class="error__wrapper--btn">
                <button onclick="location.href='/'">Kembali Ke Beranda</button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/errors/500.blade.php ENDPATH**/ ?>