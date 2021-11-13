<?php
    foreach ($data_peserta as $key) {
        $id_peserta = $key->id_peserta;
        $nim = $key->nim;
    }
?>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <!-- full width column -->
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
                        <p>Data biodata diisi dengan benar dan teliti!</p>
                    </div>
                    <div class="callout callout-danger">
                        <h4>Ukuran foto 3x4 cm format .jpg maxs 500kb</h4>
                    </div>
                    <div class="callout callout-success">
                        <h4>Akun berhasil dibuat.</h4>
                        <p>Dengan NIM <?= $nim; ?></p>
                    </div>
                    <?php $this->load->view('layouts/notifikasi'); ?>
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Form <?= $judul; ?></h3>
                        </div>
                        <?php echo form_open_multipart('registrasi/verifikasi_tahap2/'.$id_peserta.'/'.$nim); ?>
                            <div class="box-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama_peserta">Nama Mahasiswa</label>
                                        <input type="text" name="nama_peserta" id="nama_peserta" placeholder="Nama Mahasiswa" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ipk">IPK</label>
                                        <input type="text" data-inputmask='"mask" : "9.99"' data-mask name="ipk" id="ipk" placeholder="IPK" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmp_lahir">Tempat Lahir</label>
                                        <input type="text" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker">Tanggal Lahir</label>
                                        <input type="text" name="tgl_lahir" id="datepicker" placeholder="Tanggal Lahir" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki"> Laki-laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="Perempuan"> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_hp">No. HP</label>
                                        <input type="text" name="no_hp" id="no_hp" placeholder="No. HP" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control select2" style="width: 100%;" required>
                                            <option value="" selected="selected">----- Pilih -----</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" name="foto" id="foto" required>
                                        <p>.jpg max 200kb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary pull-left">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>