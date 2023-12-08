<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-6">
            <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                    <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg> Menu
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-7 col-6">
            <div class="header-right">
                <!-- profile start -->
                <div class="profile-box ml-15">
                    <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-info">
                            <div class="info">
                                <div class="image">
                                    <img src="assets/images/profile/profile-image.png" alt="" />
                                </div>
                                <div>
                                    <h6 class="fw-500"><?php echo $this->session->userdata('username'); ?></h6>
                                    <p><?php echo $this->session->userdata('level'); ?></p>
                                </div>
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                        <li>
                            <div class="author-info flex items-center !p-1">
                                <div class="image">
                                    <img src="<?= base_url('assets/Adminatorr/') ?>assets/images/profile/profile-image.png"
                                        alt="image">
                                </div>
                                <div class="content">
                                    <h4 class="text-sm"><?php echo $this->session->userdata('username'); ?></h4>
                                    <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                                        href="#">Email@gmail.com</a>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#0">
                                <i class="lni lni-user"></i> View Profile
                            </a>
                        </li>
                        <li>
                            <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?= site_url('admin/auth/logout') ?>"> <i class="lni lni-exit"></i> Sign Out </a>
                        </li>
                    </ul>
                </div>
                <!-- profile end -->
            </div>
        </div>
    </div>
</div>