
<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/panel.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/panel_admin.css">
		<title> Admin Panel </title>
	</head>
	<body>

		<style type="text/css">	
			.content .nav_header .col_left{
				display: flex;
				flex-direction: column;
				justify-content: center;
			}
			.responsive_content{
				display: flex !important;
			}
		</style>

		<!-- Container page -->
		<div class="container-fluid container_page">
			<!-- Row page -->
			<div class="row row_page">
				<!-- Sidebar -->
				<div class="col_sidebar">
					<div class="sidebar">
						<div class="container-fluid">
							
							<!-- Row Header -->
							<div class="row row_header">
								<div class="col-12">
									<img src="<?= base_url() ?>asset/gam/logo.png" class="logo_sidebar">
									<button class="btn btn-default btn_close">
										<i class="fas fa-times"></i>
									</button>
									<h1 class="logo_font"> 
										App - Admin
									</h1>
								</div>
							</div>
							<!-- End Of Row Header -->

							<?php for ($i=0; $i < count($data_sidebar); $i++) { ?>
								<?php $row_sidebar = $data_sidebar[$i] ?>
								<!-- link_menu -->
								<a href="<?= $row_sidebar['url'] ?>" class="link_menu">
									<div class="row row_menu">
										<div class="col-3 menu_logo">
											<i class="<?= $row_sidebar['icon'] ?>"></i>
										</div>
										<div class="col menu_text">
											<?= $row_sidebar["menu"] ?>
										</div>
									</div>
								</a>
							<?php } ?>

							<!-- End Of link_menu -->

						</div>
					</div>
				</div>
				<!-- End Of Sidebar -->
				<!-- Content -->
				<div class="col content">
					<header>
						<!-- Nav nav_header -->
						<nav class="nav_header">
							<div class="container-fluid">
								<div class="row">
									<!-- Col Left' -->
									<div class="col col_left">
										<div class="responsive_content">
											<div class="content">
												<span class="btn_sidebar">
													<i class="fas fa-bars"></i>
												</span>
												<a href="">
													<img src="<?= base_url() ?>asset/gam/logo.png" class="logo_sidebar">
												</a>
											</div>
										</div>
									</div>
									<!-- End Of Col Left' -->
									<!-- Col Right' -->
									<div class="col col_right">
										<div class="box_profile" data-toggle="modal" data-target="#modal_menu">
											<img src="<?= base_url() ?>asset/gam/banner_login.png" class="img_profile">
											<div class="info_profile">
												<div class="info_user text_flow_multi1">
													Irshandy Juniar Hardad
												</div>
												<div class="info_role">
													Admin
												</div>
											</div>
										</div>
									</div>
									<!-- End Of Col Right' -->

								</div>
							</div>
						</nav>
						<!-- End Of Nav nav_header -->
						
					</header>

		<?php require 'modal_menu_admin.php'; ?>
		

