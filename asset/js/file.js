// Script ini terhubung dengan api.js
var URL_SERVICE_APP = URL_SERVICE_FILE; //Tempat Aplikasi Service Route Utama Basis CI 
var URL_API_FILE_LOKAL = URL_SERVICE_APP + "File/"; //Controller service file di aplikasi route utama
var URL_API_FILE_CLOUD = URL_SERVICE_APP + "service_cloud/"; //URL SERVICE BE CLOUD untuk melakukan penyimpanan ke cloud yang terletak di aplikasi service file utama
var URL_ASSET_STORAGE = URL_SERVICE_APP + "asset_storage/"; //Tempat user menyimpan file secara lokal


$(document).ready(function() {

	//+++++++++++ Method Event untuk di modal select file dan modal tambah file asycn +++++++++++ ==================================================
	// $('#modal_select_file').modal('show');
	//Memunculkan semua modal tambah data di admin
	// $('#modal_tambah').modal('show');

	//Interopability file handling 	
	//Akan menambahkan element berkaitan dengan semua modal file upload section ke setiap form yang menggunakan class .form_file_upload
	el_form_file_upload();


	//Event untuk di modal tambah file untuk tipe penyimpanan
	validasi_tipe_penyimpanan();
	$('select[name=tipe_penyimpanan]').on('change', function(e) {
		validasi_tipe_penyimpanan();
	});

	//Modal ketika tombol Pilih di modal_select_file di tekan
	// Event untuk tombol submit untuk pilih file
	$('#modal_select_file .btn_submit_select').on('click', function(e) {
		submit_select_file();
	});

	//Melakukan asynchronous ajax untuk pertama kali dengan ambil data file yang di upload ketika modal select file muncul
	$('#modal_select_file').on('shown.bs.modal', function (event) {
		load_ajax_modalFileSelect();

	});
	// Event refresh ulang pada modal select file 
	$('.btn_refresh_select').on('click', function(e) {
		load_ajax_modalFileSelect();
	});

	// Event ajax untuk modal tambah file async untuk melakukan upload dan tambah data file secara asynchronous 
	// $('#modal_tambahFile_async').modal('show')
	$('#modal_tambahFile_async form').on('submit', function (e) {
		// e.preventDefault(); // Mencegah reload halaman

		console.log("Submit asynchronous untuk modal_tambahFile_async");

		var form = $(this);
		var modal_tambahFile_async = form.parents('.modal');
		let formData = new FormData(); // Membuat objek FormData

		let nama_file = modal_tambahFile_async.find('input[name=nama_file]').val();
		let tipe_penyimpanan = modal_tambahFile_async.find('select[name=tipe_penyimpanan]').val();
		let user_admin = modal_tambahFile_async.find('input[name=user_admin]').val();

		//Menambahkan data ke yang ingin dikirim
		formData.append('nama_file', nama_file); // Tambahkan file ke FormData
		formData.append('submit', "async"); // Tambahkan submit text ke FormData
		formData.append('tipe_penyimpanan', tipe_penyimpanan); // Tambahkan tipe penyimpanan text ke FormData
		formData.append('user_admin', user_admin); // Tambahkan user_admin ke FormData

		//Menentukan jenis file yang akan di upaload berdasarkan tipe penyimpanannya
		var URL_API_FILE; //Ditentukan berdasarkan tipe_penyimpanan
		if ( tipe_penyimpanan == "lokal" || tipe_penyimpanan ==  "cloud") {
			//Jika dipilih lokal atau cloud, maka tambahkan data form berupa object file yang di upload oleh client  
			let upload_file = form.find('input[name=upload_file]')[0].files[0]; // Ambil file dari input
			formData.append('upload_file', upload_file); // Tambahkan file ke FormData dan menjadikan paremeter di BE

			//Tentukan URL_API_FILE tempat menyimpan berdasarkan tipe penyimpanan server nya 
			if ( tipe_penyimpanan == "lokal" ) {
				URL_API_FILE = URL_API_FILE_LOKAL;
			}else if (  tipe_penyimpanan == "cloud" ){
				URL_API_FILE = URL_API_FILE_CLOUD;
			}
		}else{	
			//Jika dipilih lokal, maka tambahkan data form berupa url text 
			var url_file = form.find('input[name=url_file]').val();
			formData.append('url_file', url_file); // Tambahkan file ke FormData
		}  
		console.log(formData);

		//Munculkan load file
		el_load_modalFileTambah("show", "Menambahkan data....");

		//Melakukan upload data dan menambahkan ke database 
		$.ajax({
			url: URL_API_FILE_LOKAL, // Ganti dengan URL server
			type: 'POST',
			data: formData,
			processData: false, // Jangan memproses data
			contentType: false, // Jangan atur jenis konten
			success: function (res) {
				//res sudahdalam bentuk JSON
				var data_response = res;
				console.log("+++++ Response +++++++++ ");
				console.log( "Sebelum Parsing", res );
				console.log("Sesudah Parsing", data_response);
				if ( data_response.status == true ) {
					//Jika berhasil di tambahkan, maka reset form modal dan hilangkan modal modal_tambahFile_async ini
					modal_tambahFile_async.modal('hide');
					form.trigger('reset'); //Reset form

					// Hilangkan load ajax file tambah
					el_load_modalFileTambah("hide", "Upload berhasil dilakukan!");

					//Jika ada modal_select_file sedang terbuka, maka muat ulang data di modal select file 
					var modal_select_file = $('#modal_select_file');
					if ( modal_select_file.is(':visible') ) {
						load_ajax_modalFileSelect();
					}

				}else{
					var msg = data_response.msg;
					msg = "Upload gagal! karena " + msg;
					console.log(msg);
					el_load_modalFileTambah("hide", msg);
				}
			},
			error: function (xhr, textStatus, errorThrown) {
				var err_kode = xhr.status;
				var msg_err = '<p>Upload gagal: ' + errorThrown + err_kode + '</p>' ;
				el_load_modalFileTambah("show", msg_err);
				console.log( msg_err );
				console.log( xhr );
			}
		});

		return false; //Menghentikan form untuk submit asynchronous

	});
	//+++++++++++  End Of Method Event untuk di modal select file dan modal tambah file asycn +++++++++++ ==================================================


});
function open_modal_selectFile( btn_modal_selectFile ) {
	btn_modal_selectFile = $(btn_modal_selectFile);
	//Buat active .form_modal_file yang menjadi parent dari btn_modal_selectFile yang ditekan 
	// Hal ini dilakukan untuk memberikan tanda active jjadi ketika modal file submit, perubahan nilai file yang dipilih hanya yang form punya class active. 
	// Ini sangat penting ketika .form_modal_file lebih dari 1 dari setiap cycle
	var form_modal_file = $('.form_modal_file');
	var form_modal_file_target = btn_modal_selectFile.parents('.form_modal_file');
	//Hilangkan active .form_modal_file yang lainnya 
	form_modal_file.removeClass('active');

	//Berikan tanda active ke form_modal_file
	form_modal_file_target.addClass('active');

	var modal_select_file = $('#modal_select_file');
	modal_select_file.modal('show'); 
}

