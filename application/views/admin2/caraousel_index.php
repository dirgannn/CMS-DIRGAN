<!doctype html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/layout2/_css.php'); ?>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="<?= base_url('admin/home') ?>" class="text-nowrap logo-img">
                        <h2 style="font-weight:bold">Page <?= $this->session->userdata('level') ?></h2>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <?php include(APPPATH . 'views/layout2/_sidebar.php'); ?>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <?php include(APPPATH . 'views/layout2/_navbar.php'); ?>
            </header>
            <!--  Header End -->

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Forms</h5>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if ($this->session->flashdata('success_user')) {
                                    echo '<div class="alert alert-success">' . $this->session->flashdata('success_user') . '</div>';
                                }
                                ?>
                                <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Judul</label>
                                        <input type="text" name="judul" placeholder="judul foto" class="form-control"
                                            id="recipient-name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label>Pilih foto dengan ukuran (1:3)</label>
                                        <input type="file" class="form-control" name="foto">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <?php foreach ($caraousel as $pp) { ?>
                <div class="col-md-4 mb-3 mt-3">
                    <!-- Adjust the column size as needed -->
                    <div class="card h-100">
                        <img src="<?= base_url('assets/upload/caraousel/' . $pp['foto']) ?>" class="card-img-top"
                            style="max-height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pp['judul'] ?></h5>
                            <button class="text-danger"
                                style="background-color: #dc3545; border-color: #dc3545; padding: 5px 10px; border-radius: 5px;">
                                <a style="color: white; text-decoration: none;"
                                    href="<?php echo site_url('admin/caraousel/delete_data/' . $pp['foto']) ?>"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">HAPUS</a>
                            </button>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>


        </div>
    </div>
    <?php include(APPPATH . 'views/layout2/_js.php'); ?>


</body>

</html>