<?php 


class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	//View untuk sidebar main container 
	public function view(){

		$data_sidebar = $this->Base_model->data_sidebar_admin;
		$data['data_modal_menu'] = $this->Base_model->data_modalMenu_admin;
		$data['data_sidebar'] = $data_sidebar;
		$this->load->view('Admin/header', $data );
		$this->load->view('template/alert_flasher');
		$this->load->view('Admin/footer', $data);
		$this->load->view('Admin/modal_menu_admin', $data);
		$this->load->view('File/modal_select_file', $data);
	}
	//++++++++++ Route Utama User Membuka Aplikasi +++++++++++++ 
	public function index(){
		$data = [];
		$this->view();
	}
	//+++++++ Method dibawah akan ditampilkan dengan asynchronous SPA pada javascript melalui index +++++++++++
	public function dashboard(){
		$this->load->view( 'Admin/dashboard');
	}
	public function account(){	
		$data = [];
		$this->load->view( 'Admin/account', $data );
	}
	public function level(){
		$data = [];
		$this->load->view( 'Admin/level', $data);
	}	


}







