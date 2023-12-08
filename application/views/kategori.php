<!doctype html>
<html lang="en">

<head>
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

    <!-- Start retroy layout blog posts -->
    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row g-3">

                <div class="col-md-9 order-md-2">
                    <div class="row g-3">
                        <?php foreach ($konten as $pp) { ?>

                            <div class="col-md-6">
                                <div class="blog-entry">
                                    <a href="single.html" class="img-link">
                                        <img src="<?= base_url('assets/upload/konten/' . $pp['foto']) ?>" alt="Image" class="img-fluid">
                                    </a>
                                    <span class="date"><?= $pp['tanggal'] ?></span>
                                    <h2><a href="<?= base_url('home/kategori/' . $iyh['id_kategori']) ?>"><?= $pp['judul'] ?>
                                            </p>
                                            <p><a href="<?= base_url('home/artikel/' . $pp['slug']) ?>" class="btn btn-sm btn-outline-primary">Baca
                                                    selengkapnya</a>
                                            </p>
                                </div>
                            </div>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </section>
    <footer class="site-footer">
        <?php include(APPPATH . 'views/layout_f/_footer.php'); ?>

    </footer><!-- /.site-footer -->

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