//+++++++++++ Fungsi untuk upload file asynchronous di modal select file dan modal tambah file async +++++++++++++++++++++++

function el_form_file_upload() { 
	//Akan menambahkan element berkaitan dengan semua modal file upload section ke setiap form yang menggunakan class .form_file_upload yang tidak punya class .not_upload
	//Jadi jika .form_file_upload punya class .not_upload, dia gak akan di tambahkan button untuk form file upload
	var form_file_upload = $('form').filter('.form_file_upload').not('.not_upload');
	var el_form_modal_file =  `
	<!-- Form Row Yang Terintegrasi dengan modal select file asynchronous -->
	<div class="form_modal_file" style="width: 100%; padding: 20px;">
	<h5 class='mb-3'> File/Media Pendukung </h5>
	<button type="button" class="btn btn-primary btn_modal_selectFile" onclick="open_modal_selectFile(this)">
	Pilih File
	</button>
	<span id="nama_file" class="ml-3"> NONE </span>
	<!-- Input hidden yang akan ditambahkan pada jsnya -->
	<input required type="hidden" name="id_file" id="id_file"> 
	<input required type="hidden" name="source_file" id="source_file"> 
	</div>
	<!-- End Of Form Row Yang Terintegrasi dengan modal select file asynchronous -->
	`;
	var jumlah_form = form_file_upload.length;
	if ( jumlah_form > 0 ) {
		console.log("Ada menambahkan element form_modal_file ke form dengan class .form_file_upload dengan jumlah form " + jumlah_form )
		

		form_file_upload.prepend( el_form_modal_file );
	}else{
		console.log("Tidak Ada menambahkan element form_modal_file ke form dengan class .form_file_upload dengan jumlah form " + jumlah_form )
	}
}

