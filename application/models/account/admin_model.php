<?php

class admin_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	//
	function check_user_account($username,$password){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get();
	}
	
	function get_user($id_admin){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin',$id_admin);

		return $this->db->get();
	}	
	
}
?>