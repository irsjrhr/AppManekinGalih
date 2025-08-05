<section  class="section_content" data-fungsi="level">
	<!-- Main content -->

	<div class="header_page">
		<h1>
			Atur Level
		</h1>
	</div>

	<div class="container-fluid" data-fungsi="level">
		<div class="row mb-4">
			<!-- Box Dashboard -->
			<div class="col-md-5 box_dashboard">
				<div class="card">
					<i class="fas fa-database logo_back"></i>
					<h2 class="banyak_data"> 0 </h2>
					<h3> Level </h3>
				</div>
			</div>
			<!-- End Of Box Dashboard -->
		</div>

		<div class="row">
			<div class="col-12">
				<table class="table table_option">
					<tr>
						<td style="display: flex;">
							<button class="btn btn-primary btn_load mr-2">
								<i class="fas fa-recycle"></i>
							</button>
							<button class="btn btn-default btn_tambah_data" data-toggle="modal" data-target="#modal_tambah">
								<i class="fas fa-plus"></i>
							</button>
						</td>
						<td>
							<div class="container_option">
								<p> Cari : </p>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" name="" placeholder="Cari apa ?">
									</div>
									<button class="btn btn-secondary btn_submit_opt">
										<i class="fas fa-search"></i>
									</button>
								</form>

							</div>
						</td>
						<td>
							<div class="container_option">
								<p> Filter : </p>
								<form>
									<div class="form-group">
										<select class="form-control">
											<option> Active </option>
											<option> Disable </option>
										</select>
									</div>
									<button class="btn btn-secondary btn_submit_opt">
										<i class="fas fa-filter"></i>
									</button>
								</form>

							</div>
						</td>

					</tr>
				</table>
				<table class="table table_data">

					<thead>
						<tr class="row_header">
							<td> <i class="fas fa-cog"></i> </td>
							<th> No </th>
							<th> Nama Level </th>
							<th> Waktu </th>
							<th> Status </th>
						</tr>
					</thead>

					<tbody>
						<!-- Ditambahkan dengan jquery -->
					</tbody>

				</table>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="modal_tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">


					<form action="level" method="post">

						<input type="hidden" name="user_admin" value="<?= $this->Base_model->get_userLogin() ?>">
						<div class="form-group">
							<label> Nama Level : </label>
							<input type="" class="form-control" name="nama_level" placeholder="Isi dengan nama level">
						</div>
						<div class="form-group">
							<button name="submit" value="submit" class="btn btn-success form-control">
								Submit
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>


	
</section>

