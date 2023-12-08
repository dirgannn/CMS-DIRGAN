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
                <div class="row" style="padding: 5px 94px 12px 30px;">
                    <div class="col-lg-12" style="margin-top: 20px;">
                        <?php
                        if ($this->session->flashdata('edit_sucess')) {
                            echo $this->session->flashdata('edit_sucess') . '</div>';
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('success_user')) {
                            echo $this->session->flashdata('success_user') . '</div>';
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('alertt')) {
                            echo $this->session->flashdata('alertt') . '</div>';
                        }
                        ?>
                        <div class="card-style mb-30">

                            <h6 class="mb-10">Kategori Konten</h6>
                            <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Judul Website</label>
                                    <input type="text" name="judul_website" class="form-control" id="recipient-name"
                                        value="<?= $konfig->judul_website; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Profile</label>
                                    <textarea name="profil_website"
                                        class="form-control"><?= $konfig->profil_website; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" id="recipient-name"
                                        value="<?= $konfig->facebook; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Instagram</label>
                                    <input type="text" name="instagram" class="form-control" id="recipient-name"
                                        value="<?= $konfig->instagram; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="recipient-name"
                                        value="<?= $konfig->email; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="recipient-name"
                                        value="<?= $konfig->alamat; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Whatsapp</label>
                                    <input type="text" name="no_wa" class="form-control" id="recipient-name"
                                        value="<?= $konfig->no_wa; ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>

            </div>
        </div>
    </div>
    <?php include(APPPATH . 'views/layout2/_js.php'); ?>


</body>

</html>