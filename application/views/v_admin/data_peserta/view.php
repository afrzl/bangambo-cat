<?php
    foreach ($cek_lab as $formasi) {
        $nama_lab = $formasi->nama_lab;
    }
    foreach ($view_peserta as $view) {
        # code...
    }
?>
<!-- content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- content header (page header) -->
    <section class="content-header">
        <h1>
            <?= $title." Formasi ".$nama_lab; ?>
        </h1>
    </section>
    <!-- main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">View Peserta</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- widget: user widget style 1 -->
                                <div class="box-widget widget-user-2">
                                    <!-- add the bg color to the header use bg-* classes -->
                                    <div class="widget-user-header bg-aqua-active">
                                        <div class="widget-user-image">
                                            <img src="<?= base_url('uploads/berkas_peserta/'.$view->foto); ?>" alt="">
                                        </div>
                                        <!-- /.widget-user-image -->
                                        <h3 class="widget-user-username">
                                            <?= $view->nama_peserta; ?>
                                        </h3>
                                        <h5 class="widget-user-desc">
                                            <?= $view->tmp_lahir.", ".tgl_indonesia($view->tgl_lahir); ?>
                                        </h5>
                                    </div>
                                    <div class="box-footer no-padding">
                                        <ul class="nav nav-stacker">
                                            <li><a href="#"><?= $view->ipk; ?></a></li>
                                            <li><a href="#"><?= $view->jenis_kelamin; ?></a></li>
                                            <li><a href="#"><?= $view->agama; ?></a></li>
                                            <li><a href="#"><?= $view->no_hp; ?></a></li>
                                            <li><a href="#"><?= $view->email; ?></a></li>
                                            <li><a href="#">Tanggal Pendaftaran
                                                <span class="pull-right badge bg-aqua"><?= tgl_indonesia($view->tgl_selesai_pendaftaran); ?></span>
                                            </a></li>
                                            <li><a href="#">Status Pendaftaran
                                                <span class="pull-right badge bg-green"><?= $view->status_pendaftaran; ?></span>
                                            </a></li>
                                            <li><a href="#">Status Verifikasi
                                                <span class="pull-right badge bg-red"><?= $view->status_verifikasi; ?></span>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.widget-user -->
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" onclick="window.history.back();">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->