    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?= base_url('iyan/dashboard') ?>" class="brand-link">
            <img src="<?= base_url('/upload/image/config/' . $konfigurasi['logo']) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= $konfigurasi['namaweb']; ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('iyan/dashboard') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('iyan/expertise') ?>" class="nav-link">
                            <i class="nav-icon fas fa-laptop"></i>
                            <p>
                                Expertise
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('iyan/project') ?>" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>
                                Project
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('iyan/biodata') ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Biodata
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>
                                Configuration
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url('iyan/configuration') ?>" class="nav-link">
                                    <i class="fas fa-cog nav-icon"></i>
                                    <p>General Configuration</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('iyan/configuration/logo') ?>" class="nav-link">
                                    <i class="fa fa-image nav-icon"></i>
                                    <p>Logo Configuration</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('iyan/configuration/icon') ?>" class="nav-link">
                                    <i class="fa fa-camera-retro nav-icon"></i>
                                    <p>Icon Configuration</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="<?= base_url('iyan/login/logout') ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo $title ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('iyan/dashboard') ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $jenis ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                            <h3 class="card-title">contoh</h3>
                        </div> -->
                            <!-- /.card-header -->