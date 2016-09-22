<?php 
class new_member extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert_member($data){
		$this->db->insert('member',$data);
	}
	function select_all(){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->order_by('id_member','desc');

		return $this->db->get();
	}
	function select_member($id_temp){
		$this->db->select('nama');
		$this->db->select('email');
		$this->db->select('instansi');
		$this->db->select('username');
		$this->db->select('password');
		$this->db->from('temp_member');
		$this->db->where('id_temp',$id_temp);

		return $this->db->get();
	}

	function delete_member($id_member){
		$this->db->where('id_member',$id_member);
		$this->db->delete('member',$data);

	}

	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->order_by('id_member','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

		return $this->db->get();
	}



}