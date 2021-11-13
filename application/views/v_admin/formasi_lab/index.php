 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-body">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Add</button>
            </div>
            <div class="box-footer">
              <?php $this->load->view('layouts/notifikasi'); ?>
            </div>
          </div>

          <?php include 'add.php';  ?>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel <?php echo $title; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Laboratorium</th>
                    <th>Jumlah Formasi</th>
                    <th>Jumlah Pelamar</th>
                    <th>Jumlah Lulus Adm</th>
                    <th>Lampiran</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($formasi_lab as $key) {
                        $id_lab = $key->id_lab;
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $key->nama_lab; ?></td>
                    <td><?php echo $key->jumlah_formasi; ?></td>
                    <td><?php echo $key->jumlah_peserta; ?></td>
                    <td><?php echo $key->jumlah_lulus_adm; ?></td>
                    <td>
                      <?php 
                          echo "<a href='".base_url('formasi_lab/download/'.$key->lampiran)."'>
                                  <p align='center'><i class='fa fa-file'></i></p>
                                </a>";
                      ?>
                    </td>
                    <td>

                      <a data-toggle="tooltip" data-placement="top" title="Edit">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalEdit<?php echo $id_lab; ?>"><i class="fa fa-edit"></i></button>
                      </a>
                      
                      <a href="<?php echo base_url('formasi_lab/delete/'.$id_lab); ?>" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus Formasi <?php echo $key->nama_lab; ?> ?')">
                      <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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