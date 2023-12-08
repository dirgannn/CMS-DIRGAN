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
            <button type="button" id="eakk" class="btn m-1 btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambah Userr</button>
            <div class="modal fade mt-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                    <input type="text" name="nama" class="form-control" id="recipient-name" required>
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
        // Urutkan array $user secara terbalik berdasarkan id_user (misalnya, data baru akan muncul di atas)
        $user = array_reverse($user);

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
                                                <button class="text-danger"><a style="color: red;"
                                                        href="<?php echo site_url('admin/user/delete_data/' . $pp['id_user']) ?>"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                                        <i class="lni lni-trash-can"></i></a>
                                                </button>
                                                <button class="text-danger"><a style="color: green;"
                                                        href="<?php echo site_url('admin/user/edit/' . $pp['id_user']) ?>">
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