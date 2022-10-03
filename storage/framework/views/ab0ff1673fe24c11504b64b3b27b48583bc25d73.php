
<?php $__env->startSection('page', $isEdit?'Edit Galeri':'Tambah Galeri'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form action="<?php echo e($isEdit?route('galeri.update',$post->id_galleries):route('galeri.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if($isEdit): ?>
    <?php echo method_field('PUT'); ?>
    <?php endif; ?>
    <div class="content-wrapper row justify-content-center">
        <div class="col-9">
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
                            <a class="btn btn-danger mr-2" href="<?php echo e(route('galeri.index')); ?>">
                                <i class="fa fa-undo mr-1"> </i> Batalkan
                            </a>
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Postingan
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
                            <?php if(session('error')): ?>
                            <div class="alert alert-warning">
                                <strong>Kesalahan :</strong> <?php echo e(session('error')); ?>

                            </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-8">
                                    <div class="card card-primary ">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Judul Foto</label>
                                                <input type="text" class="form-control <?php echo e($errors->has('name')?'is-invalid':''); ?>" name="name" id="name" value="<?php echo e(isset($post)?$post->name:@old('name')); ?>">
                                                <?php if($errors->has('name')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('name')); ?>

                                                </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea type="text" class="form-control text-left <?php echo e($errors->has('description')?'is-invalid':''); ?>" name="description" id="description" style="white-space:normal" rows="10"><?php echo e(isset($post)?$post->description:@old('description')); ?></textarea>
                                                <?php if($errors->has('description')): ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($errors->first('description')); ?>

                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row mx-2 mt-2">
                                        <label>Foto</label>
                                        <input type="file" class="form-control <?php echo e($errors->has('file')?'is-invalid':''); ?>" name="file" id="file" onchange="readURL(this)">
                                        <?php if($errors->has('file')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('file')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row mx-2 text-center mt-3">
                                        <img src="<?php echo e(isset($post)?asset($post->file):asset('img/insert_image.jpg')); ?>" class="img-thumbnail" id="preview" style="height:150px;width:100%;object-fit:cover;" />
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
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/backend/galeri/form.blade.php ENDPATH**/ ?>