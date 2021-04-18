<?= $this->extend('template/admin') ?>

<?= $this->section('sidebar') ?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('admin') ?>" class="brand-link">
        <img src="<?= base_url('asset') ?>/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-regular">PPDB SMANESTA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('asset/admin') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <span class="d-block">Administrator</span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <?php if ($title == 'Dashboard | PPDB SMA Negeri 1 Rawamerta') : ?>
                        <a href="<?= base_url('admin') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php else : ?>
                        <a href="<?= base_url('admin') ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    <?php endif; ?>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pendaftar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('pendaftar/tambah-pendaftar') ?>" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Tambah Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('pendaftar/data-pendaftar') ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Data Pendaftar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pendaftar/validasi-pendaftar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Validasi Pendaftar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?= $this->endSection() ?>