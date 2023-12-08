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
            <button type="button" id="eakk" class="btn m-1 btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Konten</button>
            <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('admin/konten/simpan') ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Judul</label>
                                    <input type="text" name="judul" class="form-control" id="recipient-name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php
                                        $konten = array_reverse($konten);

                                        foreach ($kategori as $pp) {
                                        ?>
                                        <option value="<?= $pp['id_kategori'] ?>"><?= $pp['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" id="recipient-name"
                                        accept="image/png, image/jpg" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
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
                    <?php
                    if ($this->session->flashdata('alertt')) {
                        echo $this->session->flashdata('alertt') . '</div>';
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
                                            <h6>JUDUL</h6>
                                        </th>
                                        <th>
                                            <h6>KATEGORI KONTEN</h6>
                                        </th>
                                        <th>
                                            <h6>TANGGAL</h6>
                                        </th>
                                        <th>
                                            <h6>KREATOR</h6>
                                        </th>
                                        <th>
                                            <h6>FOTO</h6>
                                        </th>
                                        <th>
                                            <h6>AKSI</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Urutkan array $konten secara terbalik berdasarkan id_user (misalnya, data baru akan muncul di atas)
                                    $konten = array_reverse($konten);
                                    $no = 1;

                                    foreach ($konten as $pp) {
                                    ?>
                                    <tr>
                                        <td class="min-width">
                                            <?= $no++; ?>
                                        </td>
                                        <td class="min-width">
                                            <?= $pp['judul'] ?>
                                        </td>
                                        <td class="min-width">
                                            <?= $pp['nama_kategori'] ?>
                                        </td>
                                        <td class="min-width">
                                            <?= $pp['tanggal'] ?>
                                        </td>
                                        <td class="min-width">
                                            <?= $pp['username'] ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('assets/upload/konten/' . $pp['foto']) ?>"
                                                target="_blank">
                                                <span class="tf-icons bx bx-search"></span>Lihat foto
                                            </a>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <button class="text-danger"><a style="color: red;"
                                                        href="<?php echo site_url('admin/konten/delete_data/' . $pp['foto']) ?>"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                                        <i class="lni lni-trash-can"></i></a>
                                                </button>
                                                <button type="button" class="text-green" data-bs-toggle="modal"
                                                    data-bs-target="#editKonten<?= $no; ?>" data-bs-whatever="@fat"> <i
                                                        class="mdi mdi-pencil-box-outline"></i></button>
                                                <div class="modal fade mt-0" id="editKonten<?= $no; ?>" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    <?= $pp['judul']; ?></h5>

                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('admin/konten/update') ?>"
                                                                    method="post" enctype="multipart/form-data">
                                                                    <input type="hidden" name="nama_foto"
                                                                        value="<?= $pp['foto'] ?>">
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Judul</label>
                                                                        <input type="text" name="judul"
                                                                            class="form-control" id="recipient-name"
                                                                            value="<?= $pp['judul'] ?>" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Kategori</label>
                                                                        <select name="id_kategori" class="form-control">
                                                                            <?php
                                                                                foreach ($kategori as $ea) {
                                                                                ?>
                                                                            <option <?php if ($ea['id_kategori'] == $pp['id_kategori']) {
                                                                                                echo "selected";
                                                                                            } ?>
                                                                                value="<?= $ea['id_kategori'] ?>">
                                                                                <?= $ea['nama_kategori'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Keterangan</label>
                                                                        <textarea name="keterangan"
                                                                            class="form-control"><?= $pp['keterangan'] ?></textarea>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Foto</label>
                                                                        <input type="file" name="foto"
                                                                            class="form-control" id="recipient-name"
                                                                            accept="image/png, image/jpg" required>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Sendmessage</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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