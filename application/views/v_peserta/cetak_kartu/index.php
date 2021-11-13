<?php
    foreach ($informasi as $key) {
        $nama_kegiatan = $key->nama_kegiatan;
        $tgl_ujian_cat = $key->tgl_ujian_cat;
    }
    foreach ($peserta as $cetak) {
        $nim = $cetak->nim;
        $nama_peserta = $cetak->nama_peserta;
        $foto = $cetak->foto;
        $nama_lab = $cetak->nama_lab;
    }

    $pdf = new pdf('P', 'mm', 'A4');
    $pdf->AddPage();
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 7, 'KARTU TANDA PESERTA UJIAN', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(190, 7, $nama_kegiatan, 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 7, 'Formasi - '.$nama_lab, 0, 1, 'C');
    $pdf->Cell(10, 7, '', 0, 1);
    $pdf->Image('uploads/berkas_peserta/'.$foto, 10, 66, 30);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(35);
    $pdf->Cell(35, 10, 'NIM', 0, 0, 'L', 0);
    $pdf->Cell(45, 10, ': '.$nim, 0, 1, 'L', 0);
    $pdf->Cell(35);
    $pdf->Cell(35, 10, 'Nama', 0, 0, 'L', 0);
    $pdf->Cell(45, 10, ': '.$nama_peserta, 0, 1, 'L', 0);
    $pdf->Cell(35);
    $pdf->Cell(35, 10, 'Tanggal Ujian', 0, 0, 'L', 0);
    $pdf->Cell(45, 10, ': '.tgl_indonesia($tgl_ujian_cat), 0, 1, 'L', 0);
    $pdf->Ln(15);
    $pdf->Cell(20, 5, '', 0, 1, 'L', 0);
    $pdf->SetFont('Arial', 'I', 10);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(0, 10, 'Nb:', 0, 1, 'L');
    $pdf->Cell(0, 6, '1. Kartu ujian harus dibawa ketika ujian berlangsung.', 0, 1, 'L', 1);
    $pdf->Cell(0, 6, '2. Diwajibkan memakai kemeja putih lengan panjang dan celana / rok bahan hitam.', 0, 1, 'L', 1);
    $pdf->Cell(0, 6, '3. Tidak diperbolehkan memakai sandal dan kaos oblong.', 0, 1, 'L', 1);
    $pdf->Output('Kartu Ujian - '.$nim.'.pdf', 'D');
?>