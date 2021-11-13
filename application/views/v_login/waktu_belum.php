<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url(); ?>assets/academy/img/core-img/logo.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Peserta</p>

      <div class="callout callout-info">
          <h4>Lulus Administrasi !</h4>

          <p>Pengumuman Lulus Administrasi pada tanggal <?php echo tgl_indonesia($tgl_lulus_adm); ?></p>
          <p>Silakan Login Dengan NIM dan Password Anda pada tanggal <?php echo tgl_indonesia($tgl_lulus_adm); ?></p>
        </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <a href="<?php echo base_url('/') ?>">
            <button type="button" class="btn btn-success btn-block btn-flat">Home</button>
          </a>
        </div>
        <!-- /.col -->
      </div>
   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
