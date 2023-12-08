<!---Thanks to undraw-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Webpage !</title>
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css" />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="<?= base_url('assets/login/') ?>img/pc.svg" />
        </div>
        <div class="login-container">
            <form action="<?= site_url('admin/auth/login') ?>" method="post">
                <img class="avator" src="<?= base_url('assets/login/') ?>img/avator.svg" />
                <h2>Hello, Login</h2>
                <div class="input-div" one>
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input class="input" name="username" type="text" />
                    </div>
                </div>
                <div class="input-div" two>
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>password</h5>
                        <input class="input" name="password" type="password" />
                    </div>
                </div>
                <input type="submit" class="btn" value="Login" />
            </form>
        </div>
    </div>
    <footer>
        Copyright © 2020 - All rights Reserved - Designed by AhsanParadise
    </footer>
    <script type="text/javascript" src="<?= base_url('assets/login/') ?>js/main.js"></script>
</body>

</html>