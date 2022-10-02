<?php $__env->startSection('page', isset($kategori)?'Edit Kategori':'Tambah Kategori'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="<?php echo e(isset($kategori)?route('kategori.update',$kategori->id_categories):route('kategori.store')); ?>" method="post">
    <div class="content-wrapper row justify-content-center">
        <div class="col-6">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> <?php echo $__env->yieldContent('page'); ?>
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row d-flex flex-column-reverse">
                        <div class="card">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($kategori)): ?>
                            <?php echo method_field('PUT'); ?>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label>Kategori</label>
                                    <input type="text" class="form-control <?php echo e($errors->has('kategori')?'is-invalid':''); ?>" name="kategori" id="kategori" value="<?php echo e(isset($kategori)?$kategori->name:@old('kategori')); ?>">
                                    <?php if($errors->has('kategori')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('kategori')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a class="btn bg-teal " href="<?php echo e(route('kategori.index')); ?>"><i class="fa fa-undo mr-2"> </i> Kembali</a>
                                <button type="submit" class="btn btn-info ">
                                    <i class="fa fa-save mr-2"></i>Simpan
                                </button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/backend/kategori/form.blade.php ENDPATH**/ ?>