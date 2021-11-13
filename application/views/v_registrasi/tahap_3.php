<?php
    foreach ($data_peserta as $key) {
        $id_peserta = $key->id_peserta;
        $nim = $key->nim;
    }
?>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="container">
                <br>
                <img src="<?= base_url(); ?>assets/academy/img/core-img/logo.png" alt="">
                <!-- content header (page header) -->
                <section class="content-header">
                    <h1><?= $title; ?></h1>
                </section>
                <!-- main content -->
                <section class="content">
                    <div class="callout callout-info">
                        <h4><?= $judul; ?></h4>
                        <p>Unggah berkas sesuai dengan format!</p>
                    </div>
                    <div class="callout callout-danger">
                        <h4>Format berkas .pdf max 2 MB</h4>
                        <p>Berkas lamaran disatukan dalam satu pdf secara berurutan dengan ukuran maksimal 2 MB</p>
                    </div>
                    <?php $this->load->view('layouts/notifikasi'); ?>
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form <?= $judul; ?></h3>
                        </div>
                        <?php echo form_open_multipart('registrasi/verifikasi_tahap3/'.$id_peserta.'/'.$nim); ?>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_lab">Formasi Lab</label>
                                        <select name="id_lab" id="id_lab" class="form-control select2" style="width: 100%;" required>
                                            <option value="" selected="selected">----- Pilih -----</option>
                                            <?php
                                                foreach ($formasi_lab as $key) {
                                            ?>
                                            <option value="<?= $key->id_lab; ?>"><?= $key->nama_lab; ?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Berkas Lamaran</label>
                                        <input type="file" name="berkas_peserta" id="exampleInputFile">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary pull-left">Pendaftaran Selesai</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>