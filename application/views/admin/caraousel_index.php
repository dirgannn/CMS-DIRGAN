<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/layout/_css.php'); ?>

</head>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
        <?php include(APPPATH . 'views/layout/_sidebar.php'); ?>

    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        <!-- ========== header start ========== -->
        <header class="header">
            <?php include(APPPATH . 'views/layout/_navbar.php'); ?>

        </header>
        <?php
        if ($this->session->flashdata('success_user')) {
            echo $this->session->flashdata('success_user') . '</div>';
        }
        ?>
        <div class="container">
            <div class="col-12">
                <div class="card card-body">
                    <h4 class="card-title">Default Forms</h4>
                    <h5 class="card-subtitle"> All bootstrap element classies </h5>
                    <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" class="form-horizontal mt-4" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Judul</label>
                            <input type="text" name="judul" placeholder="judul foto" class="form-control" id="recipient-name" required>
                        </div>
                        <div class="form-group">
                            <label>Pilih foto dengan ukuran (1:3)</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card-->
        </div>
        <?php foreach ($caraousel as $pp) { ?>
            <div class="col-md-12 mb-3 mt-3">
                <div class="card h-100">
                    <img src="<?= base_url('assets/upload/caraousel/' . $pp['foto']) ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pp['judul'] ?></h5>
                    <button class="text-danger"><a style="color: red;" href="<?php echo site_url('admin/caraousel/delete_data/' . $pp['foto']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                            <i class="lni lni-trash-can"></i></a>
                    </button>
                </div>
            </div>

        <?php } ?>


        <!-- ========== footer start =========== -->
        <footer class="footer">
            <?php include(APPPATH . 'views/layout/_footer.php'); ?>

        </footer>
        <!-- ========== footer end =========== -->
    </main>

    <?php include(APPPATH . 'views/layout/_js.php'); ?>


</body>

</html>