<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img">
                <img src="<?= base_url(); ?>assets/images/users/profile.png" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h5><?= $this->session->userdata('nama_users'); ?></h5>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="mdi mdi-settings"></i>
                    </a>
                    <a href="app-email.html" class="" data-toggle="tooltip" title="Email">
                        <i class="mdi mdi-gmail"></i>
                    </a>
                    <a href="<?= base_url() ?>auth/logout" class="" data-toggle="tooltip" title="Logout">
                        <i class="mdi mdi-power"></i>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="#" class="dropdown-item">
                            <i class="ti-user"></i>
                            My Profile</a>
                        <!-- text-->
                        <a href="#" class="dropdown-item">
                            <i class="ti-wallet"></i>
                            My Balance</a>
                        <!-- text-->
                        <a href="#" class="dropdown-item">
                            <i class="ti-email"></i>
                            Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="#" class="dropdown-item">
                            <i class="ti-settings"></i>
                            Account Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="login.html" class="dropdown-item">
                            <i class="fa fa-power-off"></i>
                            Logout</a>
                        <!-- text-->
                    </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">Fakultas</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="<?= site_url('fakultas/'); ?>" aria-expanded="false">
                        <i class="mdi mdi-database"></i>
                        <span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-school"></i>
                        <span class="hide-menu">Profil Fakultas</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?= site_url('data-camaba'); ?>">Data Camaba</a>
                        </li>
                        <li>
                            <a href="<?= site_url('data-mahasiswa'); ?>">Data Mahasiswa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-newspaper"></i>
                        <span class="hide-menu">Program Studi</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?= site_url('tahun-akademik'); ?>">Tahun Akademik</a>
                        </li>
                        <li>
                            <a href="#" class="has-arrow">Data Dosen</a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a href="<?= site_url('data-matakuliah'); ?>">Data Matakuliah</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('data-kurikulum'); ?>">Data Kurikulum</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('kurikulum-prodi'); ?>">Kurikulum Prodi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-key"></i>
                        <span class="hide-menu">Data Kurikulum</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?= site_url('data-users'); ?>">Data Users</a>
                        </li>
                        <li>
                            <a href="<?= site_url('data-user-level'); ?>">Data Users Level</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-chart-bubble"></i>
                        <span class="hide-menu">Data Mahasiswa</span></a>

                </li>
            </ul>
        </nav>
    </div>
</aside>
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><?php echo $title ?></h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?= base_url(); ?>dashboard">
                        <i class="mdi mdi-home"></i>
                    </a>
                    </a>
                </li>
                <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
        </div>
        <div>
            <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i>
            </button>
        </div>
    </div>