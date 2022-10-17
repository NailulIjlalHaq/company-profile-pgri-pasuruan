<?php $__env->startSection('page', 'Kategori'); ?>
<?php $__env->startSection('content'); ?>
<div class="content-wrapper row justify-content-center">
    <div class="col-9">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kategori</h1>
                    </div>
                    <div class="col text-right">
                        <a href="<?php echo e(route('kategori.create')); ?>" type="button" class="btn btn-primary">Tambah
                            Kategori</a>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                            <strong>Peringatan : </strong> <?php echo e(session('error')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-body">
                                <table id="example2" class="table table-striped data-table">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $(function() {
        setTimeout(() => {
            $('#alert').alert('close');
        }, 6000);

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            searching: false,
            ajax: "<?php echo e(route('kategori.index')); ?>",
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'action',
                    name: 'action',
                    width: '25%',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/company-profil/resources/views/backend/kategori/index.blade.php ENDPATH**/ ?>