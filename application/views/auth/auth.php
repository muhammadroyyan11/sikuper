<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>SIKUPER LOGIN</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">silahkan Login</p>

        <form action="" method="post">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>

                <!-- /.col -->
            </div>

        </form>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <a href="<?= site_url('auth/register') ?>">Buat Akun Baru</a><br>
                    </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <div class="checkbox icheck">
                    <label>
                        <a href="<?= site_url('home') ?>">Login Tamu</a><br>
                    </label>
                </div>
            </div>

            <!-- /.col -->
        </div>


        <!-- /.social-auth-links -->

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->