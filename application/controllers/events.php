<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class Events extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('input');
		$this->load->model('artikel/artikel_model');
		$this->load->model('jurnalis/jurnalis_model');
		$this->load->model('jurnalis/new_jurnalis');
		$this->load->model('event/event_model');
		$this->load->model('member/member_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');


	}
	


	public function index($offset=0){

		$perpage=3;

		$config['base_url'] = site_url('guest/events');
		$config['total_rows'] = $this->event_model->select_all()->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] = $offset;
		$page['perpage']=$perpage;

	$data['daftar_event']	= $this->event_model->select_all_paging($page)->result();
	$this->load->view('guest/daftar_event',$data);
	}

	public function event_single($id_event){
		$data['daftar_event']	= $this->event_model->select_by_id($id_event)->row();
		$this->load->view('guest/event_single',$data);
	}
}