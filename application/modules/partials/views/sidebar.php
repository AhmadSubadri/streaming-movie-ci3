<aside class="left-sidebar" style="background-image: url(<?= base_url() ?>assets/img/hero-bg.png);">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="<?= site_url('dashboard'); ?>" class="text-nowrap logo-img">
                <img src="<?= base_url(); ?>assets/dashboard/images/logos/dark-logo.svg" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('dashboard') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Beranda</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Component Video In.</span>
                </li>
                <li class="sidebar-item dropdown">
                    <a class="sidebar-link nav-link dropdown-toggle" href="javascript:void(0)" id="dropmenu" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-components"></i> Content Interface</a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="dropmenu">
                        <div class="message-body">
                            <a class="sidebar-link dropdown-item" href="<?= site_url('data-category') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category-2"></i>
                                </span>
                                <span class="hide-menu">Data Category</span>
                            </a>
                            <a class="sidebar-link dropdown-item" href="<?= site_url('data-video') ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-youtube-kids"></i>
                                </span>
                                <span class="hide-menu">Data Video</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('gejala') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Data Gejala</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('bobot') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-ruler-off"></i>
                        </span>
                        <span class="hide-menu">Bobot</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('pasien') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">Riwayat Pasien</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?= site_url('admin') ?>" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-plus"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>