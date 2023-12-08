<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<?php include(APPPATH . 'views/layout_f/_css.php'); ?>

</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <?php include(APPPATH . 'views/layout_f/_nav.php'); ?>

    </nav>


    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <div class="post-content-body">
                        <div class="row my-4" style="width:100vw">
                            <div class="col-md-6 mb-4">
                                <img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" alt="Image placeholder" class="img-fluid rounded" style="max-width: 100%; height: auto;">
                                <h6><?= $konten->keterangan ?></h6>

                                <?php if (!empty($konten->penjelasan)) { ?>
                                    <a href="<?= $konten->penjelasan ?>">
                                        <button class="btn btn-primary">penjelasan</button>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>



                    <div class="pt-5">
                        <p></p>
                    </div>

                </div>

                <!-- END main-content -->

                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <!-- Start posts-entry -->
    <!-- End posts-entry -->

    <footer class="site-footer">
        <?php include(APPPATH . 'views/layout_f/_footer.php'); ?>

    </footer>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    <?php include(APPPATH . 'views/layout_f/_js.php'); ?>



</body>

</html>