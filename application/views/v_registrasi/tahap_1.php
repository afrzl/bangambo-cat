<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="<?= base_url(); ?>assets/academy/img/core-img/logo.png" alt="">
        </div>
        <!-- /.login logo -->
        <div class="login-box-body">
            <p class="login-box-msg"><?= $title ?></p>
            <div class="callout callout-info">
                <h4><?= $judul; ?></h4>
                <p>Pendaftaran hanya bisa dilakukan oleh mahasiswa jurusan teknik informatika angkatan 2017</p>
                <p>Contoh: NIM Mahasiswa 201746001</p>
                <p>2017 = Angkatan. 46 = Jurusan teknik informatika. 001 = Nomor mahasiswa</p>
            </div>
            <?php $this->load->view('layouts/notifikasi'); ?>
            <?php echo form_open('registrasi/verifikasi_tahap1'); ?>
                <div class="form-group has-feedback">
                    <input type="text" name="nim" id="nim" class="form-control" maxlength="9" minlength="9" placeholder="NIM" data-inputmask='"mask" : "999999999"' data-mask required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" maxlength="15" minlength="8" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" maxlength="15" minlength="8" placeholder="Confirm Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                        <button type="submit" class="btn btn-danger btn-block btn-flat" onclick="window.history.back();">Back</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>