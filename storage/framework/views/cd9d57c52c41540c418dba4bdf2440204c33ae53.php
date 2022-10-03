<?php $__env->startSection('page', isset($user)?'Edit User':'Tambah User'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="<?php echo e(isset($user)?route('user.update',$user->id):route('user.store')); ?>" method="post">
    <div class="content-wrapper row justify-content-center">
        <div class="col-8">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 mt-2">
                            <h1 class="text-dark">
                                <i class="fas fa-books nav-icon text-info"></i> <?php echo $__env->yieldContent('page'); ?>
                            </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6 mt-2 text-right">
                            <a class="btn btn-danger mr-2" href="<?php echo e(route('user.index')); ?>">
                                <i class="fa fa-undo mr-1"> </i> Batalkan
                            </a>
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan
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
                        <div class="card">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($user)): ?>
                            <?php echo method_field('PUT'); ?>
                            <?php endif; ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control <?php echo e($errors->has('nama')?'is-invalid':''); ?>" name="nama" id="nama" value="<?php echo e(isset($user)?$user->name:@old('nama')); ?>">
                                    <?php if($errors->has('nama')): ?>
                                    <div class="invalid-feedback ">
                                        <?php echo e($errors->first('nama')); ?>

                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label>Email</label>
                                        <input type="text" class="form-control <?php echo e($errors->has('email')?'is-invalid':''); ?>" name="email" id="email" value="<?php echo e(isset($user)?$user->email:@old('email')); ?>">
                                        <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col">
                                        <label>Tipe User</label>
                                        <select class="form-control <?php echo e($errors->has('tipe')?'is-invalid':''); ?>" name="tipe" id="tipe">
                                            <option value=""></option>
                                            <option value="<?php echo e(isset($user)?$user->is_admin:'1'); ?>" <?php echo e(isset($user)?($user->is_admin == 1)?'selected':'':''); ?>>Administrator</option>
                                            <option value="<?php echo e(isset($user)?$user->is_admin:'0'); ?>" <?php echo e(isset($user)?($user->is_admin == 0)?'selected':'':''); ?>>Penulis</option>
                                        </select>
                                        <?php if($errors->has('tipe')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('tipe')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Username</label>
                                        <input type="text" class="form-control <?php echo e($errors->has('username')?'is-invalid':''); ?>" name="username" id="username" value="<?php echo e(isset($user)?$user->username:@old('username')); ?>">
                                        <?php if($errors->has('username')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('username')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col">
                                        <label>Password</label>
                                        <input type="password" class="form-control <?php echo e($errors->has('password')?'is-invalid':''); ?>" name="password" id="password" value="<?php echo e(@old('password')); ?>">
                                        <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="alert bg-gray mb-0">
                                    <strong>Catatan : </strong>
                                    <p class="m-0">
                                        Silahkan isi semua data pada form ini untuk menambahkan atau mengedit user sistem
                                    </p>
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
        $('#tipe').select2({
            placeholder: '--Pilih Tipe User--'
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/backend/user/form.blade.php ENDPATH**/ ?>