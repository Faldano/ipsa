<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class Member extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('input');
		$this->load->model('artikel/artikel_model');
		$this->load->model('jurnalis/jurnalis_model');
		$this->load->model('event/event_model');
		$this->load->model('member/member_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');


	}
	public function index(){
		$this->load->view('member/form_login');
	}

	public function about(){
		$this->load->view('member/about');
	}

	public function contact(){
		$this->load->view('member/contact');
	}
	public function home(){
		$data['daftar_event']		 = $this->event_model->select_some()->result();
			$data['daftar_artikel']	 = $this->artikel_model->select_some()->result();
			$data['daftar_jurnalis'] = $this->jurnalis_model->select_some()->result();
		$this->load->view('home',$data);
	}
	
	public function login(){
	$username=$this->input->post('username','true');
	$password=$this->input->post('password','true');
	
	$temp_account =$this->member_model->check_user_account($username,$password)->row();
	//
	$num_account= count($temp_account);
	
	$this->form_validation->set_rules('username','Username','required');
	$this->form_validation->set_rules('password','Password','required');
	
	if($this->form_validation->run()==FALSE){
		$this->load->view('member/aspi');
	}else{
		if($num_account>0){
			//
			$array_items=array(
								'id_member'=>$temp_account->id_member,
								'username'=>$temp_account->username,
								'logged_in' => true);
			$this-> session->set_userdata($array_items);
			redirect(site_url('member/login_successful'));
		}else{
			//
			$this->session->set_flashdata('notification','alert :username and password did not match');
			redirect(site_url('member'));
		}
	}
	
	}
	
	public function login_successful(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('member'));
			}
			$data['daftar_event']	 = $this->event_model->select_some()->result();
			$data['daftar_artikel']	 = $this->artikel_model->select_some()->result();
			$data['daftar_jurnalis'] = $this->jurnalis_model->select_some()->result();
			$this->load->view('home', $data);
	}
	public function logout(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('member'));
			}
		$this-> session->sess_destroy();
		redirect(site_url('home'));
	}


	// public function view_member(){
	// 	$logged_in=$this->session->userdata('logged_in');
	// 		if(!$logged_in){
	// 			redirect(site_url('member'));
	// 		}
	// 	$data['daftar_artikel']	 = $this->artikel_model->select_some()->result();
	// 	$data['daftar_jurnalis'] = $this->jurnalis_model->select_some()->result();
	// 	$data['daftar_event']	 = $this->event_model->select_some()->result();
	// 	$this->load->view('home',$data);
	// }
	public function news($offset=0){
		$perpage=6;

		$config['base_url'] 	= site_url('member/news');
		$config['total_rows'] 	= $this->artikel_model->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	= $perpage;

		$data['daftar_artikel']	= $this->artikel_model->select_all_paging($page)->result();
		$this->load->view('publik/daftar_artikel',$data);
	}

	public function news_single($id_artikel){
		$data['daftar_artikel']	= $this->artikel_model->select_by_id($id_artikel)->row();
		$this->load->view('publik/detail_artikel',$data);
	}



	public function publication_single($id_jurnalis){
		
		$data['daftar_jurnalis'] = $this->jurnalis_model->select_by_id($id_jurnalis)->row();
		$this->load->view('publik/detail_jurnalis',$data);
	}

	public function publications($offset=0){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('member'));
			}

		$perpage=5;

		$config['base_url'] 	= site_url('member/publications');
		$config['total_rows'] 	= $this->jurnalis_model->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	=$perpage;

		$data['daftar_jurnalis'] = $this->jurnalis_model->select_all_paging($page)->result();
		$this->load->view('publik/daftar_jurnal',$data);
	}
	public function search_journal($offset=0){
		$judul= $this->input->post('judul');
		$perpage=5;

		$config['base_url'] 	= site_url('member/index');
		$config['total_rows'] 	= $this->jurnalis_model->select_by_judul($judul)->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	=$perpage;
		// echo $judul;
		$data['daftar_jurnalis'] = $this->jurnalis_model->select_by_judul($judul)->result();
		
		$this->load->view('publik/daftar_jurnal',$data);
	}

	public function common_publication($common){
		$data['common_jurnalis'] = $this->jurnalis_model->common_publication($common)->result();
		$this->load->view('member/common_pub',$data);

	}

	public function specified_publication($specified){
		$data['specified_jurnalis'] = $this->jurnalis_model->specified_publication($common)->result();
		$this->load->view('member/specified_pub',$data);
	}

	public function event_single($id_event){
		$data['daftar_event']	= $this->event_model->select_by_id($id_event)->row();
		$this->load->view('publik/event_single',$data);
	}


	public function events($offset=0){

		$perpage=5;

		$config['base_url'] 	= site_url('member/events');
		$config['total_rows'] 	= $this->event_model->select_all()->num_rows();
		$config['per_page']		= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	=$perpage;

	$data['daftar_event']	= $this->event_model->select_all_paging($page)->result();
	$this->load->view('publik/daftar_event',$data);
	}
}