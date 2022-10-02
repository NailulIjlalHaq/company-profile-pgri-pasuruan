<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PGRI | <?php echo $__env->yieldContent('page'); ?></title>

    <link rel="icon" href="<?php echo e(asset('backend/dist/img/icon.png')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/summernote/summernote-bs4.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <style>
        html,
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Panel Administrasi Web</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <!-- <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li> -->
            <li class="nav-item">
                <div class="btn-group">
                    <a href="<?php echo e(route('logout')); ?>" class="btn btn-secondary bg-gradient">Log Out</a>
                    <button type="button" class="btn btn-secondary bg-gradient dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false" data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo e(route('userProfil.index',auth()->user()->id)); ?>">Ubah Profil User</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.backend.sidebar','data' => []]); ?>
<?php $component->withName('backend.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Content Wrapper. Contains page content -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2022 </strong>
        RPL SMKN 1 Purwosari Pasuruan.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('backend/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(asset('backend/plugins/chart.js/Chart.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('backend/plugins/sparklines/sparkline.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('backend/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('backend/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('backend/plugins/moment/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo e(asset('backend/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('backend/dist/js/adminlte.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('backend/dist/js/pages/dashboard.js')); ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('backend/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
    <?php echo $__env->yieldContent('javascript'); ?>
</body>

</html><?php /**PATH /home/pgripa27/domains/pgripasuruankab.or.id/public_html/profil/resources/views/backend/master/master.blade.php ENDPATH**/ ?>