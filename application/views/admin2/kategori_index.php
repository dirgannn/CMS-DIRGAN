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
                <button type="button" id="eakk" class="btn m-1 btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Kategori</button>
                <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama kategori</label>
                                        <input type="text" name="nama_kategori" class="form-control" id="recipient-name"
                                            required>
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
                        if ($this->session->flashdata('tidaksama')) {
                            echo $this->session->flashdata('tidaksama') . '</div>';
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
                                                    <button class="text-danger" style="border:none;margin-right:10px">
                                                        <a style="color: red; text-decoration: none;"
                                                            href="<?php echo site_url('admin/kategori/delete_data/' . $pp['id_kategori']) ?>"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                                            <i class="fas fa-trash custom-icon"></i>
                                                        </a>
                                                    </button>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editkategori<?= $pp['id_kategori']; ?>"
                                                        data-bs-whatever="@fat" style="border:none;">
                                                        <i class="far fa-edit custom-icon"></i>
                                                    </button>

                                                    <div class="modal fade mt-0"
                                                        id="editkategori<?= $pp['id_kategori']; ?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Edit Kategori</h5>

                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="<?= site_url('admin/kategori/update/' . $pp['id_kategori']) ?>"
                                                                        method="post">
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Nama
                                                                                kategori</label>
                                                                            <input type="hidden" name="id_kategori"
                                                                                value="<?= $pp['id_kategori'] ?>">


                                                                            <input type="text" name="nama_kategori"
                                                                                class="form-control" id="recipient-name"
                                                                                required
                                                                                value="<?= $pp['nama_kategori'] ?>">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Send
                                                                                message</button>
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
        </div>
    </div>
    <?php include(APPPATH . 'views/layout2/_js.php'); ?>

</body>

</html>