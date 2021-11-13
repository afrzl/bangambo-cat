<?php

class M_formasi_lab extends CI_model {

	public function data_formasi_lab(){
		return $this->db->get('tbl_lab');
		
	}

	public function cek_formasi_lab($id_lab){
		$this->db->where('id_lab', $id_lab);
		return $this->db->get('tbl_lab');
		
	}
	
	public function input_formasi_lab($data){
		$this->db->insert('tbl_lab', $data);
		
	}

	public function update_formasi_lab($data, $id_lab){
		$this->db->where('id_lab', $id_lab);
		$this->db->update('tbl_lab', $data);
		
	}
	
	public function delete_formasi_lab($id_lab){
		$this->db->where('id_lab', $id_lab);
		$this->db->delete('tbl_lab');
		
	}
	
}
