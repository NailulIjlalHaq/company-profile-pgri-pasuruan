
<?php $__env->startSection('content'); ?>
<div class="alert-news">
    <div class="alert-news-wrapper">
        <div class="alert-news-wrapper-bell">
            <ion-icon name="notifications"></ion-icon>
        </div>
        <div class="alert-news-wrapper-info">
            <div class="alert-news-wrapper-info-text">
                <?php if(count($pengumuman) > 0): ?>
                <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                <div class="alert-item"><strong> <?php echo e($item->title); ?></strong></div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <div class="alert-item"><strong> Belum ada pengumuman yang di fokuskan di website.</strong></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="alert-news-wrapper-close ">
            <ion-icon class="btn-close-alert-news" name="close"></ion-icon>
        </div>
    </div>
</div>
<div class="home">
    <div class="home__news mt-top py-50">
        <div class="home__news--wrapper">
            <?php $__currentLoopData = $beritaAtas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="news-img-box" href="<?php echo e(route('feDetailBerita', ['id' => $atas->id_posts, 'slug' => Str::of($atas->title)->slug('-')])); ?>">

                <div class="news-img" style="background: url('<?php echo e($atas->cover_img); ?>')">
                </div>
                <div class="news-img-text">
                    <div class="news-img-text-tag">
                        <?php echo e($atas->categories->name); ?>

                    </div>
                    <div class="news-img-text-top"><?php echo e($atas->title); ?></div>
                    <div class="news-img-text-bottom">
                        <p><?php echo e($atas->users->name); ?></p>
                        <p>
                            &bull;
                        </p>
                        <p> <?php echo e($atas->created_at->format('d F Y')); ?></p>
                    </div>
                </div>

            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="w-100 d-flex flex-center bg-grey-blue">
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
                    <a class="card__btn" href="<?php echo e(route('feProfil', 1)); ?>">Lebih Lanjut
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home__berita">
        <div class="home__berita--title">
            <div class="home__berita--title-text">Artikel dan Berita</div>
            <div class="home__berita--title__search">
                <ion-icon name="search-outline"></ion-icon>
                <input type="search" placeholder="Cari..." />
            </div>
        </div>
        <div class="home__berita--wrapper">
            <div class="home__berita--wrapper__left">
                <div class="home__berita--wrapper__left--scroll">
                    <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $botArtikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="berita-box" href="<?php echo e(route('feDetailArtikel', ['id' => $botArtikel->id_posts, 'slug' => Str::of($botArtikel->title)->slug('-')])); ?>">
                        <div class="berita-box__left" style="background: url('<?php echo e($botArtikel->cover_img); ?>')">
                        </div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title"><?php echo e($botArtikel->title); ?></div>
                            <div class="berita-box__right--desc"><?php echo e(strip_tags($botArtikel->content)); ?></div>
                            <div class="berita-box__right--bottom">
                                <p><?php echo e($botArtikel->created_at->format('d F Y')); ?></p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="home__berita--wrapper__right">
                <div class="berita__simple">
                    <?php $__currentLoopData = $botBerita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="artikel-container" href="<?php echo e(route('feDetailBerita', ['id' => $bb->id_posts, 'slug' => Str::of($bb->title)->slug('-')])); ?>">
                        <div class="artikel-container-box">
                            <div class="artikel-container-box__top">
                                <div class="artikel-container-box__top--img" style="background: url('<?php echo e($bb->cover_img); ?>') "></div>
                                <div class="artikel-container-box__top--info">
                                    <div class="artikel-container-box__top--info-box">
                                        <div class="artikel-container-box__top--info-box-text">
                                            <div class="artikel-container-box__top--info-box-text-1">
                                                <p><?php echo e($bb->title); ?></p>
                                            </div>
                                            <div class="artikel-container-box__top--info-box-text-2">
                                                <p><?php echo e(strip_tags($bb->content)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="artikel-container-box__bot">

                                <p>
                                    <ion-icon name="share-social"></ion-icon> 300
                                </p>

                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/frontend/home.blade.php ENDPATH**/ ?>