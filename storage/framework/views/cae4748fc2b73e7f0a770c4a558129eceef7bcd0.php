<?php $__env->startSection('page','Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo e($berita_count); ?> Data</h3>

                            <p>Berita</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="<?php echo e(route('berita.index')); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo e($artikel_count); ?> Data</h3>

                            <p>Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="<?php echo e(route('artikel.index')); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo e($pengumuman_count); ?> Data</h3>

                            <p>Pengumuman</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <a href="<?php echo e(route('artikel.index')); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <h3><?php echo e($galeri_count); ?> Gambar</h3>

                            <p>Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <a href="<?php echo e(route('galeri.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
    </section>
    <!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>