function el_load_modalFileTambah( param, text_load = "Loading...." ) {
	var modal_tambahFile_async = $('#modal_tambahFile_async');
	var el_load_ajax = modal_tambahFile_async.find('.load_ajax_data');
	var el_text_caption = el_load_ajax.find('.text_caption');

	el_text_caption.html( text_load );

	if ( param == "show" ) {
		el_load_ajax.show();
	}else if ( param == "hide" ) {
		el_load_ajax.hide();
	}

}

function el_load_modalSelectFile( param, text_load = "Loading....") {
	var modal_select_file = $('#modal_select_file');
	var el_load_ajax = modal_select_file.find('.load_ajax_data');
	var el_text_caption = el_load_ajax.find('.text_caption');

	el_text_caption.html( text_load );

	if ( param == "show" ) {
		el_load_ajax.show();
	}else if ( param == "hide" ) {
		el_load_ajax.hide();
	}

}

function load_ajax_modalFileSelect() {
	
	//Melakukan load data file 
	var modal_select_file = $('#modal_select_file');
	var el_row_col_file = modal_select_file.find('.row_col_file');
	var el_file_empty = modal_select_file.find('.row.file_empty');

	//Dikosongin duls agar diisi dengan yang baru
	el_file_empty.hide();
	el_row_col_file.html("");

	//Munculin indicator load 
	el_load_modalSelectFile('show', "Fetch data.....");

	//Melakukan request ke BE Modul File
	get_data( URL_API_FILE_LOKAL, function( response ) {

		var data_response = response; //Sudah dalam bentuk JSON

		//Hilangkan load animasi modal select file 
		el_load_modalSelectFile('hide', ":)");

		console.log( "Sesudah Parsing", data_response );

		// alert( data_response );
		if ( data_response.length > 0 ) {
			for (var i = 0; i < data_response.length; i++) {
				var row_obj = data_response[i]
				create_el_file( row_obj );
			}
		}else{
			el_file_empty.show();
		}
	});
}


