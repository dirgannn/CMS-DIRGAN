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
    <div class="container" style="margin-top:20px">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <?php $firstSlide = true;
                foreach ($caraousel as $pp) { ?>
                <div class="carousel-item <?php if ($firstSlide) {
                                                    echo 'active';
                                                    $firstSlide = false;
                                                } ?>">
                    <img src="<?= base_url('assets/upload/caraousel/' . $pp['foto']) ?>" class="d-block w-100"
                        alt="...">
                </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- End retroy layout blog posts -->

    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <h1 style="display:flex;justify-content:center;align-items:center; margin-bottom:20px">POSTINGAN TERBARU
            </h1>
            <div class="row g-3">
                <?php foreach ($konten as $pp) { ?>
                <div class="col-md-6">
                    <div class="blog-entry">
                        <a href="<?= base_url('home/artikel/' . $pp['slug']) ?>" class="img-link">
                            <img src="<?= base_url('assets/upload/konten/' . $pp['foto']) ?>" alt="Image"
                                class="img-fluid" style=" width:600px; height:357px;">
                        </a>
                        <span class=" date"><?= $pp['tanggal'] ?></span>
                        <h2><a href="<?= base_url('home/artikel/' . $pp['slug']) ?>"><?= $pp['judul'] ?></a></h2>
                        <p>
                            <a href="<?= base_url('home/artikel/' . $pp['slug']) ?>"
                                class="btn btn-sm btn-outline-primary">Baca selengkapnya</a>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <?php include(APPPATH . 'views/layout_f/_footer.php'); ?>

    </footer> <!-- /.site-footer -->

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