<?php $__env->startSection('page', 'Pengaturan Website'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form action="<?php echo e(route('pengaturan.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="content-wrapper row justify-content-center">
        <div class="col-8">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="m-0 text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> <?php echo $__env->yieldContent('page'); ?>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6 mt-2 text-right">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Pengaturan
                            </button>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row d-flex flex-column-reverse">
                        <!-- /.row -->
                        <div class="animated fadeInLeft w-100">
                            <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                                <strong>Informasi : </strong> <?php echo e(session('success')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <?php if(session('error')): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert" id="alert">
                                <strong>Peringatan : <?php echo e(session('error')); ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary ">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body form-horizontal">
                                            <?php $__currentLoopData = $configs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <div class="form-group row <?php echo e($config->id_configs % 2 ? 'bg-light py-3':''); ?>">
                                                <label for="label" class="col-sm-2 col-form-label text-capitalize"><?php echo e($config->title); ?></label>
                                                <div class="col">
                                                    <input type="hidden" name="id[<?php echo e($config->id_configs); ?>]" value="<?php echo e($config->id_configs); ?>">
                                                    <input type="text" name="value[<?php echo e($config->id_configs); ?>]" class="form-control" value="<?php echo e($config->data); ?>">
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="card-footer">
                                            <div class="alert bg-gray mb-0">
                                                <strong>Catatan : </strong>
                                                <p class="m-0">
                                                    Silahkan mengisi data pada form pengaturan secara lengkap.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(function() {
        setTimeout(() => {
            $('#alert').alert('close');
        }, 6000);

        $('#deskripsi').summernote({
            height: 400
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/backend/pengaturan/form.blade.php ENDPATH**/ ?>