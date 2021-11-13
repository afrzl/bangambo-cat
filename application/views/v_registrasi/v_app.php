<?php

$this->load->view('layouts/head'); 

if ($page == 'tahap_1') {
  
	$informasi = $this->M_informasi->data_informasi()->result();
		foreach ($informasi as $info) {
			$nama_kegiatan = $info->nama_kegiatan;
			$tgl_pendaftaran = $info->tgl_pendaftaran;
			$tgl_tutup = $info->tgl_tutup;
		}

		$tgl_sekarang = date('Y-m-d');

		if ($tgl_sekarang<$tgl_pendaftaran) {
			include 'registrasi_belum.php';
		}
		elseif ($tgl_sekarang >= $tgl_pendaftaran && $tgl_sekarang <= $tgl_tutup){
			include 'tahap_1.php';
		}else{
			include 'registrasi_tutup.php';
		}
}
elseif ($page == 'tahap_2') {
  include 'tahap_2.php';
}
elseif ($page == 'tahap_3') {
  include 'tahap_3.php';
}
elseif ($page == 'registrasi_selesai') {
  include 'registrasi_selesai.php';
}
$this->load->view('layouts/foot');

?>



