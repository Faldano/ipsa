<?php
class jurnalis_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert_jurnalis($data){
		$this->db->insert('jurnalis',$data);

	}

	function select_some(){
		$this->db->select('*');
		$this->db->from('jurnalis');
		$this->db->order_by('id_jurnalis','desc');
		$this->db->limit(4);
		
		return $this->db->get();
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('jurnalis');
		$this->db->order_by('id_jurnalis','desc');

		return $this->db->get();
	}
	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('jurnalis');
		$this->db->order_by('id_jurnalis','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

		return $this->db->get();
	}

	function select_by_id($id_jurnalis){
		$this->db->select('*');
		$this->db->from('jurnalis');
		$this->db->where('id_jurnalis',$id_jurnalis);

		return $this->db->get();
	}
	function select_by_judul($judul){
		$this->db->select('*');
		$this->db->from('jurnalis');
		$this->db->like('judul',$judul,'both');
		return $this->db->get();
	}

	function update_jurnalis($id_jurnalis,$data){
		$this->db->where('id_jurnalis',$id_jurnalis);
		$this->db->update('jurnalis',$data);
	}

	function delete_jurnalis($id_jurnalis,$data){
		$this->db->where('id_jurnalis',$id_jurnalis);
		$this->db->delete('jurnalis',$data);
	}
}