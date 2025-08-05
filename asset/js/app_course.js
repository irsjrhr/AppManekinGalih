	

$(document).ready(function() {


	// ++++++ Event Terkait Box Indicator Fitur ++++++++=
	$('.row_box_indicator .box_indicator').on('click', function(e) {
		var box_indicator_target = $(this);

		$('.row_box_indicator .box_indicator').removeClass('active');
		box_indicator_target.addClass('active');

		open_box_page();
	});
	$('.row_box_indicator .box_indicator').eq(0).click(); //Membuka box indicator di urutan pertama


	// ++++++++ Event Terkait Container View Page ++++++++++++
	//Event menutup container_view_page
	$('.container_view_page .btn_close_view').on('click', function() {
		container_view_page('hide');
	});
	
	//Event btn download di container_view_page
	$('.container_view_page .btn_download').on('click', function() {
		var btn_download = $(this);
		download_media(btn_download);
	});
	//Event btn_view_page untuk membuka container_view_page dengan container_page berdasarkan id target ataupun parent
	$('.btn_view_page').on('click', function() {
		var btn_view_page = $(this);
		open_container_view_page( btn_view_page );
	});	

	// Menghasilkan qr code untuk semua parent dengan class .container_qr 
	open_qrAll();


	// ++++++ Event Terkait Mentor ++++++++++

	//Mengahapus data row di task
	$('.btn_delete_task').on('click', function() {
		var btn = $(this);
		var box_dataRow = btn.parents('.box_dataRow');
		var box_dashboard_page = box_dataRow.parents('.box_dashboard');
		var data_idRow = box_dataRow.attr('data-idRow');

		// Skema asynchronous
		var msg = "Menghapus data row box task dengan data id " + data_idRow; 
		console.log(msg);
		alert(msg);
		// box_dataRow.hide();
	});
	$('.btn_hapus_lesson').on('click', function() {
		alert('Menghapus Lesson');
	});

	//Memberikan nilai awal pada input slider passing grade
	passing_grade_setData( 0 );

	//Toggle Switchs
	toggle_setData();
	$('form').find('.toggle_switch').on('click', function() {
		var toggle_switch = $(this);

		if ( toggle_switch.is('.ACTIVE') ) {
			//Jadikan DISABLED
			toggle_disabled(toggle_switch);
		}else if (toggle_switch.is(".DISABLED")) {
			//Jadikan ACTIVE
			toggle_active(toggle_switch);
		}
	});


	// container_view_page("show");
	// container_page("#submission_absensi");

});



// ++++++++++++ Terkait Fitur Media +++++++++++++++
function passing_grade_setData( nilai_awal = 0 ) {
	// Input passing grade
	var input_passing_grade = $('input[name=passing_grade]');
	var output_passing_grade = $('#output');
	input_passing_grade.on('input', function () {
		output_passing_grade.text($(this).val());
	});
	//Kasih nilai passing grade awal persentase
	input_passing_grade.val(nilai_awal);
	output_passing_grade.val(nilai_awal);
}

// ++++++++++++ Terkait Fitur Absensi +++++++++++++++

function toggle_setData() {
	//Melakukan penetapan nilai awal ke toggle switch dan inputnya berdasarkan data-toggle pada .form_toggle
	//Nilai data-toggle ini nantinya di isi dari nilai database lesson untuk absen
	//Nilainya berdasarkan value awal dari data-toggle form_toggle
	var form_toggle = $('.form_toggle');
	var data_toggle = form_toggle.attr('data-toggle');
	var toggle_switch = $('.toggle_switch');
	if ( data_toggle == "ACTIVE"  ) {
		//Jika input toggle aktif, jadikan togglenya active
		toggle_active( toggle_switch );
	}else if ( data_toggle == "DISABLED" ) {
		//Jika input toggle disable, jadikan togglenya disable
		toggle_disabled( toggle_switch );
	}else {
		//Jika input toggle tidak punya nilai atau nilainya tidak sesuai, jadikan toggle disabled
		toggle_disabled( toggle_switch );
	}
}

function toggle_active( toggle_switch ) {
	//Jadikan toggle mode active dengan nilai ACTIVE

	var form_toggle = toggle_switch.parents('.form_toggle');
	var indicator_toggle = form_toggle.find('.indicator_toggle');
	var caption_toggle = form_toggle.find('.caption_toggle');
	var input_toggle = form_toggle.find('.input_toggle');

	//Update ke Mode Disabled
	toggle_switch.removeClass('DISABLED');
	var update_val = "ACTIVE";
	toggle_switch.addClass(update_val);
	caption_toggle.text(update_val);
	input_toggle.val(update_val);
}

