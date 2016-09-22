<?php if(!defined('BASEPATH'))exit('No direct acess allowed');

class login_by_navatari extends CI_Controller{
	
function __construct(){
		parent::__construct();
		$this->load->model('account/admin_model');
		$this->load->model('event/event_model');
		$this->load->model('member/member_model');
		$this->load->model('member/new_member');
		$this->load->model('jurnalis/jurnalis_model');
		$this->load->model('jurnalis/new_jurnalis');
		$this->load->model('artikel/artikel_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}
	
	//
	public function index(){
		$this->load->view('admin/form_login');
	}
	
	public function login(){
	$username=$this->input->post('username','true');
	$password=$this->input->post('password','true');
	
	$temp_account =$this->admin_model->check_user_account($username,$password)->row();
	//
	$num_account= count($temp_account);
	
	$this->form_validation->set_rules('username','Username','required');
	$this->form_validation->set_rules('password','Password','required');
	
	if($this->form_validation->run()==FALSE){
		$this->load->view('admin/form_login');
	}else{
		if($num_account>0){
			//
			$array_items=array('id_admin'=>$temp_account->id_admin,'username'=>$temp_account->username,'logged_in' => true);
			$this-> session->set_userdata($array_items);
			redirect(site_url('login_by_navatari/publications'));
		}else{
			//
			$this->session->set_flashdata('notification','username n password didnt match');
			redirect(site_url('login_by_navatari'));
		}
	}
	
	}
	
	public function view_success_page(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

			$this->load->view('admin/view_admin');
	}
	public function logout(){
		$this-> session->sess_destroy();
		redirect(site_url('login_by_navatari'));
	}


	//NEWS AND ARTIKELS

	public function index_artikel($offset=0){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
		$perpage=6;


		$config['base_url'] 		= site_url('login_by_navatari/index_artikel');
		$config['total_rows']		= $this->artikel_model->select_all()->num_rows();
		$config['per_page'] 		= $perpage;
		$config['uri_segment']		= 3;

		$this->pagination->initialize($config);

		$data['pagination'] 		= $this -> pagination -> create_links();
		$page['offset'] 			= $offset;
		$page['perpage']			= $perpage;

		$data['pagination'] 		= $this -> pagination -> create_links();
		$data['daftar_artikel'] 	= $this->artikel_model->select_all_paging($page)->result();
		$this->load->view('admin/daftar_artikel',$data);
	}

	

	public function add_artikel(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
		$this->load->view('admin/form_add_artikel',array('error' =>''));
	}

	public function proses_add_artikel(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
	

		
			$config['upload_path']		='./upload/';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= '2048';
			
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload()){
				$error=array('error'=>$this->upload->display_errors());
				$this->load->view('admin/form_add_artikel',$error);
			}
			else{
				$upload_data = $this->upload->data();
				
				$data = array('upload_data'=>$upload_data);

				$data_base['title']			=$this->input->post('title');
				$data_base['information']	=$this->input->post('information');
				$data_base['image']			=$upload_data['file_name'];


				$this->artikel_model->insert_artikel($data_base);
				redirect(site_url('login_by_navatari/index_artikel'));
				
			}
	}

	public function edit_artikel($id_artikel){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$data['artikel']=$this->artikel_model->select_by_id($id_artikel)->row();
		$this->load->view('admin/form_edit_artikel', $data);
	}

	public function proses_edit_artikel($id_artikel){
		$data['title']			= $this->input->post('title');
		$data['information']	= $this->input->post('information');
		$id_artikel				= $this->input->post('id_artikel');


		$this->artikel_model->update_artikel($id_artikel,$data);
		redirect(site_url('login_by_navatari/index_artikel'));
				
				
	}
	public function news_single($id_artikel){
		$data['daftar_artikel']	= $this->artikel_model->select_by_id($id_artikel)->row();
		$this->load->view('admin/detail_artikel',$data);
	}

	public function delete_artikel($id_artikel){
		$this->artikel_model->delete_artikel($id_artikel);
		redirect(site_url('login_by_navatari/index_artikel',$data));
	}

	//PUBLICATIONS AND JOURNALS

	public function publications($offset=0){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$perpage=5;

		$config['base_url'] 	= site_url('login_by_navatari/publications');
		$config['total_rows'] 	= $this->jurnalis_model->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination']			= $this -> pagination -> create_links();
		$page['offset'] 			= $offset;
		$page['perpage']			=$perpage;
		$data['daftar_jurnalis'] 	= $this->jurnalis_model->select_all_paging($page)->result();
		$this->load->view('admin/daftar_jurnal',$data);
	}
		
	public function publication_single($id_jurnalis){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$data['daftar_jurnalis'] = $this->jurnalis_model->select_by_id($id_jurnalis)->row();
		$this->load->view('admin/detail_jurnal',$data);
	}

	public function add_jurnalis(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
		$this->load->view('admin/form_add_jurnalis');
	}

	public function proses_add_jurnalis(){
		$data['judul']		= $this->input->post('judul');
		$data['deskripsi']	= $this->input->post('deskripsi');
		$data['link']		= urlencode($this->input->post('link'));

		$this->jurnalis_model->insert_jurnalis($data);
		redirect(site_url('login_by_navatari/publications'));
	}

	public function add_to_publik($id_jurnalis){
		$this->load->model('jurnalis/new_jurnalis');
		$data = $this->new_jurnalis->select_jurnalis($id_jurnalis)->row_array();

		$this->new_jurnalis->insert_jurnalis($data);

		redirect(site_url('login_by_navatari/publications'));
	}

	public function edit_jurnalis($id_jurnalis){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$data['jurnalis']=$this->jurnalis_model->select_by_id($id_jurnalis)->row();
		$this->load->view('admin/form_edit_jurnal',$data);
	}

	public function proses_edit_jurnalis($id_jurnalis){
		$data['judul']		= $this->input->post('judul');
		$data['deskripsi']	= $this->input->post('deskripsi');
		$data['link']		= $this->input->post('link');
		$id_jurnalis		= $this->input->post('id_jurnalis');


		$this->jurnalis_model->update_jurnalis($id_jurnalis,$data);
		redirect(site_url('login_by_navatari/publications'));

	}

	public function delete_jurnalis($id_jurnalis){
	$this->jurnalis_model->delete_jurnalis($id_jurnalis);
	redirect(site_url('login_by_navatari/publications',$data));
	}


	// PUBLICATIONS GUEST
	public function publications_guest($offset=0){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$perpage=5;

		$config['base_url'] 	= site_url('login_by_navatari/publications_guest');
		$config['total_rows'] 	= $this->new_jurnalis->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] 		= $this -> pagination -> create_links();
		$page['offset'] 			= $offset;
		$page['perpage']			= $perpage;

		$data['daftar_jurnalis'] 	= $this->new_jurnalis->select_all_paging($page)->result();
		$this->load->view('admin/jurnal_guest',$data);
	}


		
	public function publication_guest_single($id_jurnalpublik){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$data['daftar_jurnalis'] = $this->new_jurnalis->select_by_id($id_jurnalpublik)->row();
		$this->load->view('admin/detail_jurnal_guest',$data);
	}


