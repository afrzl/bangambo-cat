<?php
    foreach ($informasi as $key) {
        $nama_kegiatan = $key->nama_kegiatan;
    }
    foreach ($data_peserta as $peserta) {
        $id_peserta = $peserta->id_peserta;
        $nim = $peserta->nim;
        $nama_peserta = $peserta->nama_peserta;
        $password_peserta = $this->encryption->decrypt($peserta->password_peserta);
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
                    <div class="callout callout-info">
                        <h4><?= $nama_kegiatan; ?></h4>
                    </div>
                </section>
                <!-- main content -->
                <section class="content">
                    <div class="callout callout-info">
                        <h4><?= $judul; ?></h4>
                        <p>Anda berhasil melakukan pendaftaran <?= $nama_kegiatan; ?>!</p>
                        <p>Silahkan login dengan menggunakan NIM dan password anda!</p>
                    </div>
                    <div class="callout callout-success">
                        <h4>NIM : <?= $nim; ?></h4>
                        <h4>PASSWORD : <?= $password_peserta; ?></h4>
                        <h4>NAMA : <?= $nama_peserta; ?></h4>
                    </div>
                    <a href="<?= base_url('/'); ?>">
                        <button type="submit" class="btn btn-primary pull-left">Home</button>
                    </a>
                </section>
            </div>
        </div>
    </div>
</body>