// UNTUK URL APP BE TERKAIT SERVICE BE BISNIS 

const URL_SERVICE_CI = "http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_MANEKIN_GALIH/service_ci/";
const URL_SERVICE_LARAVEL = "http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_MANEKIN_GALIH/service_laravel/";

// UNTUK URL APP BE TERKAIT SERVICE BE FILE
const URL_SERVICE_FILE = "http://localhost/My_Script/SCRIPT_PROJECT/client_product/Konsep_OOP/APP_BASE_CI_3/APP_MANEKIN_GALIH/service_file/";

function get_userLogin() {
	//Ini diambil dari sesi login user 
	return "USER_HEADER_LOGIN_TESTING"
}

//  Untuk melakukan GET data ke API
function get_data( url_endpoint, callback ) {

	/*
	CONTOH RESPONSE

	KALO SUKSES 
	[ {}, {}, {} ]

	KALO GAGAL
	{
		status false:,
		msg : "" 
	}
	*/

	//Melakukan permintaan dan menerima data berupa bentuknya data JSON
	console.log("+++ Melakukan request GET ke", url_endpoint)
	$.ajax({
		url: url_endpoint,  // URL endpoint
		type: "GET",          // Metode HTTP (GET / POST)
		contentType : "application/JSON", //Bentuk data yang dikirim
		headers: {
			'user_login': get_userLogin(),
		},
		dataType: "json", //Bentuk data yasng diterima
		success: function( response ) {
			console.log(response);
			callback( response );
		},
		error: function(xhr, status, error) {
			callback( xhr );
			alert("Error data "); 
			console.error("Error:", error);
			console.error("Error Msg XHR:", xhr);
		}
	})
}


//  Untuk melakukan POST data ke API
function post_dataForm( endpoint, form_data, callback ) {
	//Endppoint ini disarankan nilai yang diambil dari atribut action form 
	console.log("Menjalankan fungsi post_dataForm", form_data);
	//Ubah ke object
	var endpoint = URL_SERVICE_CI + endpoint;
	post_data( endpoint, form_data, callback );
}
function post_data( url_endpoint, data = {}, callback = false ) {

	/*
	CONTOH RESPONSE
	
	KALO SUKSES 
	{
		status true:,
		msg : ""
	}

	KALO GAGAL
	{
		status false:,
		msg : "" 
	}
	*/

	//Handling callbacks
	if (callback == false) {
		callback = function( s ) {
			return 1;
		}
	}
	//INGAT data yang diterima itu dalam bentuk JSON
	// argumen untuk parameter data berbentuk Object
	$.ajax({
		url: url_endpoint,  // URL endpoint
		type: "POST",          // Metode HTTP (GET / POST)
		// contentType : "application/JSON", //Bentuk data yang dikirim
		headers: {
			'user_login': get_userLogin(),
		},
		dataType: "json", //Bentuk data yasng diterima itu json dan otomaatis akan diubah ke bentuk object
		data : data, 
		success: function( response ) {
			//response berbentuk Object yang otomaris sudah diubah ke Object karena nilai dataTypenya adalah json
			callback( response );
		},
		error: function(xhr, status, error) {
			callback( xhr );
			alert("Error data "); 
			console.error("Error:", error);
			console.log("Error:", error);
			console.error("Error Msg XHR:", xhr);
		}
	})
}