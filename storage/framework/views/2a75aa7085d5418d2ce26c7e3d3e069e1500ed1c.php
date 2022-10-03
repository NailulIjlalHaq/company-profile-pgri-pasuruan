
<?php $__env->startSection('content'); ?>
    <div class="detail-artikel-wrapper__header mt-top">
        <div class="detail-artikel-wrapper__header-wrapper">
            <p>
                <ion-icon onclick="location.href='<?php echo e(route('feHome')); ?>'" name="arrow-back-outline"></ion-icon>
            </p>
            <p>Sambutan Kepala PGRI Kab Pasuruan</p>
        </div>
    </div>
    <div class="about__sejarah">
        <div class="about__sejarah-wrapper">
            <div class="about__sejarah-wrapper-img">
            </div>
            <div class="about__sejarah-wrapper-info">
                <p>
                    <?php echo e(strip_tags($sambutan->content)); ?>

                </p>
            </div>
            <div class="about__sejarah-wrapper-btn">
                <div class="share-btn">
                    <div class="share-btn-wrapper">
                        <div class="share-btn-wrapper-btn share-wa">
                            <ion-icon name="logo-whatsapp"></ion-icon>whatsapp
                        </div>
                        <div class="share-btn-wrapper-btn cp-link">
                            <ion-icon name="link-outline"></ion-icon>
                            <p class="cp-link-text"></p>
                            <div class="alert-cp-link">Link Di Copy</div>
                        </div>
                    </div>
                    <div class="share-btn-share">
                        <ion-icon name="share-social"></ion-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/detailSambutan.blade.php ENDPATH**/ ?>