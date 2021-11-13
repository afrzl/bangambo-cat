<?php

class M_nilai extends CI_model {

	public function cek_nilai($id_peserta, $id_soal){
		$this->db->where('id_peserta', $id_peserta);
		$this->db->where('id_soal ', $id_soal);
		return $this->db->get('tbl_nilai');
		
	}

	public function update_nilai($id_peserta, $id_soal, $nilai){
		$this->db->where('id_peserta', $id_peserta);
		$this->db->where('id_soal ', $id_soal);
		$this->db->update('tbl_nilai', $nilai);
		
	}
	
	public function input_nilai($data){
		$this->db->insert('tbl_nilai', $data);
		
	}

	public function peserta_nilai($id_peserta){
		$this->db->select('*');
		$this->db->from('tbl_nilai');
		$this->db->join('tbl_soal', 'tbl_soal.id_soal = tbl_nilai.id_soal', 'left');
		$this->db->order_by('tbl_nilai.id_soal', 'ASC');
		$this->db->where('tbl_nilai.id_peserta', $id_peserta);
		return $this->db->get();
		
	}
	
	public function data_nilai($id_lab){
		$sts = "Selesai";
		$this->db->select('*');
		$this->db->from('tbl_peserta');
		$this->db->join('tbl_jawaban', 'tbl_jawaban.id_peserta = tbl_peserta.id_peserta', 'left');
		$this->db->where('tbl_jawaban.status_jawaban', $sts);	
		$this->db->where('tbl_peserta.id_lab', $id_lab);
		return $this->db->get();
	}
}