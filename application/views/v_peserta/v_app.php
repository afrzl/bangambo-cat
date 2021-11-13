<?php 
$this->load->view('layouts/head');
foreach ($informasi as $key) {
  $tgl_awal = $key->tgl_ujian_cat;
  $tgl_akhir = $key->akhir_ujian_cat;
  $waktu_pengerjaan = $key->waktu_pengerjaan;
}

foreach ($peserta as $pstr) {
  $status_verifikasi = $pstr->status_verifikasi;
}

$tgl_sekarang = date('Y-m-d H:i:s');
 ?>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition fixed skin-blue-light" onload="setInterval('displayServerTime()', 1000);">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>B.A</b> - University</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <?php if ($page == 'dashboard_peserta') { ?>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $pstr->nama_peserta; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $pstr->nama_peserta; ?>
                    <small><?php echo $pstr->nim; ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="<?php echo base_url('peserta/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          <?php
          } else { ?>
            <li class="countdown">
              <a>
                  <span class="waktu-countdown" id="demo"></span>
              </a>
            </li>
          <?php  
          }
          ?>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div>
          <div class="bg-gray color-palette" id="clock"><?php print date('H:i:s'); ?></div> <br>
          <img src="<?= base_url('uploads/berkas_peserta/'.$pstr->foto); ?>" alt="User profile picture" class="profile-user-img img-responsive">
          <h3 class="profile-username text-center"><?= $pstr->nama_peserta; ?></h3>
          <p class="text-muted text-center"><?= $pstr->nim; ?></p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        
        <?php 
          if ($page == 'ujian_cat'){
            include 'ujian_cat/sidebar.php';
          }

        ?>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Full Width Column -->
  <?php 
    if ($page == 'dashboard_peserta') {
      if ($status_verifikasi == 'Lulus') {
        include 'dashboard/index.php';
      }else{
        include 'dashboard/tidak_lulus.php';
      }
      
    }elseif ($page == 'ujian_cat'){
      include 'ujian_cat/index.php';
    }

   ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Bang Ambo University All rights reserved  
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<?php 
$this->load->view('layouts/foot');
 ?>
