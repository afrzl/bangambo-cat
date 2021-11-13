<?php
    foreach ($cek_lab as $lab) {
        $nama_lab = $lab->nama_lab;
    }
    $pdf = new pdf('P', 'mm', 'A4');
    $pdf->addPage();

    $pdf->Ln(3);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(190, 7, $nama_lab, 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(190, 7, 'Daftar Peserta Lulus Administrasi', 0, 1, 'C');
    $pdf->Cell(10, 7, '', 0, 1);
    //Tabel
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(20, 6, 'No.', 1, 0, 'C');
    $pdf->Cell(35, 6, 'NIM', 1, 0, 'C');
    $pdf->Cell(85, 6, 'Nama Mahasiswa', 1, 0, 'C');
    $pdf->Cell(25, 6, 'IPK', 1, 1, 'C');
    $pdf->SetFont('Arial', '', 10);
    $no = 1;
    foreach ($cetak_peserta as $row) {
        $pdf->Cell(20, 6, $no, 1, 0);
        $pdf->Cell(35, 6, $row->nim, 1, 0);
        $pdf->Cell(85, 6, $row->nama_peserta, 1, 0);
        $pdf->Cell(25, 6, $row->ipk, 1, 1);
        $no++;
    }
    $pdf->Output($nama_lab.'.pdf', 'D');
?>