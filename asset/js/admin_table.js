//+++++++++++++++++++++++++++++++++++++++++++++++++++
function isSameStructure(obj1, obj2) {


	// return JSON.stringify(Object.keys(obj1).sort()) === JSON.stringify(Object.keys(obj2).sort()) + "s";

	let keys1 = Object.keys(obj1);
	let keys2 = Object.keys(obj2);

	return keys1.length === keys2.length && keys1.every(key => keys2.includes(key));
}
//Melakukan validasi data agar data response yang diterima itu konsisten sama dengan data yang ditentukan pada setiap table
function validasi_data( row_struktur, data_reponse ) {
	//Cek struktur data_reponse dari data_reponse yang diterima agar terjadi konsistensi data_reponse 
	//Mengecek apakah row_struktur yang di tentukan sama strukturnya dengan row pada data_response yang diterima, dan kalo mau bener harus sama strukturnya.
	// Row responsenya adalah row index pertama di data_response dan makanya data_response gak boleh kosong.
	var param_data = true;
	var msg_false;
	if ( data_reponse.length > 0 ) {
		// Jika datanya ada, maka ambil 
		var row_response = data_reponse[0];

		if ( isSameStructure( row_response, row_struktur ) == true ) {
			//Struktur data_reponse tidak sama
			param_data = true;
		}else{
			param_data = false;
			msg_false = "Strukur data_reponse yang di terima tidak sesuai dengan struktur data_reponse yang telah ditentukan";
		}

		console.log("Row Strukur", row_struktur);
		console.log("Row Response", row_response);
	}else{
		msg_false = "Tidak ada data_reponse yang di terima";
		param_data = false;
	}

	return { 
		param_data : param_data,
		msg_false : msg_false,
	}
}


