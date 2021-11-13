<?php
    $pisah_awal = explode(" ", $tgl_awal);
    $jam_awal = $pisah_awal[1];
    $tanggal_awal =tgl_indonesia($pisah_awal[0]);
?>
<div class="content-wrapper">
    <div class="container">
        <!-- content header (page header) -->
        <section class="content-header">
            <h1><?= $key->nama_kegiatan; ?></h1>
        </section>
        <!-- main content -->
        <section class="content">
            <div class="callout callout-info">
                <h4>Selamat Anda Lulus Adminsitrasi!</h4>
                <h4><?= $pstr->nama_lab; ?></h4>
                <p>Silahkan cetak kartu ujian untuk mengikuti ujian berbasis CAT</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- profile image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <h3 class="profile-username text-center">Nama : <?= $pstr->nama_peserta; ?></h3>
                            <p class="text-muted text-center">NIM : <?= $pstr->nim; ?></p>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>IPK</b> <a class="pull-right"><?= $pstr->ipk; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="pull-right"><?= $pstr->email; ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Formasi Lab</b> <a class="pull-right"><?= $pstr->nama_lab; ?></a>
                                </li>
                            </ul>
                            <a href="<?= base_url('peserta/cetak_kartu'); ?>" class="btn btn-primary btn-block"><b>Cetak Kartu Ujian</b></a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <?php
                //pengecekan tanggal ujian
                    //apabila tanggal sekarang kecil dari tanggal ujian
                    if ($tgl_sekarang < $tgl_awal) {
                        echo "<div class='col-md-8'>
                            <div class='callout callout-warning'>
                            <h4>Ujian Belum Dimulai!</h4>
                            <p>Ujian akan dimulai pada ".$tanggal_awal." ".$jam_awal." </p>
                            </div>
                            </div>";
                    }
                    //apabila tanggal sekarang == tanggal ujian
                    elseif ($tgl_sekarang >= $tgl_awal && $tgl_sekarang <= $tgl_akhir) {
                        //cek tabel id peserta pada tabel jawaban
                        if ($jawaban <= 0) {
                            echo "<div class='col-md-8'>
                            <div class='callout callout-success'>
                            <h4> Klik tombol dibawah ini untuk memulai ujian berbasis CAT!</h4>
                            </div>
                            <a href='".base_url('peserta/acak_soal')."' class='btn btn-primary'><b>Mulai Ujian</b></a>
                            </div>";
                        } else {
                            foreach ($data_jawaban as $data_j) {
                                $sts = $data_j->status_jawaban;
                            }
                            if ($sts == "Belum") {
                                echo "<div class='col-md-8'>
                                <div class='callout callout-success'>
                                <h4> Klik tombol dibawah ini untuk memulai ujian berbasis CAT!</h4>
                                </div>
                                <a href='".base_url('peserta/acak_soal')."' class='btn btn-primary'><b>Mulai Ujian</b></a>
                                </div>";
                            } else {
                                //nilai ujian cat peserta
                                echo "<div class='col-md-8'>
                                <div class='callout callout-success'>
                                <h4>Hasil ujian berbasis CAT</h4>
                                </div>
                                <!-- profile image -->
                                <div class='box box-success'>
                                <div class='box-body box-profile'>
                                <ul class='list-group list-group-unbordered'>";
                                foreach ($data_nilai as $nilai) {
                                    echo "<li class='list-group-item'>
                                    <b>".$nilai->nama_soal."</b>
                                    <a class='pull-right'>".$nilai->nilai_peserta."</a>
                                    </li>";
                                }
                                echo "</ul>
                                </div>
                                <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                                </div>";
                            }
                        }
                    }
                    //melewati tanggal ujian
                    else {
                        if ($jawaban <= 0) {
                            echo "<div class='col-md-8'>
                            <div class='callout callout-warning'>
                            <h4>Anda tidak mengikuti ujian!</h4>
                            </div>
                            </div>";
                        } else {
                            //nilai ujian cat peserta
                            echo "<div class='col-md-8'>
                            <div class='callout callout-success'>
                            <h4>Hasil ujian berbasis CAT</h4>
                            </div>
                            <!-- profile image -->
                            <div class='box box-success'>
                            <div class='box-body box-profile'>
                            <ul class='list-group list-group-unbordered'>";
                            foreach ($data_nilai as $nilai) {
                                echo "<li class='list-group-item'>
                                <b>".$nilai->nama_soal."</b>
                                <a class='pull-right'>".$nilai->nilai_peserta."</a>
                                </li>";
                            }
                            echo "</ul>
                            </div>
                            <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            </div>";
                        }
                    }
                ?>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>