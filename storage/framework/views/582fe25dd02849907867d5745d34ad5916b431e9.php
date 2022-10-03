
<?php $__env->startSection('content'); ?>
    <div class="px-100 py-50 mt-top title">
        <div class="title__wrapper">
            <div class="title__wrapper--text-1">Visi & Misi</div>
            <div class="title__wrapper--text-2"> PGRI Kab Pasuruan</div>
            <div class="title__wrapper--text-3">
                Problems trying to resolve the conflict between <br />
                the two major realms of Classical physics: Newtonian mechanics
            </div>
        </div>
    </div>

    <div class="about__vm">
        <div class="about__vm--wrapper">
            <div class="about__vm--wrapper__box">
                <div class="about__vm--wrapper__box--title">Visi & Misi</div>
                <div class="about__vm--wrapper__box--text"><?php echo e(strip_tags($vm->content)); ?></div>
            </div>
            
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/profile-visi-misi.blade.php ENDPATH**/ ?>