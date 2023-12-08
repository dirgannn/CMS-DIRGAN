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
            <h1 style="text-transform:uppercase">WELCOME BRO, <?= $this->session->userdata('username') ?></h1>

        </div>

        <!-- ========== footer start =========== -->
        <footer class="footer">
            <?php include(APPPATH . 'views/layout/_footer.php'); ?>
        </footer>
        <!-- ========== footer end =========== -->
    </main>
    <?php include(APPPATH . 'views/layout/_js.php'); ?>


</body>

</html>