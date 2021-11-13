<?php
    foreach ($nama_event as $nama) {
        $event = $nama->nama_kegiatan;
        $id_event = $nama->id_informasi;
    }
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title." ".$event; ?> 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div id="flash" data-flash="<?php echo $this->session->flashdata('success'); ?>"></div>
            <a href="<?= base_url('informasi_pendaftaran'); ?>">
              <button type="button" class="btn btn-warning" style="margin: 10px 5px"><i class="fa fa-angle-left"></i> Kembali Ke Event</button>
            </a>
            <button type="submit" class="btn btn-primary" data-toggle="modal" style="margin: 10px 5px" data-target="#modal_add".$id_event><i class="fa fa-plus"></i> Tambah Mapel</button>

          <?php include 'add.php';  ?>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel Jenis Soal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Soal</th>
                    <th>Jumlah Soal</th>
                    <th>Nilai Maksimal</th>
                    <th>Passing Grade</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($jenis_soal as $jso) {
                        $id_soal = $jso->id_soal;
                        $id_event = $jso->id_informasi;
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $jso->nama_soal; ?></td>
                    <td><?php echo $jso->jumlah_soal; ?></td>
                    <td><?php echo $jso->nilai_max; ?></td>
                    <td><?php echo $jso->passing_grade; ?></td>
                    </td>
                    <td>

                      <a data-toggle="tooltip" data-placement="top" title="Edit">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalEdit<?php echo $id_soal; ?>"><i class="fa fa-edit"></i></button>
                      </a>
                      
                      <a href="<?php echo base_url('jenis_soal/delete/'.$id_event.'/'.$id_soal); ?>" id="btn-hapus" data-toggle="tooltip" data-placement="top" title="Delete">
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </a>

                      <a href="<?php echo base_url('pertanyaan_soal/soal/'.$id_event.'/'.$id_soal); ?>" data-toggle="tooltip" data-placement="top" title="Input Soal">
                          <button type="button" class="btn btn-info"><i class="fa fa-angle-double-right"></i></button>
                      </a>

                    </td>
                  </tr>
                  <?php 
                    $no++;
                    include 'edit.php'; 
                    }
                   ?>
                  </tbody>
                </table>
            </div>
        </div>
      </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->