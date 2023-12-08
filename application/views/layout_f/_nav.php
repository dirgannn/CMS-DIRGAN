<div class="container">
    <div class="menu-bg-wrap">
        <div class="site-navigation">
            <div class="row g-0 align-items-center">
                <div class="col-2">
                    <a href="<?= base_url('assets/blogyy/') ?>index.html"
                        class="logo m-0 float-start"><?= $konfig->judul_website ?><span
                            class="text-primary">.</span></a>
                </div>
                <div class="col-8 text-center">
                    <a href="#"
                        class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                        <span></span>
                    </a>
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                        <li class="active"><a href="<?= base_url('home') ?>">HOME</a></li>
                        <?php foreach ($kategori as $iyh) { ?>
                        <li>
                            <a
                                href="<?= base_url('home/kategori/' . $iyh['id_kategori']) ?>"><?= $iyh['nama_kategori'] ?></a>
                        </li>
                        <?php } ?>
                        <li><a href="<?= base_url('admin/auth') ?>"> <button
                                    style="background-color:red;border-radius:10px;border:none;color:white;padding:5px">LOGIN</button>
                            </a>
                        </li>
                    </ul>

                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>