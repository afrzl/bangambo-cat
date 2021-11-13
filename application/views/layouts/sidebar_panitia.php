
<ul class="sidebar-menu" data-widget="tree">

  <li id="clock" class="header"><?php print date('H:i:s'); ?></li>

  <li class="header"><?php echo waktu(); ?></li>

  <li class="header">MAIN NAVIGATION</li>

  <li class="<?php if ($page == 'dashboard_panitia') echo "treeview active";  ?>">
    <a href="<?php echo base_url('panitia'); ?>">
      <i class="fa fa-dashboard"></i> 
      <span>Dashboard</span>
    </a>
  </li>

  <li class="<?php if ($page == 'formasi_lab') echo "treeview active";  ?>">
    <a href="<?php echo base_url('formasi_lab'); ?>">
      <i class="fa fa-university"></i>
      <span>Formasi Lab</span>
    </a>
  </li>

  <li class="<?php if ($page == 'jenis_soal') echo "treeview active";  ?>">
    <a href="<?php echo base_url('jenis_soal'); ?>">
      <i class="fa fa-files-o"></i>
      <span>Jenis Soal</span>
    </a>
  </li>

  <li class="<?php if ($page == 'pertanyaan_soal' OR $page == 'pertanyaan_edit') echo "treeview active"; else echo "treeview"; ?>">
    <a href="#">
      <i class="fa fa-edit"></i>
      <span>Pertanyaan Soal</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <?php foreach ($jenis_soal as $key) {
        # code...
      ?>
      <li><a href="<?php echo base_url('pertanyaan_soal/soal/'.$key->id_soal); ?>"><i class="fa fa-circle-o"></i> <?php echo $key->nama_soal; ?></a></li>
    <?php 
    } 
    ?>
    </ul>
  </li>

  <li class="<?php if ($page == 'data_peserta' OR $page == 'view_peserta') echo "treeview active"; else echo "treeview"; ?>">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Data Peserta</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <?php foreach ($formasi_lab as $lab) {
        # code...
       ?>
      <li><a href="<?php echo base_url('data_peserta/formasi/'.$lab->id_lab); ?>"><i class="fa fa-circle-o"></i> <?php echo $lab->nama_lab; ?></a></li>
      <?php } ?>
    </ul>
  </li>

  <li class="<?php if ($page == 'data_nilai') echo "treeview active"; else echo "treeview"; ?>">
    <a href="#">
      <i class="fa fa-file"></i>
      <span>Data Nilai</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <?php foreach ($formasi_lab as $lab) {
        # code...
       ?>
      <li><a href="<?php echo base_url('data_nilai/formasi/'.$lab->id_lab); ?>"><i class="fa fa-circle-o"></i> <?php echo $lab->nama_lab; ?></a></li>
      <?php } ?>
    </ul>
  </li>

</ul>