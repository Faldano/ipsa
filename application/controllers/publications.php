<?php if(! defined('BASEPATH'))exit('No direct access allowed');

class Publications extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('jurnalis/new_jurnalis');
		$this->load->library('form_validation');
		$this->load->library('pagination');


	}
	
	public function index($offset=0){
		

		$perpage=5;

		$config['base_url'] = site_url('publications/index');
		$config['total_rows'] = $this->new_jurnalis->select_all()->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] = $offset;
		$page['perpage']=$perpage;

		$data['daftar_jurnalis'] = $this->new_jurnalis->select_all_paging($page)->result();
		$this->load->view('publications/index_jurnal',$data);
	}
	// public function ajax(){
	// 	$data['daftar_jurnalis'] = $this->new_jurnalis->select_all()->result();
	// 	$this->load->view('publication/view_jurnal',$data);

	// }
	// public function all_journal(){
	// 	$data['daftar_jurnalis']=$this->new_jurnalis->select_all()->result();
	// 	$this->load->view('publication/all_journal',$data);
	// }

	// public function search(){
	// 	$this->load->view('publications/carijurnal');

	// }

	public function search_journal($offset=0){
		$judul= $this->input->post('judul');
		$perpage=5;

		$config['base_url'] = site_url('publications/index');
		$config['total_rows'] = $this->new_jurnalis->select_by_judul($judul)->num_rows();
		$config['per_page'] = $perpage;
		$config['uri_segment']= 3;

		$this->pagination->initialize($config);
		
		$data['pagination'] = $this -> pagination -> create_links();
		$page['offset'] = $offset;
		$page['perpage']=$perpage;
		// echo $judul;
		$data['daftar_jurnalis'] = $this->new_jurnalis->select_by_judul($judul)->result();
		
		$this->load->view('publications/all_journal',$data);
	}
	function cari_cari(){
		$judul= $this->input->post('judul');

		$data['daftar_jurnalis'] = $this->new_jurnalis->select_by_judul($judul)->result();
		$this->load->view('publication/all_journal',$data);
	}
	
	public function publication_single($id_jurnalpublik){
		
		$data['daftar_jurnalis'] = $this->new_jurnalis->select_by_id($id_jurnalpublik)->row();
		$this->load->view('publication/detail_jurnalis',$data);
	}

}