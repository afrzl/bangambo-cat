<?php
    foreach ($nama_mapel as $nama) {
        $id_soal = $nama->id_soal;
        $n_soal = $nama->nama_soal;
        $jml_soal = $nama->jumlah_soal;
    }

    foreach ($nama_event as $nama) {
        $id_event = $nama->id_informasi;
        $n_event = $nama->nama_kegiatan;
    }
?>
<!-- content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $n_event." - ".$n_soal; ?>
            <?php if ($data_pertanyaan >= 0 && $data_pertanyaan < $jml_soal) : ?>
                <a href="<?= base_url('pertanyaan_soal/input/'.$id_event.'/'.$id_soal);  ?>">
                    <button type="submit" style="margin-bottom: 10px" class="btn btn-primary btn-flat pull-right">
                        <i class="fa fa-plus"></i> Tambah Soal
                    </button>
                </a>
            <?php endif; ?>
            <a href="<?= base_url('informasi_pendaftaran/soal/'.$id_event);  ?>">
                <button type="submit" style="margin-bottom: 10px" class="btn btn-warning btn-flat pull-right">
                    <i class="fa fa-angle-left"></i> Kembali
                </button>
            </a>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="flash" data-flash="<?php echo $this->session->flashdata('success'); ?>"></div>
                <?php if($data_pertanyaan >= $jml_soal) : ?>
                    <div class="callout callout-warning">
                        <h4>Penginputan Soal <?= $n_soal; ?> Sudah Selesai</h4>
                        <p>Jumlah Soal : <?= $data_pertanyaan; ?>.</p>
                    </div>
                <?php endif; ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tabel Pertanyaan</h3>
                    </div>
                    <!-- /.box header -->
                    <div class="box-body">
                        <table id="example" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width: 75%">Pertanyaan</th>
                                    <th style="width: 5%">Jawaban</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->