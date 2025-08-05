

<section class="section_content" data-fungsi="account">
	<div class="header_page">
		<h1>
			Atur Account
		</h1>
	</div>

	<div class="container-fluid">
		<div class="row mb-4">
			<!-- Box Dashboard -->
			<div class="col-md-5 box_dashboard">
				<div class="card">
					<i class="fas fa-database logo_back"></i>
					<h2 class="banyak_data"> 0 </h2>
					<h3> Account </h3>
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
							<th> Profile </th>
							<th> User Id </th>
							<th> Nama </th>
							<th> Level </th>
							<th> Waktu </th>
							<th> Status </th>
						</tr>
					</thead>

					<tbody>
						<!-- 					<tr>
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
						</tr>`; -->
						<!-- Disi oleh ajax -->
					</tbody>
				</table>
			</div>
		</div>
	</div>



	<!-- Modal Tambah -->
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


					<form action="account" method="post">

						<div class="form-group">
							<label> Name : </label>
							<input autosave type="text" name="nama" class="form-control" required placeholder="Your Name">
						</div>

						<div class="form-group">
							<label> User : </label>
							<input autosave type="text" name="user" class="form-control" required>
						</div>

						<div class="form-group">
							<label> Email : </label>
							<input autosave type="text" name="email" class="form-control" required placeholder="Your Email">
						</div>

						<div class="form-group">
							<label> Password : </label>
							<input autosave type="password" name="password" class="form-control"  required placeholder="Your Password">
						</div>

						<div class="form-group">
							<label> Confirm Password : </label>
							<input autosave type="password" name="password_confirm" class="form-control"  required placeholder="Confirm Pasword">
						</div>

						<div class="form-group">
							<label> Level </label>
							<select class="form-control" name="level">
							<!-- Ini akan ditambahkan dengan jvascript -->
							</select>
						</div>


						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-success form-control">
								Submit
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

</section>



