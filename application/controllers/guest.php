<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class guest extends CI_Controller{

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
	public function index(){

			$data['daftar_event']	 = $this->event_model->select_some()->result();
			$data['daftar_artikel']	 = $this->artikel_model->select_some()->result();
			$data['daftar_jurnalis'] = $this->new_jurnalis->select_some()->result();

			$this->load->view('guest/aspi', $data);
	}
	

	public function about(){
		$this->load->view('guest/about');
	}

	public function contact(){
		$this->load->view('guest/contact');
	}

	public function registrasi(){
		$data['nama']		= $this->input->post('nama');
		$data['email']		= $this->input->post('email');
		$data['instansi']	= $this->input->post('instansi');
		$data['username']	= $this->input->post('username');
		$data['password']	= $this->input->post('password');

		$this->member_model->insert_temp_member($data);
		redirect(site_url('home'));

	}
	
	
	public function news($offset=0){
		$perpage=6;

		$config['base_url'] = site_url('guest/news');
		$config['total_rows'] = $this->artikel_model->select_all()->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 6;

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

	public function publication_single($id_jurnalpublik){
		
		$data['daftar_jurnalis'] = $this->new_jurnalis->select_by_id($id_jurnalpublik)->row();
		$this->load->view('guest/detail_jurnalis',$data);
	}

	public function publications($offset=0){
		

		$perpage=5;

		$config['base_url'] = site_url('guest/publications');
		$config['total_rows'] = $this->new_jurnalis->select_all()->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 5;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] = $offset;
		$page['perpage']=$perpage;

		$data['daftar_jurnalis'] = $this->new_jurnalis->select_all_paging($page)->result();
		$this->load->view('guest/daftar_jurnal',$data);
	}

	public function event_single($id_event){
		$data['daftar_event']	= $this->event_model->select_by_id($id_event)->row();
		$this->load->view('guest/event_single',$data);
	}


	public function events($offset=0){

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
}