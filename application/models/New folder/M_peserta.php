<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peserta extends CI_Model {

    public function cek_peserta($nim)
    {
        return $this->db->get_where('tbl_peserta', array('nim' => $nim));
    }

}

/* End of file ModelName.php */
