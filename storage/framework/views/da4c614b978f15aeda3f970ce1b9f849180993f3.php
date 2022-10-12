<?php $__env->startSection('page', $isEdit?'Edit Pengumuman':'Tambah Pengumuman'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form action="<?php echo e($isEdit?route('pengumuman.update',$post->id_posts):route('pengumuman.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php if($isEdit): ?>
    <?php echo method_field('PUT'); ?>
    <?php endif; ?>
    <div class="content-wrapper">
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
                        <a class="btn btn-danger mr-2" href="<?php echo e(route('pengumuman.index')); ?>">
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
                            <div class="col-9">
                                <div class="card card-primary ">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control <?php echo e($errors->has('judul')?'is-invalid':''); ?>" name="judul" id="judul" value="<?php echo e(isset($post)?$post->title:old('judul')); ?>">
                                            <?php if($errors->has('judul')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('judul')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Konten</label>
                                            <textarea type="text" class="form-control <?php echo e($errors->has('konten')?'is-invalid':''); ?>" name="konten" id="konten" row="500"><?php echo e(isset($post)?$post->content:@old('konten')); ?></textarea>
                                            <?php if($errors->has('konten')): ?>
                                            <div class="invalid-feedback">
                                                <?php echo e($errors->first('konten')); ?>

                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="row mx-2">
                                    <label>Kata Kunci</label>
                                    <input type="text" class="form-control <?php echo e($errors->has('tag')?'is-invalid':''); ?>" name="tag" id="tag" value="<?php echo e(isset($post)?$post->tag:@old('tag')); ?>">
                                    <?php if($errors->has('tag')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('tag')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row mx-2 mt-2">
                                    <label>Cover Foto</label>
                                    <input type="file" class="form-control <?php echo e($errors->has('cover_img')?'is-invalid':''); ?>" name="cover_img" id="cover_img" onchange="readURL(this)">
                                    <?php if($errors->has('cover_img')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('cover_img')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row mx-2 text-center mt-3">
                                    <img src="<?php echo e(isset($post)?asset($post->cover_img):asset('img/insert_image.jpg')); ?>" class="img-thumbnail" id="preview" style="height:150px;width:100%;object-fit:cover;" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(function() {
        $('#konten').summernote({
            height: 400,
            enterHtml: '<br>',
            callbacks: {
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                    e.preventDefault();

                    // Firefox fix
                    setTimeout(function() {
                        document.execCommand('insertText', false, bufferText);
                    }, 10);
                },
                onMediaDelete: (target) => {
                    console.log(target[0].src);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                        },
                        method: 'POST',
                        url: '<?= route("summernote.delete") ?>',
                        cache: false,
                        data: {
                            src: target[0].src,
                        },
                        success: function(response) {
                            if (resonse.success) {
                                alert("Gambar berhasil dihapus");
                            }
                        }

                    });
                }
            }
        });

        $('#kategori').select2({
            placeholder: '--Pilih Kategori--'
        });
    });

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
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/company-profil/resources/views/backend/pengumuman/form.blade.php ENDPATH**/ ?>