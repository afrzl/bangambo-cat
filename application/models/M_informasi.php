<?php

class M_informasi extends CI_model {

	public function data_informasi(){
		return $this->db->get('tbl_informasi');
		
	}

	public function nama_event($id_informasi){
		$this->db->where('id_informasi', $id_informasi);
		return $this->db->get('tbl_informasi');
		
	}

	public function input_informasi($data)
	{
		$this->db->insert('tbl_informasi', $data);	
	}

	public function update_informasi($data, $id_informasi){
		$this->db->where('id_informasi', $id_informasi);
		$this->db->update('tbl_informasi', $data);
	}

	public function delete_informasi($id_informasi)
	{
		$this->db->where('id_informasi', $id_informasi);
		$this->db->delete('tbl_informasi');
	}
	
}