function toggle_disabled( toggle_switch ) {
	//Jadikan toggle mode disabled dengan nilai DISABLED
	var form_toggle = toggle_switch.parents('.form_toggle');
	var indicator_toggle = toggle_switch.find('.indicator_toggle');
	var caption_toggle = $('.caption_toggle');
	var input_toggle = form_toggle.find('.input_toggle');

	//Update ke Mode Disabled
	toggle_switch.removeClass('ACTIVE');
	var update_val = "DISABLED";
	toggle_switch.addClass(update_val);
	caption_toggle.text(update_val);
	input_toggle.val(update_val);
}
function open_qrAll() {
	//Membuat qr code untuk semua element parent yang memiliki parent .container_qr dengan traversing 
	var container_qr_all = $('.container_qr');
	for (var i = 0; i < container_qr_all.length; i++) {
		var container_qr = $('.container_qr').eq(i);
		open_qr( container_qr );
	}
}
function open_qr(container_qr) {
	var data_url = container_qr.attr('data-url');
	var qrcode_obj = container_qr.find('.qrcode');
	var text_url = container_qr.find('#text_url');
	//Buat qrnya 
	generateQR( qrcode_obj, data_url);
	//Implementasi ke text url
	text_url.text( data_url );
	text_url.attr( 'href', data_url );
}
function generateQR( qrcode_obj, url, scale_qrcode = 7) {
	console.log('generate qr code dengan url', url)
	/*	
	- qrcode_obj itu object barcode atau kalo di container_qr dengan id qrcode
	- url itu adalah nilai url untuk dijadikan rujukan barcode
	- scale_qrcode adalah nilai ukuran barcode
	*/
	qrcode_obj.html(); 

	var qr = qrcode(0, 'H');
	qr.addData(url);
	qr.make();
	var qr_result = qr.createImgTag(scale_qrcode);
	qrcode_obj.html(qr_result);

}


// ++++++++++++ Terkait Fitur Media +++++++++++++++
function download_media( btn_download ) {
	var data_href = btn_download.attr('data-href');
	downloadFile( data_href );
}
function downloadFile(url, fileName) {
	const link = document.createElement("a");
	link.href = url;
	link.download = fileName;
	document.body.appendChild(link);
	link.click();
	document.body.removeChild(link);
}





//  +++++++++++ Terkait row box indicator fitur +++++++++++++++
function open_box_page() {
	var row_box_indicator = $('.row_box_indicator');
	var box_indicator_active = row_box_indicator.find('.box_indicator').filter('.active');
	var data_target_id = box_indicator_active.attr('data-target-id');

	var row_box_page  = $('.row_box_page');
	var box_page = row_box_page.find('.box_dashboard');
	var box_page_active = box_page.filter('.active');
	var id_page = "#"+data_target_id;
	var box_page_target = box_page.filter(id_page);


	box_page_active.removeClass('active');
	box_page_target.addClass('active');

	console.log('Membuka box page', id_page);
}


