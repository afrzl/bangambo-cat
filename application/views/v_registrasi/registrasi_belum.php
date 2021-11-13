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
                        <h4>Pendaftaran Belum Dibuka</h4>
                        <p>Pendaftaran dapat dilakukan pada tanggal <?= tgl_indonesia($tgl_pendaftaran); ?></p>
                    </div>
                </section>
                <!-- main content -->
                <section class="content">
                    <a href="<?= base_url('/'); ?>">
                        <button type="submit" class="btn btn-primary pull-left">Home</button>
                    </a>
                </section>
            </div>
        </div>
    </div>
</body>