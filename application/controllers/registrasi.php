<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class Registrasi extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');

		$this->load->model('artikel/artikel_model');
		$this->load->model('jurnalis/jurnalis_model');
		$this->load->model('jurnalis/new_jurnalis');
		$this->load->model('event/event_model');
		$this->load->model('member/member_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->library('input');



public function index(){

		$data['nama']		= $this->input->post('nama');

		$data['email']		= $this->input->post('email');

		$data['instansi']	= $this->input->post('instansi');

		$data['username']	= $this->input->post('username');

		$data['password']	= $this->input->post('password');



		$this->member_model->insert_temp_member($data);

		redirect(site_url('home'));



	}
}