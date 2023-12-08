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
                    data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Userr</button>
                <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="recipient-name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="recipient-name"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="recipient-name"
                                            required>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-form-label">Level</label>
                                        <div class="col-sm-10">
                                            <select name="level" class="form-control">
                                                <option value="Admin">Admin</option>
                                                <option value="Kontributor">Kontributor</option>
                                            </select>
                                        </div>
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
                        <div class="card-style mb-30">

                            <h6 class="mb-10">Data User</h6>
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6>USERNAME</h6>
                                            </th>
                                            <th>
                                                <h6>NAMA</h6>
                                            </th>
                                            <th>
                                                <h6>LEVEL</h6>
                                            </th>
                                            <th>
                                                <h6>RECENT LOGIN</h6>
                                            </th>
                                            <th>
                                                <h6>AKSI</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Urutkan array $pp secara terbalik berdasarkan id_user (misalnya, data baru akan muncul di atas)
                                        $pp = array_reverse($user);

                                        foreach ($user as $pp) {
                                        ?>
                                        <tr>
                                            <td class="min-width">
                                                <?= $pp['username'] ?>
                                            </td>
                                            <td class="min-width">
                                                <?= $pp['nama'] ?>
                                            </td>
                                            <td class="min-width">
                                                <?= $pp['level'] ?>
                                            </td>
                                            <td class="min-width">
                                                <?= $pp['recent_login'] ?>
                                            </td>
                                            <td>
                                                <div class="action">
                                                    <button class="text-danger" style="border:none;margin-right:10px"><a
                                                            style="color: red;"
                                                            href="<?php echo site_url('admin/user/delete_data/' . $pp['id_user']) ?>"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                                            <i class="fas fa-trash custom-icon"></i></i></a>
                                                    </button>
                                                    <button type="button" data-bs-toggle="modal"
                                                        data-bs-target="#editkategori<?= $pp['id_user']; ?>"
                                                        data-bs-whatever="@fat" style="border:none;">
                                                        <i class="far fa-edit custom-icon"></i>
                                                    </button>

                                                    <div class="modal fade mt-0" id="editkategori<?= $pp['id_user']; ?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Edit user</h5>

                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="<?= site_url('admin/user/update/' . $pp['id_user']) ?>"
                                                                        method="post">
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">Username</label>
                                                                            <input type="hidden" name="id_user"
                                                                                value="<?= $pp['id_user'] ?>">
                                                                            <input type="text" name="username"
                                                                                class="form-control" id="recipient-name"
                                                                                value="<?= $pp['username'] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Nama</label>
                                                                            <input type="text" name="nama"
                                                                                class="form-control" id="recipient-name"
                                                                                value="<?= $pp['nama'] ?>">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="message-text"
                                                                                class="col-form-label">Password</label>
                                                                            <input type="password" name="password"
                                                                                class="form-control" id="recipient-name"
                                                                                value="<?= $pp['password'] ?>">
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label class="col-form-label">Level</label>
                                                                            <div class="col-sm-10">
                                                                                <select name="level"
                                                                                    class="form-control">
                                                                                    <option value="Admin"
                                                                                        <?php echo ($pp['level'] == 'Admin') ? 'selected' : ''; ?>>
                                                                                        Admin
                                                                                    </option>
                                                                                    <option value="Kontributor"
                                                                                        <?php echo ($pp['level'] == 'Kontributor') ? 'selected' : ''; ?>>
                                                                                        Kontributor
                                                                                    </option>
                                                                                </select>
                                                                            </div>
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