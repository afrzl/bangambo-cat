<?php

    foreach ($informasi as $key) {
        $tgl_lulus_adm = $key->tgl_lulus_adm;
    }
        $this->load->view('layouts/head');
        $tgl_sekarang = date('Y-m-d');
        if ($page == 'login_panitia') {
            include 'panitia.php';
        } elseif ($page == 'login_peserta') {
            if ($tgl_sekarang >= $tgl_lulus_adm) {
                include 'peserta.php';
            } else {
                include 'waktu_belum.php';
            }
        }
        $this->load->view('layouts/foot');
?>