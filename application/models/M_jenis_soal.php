<?php

class M_jenis_soal extends CI_model {

	public function data_jenis_soal(){
		return $this->db->get('tbl_soal');
		
	}

	public function list_jenis_soal($id_informasi){
		$this->db->where('id_informasi', $id_informasi);
		return $this->db->get('tbl_soal');
		
	}
	
	public function input_jenis_soal($data){
		$this->db->insert('tbl_soal', $data);
		
	}

	public function update_jenis_soal($data, $id_soal){
		$this->db->where('id_soal', $id_soal);
		$this->db->update('tbl_soal', $data);
		
	}
	
	public function delete_jenis_soal($id_soal){
		$this->db->where('id_soal', $id_soal);
		$this->db->delete('tbl_soal');
		
	}

	public function nama_soal($id_soal){
		$this->db->where('id_soal', $id_soal);
		return $this->db->get('tbl_soal');
		
	}
	
}
