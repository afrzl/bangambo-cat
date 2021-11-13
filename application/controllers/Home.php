<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = [
            'title' => "Home",
            'page' => "home",
            'informasi' => $this->M_informasi->data_informasi()->result(),
        ];
        $this->load->view('v_home/v_app', $data);
    }

    public function formasi_asisten()
    {
        $data = [
            'title' => "Formasi Asisten",
            'page' => "formasi_asisten",
            'formasi_asisten' => $this->M_formasi_lab->data_formasi_lab()->result(),
        ];
        $this->load->view('v_home/v_app', $data);
    }

    public function alur_pendaftaran()
    {
        $data = [
            'title' => "Alur Pendaftaran",
            'page' => "alur_pendaftaran",
            'informasi' => $this->M_informasi->data_informasi()->result(),
        ];
        $this->load->view('v_home/v_app', $data);
    }

    public function passing_grade()
    {
        $data = [
            'title' => "Passing Grade",
            'page' => "passing_grade",
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
        ];
        $this->load->view('v_home/v_app', $data);
    }

    public function about_us()
    {
        $data = [
            'title' => "About Us",
            'page' => "about_us",
        ];
        $this->load->view('v_home/v_app', $data);
    }

    public function download($nama)
    {
        $nama_files = $nama;
        $download = 'uploads/pengumuman/';
        if (!file_exists($download.$nama_files)) {
            $error = "<h3>Access forbidden!</h3>
            <p> Anda tidak diperbolehkan mendownload file ini.</p>";
            $this->session->set_flashdata('warning', $error); 
            redirect('formasi_lab');
        } else {
            header("Content-Type: octet/stream");
            header("Content-Disposition: attachment; filename=\"".$nama_files."\"");
            $fp = fopen($download.$nama_files, "r");
            $data = fread($fp, filesize($download.$nama_files));
            fclose($fp);
            print $data;
        }
    }

}

/* End of file Home.php */
