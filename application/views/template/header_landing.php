<!doctype html>
	<html lang="en">
	<head>
		<!-- Meta dasar -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Meta SEO -->
		<title>Certara Edukasi | Bimbingan Belajar Seru & Modern untuk Anak Cerdas</title>
		<meta name="description" content="Certara Edukasi adalah bimbingan belajar modern berbasis tatap muka dengan pendekatan kreatif, interaktif, dan menyenangkan. Fokus kami adalah membantu anak tumbuh percaya diri dan berprestasi.">
		<meta name="keywords" content="bimbel Tangerang, bimbel anak, les privat anak, Certara, bimbingan belajar modern, belajar onsite, kelas tatap muka, bimbel SD SMP">
		<meta name="author" content="Certara Edukasi">

		<!-- Meta sosial media / Open Graph -->
		<meta property="og:title" content="Certara Edukasi | Bimbingan Belajar Seru & Modern untuk Anak Cerdas">
		<meta property="og:description" content="Bimbel dengan pendekatan belajar menyenangkan dan fasilitas terbaik. Tersedia kelas tatap muka untuk SD dan SMP.">
		<meta property="og:image" content="<?= base_url() ?>asset/gam/logo.png"> <!-- Ganti sesuai URL gambar kamu -->
		<meta property="og:url" content="https://certara.id">
		<meta property="og:type" content="website">

		<!-- Meta Twitter -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Certara Edukasi | Bimbingan Belajar Seru & Modern untuk Anak Cerdas">
		<meta name="twitter:description" content="Daftar sekarang di Certara dan rasakan pengalaman belajar tatap muka yang nyaman dan menyenangkan.">
		<meta name="twitter:image" content="<?= base_url() ?>asset/gam/logo.png"> <!-- Ganti juga -->

		<!-- Favicon -->
		<link rel="icon" href="<?= base_url() ?>asset/gam/logo.png" type="image/x-icon">



		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/panel.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/landing.css">


		<!-- Animate.css -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<!-- WOW.js -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	</head>
	<body>

		<?php require 'modal_menu_user.php'; ?>
		

		<!-- Container page -->
		<div class="container-fluid container_page">
			<!-- Row page -->
			<div class="row row_page">

				<!-- Col Content -->
				<div class="col-12 content">
					<header>
						<!-- Nav nav_header -->
						<nav class="nav_header">
							<div class="container-fluid">
								<div class="row">
									<!-- Col Left' -->
									<div class="col col_left" style="display: flex;">
										<!-- Content Logo -->
										<div class="content_logo" style="position: relative;">
											<a href="">
												<img src="<?= base_url() ?>asset/gam/logopanjang.png" class="logo_sidebar">
											</a>

										</div>
										<!-- End Of Content Logo -->
										<!-- Container Search -->
										<div class="container_search" style="display:none">
											<div class="container-fluid">

												<div class="row row_search justify-content-center">
													<div class="col_search">
														<form action="" method="post">
															<div class="search_form">
																<input type="text" class="form-control" name="" placeholder="Cari kelas apa?">
																<button type="submit" class="btn btn-default btn_search">
																	<i class="fas fa-search"></i>
																</button>
																<button type="button" class="btn btn-default btn_toggle_search btn_search">
																	<i class="fas fa-times"></i>
																</button>
															</div>

														</form>
													</div>
													<div class="col col_btn" style="display: none">
														<div class="content_btn">
															<button class="btn btn-secondary">
																<i class="fas fa-filter"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Of Container Search -->



									</div>
									<!-- End Of Col Left' -->
									<!-- Col Right' -->
									<div class="col-7 col_right">

										<!-- Menu header -->
										<div class="menu_header">
											<div class="content_menu">
												<div class="responsive">
													<span class="btn_menu_header btn_close">
														<i class="fas fa-times"></i>
													</span>
													<h3 class="mb-3">
														Menu Navigasi
													</h3>
												</div>

												<?php foreach ($data_menu as $key => $row_menu): ?>
													<a href="<?= $row_menu['url'] ?>" class="link_menu">
														<div class="content_link">
															<?= $row_menu['menu'] ?>
															<i class="fas fa-arrow-right responsive"></i>
														</div>
													</a>
												<?php endforeach ?>

											</div>
										</div>
										<!-- End Of Menu header -->



										<!-- Btn Toggle Search - Responsive Mobile -->
										<button type="button" class="btn btn-default btn_toggle_search btn_search">
											<i class="fas fa-search"></i>
										</button>
										<!-- End Of Btn Toggle Search - Responsive Mobile -->

										<!-- Box Profile -->
										<div class="box_profile" data-toggle="modal" data-target="#modal_menu">
											<img src="<?= base_url() ?>asset/gam/user.png" class="img_profile">
											<div class="info_profile">
												<div class="info_user text_flow_multi1">
													Hi Chief
												</div>
												<div class="info_role">
													Daftar Sini
												</div>
											</div>
										</div>
										<!-- Triger Responsive Menu Header -->
										<div class="menu_header_triger responsive">
											<span class="btn_menu_header">
												<i class="fas fa-bars"></i>
											</span>
										</div>
										<!-- End Of Triger Responsive Menu Header -->






									</div>
									<!-- End Of Col Right' -->

								</div>
							</div>
						</nav>
						<!-- End Of Nav nav_header -->

					</header>

