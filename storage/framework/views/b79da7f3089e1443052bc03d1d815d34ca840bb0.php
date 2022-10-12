<?php $__env->startSection('content'); ?>
    <div class="not-found mt-top">
        <div class="not-found__wrapper">
            <div class="not-found__wrapper--img">
                <img src=<?php echo e(asset('./frontend/assets/img/404.svg')); ?> alt="">
            </div>
            <div class="not-found__wrapper--text">
                <p>
                    OOOPS ! PAGE NOT FOUND
                </p>
                <p>
                    Sorry the page you are looking for does not exist, if you think
                    something is broken, report a problem
                </p>
            </div>
            <div class="not-found__wrapper--btn">
                <button onclick="location.href='/'">Kembali Ke Beranda</button>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/company-profil/resources/views/errors/404.blade.php ENDPATH**/ ?>