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
        <div class="container">

            <div class="page-wrapper">
                <div class="page-breadcrumb">
                    <div class="row align-content-end">
                        <div class="col-5 ">
                            <h4 class="page-title">Edit User</h4>
                        </div>
                        <div class="col-7 align-self-center">
                            <div class="d-flex align-items-center justify-content-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">User</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-body">
                    <form action="<?= site_url('admin/user/update/' . $user['id_user']) ?>" method="post">
                        <div class="mb-3">

                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="recipient-name"
                                value="<?= $user['username'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="recipient-name"
                                value="<?= $user['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="recipient-name"
                                value="<?= $user['password'] ?>">
                        </div>
                        <div class="row mb-3">
                            <label class="col-form-label">Level</label>
                            <div class="col-sm-10">
                                <select name="level" class="form-control">
                                    <option value="Admin" <?php echo ($user['level'] == 'Admin') ? 'selected' : ''; ?>>
                                        Admin
                                    </option>
                                    <option value="Kontributor"
                                        <?php echo ($user['level'] == 'Kontributor') ? 'selected' : ''; ?>> Kontributor
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
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