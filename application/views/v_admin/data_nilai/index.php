<?php 
foreach ($cek_lab as $formasi) {
  $id_lab = $formasi->id_lab;
  $nama_lab = $formasi->nama_lab;
}
 ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title." Formasi ".$nama_lab; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel <?php echo $title." Formasi ".$nama_lab; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Peserta</th>
                    <?php 
                      foreach ($jenis_soal as $jen) {
                        $id_soal = $jen->id_soal;
                        echo "<th>".$jen->nama_soal."</th>";
                      }
                     ?>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;

                      foreach ($data_nilai as $nilai) {
                        $id_peserta = $nilai->id_peserta;
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$nilai->nama_peserta."</td>";
                        
                        //Nilai
                        $this->db->select('*');
                        $this->db->from('tbl_nilai');
                        $this->db->where('id_peserta', $id_peserta);
                        $this->db->order_by('id_soal', 'ASC');
                        $hasil = $this->db->get()->result();
                        foreach ($hasil as $hsl) {
                          echo "<td>".$hsl->nilai_peserta."</td>";
                        }
                        echo "</tr>";
                      $no++;
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