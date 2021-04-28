<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('') ?>" class="brand-link">
        <!-- <img src="<?= base_url('') ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Sentra HKI UNSOED</span>
    </a><!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('') ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('/pages/home') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>HaKI
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paten
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('') ?>/intellectualproperty/patentlist" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Daftar Paten</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('') ?>/intellectualproperty/inputpatent" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Input Paten</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cipta
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('') ?>/intellectualproperty/copyrightlist" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Daftar Cipta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('') ?>/intellectualproperty/inputcopyright" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Input Cipta</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>/datamaster/facultylist" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fakultas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>/datamaster/academiccommunitylist" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Civitas Akademik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>/datamaster/academicdegreelist" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gelar Akademik</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>