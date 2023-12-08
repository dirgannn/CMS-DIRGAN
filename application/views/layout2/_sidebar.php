<ul id="sidebarnav">
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
    </li>
    <?php $menu =  $this->uri->segment(2); ?>
    <li class="sidebar-item <?php if ($menu == 'home') {
                                echo "active";
                            } ?>">
        <a class="sidebar-link" href="<?= site_url('admin/home') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item <?php if ($menu == 'caraousel') {
                                echo "active";
                            } ?>">
        <a class="sidebar-link" href="<?= site_url('admin/caraousel') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Caraousel</span>
        </a>
    </li>
    <li class="sidebar-item <?php if ($menu == 'kategori') {
                                echo "active";
                            } ?>">
        <a class="sidebar-link" href="<?= site_url('admin/kategori') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-cards"></i>
            </span>
            <span class="hide-menu">Kategori konten</span>
        </a>
    </li>
    <li class="sidebar-item  <?php if ($menu == 'konten') {
                                    echo "active";
                                } ?>">
        <a class="sidebar-link" href="<?= site_url('admin/konten') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-file-description"></i>
            </span>
            <span class="hide-menu">Konten</span>
        </a>
    </li>

    <li class="sidebar-item  <?php if ($menu == 'konfigurasi') {
                                    echo "active";
                                } ?>">
        <?php if ($this->session->userdata('level') === 'Admin') : ?>
        <a class="sidebar-link" href="<?= site_url('admin/konfigurasi') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-login"></i>
            </span>
            <span class="hide-menu">Konfigurasi</span>
        </a>
    </li>
    <li class="sidebar-item <?php if ($menu == 'user') {
                                echo "active";
                            } ?>">
        <a class="sidebar-link" href="<?= site_url('admin/user') ?>" aria-expanded="false">
            <span>
                <i class="ti ti-user-plus"></i>
            </span>
            <span class="hide-menu">User</span>
        </a>
    </li>
</ul>
<?php endif; ?>