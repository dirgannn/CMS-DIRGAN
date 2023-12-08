        <!DOCTYPE html>
        <html lang="en">

        <head>
            <?php include(APPPATH . 'views/layout/_css.php'); ?>


        </head>

        <body>
            <!-- <div id="preloader">
        <div class="spinner"></div>
    </div> -->
            <aside class="sidebar-nav-wrapper">
                <?php include(APPPATH . 'views/layout/_sidebar.php'); ?>

            </aside>
            <div class="overlay"></div>
            <main class="main-wrapper">
                <header class="header">
                    <?php include(APPPATH . 'views/layout/_navbar.php'); ?>

                </header>
                <?php
                if ($this->session->flashdata('tidaksama')) {
                    echo '<div class="alert alert-danger">' . $this->session->flashdata('tidaksama') . '</div>';
                }
                ?>
                <div class="container">
                </div>
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
                <!-- ========== footer start =========== -->
                <footer class="footer">
                    <?php include(APPPATH . 'views/layout/_footer.php'); ?>

                    <!-- end container -->
                </footer>
                <!-- ========== footer end =========== -->
            </main>
            <?php include(APPPATH . 'views/layout/_js.php'); ?>


        </body>

        </html>