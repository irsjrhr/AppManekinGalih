
<?php  


class Base_model extends CI_Model{

	public 
	$data_sidebar_admin,
	$data_sidebar_user,
	$data_modalMenu_admin,
	$data_modalMenu_user,
	$data_tipe_upload;
	
	public function __construct(){

		//Untuk menjadi pilihan section
		$this->data_tipe_upload = ["video", "file"];


		//+++++++++ Admin +++++++++

		//Menu untuk sidebar admin 
		$this->data_sidebar_admin = [ 
			[ "menu" => "Dashboard", "icon" => "fas fa-th-large", "url" => base_url("Admin/dashboard") ],
			[ "menu" => "Atur Level", "icon" => "fas fa-key", "url" => base_url("Admin/level") ],
			[ "menu" => "Atur Account", "icon" => "fas fa-users", "url" => base_url("Admin/account") ],
			// [ "menu" => "Atur Lesson", "icon" => "fas fa-clock", "url" => base_url("Admin/lesson") ],
			// [ "menu" => "Atur Media Lesson", "icon" => "fas fa-file", "url" => base_url("Admin/lesson_media") ],
			// [ "menu" => "Atur File", "icon" => "fas fa-upload", "url" => base_url("Admin/file") ],
		];
		//Menu untuk modal menu nav admin 
		$this->data_modalMenu_admin =  [
			[ "menu" => "Panel User", "icon" => "fas fa-users", "url" => base_url("Panel") ],
			[ "menu" => "Logout", "icon" => "fas fa-sign-out-alt", "url" => base_url("Auth/logout") ],
		];



		//+++++++++ User +++++++++
		//Menu untuk sidebar user ( )
		$this->data_sidebar_user =  [
			[ "menu" => "Dashboard", "icon" => "fas fa-th-large", "url" => base_url("Panel") ],
			// [ "menu" => "My Course", "icon" => "fas fa-book", "url" => base_url("Panel/my_course") ],
			[ "menu" => "Setting", "icon" => "fas fa-cog", "url" => base_url("Panel/setting") ],
		];

	}	

	//=========== Berkaitan dengan nilai dan data statis aplikasi =========================

	public function get_userLogin(){
		return "admin";
	}
	public function set_url( $controller ){
		//Method untuk membuat url pada data basis menu
		return base_url() . $controller;
	}
	public function waktu(){
		return date('Y-m-d');
	}
	public function status(){
		return 'ACTIVE';
	}

	//++++++ Method untuk menampilkan listing url option pada setiap row data di table controller fitur admin
	private 
	$target_controller, 
	$id_row_param;
	private function set_url_menuOpt( $method ){
		$url = base_url() . $this->target_controller . $method  . $this->id_row_param;
		return $url;
	}
	
	//=========== Berkaitan dengan akun sesi aplikasi =========================
	private $key_sesiUser = "login_user";
	// public function get_userLogin(){

	// 	//Nantinya ini akan diambil dari session user yang sedang login 
	// 	$login = false;
	// 	if ( $this->session->userdata($this->key_sesiUser) ) {
	// 		$login = $this->session->userdata($this->key_sesiUser);
	// 	}
	// 	return $login;
	// }

	public function set_sesi_loginUser( $row_db = [] ){
		$this->session->set_userdata( 'login_user', $row_db['user'] );
		$this->session->set_userdata( 'login_level', $row_db['level'] );
	}
	public function cek_sesi_loginUser(){
		// return 1;
		//Jika tidak ada sesi user login, maka tidak boleh masuk ke fitur fitur end user
		if ( !$this->session->userdata($this->key_sesiUser) ) {
			$this->session->set_flashdata('msg_login', 'Harap login terlebih dahulu!');
			redirect('Auth');	
		}
	}



}


