function getFileIcon(ext_file) {
	// Kecilkan nama filenya 
	ext_file = ext_file.toLowerCase();

	// // Daftar ekstensi dan ikon yang sesuai
	const data_icon = {
		"dokumen.png": ["pdf", "docx", "xlsx", "pptx", "txt", 'sql'],
		"video.png": ["mp4", "avi", "mkv", "mov", "flv"],
		"gambar.png": ["jpg", "png", "gif", "bmp", "svg"]
	};
	var iconSrc = "none";
	Object.keys(data_icon).forEach(function(key_nama_file) {
		var row_icon = data_icon[key_nama_file];
		//Cari apakah existensi file yang di upload oleh user ada pada array setiap key. Kalo ada jadikan keynya tersebut sebagai src gambar icon. dan itu sudah ada di asset FEnya
		for (var i = 0; i < row_icon.length; i++) {
			var ext_file_db = row_icon[i];
			if ( ext_file === ext_file_db ) {
				iconSrc = key_nama_file;
				console.log( ext_file, ext_file_db );
				break; //Hentikan laju fungsi semuanya
			}
		}
	});

	// Return URL ikon
	return iconSrc;
}
function create_el_file(row_obj) {
	var modal_select_file = $('#modal_select_file');
	var el_row_col_file = modal_select_file.find('.row_col_file');


	var id_file = row_obj.id_file;
	var nama_file = row_obj.nama_file;
	var source_file = row_obj.source_file;
	var tipe_penyimpanan = row_obj.tipe_penyimpanan;

	var ext_file; 
	/* Kalo eksistensinya berdasarkan tipe penyimpanan yang  ingin ditampilkan
	switch(tipe_penyimpanan){
		case "lokal":
		ext_file = source_file.split('.');
		var last_index = ext_file.length - 1;
		ext_file = ext_file[last_index];
		break;
		case "url":
		ext_file = "URL"
		break;
	}
	*/

	//Ambil exsitensi icon
	ext_file = source_file.split('.');
	var last_index = ext_file.length - 1;
	ext_file = ext_file[last_index];
	//Buat icon file yanag tersedia
	var icon_img = getFileIcon( ext_file );
	var base_url = URL_SERVICE_APP; //Tempat dimana aplikasi BE menyimpan asset gambar icon 
	var src_img = base_url + "asset/gam/" + icon_img; 
	var el_iconImg = '<img class="col_file_img" src="'+src_img+'">'
	//Buat dan Tambahkan ke elemen file di modal 
	var el_col_file = '<div class="col-sm-4 col_file" data-idfile="'+ id_file +'" data-sourceFile="'+ source_file +'" data-namafile="'+ nama_file +'" onclick="col_file_click(this)"><div class="card" style="width: 100%;"> <input type="radio"> <div class="card-body">'+ el_iconImg +'<p> '+nama_file+' </p> <p style="margin-top:5px;background:darkcyan;color:white;width:auto;padding:10px"> '+ext_file+' </p> </div></div></div>';
	el_row_col_file.append( el_col_file );
}
function col_file_click( obj ) {
	$('.col_file').removeClass('active');
	var radio = $('.col_file').find('input');
	var check = radio.prop('checked', false);


	var col_file_target = $(obj);
	col_file_target.addClass('active'); //sumber dari col_file_active 
	var radio = col_file_target.find('input');
	var check = radio.prop('checked', true);

}
function submit_select_file() {
	//Ketika file di pilih oleh user 
	// <input type="hidden" name="id_file" id="id_file">
	var modal_select_file =$('#modal_select_file');
	var col_file_active = $('.col_file').filter('.active');
	var data_idFile = col_file_active.attr('data-idfile');
	var data_sourceFile = col_file_active.attr('data-sourceFile');
	var data_namaFile = col_file_active.attr('data-namafile');

	modal_select_file.modal('hide');

	//Implementasi ke form rownya dari action modal yang .form_modal_file nya memiliki class .active dan ini harus strukturnya SESUAI
	var form_modal_file_active = $('.form_modal_file').filter('.active');	
	form_modal_file_active.find('#nama_file').text(data_namaFile);
	form_modal_file_active.find('#id_file').val(data_idFile);
	form_modal_file_active.find('#source_file').val(data_sourceFile);
}

function validasi_tipe_penyimpanan() {
	var el_tipe_penyimpanan = $('select[name=tipe_penyimpanan]');
	if ( el_tipe_penyimpanan.length < 1 ) {
		return false;
	}
	var tipe_penyimpanan = el_tipe_penyimpanan.val();

	var input_tipe_select;
	switch( tipe_penyimpanan  ){
		case "lokal":
		input_tipe_select = $('input[name=upload_file]');
		break;
		case "url":
		input_tipe_select = $('input[name=url_file]');
		break;
	}

	var form_row_tipe = $('.form_row_tipe');
	form_row_tipe.find('*').hide();
	form_row_tipe.find('*').prop('disabled', true);

	input_tipe_select.show();
	input_tipe_select.prop('disabled', false);
}
//+++++++++++ End Of Fungsi untuk upload file asynchronous di modal select file dan modal tambah file async +++++++++++++++++++++++