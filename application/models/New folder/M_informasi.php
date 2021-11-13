<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_informasi extends CI_Model {

    public function data_informasi()
    {
        //mengambil data pada tbl_informasi yg tesimpan pada database
        return $this->db->get('tbl_informasi');
    }

    public function update_informasi($data, $id_informasi)
    {
        $this->db->where('id_informasi', $id_informasi);
        $this->db->update('tbl_informasi', $data);
    }

}

/* End of file ModelName.php */
