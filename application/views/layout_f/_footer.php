<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="widget">
                <h3 class="mb-4"><?= $konfig->judul_website ?></h3>
                <p><?= $konfig->profil_website ?></p>
            </div> <!-- /.widget -->
            <div class="social-links">
                <h5>Social</h5>
                <a href="<?= $konfig->facebook ?>" style="color:blue"><i class="fab fa-facebook-f"></i></a>
                <a href="<?= $konfig->email ?>" style="color:red"><i class="far fa-envelope"></i></a>
                <a href="<?= $konfig->instagram ?>" style="color:orange"><i class="fab fa-instagram"></i></a>
                <a href="<?= $konfig->no_wa ?>" style="color:green"><i class="fab fa-whatsapp"></i></a>
            </div>
            <style>
                .social-links a {
                    font-size: 20px;
                    width: 50px;
                }
            </style>
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4 ps-lg-5">
            <div class="widget">
                <h3 class="mb-4">Company</h3>
                <ul class="list-unstyled float-start links">
                    <?php foreach ($kategori as $iyh) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $iyh['id_kategori']) ?>"><?= $iyh['nama_kategori'] ?></a>
                        </li>
                    <?php } ?>

                </ul>
            </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
    </div> <!-- /.row -->

    <div class="row mt-5">
        <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">
                    <?= $this->session->userdata('username') ?></a> Distributed by <a href="https://themewagon.com"><?= $konfig->judul_website ?></a>
                <!-- License information: https://untree.co/license/ -->
            </p>
        </div>
    </div>
</div>