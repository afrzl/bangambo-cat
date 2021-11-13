<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan_soal extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('level_admin')) {
            redirect('access_denied');
        }
    }

    private function action($id_event, $id_soal, $id_pertanyaan)
    {
        $link = "
        <a href='".base_url('pertanyaan_soal/edit/'.$id_event.'/'.$id_soal.'/'.$id_pertanyaan)."' data-toggle='tooltip' data-placement='top' title='Edit'>
            <button type='button' class='btn btn-success btn-flat'>
            <i class='fa fa-edit'></i></button>
        </a>
        <a href='".base_url('pertanyaan_soal/delete/'.$id_event.'/'.$id_soal.'/'.$id_pertanyaan)."' data-toggle='tooltip' data-placement='top' title='Delete' id='btn-hapus'>
            <button type='button' class='btn btn-danger btn-flat'><i class='fa fa-trash'></i></button>
        </a>
        ";
        return $link;
    }
    

    public function soal($id_event, $id_soal)
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'page' => "pertanyaan_soal",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            //sidebar
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            'kode1' => $id_soal,
            'kode2' => $id_event,
            'nama_event' => $this->M_informasi->nama_event($id_event)->result(),
            'nama_mapel' => $this->M_jenis_soal->nama_soal($id_soal)->result(),
            'data_pertanyaan' => $this->M_pertanyaan->data_pertanyaan($id_soal)->num_rows(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function input($id_event, $id_soal)
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Input Soal",
            'page' => "pertanyaan_tambah",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            //sidebar
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            'kode1' => $id_soal,
            'kode2' => $id_event,
            'nama_event' => $this->M_informasi->nama_event($id_event)->result(),
            'nama_soal' => $this->M_jenis_soal->nama_soal($id_soal)->result(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function input_proses($id_event, $id_soal)
    {
        $id_informasi = $id_event;
        $id_soal = $id_soal;
        $pertanyaan = $this->input->post('pertanyaan');
        $option_1 = $this->input->post('option_1');
        $option_2 = $this->input->post('option_2');
        $option_3 = $this->input->post('option_3');
        $option_4 = $this->input->post('option_4');
        $option_5 = $this->input->post('option_5');
        $jawaban = $this->input->post('jawaban');
        $data = [
            'id_informasi' => $id_informasi,
            'id_soal' => $id_soal,
            'pertanyaan' => $pertanyaan,
            'option_1' => $option_1,
            'option_2' => $option_2,
            'option_3' => $option_3,
            'option_4' => $option_4,
            'option_5' => $option_5,
            'jawaban' => $jawaban
        ];
        $simpan = $this->M_pertanyaan->input_pertanyaan($data);

        if (!$simpan) {
            $this->session->set_flashdata('success', 'Soal berhasil ditambah.');
        } else {
            $this->session->set_flashdata('warning', 'Data gagal disimpan.');
        } 
        redirect('pertanyaan_soal/soal/'.$id_informasi.'/'.$id_soal);
    }

    public function edit($id_event, $id_soal, $id_pertanyaan)
    {
        $id_admin = $this->session->userdata('id_admin');
        $data = [
            'title' => "Edit Soal",
            'page' => "pertanyaan_edit",
            'user' => $this->M_panitia->get_panitia($id_admin)->result(),
            //sidebar
            'formasi_lab' => $this->M_formasi_lab->data_formasi_lab()->result(),
            'jenis_soal' => $this->M_jenis_soal->data_jenis_soal()->result(),
            'kode1' => $id_soal,
            'nama_soal' => $this->M_jenis_soal->nama_soal($id_soal)->result(),
            'nama_event' => $this->M_informasi->nama_event($id_event)->result(),
            'tampil_edit' => $this->M_pertanyaan->tampil_edit($id_pertanyaan)->result(),
        ];
        $this->load->view('v_admin/v_app', $data);
    }

    public function edit_proses($id_event, $id_soal, $id_pertanyaan)
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $option_1 = $this->input->post('option_1');
        $option_2 = $this->input->post('option_2');
        $option_3 = $this->input->post('option_3');
        $option_4 = $this->input->post('option_4');
        $option_5 = $this->input->post('option_5');
        $jawaban = $this->input->post('jawaban');
        $data = [
            'pertanyaan' => $pertanyaan,
            'option_1' => $option_1,
            'option_2' => $option_2,
            'option_3' => $option_3,
            'option_4' => $option_4,
            'option_5' => $option_5,
            'jawaban' => $jawaban
        ];
        $simpan = $this->M_pertanyaan->update_pertanyaan($data, $id_pertanyaan);

        if (!$simpan) {
            $this->session->set_flashdata('success', 'Soal berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('warning', 'Data gagal disimpan.');
        } 
        redirect('pertanyaan_soal/soal/'.$id_event.'/'.$id_soal);
    }

    public function delete($id_event, $id_soal, $id_pertanyaan)
    {
        $simpan = $this->M_pertanyaan->delete_pertanyaan($id_pertanyaan);
        if (!$simpan) {
            $this->session->set_flashdata('success', 'Soal berhasil dihapus');
        } else {
            $this->session->set_flashdata('danger', 'Data gagal dihapus.');
        } 
        redirect('pertanyaan_soal/soal/'.$id_event.'/'.$id_soal);
    }

    public function ajax_get_pertanyaan($id_event, $id_soal)
    {
        $list = $this->M_pertanyaan->get_pertanyaan($id_soal);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $personal) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $personal->pertanyaan;
            $row[] = $personal->jawaban;
            $row[] = $this->action($id_event, $id_soal, $personal->id_pertanyaan);
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_pertanyaan->count_all($id_soal),
            "recordsFiltered" => $this->M_pertanyaan->count_filtered($id_soal),
            "data" => $data,
        );
        //output to json
        echo json_encode($output);
    }

}

/* End of file Pertanyaan_soal.php */