	public function edit_jurnal($id_jurnalpublik){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$data['jurnal_publik']=$this->new_jurnalis->select_by_id($id_jurnalpublik)->row();
		$this->load->view('admin/form_edit_jurnal_guest',$data);
	}



	public function proses_edit_jurnal($id_jurnalpublik){

		$data['judul']		= $this->input->post('judul');
		$data['deskripsi']	= $this->input->post('deskripsi');
		$data['link']		= $this->input->post('link');
		$id_jurnalpublik	= $this->input->post('id_jurnalpublik');


		$this->new_jurnalis->update_jurnal($id_jurnalpublik,$data);
		redirect(site_url('login_by_navatari/publications_guest'));

	}	


	public function delete_jurnal_guest($id_jurnalpublik){
		$this->new_jurnalis->delete_jurnal($id_jurnalpublik);
		redirect(site_url('login_by_navatari/publications_guest',$data));
	}



	// EVENTS AND MEETINGS
	public function index_event($offset=0){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$perpage=5;

		$config['base_url'] 	= site_url('login_by_navatari/index_event');
		$config['total_rows'] 	= $this->event_model->select_all()->num_rows();
		$config['per_page']		= $perpage;
		$config['uri_segment']	= 5;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	= $perpage;


	$data['daftar_event']	= $this->event_model->select_all_paging($page)->result();
	$this->load->view('admin/daftar_event',$data);
	}

