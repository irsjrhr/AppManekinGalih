
<?php  


class Base_model extends CI_Model{

	public $data_tipe_upload;
	
	public function validasi_level_wajib(){
		//Saat pertama kali user ditambahkan, maka levelnya akan menjadi user
		$this->load->model('Level_model');
		$data_level_wajib = ['admin', 'user_student', 'user_guru'];
		//Jadi wajib hukumnya ada row pada tabel data level dengan nilai nama_levelnya adalah yang ada di $data_level_wajib
		$param_level = true;
		$level_tidak_ada = [];
		foreach ($data_level_wajib as $key => $level) {
			$row_level_user = $this->Level_model->get_single( ['nama_level' => $level ] );
			// var_dump($row_level_user);
			//Jika row level yang wajib belum dibuat di tabel admin, maka proses tambah user atau registrasi user tidak bisa dilakukan 
			if ( empty($row_level_user)  ) {
				$param_level = false;
				$level_tidak_ada[] = $level;
				break;	
			}
		}


		//Kalo ada 1 aja level wajib tidak terdaftar di data_level, maka aplikasi tidak akan berjalan semestinya
		if ( $param_level == false ) {
			session_destroy();
			$msg = "SYSTEM ERROR!! data row dengan nama wajib yaitu $level belum dibuat di data_level. Silahkan buat dulu level wajibnya di menu admin level!!!";
			redirect('Error?msg='.$msg);
			die;
		}

	}

	public function __construct(){

		//Untuk menjadi pilihan section
		$this->data_tipe_upload = ["video", "file"];
	}	

	//=========== Berkaitan dengan nilai dan data statis aplikasi =========================
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
	public function send_response( $data_result = [], $status = 200) {
		http_response_code($status);

		// $result = [
		// 	"status" => bool,
		// 	"msg" => "",
		// 	"data" => [],
		// ];

		echo json_encode($data_result);
		exit;
	}
}


































