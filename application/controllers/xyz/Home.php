<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class Home extends CI_Controller{

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

			$this->load->view('guest/aspi',$data);
	}
}