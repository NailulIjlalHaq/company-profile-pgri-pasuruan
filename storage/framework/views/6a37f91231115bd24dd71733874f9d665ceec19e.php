
<?php $__env->startSection('content'); ?>
<div class="w-100 d-flex flex-center mt-top bg-grey-blue">
    <div class="home__sambutan">
        <div class="home__sambutan--left">
            <div class="home__sambutan--left-img" style="background: url('<?php echo e(asset($sambutan->cover_img)); ?>')">
            </div>
        </div>
        <div class="home__sambutan--right">
            <div class="card">
                <div class="card__title">
                    <?php echo e($sambutan->title); ?>


                </div>
                <div class="card__desc">
                    <p class="card__desc--text">
                        <?php echo e(strip_tags($sambutan->content)); ?>


                    </p>

                </div>
                <a class="card__btn" href="<?php echo e(route('feProfil', $sambutan->id_pages)); ?>">Lebih Lanjut
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="artikel">
    <div class="artikel__wrapper">

        <div class="artikel__wrapper--header">

            <div class="artikel__wrapper--header__title">
                <p>Daftar Berita</p>
                <p>Terdapat <?php echo e($berita->total()); ?> berita yang dimasukkan ke dalam website.</p>
            </div>
        </div>
        <div class="artikel__wrapper--content">
            <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('feDetailBerita', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
                <div class="artikel-container">
                    <div class="artikel-container-box">
                        <div class="artikel-container-box__top">
                            <div class="artikel-container-box__top--img" style="background: url('<?php echo e($item->cover_img); ?>') "></div>
                            <div class="artikel-container-box__top--info">
                                <div class="artikel-container-box__top--info-box">
                                    <div class="artikel-container-box__top--info-box-text">
                                        <div class="artikel-container-box__top--info-box-text-tag">
                                            <?php echo e($item->categories->name); ?>

                                        </div>
                                        <div class="artikel-container-box__top--info-box-text-1">
                                            <p><?php echo e($item->title); ?></p>
                                        </div>
                                        <div class="artikel-container-box__top--info-box-text-2">
                                            <p><?php echo e($item->created_at->format('d F Y')); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="artikel-container-box__bot">
                            <div class="artikel-container-box__bot--name">
                                <?php echo e($item->users->name); ?>

                            </div>
                            <div class="artikel-container-box__bot--info">
                                
                                <p>
                                    <ion-icon name="open-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php echo e($berita->links('../vendor/pagination/simple-pgri')); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/pko.blade.php ENDPATH**/ ?>