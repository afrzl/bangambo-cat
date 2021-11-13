<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('id_peserta')) {
            redirect('access_denied');
        }
    }

    public function index()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $data = [
            'title' => "Dashboard Peserta",
            'page' => "dashboard_peserta",
            'informasi' => $this->M_informasi->data_informasi()->result(),
            'peserta' => $this->M_peserta->data_peserta($id_peserta)->result(),
            //data jawaban
            'jawaban' => $this->M_jawaban->cek_jawaban($id_peserta)->num_rows(),
            'data_jawaban' => $this->M_jawaban->cek_jawaban($id_peserta)->result(),
            //nilai peserta
            'data_nilai' => $this->M_nilai->peserta_nilai($id_peserta)->result(),
        ];
        $this->load->view('v_peserta/v_app', $data);
    }

    public function cetak_kartu()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $data = [
            'title' => "Dashboard Peserta",
            'page' => "cetak_kartu",
            'informasi' => $this->M_informasi->data_informasi()->result(),
            'peserta' => $this->M_peserta->data_peserta($id_peserta)->result(),
        ];
        $this->load->view('v_peserta/cetak_kartu/index', $data);
    }

    public function acak_soal()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        //cek id peserta pada tabel jawaban
        $cek_peserta = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        foreach ($cek_peserta as $cek_p) {
            $id_p = $cek_p->id_peserta;
        }
        //jika id peserta tidak ada
        if ($id_p == "") {
            //jenis soal
            $soal = $this->M_jenis_soal->data_jenis_soal()->result();
            foreach ($soal as $j_soal) {
                $row = array();
                $row[] = $j_soal->id_soal;
                $data[] = $row;
                $id_soal = $j_soal->id_soal;
            }
            //id soal
            $jenis_soal = json_encode($data);
            $jenis_soal = str_replace("[", "", $jenis_soal);
            $jenis_soal = str_replace("]", "", $jenis_soal);
            $jenis_soal = str_replace(",", "", $jenis_soal);
            $jenis_soal = str_replace('"', "", $jenis_soal);
            //hitung banyak id soal
            $panjang = count($data);
            for ($i=0; $i < $panjang; $i++) { 
                $id_soal = $jenis_soal[$i];
                //pertanyaan
                $x = $this->M_pertanyaan->acak_soal($id_soal)->result();
                foreach ($x as $pertanyaan) {
                    $rows = array();
                    $rows[] = $pertanyaan->id_pertanyaan;
                    $data2[] = $rows;
                }
            }
            //hitung jumlah pertanyaan
            $pertanyaan = json_encode($data2);
            $pertanyaan = str_replace("[", "", $pertanyaan);
            $pertanyaan = str_replace("]", "", $pertanyaan);
            $list_soal = str_replace('"', "", $pertanyaan);
            $list_jawaban = str_replace(",", ":X:N:S,", $list_soal);
            //waktu pengerjaan
            $informasi = $this->M_informasi->data_informasi()->result();
            foreach ($informasi as $key) {
                $waktu_pengerjaan = $key->waktu_pengerjaan;
            }

            $waktu_mulai = date('Y-m-d H:i:s');
			$waktu_selesai = date('Y-m-d H:i:s', time() + (3600 * $waktu_pengerjaan));
            $status_jawaban = "Belum";
            $acak = array(
                'id_peserta' => $id_peserta,
                'list_soal' => $list_soal,
                'list_jawaban' => $list_jawaban.":X:N:S",
                'waktu_mulai' => $waktu_mulai,
                'waktu_selesai' => $waktu_selesai,
                'status_jawaban' => $status_jawaban,
            );
            $nilai = array(
                'id_peserta' => $id_peserta,
                'id_soal' => $id_soal,
                'nilai_peserta' => "0"
            );
            //input jawaban
            $this->M_jawaban->input_jawaban($acak); 
            $this->M_nilai->input_nilai($nilai);

            redirect('peserta/ujian_cat/1');
            //jika id peserta ada
        } else {
            redirect('peserta/ujian_cat/1');
        }
    }

    public function ujian_cat($no_soal)
    {
        $id_peserta = $this->session->userdata('id_peserta');
        //cek nomor soal
        $cek_nomor = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        foreach ($cek_nomor as $cek) {
            $list_soal = $cek->list_soal;
            $list_jawaban = $cek->list_jawaban;
        }
        $jwb = explode(",", $list_soal);
        $no = sizeof($jwb);
        //jika melewati no soal
        if ($no_soal <= 0 OR $no_soal > $no) {
            redirect('peserta/ujian_cat/1','refresh');
        }
        $id_peserta = $this->session->userdata('id_peserta'); 
        //data jawaban
        $waktu = $this->M_jawaban->cek_jawaban($id_peserta)->result();
        foreach ($waktu as $wt) {
            $waktu_selesai = $wt->waktu_selesai;
        }
        //menampilkan pertanyaan
        $soal_ke = $no_soal-1;
        $soal = explode(",", $list_jawaban);
        $soal_list = $soal[$soal_ke];
        $soal_list = explode(":", $soal_list);
        $id_pertanyaan = $soal_list[0];
        $data = [
            'title' => "Computer Assisted Test",
            'page' => "ujian_cat",
            'informasi' => $this->M_informasi->data_informasi()->result(),
            'peserta' => $this->M_peserta->data_peserta($id_peserta)->result(),
            //data jawaban
            'data_jawaban' => $this->M_jawaban->cek_jawaban($id_peserta)->result(),
            'waktu_selesai' => $waktu_selesai,
            //menampilkan pertanyaan
            'jawaban_peserta' => $soal_list[1],
            'tampil_soal' => $this->M_jawaban->list_jawaban($id_pertanyaan)->result(),
            'no_soal' => $no_soal,
        ];
        $this->load->view('v_peserta/v_app', $data);
    }

    public function simpan_jawaban($no_soal)
    {
        $id_peserta = $this->session->userdata('id_peserta');
        $j_peserta = $this->input->post('jawaban_peserta');
        $id_soal = $this->input->post('id_soal');
        $next = $no_soal+1;
        $list = $no_soal-1;
        //cek data peserta dan soal pada tabel nilai
        $cek_nilai = $this->M_nilai->cek_nilai($id_peserta, $id_soal)->result();
        foreach ($cek_nilai as $cek_n) {
            $id_pe = $cek_n->id_peserta;
            $id_so = $cek_n->id_soal;
            $tot_n = $cek_n->nilai_peserta;
        }
        //id peserta dan id soal tidak ada dalam tabel nilai
        if ($id_pe == "" && $id_so == "") {
            //jawaban kosong
            if ($j_peserta == "") {
                redirect('peserta/ujian_cat/'.$next);
            } else {
                //cek no soal jawaban peserta
                $cek_jawaban = $this->M_jawaban->cek_jawaban($id_peserta)->result();
                foreach ($cek_jawaban as $cek) {
                    $list_jawaban = $cek->list_jawaban;
                }
                //list jawaban
                $jwb = explode(",", $list_jawaban);
                $jawaban = $jwb[$list];
                $hsl = explode(":", $jawaban);
                /*
                $hsl[0] ----------- id_pertanyaan;
                $hsl[1] ----------- jawaban peserta;
                $hsl[2] ----------- keterangan;
                $hsl[3] ----------- benar/salah;
                */
                //pengecekan kunci jawaban
                $id_pertanyaan = $hsl[0];
                $cek_pertanyaan = $this->M_pertanyaan->tampil_edit($id_pertanyaan)->result();
                foreach ($cek_pertanyaan as $cek_per) {
                    $kunci_jawaban = $cek_per->jawaban;
                }
                if ($kunci_jawaban == $j_peserta) {
                    //Benar
                    $hsl[1] = $j_peserta;
                    $hsl[2] = "Y";
                    $hsl[3] = "B";
                    //masukkan niilai peserta
                    $nilai = [
                        'id_peserta' => $id_peserta,
                        'id_soal' => $id_soal,
                        'nilai_peserta' => "5",
                    ];
                    $this->M_nilai->input_nilai($nilai);
                    $hsl = implode(':', $hsl);
                    //masukkan jawaban peserta
                    $jwb[$list] = $hsl;
                    $jawaban_peserta = implode(',', $jwb);
                    //update jawaban
                    $data = [
                        'list_jawaban' => $jawaban_peserta,
                    ];
                    $this->M_jawaban->update_jawaban($data, $id_peserta);
                } else {
                    //salah
                    $hsl[1] = $j_peserta;
                    $hsl[2] = "Y";
                    //masukkan nilai peserta
                    $nilai = [
                        'id_peserta' => $id_peserta,
                        'id_soal' => $id_soal,
                        'nilai_peserta' => "0",
                    ];
                    $this->M_nilai->input_nilai($nilai);
                    $hsl = implode(':', $hsl);
                    //masukkan jawaban peserta
                    $jwb[$list] = $hsl;
                    $jawaban_peserta = implode(',', $jwb);
                    //update jawaban
                    $data = [
                        'list_jawaban' => $jawaban_peserta,
                    ];
                    $this->M_jawaban->update_jawaban($data, $id_peserta);
                }
                redirect('peserta/ujian_cat/'.$next);
            }
            //id peserta dan id soal ada dalam tabel nilai
        } else {
            //cek jawaban
            if ($j_peserta == "") {
                redirect('peserta/ujian_cat/'.$next);
            } else {
                //list jawaban peserta
                $cek_jawaban = $this->M_jawaban->cek_jawaban($id_peserta)->result();
                foreach ($cek_jawaban as $cek) {
                    $list_jawaban = $cek->list_jawaban;
                }
                //list jawaban
                $jwb = explode(",", $list_jawaban);
                $jawaban = $jwb[$list];
                $hsl = explode(":", $jawaban);
                /*
                $hsl[0] ----------- id_pertanyaan;
                $hsl[1] ----------- jawaban peserta;
                $hsl[2] ----------- keterangan;
                $hsl[3] ----------- benar/salah;
                */
                //pengecekan kunci jawaban
                $id_pertanyaan = $hsl[0];
                $bs = $hsl[3];
                $cek_pertanyaan = $this->M_pertanyaan->tampil_edit($id_pertanyaan)->result();
                foreach ($cek_pertanyaan as $cek_per) {
                    $kunci_jawaban = $cek_per->jawaban;
                }
                if ($bs == "B") {
                    //benar
                    if ($kunci_jawaban == $j_peserta) {
                        redirect('peserta/ujian_cat/'.$next);
                    }
                    //salah
                    else {
                        $hsl[1] = $j_peserta;
                        $hsl[3] = "S";
                        $hsl = implode(':', $hsl);
                        //masukkan jawaban peserta
                        $jwb[$list] = $hsl;
                        $jawaban_peserta = implode(',', $jwb);
                        //update jawaban
                        $data = [
                            'list_jawaban' => $jawaban_peserta,
                        ];
                        $this->M_jawaban->update_jawaban($data, $id_peserta);
                        //update nilai peserta
                        $nilai_peserta = $tot_n - 5;
                        if ($nilai_peserta <= 0) {
                            $nilai_peserta = 0;
                        }
                        $nilai = [
                            'nilai_peserta' => $nilai_peserta
                        ];
                        $this->M_nilai->update_nilai($id_peserta, $id_soal, $nilai);
                    }
                } else {
                    //benar
                    if ($kunci_jawaban == $j_peserta) {
                        $hsl[1] = $j_peserta;
                        $hsl[2] = "Y";
                        $hsl[3] = "B";
                        $hsl = implode(':', $hsl);
                        //masukkan jawaban peserta
                        $jwb[$list] = $hsl;
                        $jawaban_peserta = implode(',', $jwb);
                        //update jawaban
                        $data = [
                            'list_jawaban' => $jawaban_peserta,
                        ];
                        $this->M_jawaban->update_jawaban($data, $id_peserta);
                        //update nilai peserta
                        $nilai_peserta = $tot_n + 5;
                        $nilai = [
                            'nilai_peserta' => $nilai_peserta,
                        ];
                        $this->M_nilai->update_nilai($id_peserta, $id_soal, $nilai);
                    } else {
                        //salah
                        $hsl[1] = $j_peserta;
                        $hsl[2] = "Y";
                        $hsl[3] = "S";
                        $hsl = implode(':', $hsl);
                        //masukkan jawaban peserta
                        $jwb[$list] = $hsl;
                        $jawaban_peserta = implode(',', $jwb);
                        //update jawaban
                        $data = [
                            'list_jawaban' => $jawaban_peserta,
                        ];
                        $this->M_jawaban->update_jawaban($data, $id_peserta);
                    }
                } 
                redirect('peserta/ujian_cat/'.$next);
            }
        }
    }

    public function selesai_ujian()
    {
        $id_peserta = $this->session->userdata('id_peserta');
        //update jawaban
        $data = [
            'status_jawaban' => "Selesai"
        ];
        $this->M_jawaban->update_jawaban($data, $id_peserta); 
        redirect('peserta');
    }

    public function logout()
    {
        
        $this->session->sess_destroy(); 
        redirect('/');
    }

}

/* End of file Peserta.php */
