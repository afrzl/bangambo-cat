<?php
    require_once APPPATH . '/third_party/fpdf/fpdf.php';

    class pdf extends FPDF {
        function header() {
            $this->SetFont('Arial', 'B', '16');
            $this->Cell(190, 7, 'Bang Ambo University', 0, 1, 'C');
            $this->Image('assets/academy/img/bg-img/bg-4.png', 10, 6, 30);
            $this->Ln(2);
            $this->SetFont('Arial', 'B', '9');
            $this->Cell(0, 4, 'Lubuk Basung, Kab. Agam, Sumatera Barat. Website: www.bangambouniversity.go.id', 0, 1, 'C');
            $this->Cell(0, 4, 'Email: rektorat@bangambouniversity.com Telp. Office : (021) 4450668', 0, 1, 'C');
            $this->Ln(1);
            $this->Cell(0, 1, " ", "B");
        }

        function footer() {
            $this->SetY(-15);
            $this->SetFont('Arial', 'I', 8);
            $this->Cell(0, 10, 'Page '.$this->PageNo(), 0, 0, 'C');
        }
    }