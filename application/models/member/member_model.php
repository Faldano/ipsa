<?php
class member_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function insert_temp_member($data){
		$this->db->insert('temp_member',$data);
	}
		
	function check_user_account($username,$password){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get();
	}


	function select_all(){
		$this->db->select('*');
		$this->db->from('temp_member');
		$this->db->order_by('id_temp','desc');

		return $this->db->get();
	}
	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('temp_member');
		$this->db->order_by('id_temp','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

		return $this->db->get();
	}


	function delete_member($id_temp){
		$this->db->where('id_temp',$id_temp);
		$this->db->delete('temp_member',$data);
	}


	


}
