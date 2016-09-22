<?php
class event_model extends CI_Model{

	function construct(){

	parent::__construct();
	$this->load->database();
	}

	function insert_event($data_base){
		$this->db->insert('event',$data_base);
	}

	function select_some(){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->order_by('id_event','desc');
		$this->db->limit(4);
		
		return $this->db->get();
	}

	function select_all(){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->order_by('id_event','desc');

		return $this->db->get();
	}
	function select_all_paging($limit=array()){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->order_by('id_event','desc');

		if($limit != NULL)
			$this->db->limit($limit['perpage'],$limit['offset']);

		return $this->db->get();
	}

	function select_by_id($id_event){
		$this->db->select('*');
		$this->db->from('event');
		$this->db->where('id_event',$id_event);

		return $this->db->get();
	}

	function update_event($id_event,$data){
		$this->db->where('id_event',$id_event);
		$this->db->update('event',$data);
	}

	function delete_event($id_event,$data){
		$this->db->where('id_event',$id_event);
		$this->db->delete('event',$data);
	}




}