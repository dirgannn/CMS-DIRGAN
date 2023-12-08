<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/layout/_css.php'); ?>

</head>

<body>
    <div id="preloader">
        <div class="spinner"></div>
    </div>
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
            <button type="button" id="eakk" class="btn m-1 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Kategori</button>
            <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">

                                <div class="modal-footer">

                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                    <div class="card-style mb-30">

                        <h6 class="mb-10">Kategori Konten</h6>
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>NO</h6>
                                        </th>
                                        <th>
                                            <h6>NAMA KATEGORI KONTEN</h6>
                                        </th>
                                        <th>
                                            <h6>AKSI</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Urutkan array $kategori secara terbalik berdasarkan id_user (misalnya, data baru akan muncul di atas)
                                    $kategori = array_reverse($kategori);
                                    $no = 1;

                                    foreach ($kategori as $pp) {
                                    ?>
                                        <tr>
                                            <td class="min-width">
                                                <?= $no++; ?>
                                            </td>
                                            <td class="min-width">
                                                <?= $pp['nama_kategori'] ?>
                                            </td>
                                            <td>
                                                <div class="action">
                                                    <button class="text-danger"><a style="color: red;" href="<?php echo site_url('admin/kategori/delete_data/' . $pp['id_kategori']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                                            <i class="lni lni-trash-can"></i></a>
                                                    </button>
                                                    <button class="text-danger"><a style="color: green;" href="<?php echo site_url('admin/kategori/edit/' . $pp['id_kategori']) ?>">
                                                            <i class="mdi mdi-pencil-box-outline"></i></a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <!-- end table -->
                        </div>
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