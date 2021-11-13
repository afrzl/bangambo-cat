<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {

    
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('level_admin') != "2")
        {
            redirect('access_denied');
        }
    }
    

    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Dashboard Panitia",
            'page' => "dashboard_panitia",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            'lab' => $this->M_formasi_lab->data_formasi_lab()->num_rows(),
            'soal' => $this->M_jenis_soal->data_jenis_soal()->num_rows(),
            'pertanyaan' => $this->M_pertanyaan->tot_pertanyaan()->num_rows(),
            'peserta' => $this->M_peserta->tot_peserta()->num_rows()
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function edit()
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Panitia Setting",
            'page' => "panitia_edit",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function edit_password($id_admin)
    {
        $this->form_validation->set_rules('new_password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[8]|matches[new_password]');
        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'warning' => validation_errors()
            );
            $this->session->set_flashdata($data); 
            redirect('panitia/edit');
        } else {
            $password = $this->input->post('new_password');
            $data = array(
                'password' => $this->encryption->encrypt($password)
            );
            $simpan = $this->M_panitia->update_panitia($data, $id_admin);
            if (!$simpan) {
                $this->session->set_flashdata('success', 'Password berhasil diperbarui.');
                redirect('panitia');
            } else {
                $this->session->set_flashdata('warning', 'Password gagal diperbarui.');
                redirect('panitia');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');   
    }

}

/* End of file Panitia.php */
