<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= base_url(); ?>assets/academy/img/core-img/logo.png" alt="">
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Login Peserta</p>
            <?php $this->load->view('layouts/notifikasi'); ?>
            <?php echo form_open('login/peserta_login'); ?>
            <div class="form-group has-feedback">
                    <input type="text" class="form-control" maxlength="9" minlength="5" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" maxlength="15" minlength="8" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" maxlength="15" minlength="8" name="confirm_password" placeholder="Confirm Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col-->
                    <div class="col-xs-4">
                        <a href="<?= base_url('/') ?>">
                            <button class="btn btn-success btn-block btn-flat" type="button">Home</button>
                        </a>
                    </div>
                    <!-- /.col-->
                </div>
            </form>
        </div>
        <!-- /.login-box-body-->
    </div>
    <!-- /.login box -->
</body>