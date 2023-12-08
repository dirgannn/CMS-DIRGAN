<!doctype html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/layout2/_css.php'); ?>


</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
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
                <h1 style="text-transform:uppercase">WELCOME BRO, <?= $this->session->userdata('username') ?></h1>

            </div>
        </div>
    </div>
    <?php include(APPPATH . 'views/layout2/_js.php'); ?>


</body>

</html>