<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('level_admin')) {
            redirect('access_denied');
        }
    }
    

    public function formasi($id_lab)
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Data Nilai",
            'page' => "data_nilai",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            //side menu
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            //nama formasi lab
            'cek_lab' => $this->M_formasi_lab->cek_formasi_lab($id_lab)->result(),
            'data_nilai' => $this->M_nilai->data_nilai($id_lab)->result(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

}

/* End of file Data_nilai.php */
