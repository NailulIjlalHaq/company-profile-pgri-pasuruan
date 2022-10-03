
<?php $__env->startSection('page', 'Profil User'); ?>
<?php $__env->startSection('content'); ?>
<!-- Content Wrapper. Contains page content -->
<form class="form-horizontal" role="form" action="<?php echo e(route('userProfil.update',$user->id)); ?>" method="post">
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
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save mr-1"> </i>
                                Simpan Data
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
                            <div class="card-body form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col">
                                        <input type="text" class="form-control <?php echo e($errors->has('nama')?'is-invalid':''); ?>" name="nama" id="nama" value="<?php echo e(isset($user)?$user->name:''); ?>">
                                        <?php if($errors->has('nama')): ?>
                                        <div class="invalid-feedback ">
                                            <?php echo e($errors->first('nama')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <div class="form-group row bg-light py-3">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col">
                                        <input type="text" class="form-control <?php echo e($errors->has('email')?'is-invalid':''); ?>" name="email" id="email" value="<?php echo e(isset($user)?$user->email:''); ?>">
                                        <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Username</label>
                                    <div class="col">
                                        <input type="text" class="form-control <?php echo e($errors->has('username')?'is-invalid':''); ?>" name="username" id="username" value="<?php echo e(isset($user)?$user->username:''); ?>">
                                        <?php if($errors->has('username')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('username')); ?>

                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row bg-light py-3">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col">
                                        <input type="password" class="form-control <?php echo e($errors->has('password')?'is-invalid':''); ?>" name="password" id="password">
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
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rifaldi\MAGANG\company-profile-pgri-pasuruan\resources\views/backend/user/user_form.blade.php ENDPATH**/ ?>