//  +++++++++++ Method Terkait container_page dan container_view_page +++++++++++++++
function open_container_view_page( btn_view_page ) {
	console.log("++++++++ Menjalankan open_container_view_page() +++++++++");

	// Evenet ini membuka container page dan container_view_page yang referensinya melalui btn_view_page 
	//Container page akan terbuka dengan 2 pendekatan kondisi jenis btn_view_page
	//Jika btn_view_page tersebut memiliki atribut data-idPage-target, maka container page akan dibuka berdasarkan nilai atribut tersebut
	// Tapi jika kondisi tadi tidak terpenuhi atau btn_view_page tidak punya atribut tersebut, maka container page akan dibuka berdasarkan id parent dari btn_view_page
	//Parentnya ini ada 2 element yaitu .btn_view_page di dalam .box_dashboard dan .btn_view_page di dalam .container_page
	// Untuk btn_view_page yang parentnya .box_dashboard, maka dia akan ambil id targetnya dari id box_dashboard  
	// Untuk btn_view_page yang parentnya .container_page, maka dia akan ambil id targetnya dari id container_page  

	//+++++ Membuka container_view_page sebagai wadah
	container_view_page('show');

	//+++++ Membuka container_page berdasarkan id_page_target 
	var id_page_target;
	//Menentukan sumber id_page_target container_pagenya 
	var parent_boxDashboard = btn_view_page.parents('.box_dashboard');
	var parent_containerPage = btn_view_page.parents('.container_page');
	if ( btn_view_page.attr('data-idPage-target') != undefined ) {
		console.log("btn_view_page membuka berdasarkan data-idPage-target");
		//Jika ada atribut data-idPage-target, maka buka berdasarkan nilai atribut tersebut
		id_page_target = btn_view_page.attr('data-idPage-target');
		id_page_target = "#" + id_page_target;
		// alert(id_page_target);

	}else if ( parent_boxDashboard.length > 0 || parent_containerPage.length > 0 ) {
		//Membuka berdasarkan id parent dan jenis dari btn_view_page ( Tambah Atau Update )
		console.log("btn_view_page membuka berdasarkan id parent_reference");

		var parent_reference;
		if ( parent_boxDashboard.length > 0 ) {
			//Jika btn_view_page ada di dalam atau perentnya .box_dashboard
			parent_reference = parent_boxDashboard;
		}else if ( parent_containerPage.length > 0 ) {
			//Jika btn_view_page ada di dalam atau perentnya .container_page
			parent_reference = parent_containerPage;
		}
		//Mengambil id dari parent nya dan set sebagai id_page_target 
		var id_valFitur = parent_reference.attr('id');
		id_page_target = "#" + id_valFitur; 

		//Mengecek apakah btn_view_page termasuk ke dalam button yang memiliki container_page yang spesifik, jika terpenuhi maka tambahkan prefix untuk id_page target seusai dengan aturannya 
		//Khusus untuk yang ada class .btn_view_tambah maka akan ditambahkan tambah_ jadi : #tambah_{id_page_target}
		//Khusus untuk yang ada class .btn_view_update  maka akan ditambahkan update_ jadi : #update_{id_page_target}
		//Kenapa pengecekan hanya dilakukan ketika dia di dalem .box_dashboard atau .container_page. Karena jenis button tersebut HANYA BOLEH ADA DI DALAM PARENT TERSEBUT.
		if ( btn_view_page.is('.btn_view_tambah') ) {
			id_page_target = "#tambah_" + id_valFitur;
		}else if( btn_view_page.is('.btn_view_update') ) {
			id_page_target = "#update_" + id_valFitur;
		}
	}else{
		console.log('TIDAK DAPAT MEMBUKA CONTAINER_PAGE KARENA TIDAK ADA sumber nilai yang bisa dijadi id target untuk container_pagenya baik dari atribut data-idPage-target ataupun parent box_dashboard atau container_page');
	}


	//Membuka container page berdasarkan id_page_target
	container_page( id_page_target );
	return false;
}
function container_page( id_page = "#id_container_page" ) {
	//Membuka container_page berdasarkan id_page dari container_page itu sendiri

	var container_page_el = $('.container_page');
	container_page_el.removeClass('active');
	container_page_el.filter(id_page).addClass('active');
	console.log("Membuka container_page dengan id", id_page);
}
function container_view_page( param = "show" ) {
	//Kalo mau load integrasi data ada disini 

	var container_view_page_el = $('.container_view_page');
	if ( param == "show" ) {
		var txt = "buka"
		container_view_page_el.addClass('active');

	}else if ( param == "hide") {
		var txt = "tutup"

		container_view_page_el.removeClass('active');
	}
	console.log(txt, "container_view_page");
}




var data = {

	row_lesson : { 
		nama_lesson : "",
		deskripsi : "",
		status_absensi : "",
		id_file_video : "",
		source_file : "", 
		nama_file : "", 
	},

	data_lesson_media : [
	{ id_lesson_media : "", nama_media : "", deskripsi : "", id_file : "", source_file : "", nama_file : ""},  
	{ id_lesson_media : "", nama_media : "", deskripsi : "", id_file : "", source_file : "", nama_file : ""}
	],


	data_lesson_tugas : [
	{ id_lesson_tugas : "", nama_tugas : "", deskripsi : "", batas_waktu: "",id_file_media : "", source_file : "", nama_file : ""},  
	{ id_lesson_tugas : "", nama_tugas : "", deskripsi : "", batas_waktu: "",id_file_media : "", source_file : "", nama_file : ""},  
	],

	data_lesson_quiz : [
	{ id_lesson_quiz : "",  passing_grade: "", durasi_waktu: "", batas_waktu: "", status_quiz : "", id_quiz : "", nama_quiz : "", deskripsi : "" },  
	{ id_lesson_quiz : "",  passing_grade: "", durasi_waktu: "", batas_waktu: "", status_quiz : "", id_quiz : "", nama_quiz : "", deskripsi : "" },  
	],




}


