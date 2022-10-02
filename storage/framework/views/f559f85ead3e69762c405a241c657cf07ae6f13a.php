<?php $__env->startSection('content'); ?>
    <div class="artikel">
        <div class="artikel__wrapper">
            <div class="artikel__wrapper--bg"></div>
            <div class="artikel__wrapper--header">
                <div class="artikel__wrapper--header__search">
                    <form action="<?php echo e(route('feBerita')); ?>" method="get"
                        style="width: 100%; display: flex;justify-content: center;">
                        <div class=" artikel-search">
                            <ion-icon name="search-outline"></ion-icon>
                            <input type="search" name="search" id="search" placeholder="Cari...">
                        </div>
                    </form>
                </div>
                <div class="artikel__wrapper--header__title">
                    <p>Berita</p>
                    <p>Terdapat <?php echo e($berita->total()); ?> berita yang dimasukkan ke dalam website.</p>
                </div>
            </div>
            <div class="artikel__wrapper--content">
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="<?php echo e(route('feDetailBerita', ['id' => $item->id_posts, 'slug' => Str::of($item->title)->slug('-')])); ?>">
                        <div class="artikel-container">
                            <div class="artikel-container-box">
                                <div class="artikel-container-box__top">
                                    <div class="artikel-container-box__top--img"
                                        style="background: url('<?php echo e($item->cover_img); ?>') "></div>
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
<?php $__env->startSection('js'); ?>
    <script></script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/frontend/berita.blade.php ENDPATH**/ ?>