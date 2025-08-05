<?php 


//Class Model Ini untuk menangkap header user login yang dikirimkan oleh user melalui ajax jquery request 
class Base_service extends CI_Model{


	public $user_login;// Diisi dari nilai request user 
	public function __construct(){

		$header = getallheaders(); // Hanya tersedia jika menggunakan Apache/Nginx

		if ( isset( $header['user_login'] ) ) {
			$this->user_login = $header['user_login'];
		}else{
			$this->user_login = "TIDAK_ADA_USER_LOGIN";
		}
		

	}

}


?>