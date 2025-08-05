
<style type="text/css">

#modal_select_file{
	z-index: 8888888;
}

#modal_tambahFile_async{
	z-index: 99999999;
}

.col_file{
	text-align: center;
	margin-bottom: 20px;
	cursor: pointer;
	position: relative;

}

.col_file *{
	background: #fff;
	color: #000;
}

.col_file.active *{
	background: #ccc;
	color: #fff;
}

.col_file input[type=radio]{
	position: absolute;
	left: 20px;
	top: 20px;

}
.load_ajax_data{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(255, 255, 255, .8);
	z-index: 9999999;	
	display: none;
}
.load_ajax_data img{
	width: 100px;
	height: 100px;
}
#modal_select_file img.col_file_img{
	width: 100px;
	height: 100px;
}


</style>
<!-- Modal Select File -->
<div class="modal fade" id="modal_select_file" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-baseUrl="<?= base_url() ?>">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Pilih File  </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="position: relative;">

				<!-- Load ajax element -->
				<div class="load_ajax_data text-center pt-5">
					<img src="<?= base_url('asset/gam/load.gif') ?>">
					<h3 class="mt-3 text_caption"> Fetch Data .... </h3>
				</div>
				<!-- End Of Load ajax element -->

				<div class="container-fluid container_modal_menu" style="height: 300px;overflow: auto;">
					<!-- Akan muncul ketika data filenya kosong -->
					<div class="row file_empty" style="display: none;">
						<div class="col-12 text-center">
							<h1> No File Upload </h1>
							<button data-target="#modal_tambahFile_async" data-toggle="modal" class="btn btn-primary">
								Upload File Baru <span><i class="fas fa-upload"></i></span>
							</button>
						</div>
					</div>
					<!-- End Of Akan muncul ketika data filenya kosong -->

					<div class="row justify-content-center row_col_file">
						<!-- AKAN DITAMBAHKAN OLEH AJAX JQUERY
							<div class="col-sm-4 col_file" data-idfile='' data-sourceFile data-namafile=''  onclick="col_file_click(this)">
								<div class="card" style="width: 100%;">
									<div class="card-body">
										<i class="fas fa-file"></i>
										<p>  </p>
									</div>
								</div>
							</div>
						-->
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm mb-3 text-left">
							<button data-target="#modal_tambahFile_async" data-toggle="modal" class="btn btn-primary">
								Upload File Baru <span><i class="fas fa-upload"></i></span>
							</button>
						</div>
						<div class="col-sm text-right">
							<button class="btn btn-secondary btn_refresh_select">
								Muat Ulang
							</button>
							<button class="btn btn-success btn_submit_select">
								Pilih
							</button>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>
</div>

<!-- End Of Modal Select File -->



<!-- Modal Tambah File Async -->
<div class="modal fade" id="modal_tambahFile_async" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Form Tambah File - Async </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="position: relative;">
				<!-- Load ajax element -->
				<div class="load_ajax_data text-center pt-5">
					<img src="<?= base_url('asset/gam/load.gif') ?>">
					<h3 class="mt-3 text_caption"> Fetch Data .... </h3>
				</div>
				<!-- End Of Load ajax element -->

				<form method="post" action="<?= base_url() ?>Admin_file/tambah" enctype="multipart/form-data">

					<input type="hidden" name="user_admin" value="<?= $this->Base_model->get_userLogin() ?>">

					<div class="form-group">
						<label> Nama File : </label>
						<input autosave type="text" name="nama_file" class="form-control" required placeholder="Nama File Baru">
					</div>


					<div class="form-group">
						<label> Tipe Penyimpanan : </label>

						<select class="form-control" name="tipe_penyimpanan">
							<option value="lokal"> Lokal </option>
							<option value="url"> URL </option>
							<option value="cloud"> CLOUD </option>
						</select>
					</div>

					<!-- JS EFFECT - Input Akan muncul sesuai Tipe penyimpanan yang di pilih antara upload file dengan url pada form select dengan name tipe_peyimpanan -->
					<div class="form-group form_row_tipe">
						<input required type="file" name="upload_file" style="display: none;">
						<input required class="form-control" placeholder="masukkan url file kamu disini" type="text" name="url_file" style="display: none;">
					</div>
					<!-- END JS EFFECT - Input Akan muncul sesuai Tipe penyimpanan yang di pilih antara upload file dengan url -->


					<div class="form-group">
						<button name="submit" type="submit" class="form-control btn btn-success">
							SUBMIT
						</button>
					</div>

				</form>

			</div>

		</div>
	</div>
</div>
