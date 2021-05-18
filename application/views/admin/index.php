<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Include Meta -->
    <?php $this->load->view('admin/partials/meta'); ?>

    <!-- Include Head Css -->
    <?php $this->load->view('admin/partials/head-css.php'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" data-ng-app="mainapp">
    <div class="wrapper">

        <!-- Load Top Bar  -->
        <?php $this->load->view('admin/partials/topbar.php'); ?>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <?php $this->load->view('admin/partials/sidebar'); ?>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" data-ng-view="">

        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <?php $this->load->view('admin/partials/footer.php'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('admin/partials/vendor-scripts.php'); ?>
</body>

</html>