<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_pendaftaran extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level_admin') != "1") {
            redirect('access_denied');
        }
    }
    

    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = array(
            'title' => "Event",
            'page'  => "informasi_pendaftaran",
            'user'  => $this->M_panitia->get_panitia($id_admin)->result(),
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            'informasi' => $this->M_informasi->data_informasi()->result()
        );
        $this->load->view('v_admin/v_app', $data);
    }

    public function soal($id_informasi)
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Input Mapel",
            'page' => "jenis_soal",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'nama_event' => $this->M_informasi->nama_event($id_informasi)->result(),
            'jenis_soal' => $this->M_jenis_soal->list_jenis_soal($id_informasi)->result(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function input()
    {
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $tgl_pelaksanaan = explode(" - ", $this->input->post('tgl_pelaksanaan'));
        $tgl1 = ubah_tgl($tgl_pelaksanaan[0]);
        $tgl2 = ubah_tgl($tgl_pelaksanaan[1]);
        $data = [
            'nama_kegiatan' => $nama_kegiatan,
            'tgl_awal' => $tgl1,
            'tgl_akhir' => $tgl2
        ];
        $simpan = $this->M_informasi->input_informasi($data);
        if (!$simpan) {
            $this->session->set_flashdata('success', 'Event berhasil ditambahkan.');
        } else {
            $this->session->set_flashdata('warning', 'Event gagal ditambahkan.');
        } 
        redirect('informasi_pendaftaran');
    }

    public function edit($id_informasi)
    {
        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $tgl_pelaksanaan = explode(" - ", $this->input->post('tgl_pelaksanaan'));
        $tgl1 = ubah_tgl($tgl_pelaksanaan[0]);
        $tgl2 = ubah_tgl($tgl_pelaksanaan[1]);
        $data = [
            'nama_kegiatan' => $nama_kegiatan,
            'tgl_awal' => $tgl1,
            'tgl_akhir' => $tgl2
        ];
        $simpan = $this->M_informasi->update_informasi($data, $id_informasi);
        if (!$simpan) {
            $this->session->set_flashdata('success', 'Event '.$nama_kegiatan.' berhasil diubah.');
        } else {
            $this->session->set_flashdata('warning', 'Evenet gagal diubah.');
        } 
        redirect('informasi_pendaftaran');
    }

    public function delete($id_informasi)
    {
        $simpan = $this->M_informasi->delete_informasi($id_informasi);
        if (!$simpan) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('warning', 'Data gagal dihapus.');
        } 
        redirect('informasi_pendaftaran');
    }

}

/* End of file Informasi_pendaftaran.php */
