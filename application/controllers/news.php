<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class News extends CI_Controller{

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
		$perpage=6;

		$config['base_url'] = site_url('news/index');
		$config['total_rows'] = $this->artikel_model->select_all()->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] = $offset;
		$page['perpage']=$perpage;

		$data['daftar_artikel']	= $this->artikel_model->select_all_paging($page)->result();
		$this->load->view('guest/daftar_artikel',$data);
	}

	public function news_single($id_artikel){
		$data['daftar_artikel']	= $this->artikel_model->select_by_id($id_artikel)->row();
		$this->load->view('guest/detail_artikel',$data);
	}
}
