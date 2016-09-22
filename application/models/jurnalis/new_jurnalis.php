<?php 
class new_jurnalis extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function select_all(){
		$this->db->select('*');
		$this->db->from('jurnal_publik');
		$this->db->order_by('id_jurnalpublik','desc');

		return $this->db->get();
	}
	function select_some(){
		$this->db->select('*');
		$this->db->from('jurnal_publik');
		$this->db->order_by('id_jurnalpublik','desc');
		$this->db->limit(4);

		return $this->db->get();
	}

	function insert_jurnalis($data){
		$this->db->insert('jurnal_publik',$data);
	}
	function select_jurnalis($id_jurnalis){
		$this->db->select('judul');
		$this->db->select('deskripsi');
		$this->db->select('link');
		$this->db->from('jurnalis');
		$this->db->where('id_jurnalis',$id_jurnalis);

		return $this->db->get();
	}
	function select_by_id($id_jurnalpublik){
		$this->db->select('*');
		$this->db->from('jurnal_publik');
		$this->db->where('id_jurnalpublik',$id_jurnalpublik);

		return $this->db->get();
	}

	function update_jurnal($id_jurnalpublik,$data){
		$this->db->where('id_jurnalpublik',$id_jurnalpublik);
		$this->db->update('jurnal_publik',$data);

	}
	function select_by_judul($judul){
		$this->db->select('*');
		$this->db->from('jurnal_publik');
		$this->db->like('judul',$judul,'both');
		return $this->db->get();
	}


	function delete_jurnal($id_jurnalpublik,$data){
		$this->db->where('id_jurnalpublik',$id_jurnalpublik);
		$this->db->delete('jurnal_publik',$data);
	}

	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('jurnal_publik');
		$this->db->order_by('id_jurnalpublik','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

		return $this->db->get();
	}

	



}