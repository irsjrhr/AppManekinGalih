<?php 

class Auth extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function view( $view, $data = []){
		$this->load->view( "Auth/header", $data );
		$this->load->view( $view, $data );
		$this->load->view( "Auth/footer", $data );
		$this->load->view( "template/alert_flasher", $data );
	}
	public function index(){
		//Tampilan form login
		$data =[];
		$this->view('Auth/index', $data);
	}
	public function sign(){	
		//Tampilan form login
		$data =[];
		$this->view('Auth/sign', $data);
	}
	public function logout(){
		redirect('Auth');
		echo "Logout";
	}


}