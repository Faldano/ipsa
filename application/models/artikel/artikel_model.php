<?php
class artikel_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert_artikel($data){
		$this->db->insert('artikel',$data);

	}

	function select_some(){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->order_by('id_artikel','desc');
		$this->db->limit(3);

		return $this->db->get();
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->order_by('id_artikel','desc');

		return $this->db->get();
	}

	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->order_by('id_artikel','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

			return $this->db->get();
	}

	function select_by_id($id_artikel){
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('id_artikel',$id_artikel);

		return $this->db->get();
	}

	function update_artikel($id_artikel,$data){
		$this->db->where('id_artikel',$id_artikel);
		$this->db->update('artikel',$data);
	}

	function delete_artikel($id_artikel,$data){
		$this->db->where('id_artikel',$id_artikel);
		$this->db->delete('artikel',$data);
	}
}