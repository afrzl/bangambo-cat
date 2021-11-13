<!-- content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $title; ?>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="flash" data-flash="<?php echo $this->session->flashdata('success'); ?>"></div>
                
                <button type="submit" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Tambah Event</button>
                <?php include 'add.php'; ?>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tabel Informasi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width= "100px">No. </th>
                                    <th>Nama Event</th>
                                    <th>Tanggal Pelaksanaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($informasi as $key) {
                                        $id_informasi = $key->id_informasi;
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $key->nama_kegiatan; ?></td>
                                    <td><?= tgl_indonesia($key->tgl_awal); ?> - <?= tgl_indonesia($key->tgl_akhir); ?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Edit">
                                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModalEdit<?= $id_informasi; ?>"><i class="fa fa-edit"></i></button>
                                        </a>
                                        <a href="<?php echo base_url('informasi_pendaftaran/delete/'.$id_informasi); ?>" data-toggle="tooltip" data-placement="top" title="Delete" id="btn-hapus">
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </a>
                                        <a href="<?php echo base_url('informasi_pendaftaran/soal/'.$id_informasi); ?>" data-toggle="tooltip" data-placement="top" title="Input Mapel">
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
        </div>
    </section>
</div>