	public function add_event(){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$this->load->view('admin/form_add_event',array('error' =>''));

	}

	public function proses_add_event(){

			$config['upload_path']	='./upload/';
			$config['allowed_types']= 'gif|jpg|png';
			$config['max_size']		= '2048';
			//$config['max_width']= '1024';
			//$config['max_height']= '768';
			
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload()){
				$error=array('error'=>$this->upload->display_errors());
				$this->load->view('event/form_add_event',$error);
			}
			else{
				$upload_data = $this->upload->data();
				
				$data = array('upload_data'=>$upload_data);

				$data_base['judul']			=$this->input->post('judul');
				$data_base['deskripsi']		=$this->input->post('deskripsi');
				$data_base['tgl']			=$this->input->post('tgl');
				$data_base['waktu']			=$this->input->post('waktu');
				$data_base['tempat']		=$this->input->post('tempat');

				$data_base['picture']		=$upload_data['file_name'];


				$this->event_model->insert_event($data_base);
				redirect(site_url('login_by_navatari/index_event'));
				
			}
	}

	function edit_event($id_event){
		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
		$data['event']=$this->event_model->select_by_id($id_event)->row();
		$this->load->view('admin/form_edit_event',$data);
	}

	public function proses_edit_event($id_event){
		$data['judul']			= $this->input->post('judul');
		$data['deskripsi']		= $this->input->post('deskripsi');
		$data['tempat']			= $this->input->post('tempat');
		$data['tgl']			= $this->input->post('tgl');
		$data['waktu']			= $this->input->post('waktu');
		$id_event				= $this->input->post('id_event');

		$this->event_model->update_event($id_event,$data);
		redirect(site_url('login_by_navatari/index_event'));

	}

	public function delete_event($id_event){
		$this->event_model->delete_event($id_event);
		redirect(site_url('login_by_navatari/index_event',$data));

	}
	//MEMBERSHIP

	public function index_member($offset=0){

		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}

		$perpage=10;

		$config['base_url'] 	= site_url('login_by_navatari/index_member');
		$config['total_rows'] 	= $this->new_member->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] 	= $this -> pagination -> create_links();
		$page['offset'] 		= $offset;
		$page['perpage']		=	$perpage;

		$data['daftar_member'] 	= $this->new_member->select_all_paging($page)->result();

	$this->load->view('admin/daftar_member',$data);

	

	}

	public function index_temp_member($offset=0){

		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}


		$perpage=10;

		$config['base_url'] 	= site_url('login_by_navatari/index_temp_member');
		$config['total_rows'] 	= $this->member_model->select_all()->num_rows();
		$config['per_page'] 	= $perpage;
		$config['uri_segment']	= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] 	= $offset;
		$page['perpage']	=$perpage;


		$data['daftar_temp_member'] = $this->member_model->select_all_paging($page)->result();

		$this->load->view('admin/daftar_temp_member',$data);
	}


	public function proses_add_member($id_temp){
		$this->load->model('member/new_member');
		$data = $this->new_member->select_member($id_temp)->row_array();
		$this->new_member->insert_member($data);

		redirect(site_url('login_by_navatari/index_member'));


	}
	public function add_temp_member(){

		$logged_in=$this->session->userdata('logged_in');
			if(!$logged_in){
				redirect(site_url('login_by_navatari'));
			}
			
		$this->load->view('member/form_add_temp_member');
	}

	public function proses_add_temp_member(){
		$data['nama']		= $this->input->post('nama');
		$data['email']		= $this->input->post('email');
		$data['instansi']	= $this->input->post('instansi');
		$data['username']	= $this->input->post('username');
		$data['password']	= $this->input->post('password');
		//$data['sosmedia']	= urlencode($this->input->post('link'));

		$this->member_model->insert_temp_member($data);
		redirect(site_url('member'));
	}

	public function delete_temp_member($id_temp){
		$this->member_model->delete_member($id_temp);
		redirect(site_url('login_by_navatari/index_temp_member'));
	}

	public function delete_exist_member($id_member){
		$this->load->model('member/new_member');
		$this->new_member->delete_member($id_member);
		redirect(site_url('login_by_navatari/index_member'));
	}

	}
