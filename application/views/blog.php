<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(APPPATH . 'views/layout_f/_css.php'); ?>

</head>

<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    <?php include(APPPATH . 'views/layout_f/_nav.php'); ?>

    <!-- Text Header -->


    <main class="main">
        <div class="container">

            <!-- hot-post -->
            <div class="hot-post">
                <div class="row">
                    <div class="col-lg-8 hot-post-left">
                        <div class="post post-thumb">
                            <!-- Carousel di sini -->
                            <div class="carousel-container" style="position: relative;">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php $firstSlide = true;
                                        foreach ($caraousel as $pp) { ?>
                                        <div class="carousel-item <?php if ($firstSlide) {
                                                                            echo 'active';
                                                                            $firstSlide = false;
                                                                        } ?>">
                                            <a href="blog-post.html">
                                                <img src="<?= base_url('assets/upload/caraousel/' . $pp['foto']) ?>" "
                                                    alt=" ...">
                                            </a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Teks di atas carousel -->
                            <div class="post-body" style="margin-top: 93px">
                                <div class="post-category">
                                    <h2 style="    font-size: 15px;
    font-size: 1.3rem; 
    line-height: 1;
    margin: 19px 0 20px;
    display: inline-block;
    text-transform: uppercase;
">POSTINGAN TERBARU</h2>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 hot-post-right" id="myDiv">
                        <style>
                        @media (max-width: 767px) {
                            #myDiv {
                                display: none;
                            }
                        }
                        </style>

                        <?php if (isset($konten[0])) : ?>
                        <div class="post post-thumb">
                            <div class="post-img">
                                <a href="blog-post.html">
                                    <img src="<?= base_url('assets/upload/konten/' . $konten[0]['foto']) ?>" alt="...">
                                </a>
                            </div>
                            <?php endif; ?>
                            <?php if (isset($konten[0])) : ?>
                            <div class="post-body">
                                <div class="post-category" style="margin-top: 12px; margin-bottom: -10px">
                                    <h3
                                        style="text-transform: capitalize; color: #ea2e49 !important; font-weight: bold; font-size: 1em;">
                                        <?= $konten[0]['judul']; ?>
                                    </h3>
                                </div>
                                <h3 class="post-title title-lg">
                                    <p
                                        style="font-family: 'Lato', sans-serif; font-size: 14px; color: #333; line-height: 1.5em; text-align: justify; margin: 0; padding: 0;">
                                        <?php
                                            // Dapatkan isi keterangan
                                            $keterangan = $konten[0]['keterangan'];

                                            // Gunakan fungsi strip_tags untuk menghapus tag HTML dan PHP
                                            $teks_tanpa_tag = strip_tags($keterangan);

                                            // Potong teks menjadi paragraf pertama
                                            $paragraf_pertama = substr($teks_tanpa_tag, 0, strpos($teks_tanpa_tag, '.') + 1);

                                            // Tampilkan paragraf pertama
                                            echo $paragraf_pertama;
                                            ?>
                                    </p>
                                </h3>
                                <ul class="post-meta">
                                    <li style="display: flex;">
                                        <h2
                                            style="font-family: 'Archivo Narrow', sans-serif; font-size: 16px; color: #000; line-height: 4.4em; text-transform: capitalize;">
                                            <i class="fas fa-user"></i> <?= $konten[0]['username'] ?>
                                        </h2>
                                        <h2
                                            style="font-family: 'Archivo Narrow', sans-serif; font-size: 16px; color: #000; line-height: 4.4em;">
                                            <i class="fas fa-clock"></i> <?= $konten[0]['tanggal'] ?>
                                        </h2>

                                        <style>
                                        .post-meta li h2 {
                                            margin: 0 1.7rem 0 0;
                                        }
                                        </style>
                                    </li>
                                </ul>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row">

                <div class="col-lg-8">
                    <!-- recent-posts -->
                    <div class="recent-post">
                        <div class="row mb-15">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <br>
                                    <h3 class="title">Recent Posts</h3>
                                    <hr>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom:20px">
                            <?php foreach ($konten as $pp) { ?>
                            <div class="col-md-6 col-left">
                                <div class="card rounded-0 border-0" style=" box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;">
                                    <a href="blog-post.html" class="post-img">
                                        <img src="<?= base_url('assets/upload/konten/' . $pp['foto']) ?>"
                                            class="card-img-top rounded-0" alt="">
                                    </a>
                                    <div class="card-body"
                                        style="display: flex; align-items: stretch; flex-wrap: wrap; flex-direction: column; justify-content: center;">
                                        <div class="post-category">
                                            <a href=""
                                                style="text-transform: capitalize; color: #ea2e49 !important; font-weight: bold; font-size: 1em; text-transform:uppercase"><?= $pp['judul'] ?></a>
                                        </div>
                                        <a href="blog-post.html">
                                            <?php
                                                // Dapatkan isi keterangan
                                                $keterangan = $pp['keterangan'];

                                                // Gunakan fungsi strip_tags untuk menghapus tag HTML dan PHP
                                                $teks_tanpa_tag = strip_tags($keterangan);

                                                // Potong teks menjadi paragraf pertama
                                                $paragraf_pertama = substr($teks_tanpa_tag, 0, strpos($teks_tanpa_tag, '.') + 1);

                                                // Tampilkan paragraf pertama
                                                echo '<h5 class="card-title" style="font-family: \'Lato\', sans-serif; font-size: 14px; color: #333; line-height: 1.5em; text-align: justify; margin: 0; padding: 0;">' . $paragraf_pertama . '</h5>';
                                                ?>
                                        </a>

                                        <ul class="post-meta">
                                            <br>
                                            <a href="<?= base_url('home/artikel/' . $pp['slug']) ?>"
                                                class="read-more-btn">Baca Selengkapnya</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- end recent-posts -->
                </div>

                <div class="col-lg-4">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <div class="row">
                            <h4 class="title" style="left: 12px; position:relative">Popular Posts</h4>
                            <?php foreach ($konten as $pp) { ?>
                            <div class="col-md-12">
                                <div class="section-title">
                                </div>
                                <ul class="last-posts">
                                    <li class="last-posts-item">
                                        <div class="post-body">
                                            <div class="post-category">
                                                <a href="blog-list.html"
                                                    style=" text-transform:uppercase; color: black;"><?= $pp['judul'] ?></a>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="row">
                            <h4 class="title" style="position:relative; left:12px;">Categories</h4>
                            <?php foreach ($kategori as $iyh) { ?>
                            <div class="col-md-12">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="<?= base_url('home/kategori/' . $iyh['id_kategori']) ?>"
                                            style="text-transform:uppercase"><?= $iyh['nama_kategori'] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Popular Posts</h4>
                    <?php foreach ($konten as $pp) { ?>
                    <ul>
                        <li><a href="#"><?= $pp['judul'] ?></a></li>
                    </ul>
                    <?php } ?>
                </div>
                <div class="footer-col">
                    <h4>KATEGORI</h4>
                    <?php foreach ($kategori as $iyh) { ?>
                    <ul>
                        <li><a href="<?= base_url('home/kategori/' . $iyh['id_kategori']) ?>"
                                style="text-transform:capitalize"><?= $iyh['nama_kategori'] ?></a>
                        </li>
                    </ul>
                    <?php } ?>

                </div>
                <div class="footer-col">
                    <h4>follow kami</h4>
                    <div class="social-links">
                        <a href="<?= $konfig->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= $konfig->email ?>"><i class="far fa-envelope"></i></a>
                        <a href="<?= $konfig->instagram ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $konfig->no_wa ?>"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Menghubungkan Bootstrap JavaScript (jQuery dan Popper.js) versi 4 dari CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    function getCarouselData() {
        return {
            currentIndex: 0,
            images: [
                'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                'https://source.unsplash.com/collection/1346951/800x800?sig=9',
            ],
            increment() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
            },
            decrement() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
            },
        }
    }
    </script>
    <script src="<?= base_url('assets/wm-blog/') ?>node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/wm-blog/') ?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url('assets/wm-blog/') ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/wm-blog/') ?>js/app.js"></script>

</body>

</html>