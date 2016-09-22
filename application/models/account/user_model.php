<?php

class user_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	//
	function check_user_account($username,$password){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		
		return $this->db->get();
	}
	
	function get_user($id_member){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('id_member',$id_member);
		
		return $this->db->get();
	}	
	
}
?>