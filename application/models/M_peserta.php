<?php

class M_peserta extends CI_model {

	/*
	| ----------------------SERVER SIDE DATA PERTANYAAN----------------------------------
	*/

	private $column_order = array(null, 'id_peserta', 'id_lab','nim', 'nama_peserta', 'ipk', 'berkas_peserta', 'tgl_selesai_pendaftaran','status_verifikasi'); //set column field database for datatable orderable
	private $column_search = array('id_peserta', 'id_lab','nim', 'nama_peserta', 'ipk', 'berkas_peserta', 'tgl_selesai_pendaftaran','status_verifikasi'); //set column field database for datatable searchable 
	private $order = array('id_peserta' => 'asc'); // default order 

	private function tabel_peserta($id_lab)
	{
		$sts = "Selesai";
		$this->db->select('*');
		$this->db->from('tbl_peserta');
		$this->db->where('status_pendaftaran', $sts);	
		$this->db->where('id_lab', $id_lab);	
	}

	private function _get_query($id_lab) {
		$this->tabel_peserta($id_lab);

		$i = 0;
		foreach ($this->column_search as $item) { // loop column 
			if($_POST['search']['value']) { // if datatable send POST for search
				
				if($i===0){ // first loop
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])){ // here order processing
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order)){
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function get_peserta($id_lab) {
		$this->_get_query($id_lab);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		
		return $query->result();
	}

	public function count_filtered($id_lab) {
		$this->_get_query($id_lab);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all($id_lab) {
		$this->tabel_peserta($id_lab);
		return $this->db->count_all_results();
	}
	
	/*
	| -------------------------------------------------------------------
	*/


	public function input_peserta($data){
		$this->db->insert('tbl_peserta', $data);
		
	}

	public function tot_peserta(){
		return $this->db->get('tbl_peserta');
		
	}

	public function cek_peserta($nim){
		return $this->db->get_where('tbl_peserta', array('nim' => $nim));
		
	}

	public function peserta_id($id_peserta){
		return $this->db->get_where('tbl_peserta', array('id_peserta' => $id_peserta));
		
	}

	public function data_peserta($id_peserta){
		$this->db->select('*');
		$this->db->from('tbl_peserta');
		$this->db->join('tbl_lab', 'tbl_lab.id_lab = tbl_peserta.id_lab', 'left');
		$this->db->where('tbl_peserta.id_peserta',$id_peserta);
		return $this->db->get();
		
	}

	public function cetak_peserta($id_lab){
		$status_verifikasi = "Lulus";
		$this->db->select('nim, nama_peserta, ipk');
		$this->db->from('tbl_peserta');
		$this->db->where('tbl_peserta.id_lab',$id_lab);
		$this->db->where('tbl_peserta.status_verifikasi',$status_verifikasi);
		$this->db->order_by('tbl_peserta.nim', 'ASC');
		return $this->db->get();
		
	}

	public function update_peserta($data, $id_peserta){
		$this->db->where('id_peserta', $id_peserta);
		$this->db->update('tbl_peserta', $data);
		
	}

}