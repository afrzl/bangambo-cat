<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_soal extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('level_admin')) {
            redirect('access_denied');
        }
    }
    

    public function input()
    {
        $nama_soal = ucwords($this->input->post('nama_soal'));
        $jumlah_soal = $this->input->post('jumlah_soal');
        $nilai_max = $this->input->post('nilai_max');
        $passing_grade = $this->input->post('passing_grade');
        $id_event = $this->input->post('id_event');
        
        if ($nilai_max < $passing_grade) {
            $this->session->set_flashdata('warning', 'Data gagal disimpan!. <br> Jumlah nilai maksimal harus lebih besar dari passing grade'); 
            redirect('informasi_pendaftaran/soal/'.$id_event);
        } else {
            $data = [
                'nama_soal' => $nama_soal,
                'id_informasi' => $id_event,
                'jumlah_soal' => $jumlah_soal,
                'nilai_max' => $nilai_max,
                'nilai_soal' => $nilai_max / $jumlah_soal,
                'passing_grade' => $passing_grade
            ];
            $simpan = $this->M_jenis_soal->input_jenis_soal($data);
            if (!$simpan) {
                $this->session->set_flashdata('success', 'Data jenis soal berhasil disimpan.');
            } else {
                $this->session->set_flashdata('warning', 'Data gagal disimpan');
            } 
            redirect('informasi_pendaftaran/soal/'.$id_event);
        }
    }

    public function edit($id_soal)
    {
        $nama_soal = ucwords($this->input->post('nama_soal'));
        $jumlah_soal = $this->input->post('jumlah_soal');
        $nilai_max = $this->input->post('nilai_max');
        $passing_grade = $this->input->post('passing_grade');
        $id_event = $this->input->post('id_event');

        if ($jumlah_soal < $minimal_benar) {
            $this->session->set_flashdata('warning', 'Data gagal diperbarui!. <br> Jumlah soal harus lebih besar dari jumlah minimal soal yang benar'); 
            redirect('jenis_soal');
        } else {
            $data = [
                'nama_soal' => $nama_soal,
                'jumlah_soal' => $jumlah_soal,
                'nilai_max' => $nilai_max,
                'nilai_soal' => $nilai_max / $jumlah_soal,
                'passing_grade' => $passing_grade
            ];
            $simpan = $this->M_jenis_soal->update_jenis_soal($data, $id_soal);
            if (!$simpan) {
                $this->session->set_flashdata('success', 'Data mapel '.$nama_soal.' berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('warning', 'Data gagal disimpan');
            } 
            redirect('informasi_pendaftaran/soal/'.$id_event);
        }
    }

    public function delete($id_event, $id_soal)
    {
        $simpan = $this->M_jenis_soal->delete_jenis_soal($id_soal);
        if (!$simpan) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('warning', 'Data gagal dihapus.');
        } 
        redirect('informasi_pendaftaran/soal/'.$id_event);
    }

}

/* End of file Jenis_soal.php */