function load_table_level( data = [] ) {


	var row_struktur = {
		id_level: "",
		nama_level: "Beginner",
		user_admin : "DEBUG",
		waktu: "2025-03-25",
		status: "ACTIVE"
	};
	//Cek validasi data agar konsistensi
	var validasi_data_row = validasi_data( row_struktur, data ); 
	if ( validasi_data_row.param_data == false ) {
		//Data tidak tidak bisa di load di table, karena persyaratan yang tidak terpenuhi. 
		console.log( validasi_data_row.msg_false ); 
		return validasi_data_row.param_data; //Menghentikan jalan fungsi 
	}


	// Contoh data dummy
	var tableBody = $(".table_data").find('tbody');
	tableBody.empty(); // Bersihkan tabel sebelum menambahkan data baru
	var rowContent = "";
	for (var i = 0; i < data.length; i++) {
		var row = data[i];
		var statusClass = row.status === "ACTIVE" ? "active" : "disable";

		rowContent += `
		<tr>
		<td>
		<button class="btn btn-default btn_opt"><i class="fas fa-ellipsis-v"></i></button>
		<div class="menu_opt">
		<div class="link_opt close_opt">Tutup</div>
		<a href="/edit/${row.id_level}" class="link_opt">
		<i class="fas fa-edit"></i> Edit
		</a>
		<a href="/delete/${row.id_level}" class="link_opt">
		<i class="fas fa-trash"></i> Hapus
		</a>
		</div>
		</td>
		<td>${i + 1}</td>
		<td>${row.nama_level}</td>
		<td>${row.waktu}</td>
		<td><div class="label ${statusClass}">${row.status}</div></td>
		</tr>`;
	}

	tableBody.append(rowContent);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++
function load_table_account( data = [] ) {

	// Contoh data JSON yang berasal dari server
	var row_struktur = {
		alamat: "NULL",
		email: "irshandy@gmail",
		file_gambar: "",
		id_user: "40",
		level: "user_guru",
		nama: "asd",
		password: "ada",
		status: "ACTIVE",
		user: "assdafa",
		user_pembuat: "REGISTER",
		waktu: "2024-12-24"
	};
	//Cek validasi data agar konsistensi
	var validasi_data_row = validasi_data( row_struktur, data ); 
	if ( validasi_data_row.param_data == false ) {
		//Data tidak tidak bisa di load di table, karena persyaratan yang tidak terpenuhi. 
		console.log( validasi_data_row.msg_false ); 
		return validasi_data_row.param_data; //Menghentikan jalan fungsi 
	}



	var tableBody = $(".table_data").find('tbody');
	tableBody.empty(); // Bersihkan tabel sebelum tambah data baru
	var rowContent = "";
	for (var i = 0; i < data.length; i++) {


		var row = data[i];
		var statusClass = row.status === "ACTIVE" ? "active" : "disable";

		rowContent += `
		<tr>
		<td>
		<button class="btn btn-default btn_opt"><i class="fas fa-ellipsis-v"></i></button>
		<div class="menu_opt">
		<div class="link_opt close_opt">Tutup</div>
		<a href="/edit/${row.id_user}" class="link_opt">
		<i class="fas fa-edit"></i> Edit
		</a>
		<a href="/delete/${row.id_user}" class="link_opt">
		<i class="fas fa-trash"></i> Hapus
		</a>
		</div>
		</td>
		<td>${i + 1}</td>
		<td><img src="asset/gam/logo.png" class="profile"></td>
		<td>${row.user}</td>
		<td>${row.nama}</td>
		<td>${row.level}</td>
		<td>${row.waktu}</td>
		<td><div class="label ${statusClass}">${row.status}</div></td>
		</tr>`;
	}

	tableBody.append(rowContent);
}
//+++++++++++++++++++++++++++++++++++++++++++++++++++
function load_table_course( data = [] ) {

	// Contoh data JSON yang berasal dari server
	var row_struktur = {
		deskripsi_course: "",
		id_course: "4",
		nama: "admin",
		nama_course: "Matematika",
		status: "ACTIVE",
		user_admin: "admin",
		waktu: "2024-09-22"
	};
	//Cek validasi data agar konsistensi
	var validasi_data_row = validasi_data( row_struktur, data ); 
	if ( validasi_data_row.param_data == false ) {
		//Data tidak tidak bisa di load di table, karena persyaratan yang tidak terpenuhi. 
		console.log( validasi_data_row.msg_false ); 
		return validasi_data_row.param_data; //Menghentikan jalan fungsi 
	}

	var tableBody = $(".table_data").find('tbody');
	tableBody.empty(); // Bersihkan tabel sebelum tambah data baru
	var rowContent = "";
	for (var i = 0; i < data.length; i++) {
		var row = data[i];
		var statusClass = row.status === "ACTIVE" ? "active" : "disable";

		rowContent += `
		<tr>
		<td>
		<button class="btn btn-default btn_opt"><i class="fas fa-ellipsis-v"></i></button>
		<div class="menu_opt">
		<div class="link_opt close_opt">Tutup</div>
		<a href="/edit/${row.id_course}" class="link_opt">
		<i class="fas fa-edit"></i> Edit
		</a>
		<a href="/delete/${row.id_course}" class="link_opt">
		<i class="fas fa-trash"></i> Hapus
		</a>
		</div>
		</td>
		<td>${i + 1}</td>
		<td>${row.nama_course}</td>
		<td>${row.deskripsi_course}</td>
		<td>${row.waktu}</td>
		<td><div class="label ${statusClass}">${row.status}</div></td>
		</tr>`;
	}


	tableBody.append(rowContent);
}



//+++++++++++++++++++++++++++++++++++++++++++++++++++
function load_table_lesson( data = [] ) {
	// Contoh data JSON yang berasal dari server
	var dataStruktur = [
	{ id_lesson: 1, nama_course: "Web Development", nama_lesson: "HTML Dasar", deskripsi_lesson: "Belajar struktur dasar HTML", status_absensi: "ACTIVE", waktu: "2025-03-25", status: "ACTIVE" },

	];


	// Contoh data JSON yang berasal dari server
	var row_struktur = { 
		deskripsi_lesson: "asd",
		id_course: "4",
		id_lesson: "2",
		nama_course: "Matematika",
		nama_lesson: "Hitung",
		status: "ACTIVE",
		status2: "ACTIVE",
		status_absensi: "ACTIVE",
		user_admin: "user",
		waktu: "2024-12-24"
	}
	//Cek validasi data agar konsistensi
	var validasi_data_row = validasi_data( row_struktur, data ); 
	if ( validasi_data_row.param_data == false ) {
		//Data tidak tidak bisa di load di table, karena persyaratan yang tidak terpenuhi. 
		console.log( validasi_data_row.msg_false ); 
		return validasi_data_row.param_data; //Menghentikan jalan fungsi 
	}

	var tableBody = $(".table_data").find('tbody');
	tableBody.empty(); // Bersihkan tabel sebelum tambah data baru
	var rowContent = "";
	for (var i = 0; i < data.length; i++) {
		var row = data[i];
		var statusClass = row.status === "ACTIVE" ? "active" : "disable";

		rowContent += `
		<tr>
		<td>
		<button class="btn btn-default btn_opt"><i class="fas fa-ellipsis-v"></i></button>
		<div class="menu_opt">
		<div class="link_opt close_opt">Tutup</div>
		<a href="/edit/${row.id_lesson}" class="link_opt">
		<i class="fas fa-edit"></i> Edit
		</a>
		<a href="/delete/${row.id_lesson}" class="link_opt">
		<i class="fas fa-trash"></i> Hapus
		</a>
		<a href="/Admin_lesson/update_status_absensi/${row.id_lesson}" class="link_opt">
		<i class="fas fa-clipboard"></i> ${row.status_absensi === "ACTIVE" ? "Tutup Absensi" : "Buka Absensi"}
		</a>
		</div>
		</td>
		<td>${i + 1}</td>
		<td>${row.id_lesson}</td>
		<td>${row.nama_course}</td>
		<td>${row.nama_lesson}</td>
		<td>${row.deskripsi_lesson}</td>
		<td>
		<button class="btn btn-secondary">${row.status_absensi}</button>
		</td>
		<td>${row.waktu}</td>
		<td><div class="label ${statusClass}">${row.status}</div></td>
		</tr>`;
	}

	tableBody.append(rowContent);
}

//+++++++++++++++++++++++++++++++++++++++++++++++++++
function load_table_lesson_media( data = [] ) {

	// Contoh data JSON yang berasal dari server
	var row_struktur = { 
		id_course: "6",
		id_file: "81",
		id_lesson: "3",
		id_lesson_media: "58",
		nama_lesson: "asd",
		nama_media: "Media shandy",
		source_file: "ss",
		deskripsi_media: "ss",
		status: "ACTIVE",
		status2: "DISABLE",
		waktu: "2025-03-24",
		waktu2: "2024-12-24"
	}
	//Cek validasi data agar konsistensi
	var validasi_data_row = validasi_data( row_struktur, data ); 
	if ( validasi_data_row.param_data == false ) {
		//Data tidak tidak bisa di load di table, karena persyaratan yang tidak terpenuhi. 
		console.log( validasi_data_row.msg_false ); 
		return validasi_data_row.param_data; //Menghentikan jalan fungsi 
	}


	var tableBody = $(".table_data").find('tbody');
	tableBody.empty(); // Bersihkan tabel sebelum menambahkan data baru
	var rowContent = "";
	for (var i = 0; i < data.length; i++) {
		var row = data[i];
		var statusClass = row.status === "ACTIVE" ? "active" : "disable";

		rowContent += `
		<tr>
		<td>
		<button class="btn btn-default btn_opt"><i class="fas fa-ellipsis-v"></i></button>
		<div class="menu_opt">
		<div class="link_opt close_opt">Tutup</div>
		<a href="/edit/${row.id_lesson_media}" class="link_opt">
		<i class="fas fa-edit"></i> Edit
		</a>
		<a href="/delete/${row.id_lesson_media}" class="link_opt">
		<i class="fas fa-trash"></i> Hapus
		</a>
		</div>
		</td>
		<td>${i + 1}</td>
		<td>${row.id_lesson_media}</td>
		<td>${row.id_course}</td>
		<td>${row.nama_lesson}</td>
		<td>${row.nama_media}</td>
		<td>
		<a href="${row.source_file}" download class="btn btn-success">
		<i class="fas fa-download"></i>
		</a> <br> ID FILE: ${row.id_file}
		</td>
		<td>${row.waktu}</td>
		<td><div class="label ${statusClass}">${row.status}</div></td>
		</tr>`;
	}

	tableBody.append(rowContent);
}