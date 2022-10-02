<?php $__env->startSection('meta-keyword', $item->tag); ?>
<?php $__env->startSection('meta-description', strip_tags($item->content)); ?>
<?php $__env->startSection('social-media'); ?>
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo e(route('feDetailArtikel',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
<meta property="og:title" content="<?php echo e($item->title); ?>">
<meta property="og:description" content="<?php echo e(strip_tags($item->content)); ?>">
<meta property="og:image" content="<?php echo e(url($item->cover_img)); ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo e(route('feDetailArtikel',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
<meta property="twitter:title" content="<?php echo e($item->title); ?>">
<meta property="twitter:description" content="<?php echo e(strip_tags($item->content)); ?>">
<meta property="twitter:image" content="<?php echo e(url($item->cover_img)); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="detail-artikel">
    <div class="detail-artikel-wrapper">
        <div class="detail-artikel-wrapper__header">
            <div class="detail-artikel-wrapper__header-wrapper">
                <p>
                    <ion-icon onclick="location.href='<?php echo e(route('feArtikel')); ?>'" name="arrow-back-outline"></ion-icon>
                </p>
                <p>Detail Artikel</p>
            </div>
        </div>
        <div class="detail-artikel-wrapper__content">
            <div class="detail-artikel-wrapper__content--pri">
                <div class="detail-artikel-info">
                    <div class="detail-artikel-info--title">
                        <p><?php echo e($item->created_at->format('d F Y')); ?></p>
                        <p>
                            <?php echo e($item->title); ?>

                        </p>
                    </div>
                    <div class="detail-artikel-info--img">
                        <div class="detail-artikel-info--img-img" style="background-image: url('<?php echo e(asset($item->cover_img)); ?>')">
                        </div>
                    </div>
                    <div class="detail-artikel-info--info">
                        <p>
                            <?php echo $item->content; ?>

                        </p>

                    </div>
                    <div class="detail-artikel-info--btn">
                        <div class="share-btn">
                            <div class="share-btn-wrapper">
                                <div class="share-btn-wrapper-btn share-wa">
                                    <ion-icon name="logo-whatsapp"></ion-icon>
                                </div>
                                <a class="share-btn-wrapper-btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(route('feDetailArtikel',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                                <a class="share-btn-wrapper-btn" href="https://twitter.com/intent/tweet/?text=<?php echo e($item->title); ?>&url=<?php echo e(route('feDetailArtikel',['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
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
                </div>`
            </div>
            <div class="detail-artikel-wrapper__content--sec">
                <h1 class="detail-artikel-wrapper__content--sec-title">Artikel Lainya</h1>
                <hr class="detail-artikel-wrapper__content--sec-line">
                <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('feDetailArtikel', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
                    <div class="berita-box">
                        <div class="berita-box__left" style="background-image: url('<?php echo e(asset($item->cover_img)); ?>')"></div>
                        <div class="berita-box__right">
                            <div class="berita-box__right--title"><?php echo e($item->title); ?></div>
                            <div class="berita-box__right--desc"><?php echo e(strip_tags($item->content)); ?></div>
                            <div class="berita-box__right--bottom">
                                <p><?php echo e($item->created_at->format("d F Y")); ?></p>
                                <p>
                                    <ion-icon name="arrow-forward-circle-outline"></ion-icon>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <hr class="detail-artikel-wrapper__content--sec-line">
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/frontend/detailArtikel.blade.php ENDPATH**/ ?>