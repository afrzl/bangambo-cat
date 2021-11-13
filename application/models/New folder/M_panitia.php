<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_panitia extends CI_Model {

    public function cek_panitia($username)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('username', $username);
        return $this->db->get();
    }

    public function get_panitia($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->get('tbl_admin');
    }

    public function update_panitia($data, $id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('tbl_admin', $data);
    }

    public function data_panitia()
    {
        $level_admin = "2";
        $this->db->where('level_admin', $level_admin);
        return $this->db->get('tbl_admin');
    }

    public function input_panitia($data)
    {
        $this->db->insert('tbl_admin', $data);
    }

    public function delete_panitia($data, $id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->delete('tbl_admin');
    }

}

/* End of file M_panitia.php */
