<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Formasi_lab extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('level_admin')) {
            redirect('access_denied');
        }
    }
    

    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Formasi Lab",
            'page' => "formasi_lab",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result()
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function input()
    {
        $nama_lab = ucwords($this->input->post('nama_lab'));
        $jumlah_formasi = $this->input->post('jumlah_formasi');
        
        $config['upload_path'] = './uploads/pengumuman/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = '2048';
        
        $this->upload->initialize($config);
        
        if ( ! $this->upload->do_upload('lampiran')){
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('warning', $error); 
            redirect('formasi_lab');
        } else {
            $lampiran = $this->upload->data('file_name');
            $data = array(
                'nama_lab' => $nama_lab,
                'jumlah_formasi' => $jumlah_formasi,
                'lampiran' => $lampiran
            );
            $simpan = $this->M_formasi_lab->input_formasi_lab($data);
            if (!$simpan) {
                $this->session->set_flashdata('success', 'Data formasi laboratorium berhasil disimpan.');
            } else {
                $this->session->set_flashdata('warning', 'Data gagal disimpan.');
            } 
            redirect('formasi_lab');
        }
    }

    public function edit($id_lab)
    {
        $nama_lab = ucwords($this->input->post('nama_lab'));
        $jumlah_formasi = $this->input->post('jumlah_formasi');
        $lokasi_file = $_FILES['lampiran']['tmp_name'];
        if ($lokasi_file == "") {
            $data = [
                'nama_lab' => $nama_lab,
                'jumlah_formasi' => $jumlah_formasi
            ];
            $simpan = $this->M_informasi_lab->update_formasi_lab($data, $id_lab);
            if (!$simpan) {
                $this->session->set_flashdata('info', 'Data formasi '.$nama_lab.' Berhasil diperbarui.');
            } else {
                $this->session->set_flashdata('warning', 'Data gagal diperbarui');
            } 
            redirect('formasi_lab');
        } else {
            $config['upload_path'] = './uploads/pengumuman/';
            $config['allowed_types'] = 'pdf';
            $config['max_size']  = '2048';
            
            $this->upload->initialize($config);
            
            if ( ! $this->upload->do_upload('lampiran')){
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('warning', $error); 
                redirect('formasi_lab');
            } else {
                $lampiran = $this->upload->data('file_name');
                $data = [
                    'nama_lab' => $nama_lab,
                    'jumlah_formasi' => $jumlah_formasi,
                    'lampiran' => $lampiran
                ];
                $simpan = $this->M_formasi_lab->update_formasi_lab($data, $id_lab);
                if (!$simpan) {
                    $this->session->set_flashdata('info', 'Data formasi '.$nama_lab.' Berhasil diperbarui.');
                } else {
                    $this->session->set_flashdata('warning', 'Data gagal diperbarui');
                } 
                redirect('formasi_lab');
            }
        }
    }

    public function delete($id_lab)
    {
        $simpan = $this->M_formasi_lab->delete_formasi_lab($id_lab);
        if (!$simpan) {
            $this->session->set_flashdata('danger', 'Data berhasil dihapus.');
        } else {
            $this->session->set_flashdata('warning', 'Data gagal dihapus.');
        }
        redirect('formasi_lab');
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

/* End of file Formasi_lab.php */
