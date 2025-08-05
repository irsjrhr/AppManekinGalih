<?php 


function json_cv( $row_data ){

	return htmlspecialchars(json_encode($row_data));
}

$data_manekin_rambut = [

	["id_manekin_rambut" => rand(), "nama_rambut" => "Rambut 1", "source_file_thumb" => base_url('asset/gam/user.png'), "source_file_model" => base_url('asset/model/men/hair1.glb')],
	["id_manekin_rambut" => rand(), "nama_rambut" => "Rambut 2", "source_file_thumb" => base_url('asset/gam/user.png'), "source_file_model" => base_url('asset/model/men/hair2.glb')]

];

$data_manekin_kepala = [

	["id_manekin_kepala" => rand(), "nama_kepala" => "Kepala 1", "source_file_thumb" => base_url('asset/gam/user.png'), "source_file_model" => base_url('asset/model/men/char1.glb')],
	["id_manekin_kepala" => rand(), "nama_kepala" => "Kepala 2", "source_file_thumb" => base_url('asset/gam/user.png'), "source_file_model" => base_url('asset/model/men/char2.glb')]

];
$arr_warna = [
    "#000",
    "#5484ed",
    "#a4bdfc",
    "#46d6db",
    "#7ae7bf",
    "#51b749",
    "#fbd75b",
    "#ffb878",
    "#ff887c",
    "#dc2127",
    "#dbadff",
    "#e1e1e1"
];

?>

<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/panel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/app_course.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/manekin.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/file.css">
	
	<title> Design Your Style </title>
	<style type="text/css">
	.box_header_video .card{
		padding: 0 !important;

	}
	.box_header_video .title_content{
		padding: 20px
	}

	.container_indicator_warna{
		width: 100%;
		height: auto;
		padding: 20px;
		padding-top: 40px;
	}
	.container_indicator_warna .indicator_row{
		width: 100%;
		justify-content: center;
		max-height: 300px;
		overflow: auto;
		padding-bottom: 30px;
	}
	.col_indicator_warna{
		height: 70px;
		margin-right: 10px;
		margin-bottom: 10px;
		cursor: pointer;
	}
	.col_indicator_warna.active{
		border: 5px solid gold;
	}
</style>
</head>

<body>

	<!-- Container page -->
	<div class="container-fluid container_page">



		<!-- Row page -->
		<div class="row row_page">
			
			<!-- Sidebar -->
			<div class="col_sidebar" style="width:400px;">
				<div class="sidebar">
					<div class="container-fluid">

						<!-- Row Header -->
						<div class="row row_header">
							<div class="col-12">
								<span class="btn_sidebar">
									<i class="fas fa-bars"></i>
								</span>
								<img src="<?= base_url() ?>asset/gam/logo.png" class="logo_sidebar">
								<!-- <h1 class="logo_font"> AppCourse </h1> -->
							</div>
						</div>
						<!-- End Of Row Header -->

						<!-- link_menu  -->
						<a href="appCourse_index.php" class="btn btn-success" style="width: 100%;">
							SUBMIT
						</a>
						<!-- End Of link_menu -->


						<!-- Row Box Indicator -->
						<div class="row row_box_indicator">

							<div class="col-12">

								<!-- container_indicator_model -->
								<div class="container-fluid container_indicator_model">
									<!-- Row Header Indicator -->
									<div class="row row_box_indicator justify-content-center">
										<!-- Box Dashboard -->
										<div class="col-md-12 box_dashboard box_dashboard_indicator">
											<div class="card" style="padding-bottom: 0!important;">
												<div class="content">
													<div class="container-fluid">
														<div class="row">
															<div class="col box_indicator" data-target-id="kepala">
																<span> 
																	Kepala
																</span>
																<span class="icon_responsive"> 
																	<i class="fas fa-box"> </i>
																</span>
															</div>
															<div class="col box_indicator" data-target-id="rambut">
																<span> 
																	Rambut
																</span>
																<span class="icon_responsive"> 
																	<i class="fas fa-box"> </i>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Of Box Dashboard -->
									</div>

									<!-- End Of Row Header Indicator -->


									<!-- Row Page -->
									<div class="row row_box_page justify-content-center">

										<!-- Box Dashboard Kepala -->
										<div class="col-md-12 box_dashboard box_dashboard_manekin" id="kepala">
											<div class="card">
												<i class="fas fa-scissors logo_back"></i>
												<div class="content">
													<div class="container-fluid">
														<div class="row justify-content-center">
															<?php foreach ($data_manekin_kepala as $key => $row_manekin_kepala): ?>
																<div class="col-5 col_indicator_manekin" data-row-json="<?= json_cv($row_manekin_kepala) ?>">
																	<div class="box_manekin">
																		<img src="<?= $row_manekin_kepala['source_file_thumb'] ?>" class="img_manekin_thumb">
																		<p class="judul_manekin">

																			<?= $row_manekin_kepala['nama_kepala'] ?>
																		</p>
																	</div>
																</div>
															<?php endforeach ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Of Box Dashboard - Kepala -->

										<!-- Box Dashboard Rambut -->
										<div class="col-md-12 box_dashboard box_dashboard_manekin" id="rambut">
											<div class="card">
												<i class="fas fa-scissors logo_back"></i>
												<div class="content">
													<div class="container-fluid">
														<div class="row justify-content-center">
															<?php foreach ($data_manekin_rambut as $key => $row_manekin_rambut): ?>
																<div class="col-5 col_indicator_manekin" data-row-json="<?= json_cv($row_manekin_rambut) ?>">
																	<div class="box_manekin">
																		<img src="<?= $row_manekin_rambut['source_file_thumb'] ?>" class="img_manekin_thumb">
																		<p class="judul_manekin">

																			<?= $row_manekin_rambut['nama_rambut'] ?>
																		</p>
																	</div>
																</div>
															<?php endforeach ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Of Box Dashboard - Rambut -->

									</div>
									<!-- End Of Row Page -->

								</div>
								<!-- end of container_indicator_model -->


								<!-- container_indicator_warna -->
								<div class="container-fluid container_indicator_warna">
									<div class="col-12">
										<h3 class="mb-4">
											Color Picker
										</h3>
									</div>
									<div class="row indicator_row">
										<?php foreach ($arr_warna as $key => $warna): ?>
											<div class="col-md-3 col_indicator_warna" style="background: <?= $warna ?>"></div>
										<?php endforeach ?>
									</div>
								</div>
								<!-- end of container_indicator_warna -->

							</div>
						</div>
						<!-- End Of Row Box Indicator -->

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
								<div class="col">
									<div class="responsive_content mr-3">
										<div class="content">
											<span class="btn_sidebar">
												<i class="fas fa-bars"></i>
											</span>
										</div>
									</div>
									<div class="info_course">
										<h1 class="title_course text_flow_multi2">
											Manekin Preview
										</h1>
										<p class="mentor_course text_flow_multi1">
											Buat Gaya Rambut Seleramu
										</p>
									</div>

								</div>
								<!-- End Of Col Left' -->

							</div>
						</div>
					</nav>
					<!-- End Of Nav nav_header -->

				</header>

				<!-- Main content -->
				<main class="main_container">
					<canvas id="renderCanvas"></canvas>
				</main>
				<!-- End Of Main content -->

			</div>
			<!-- End Of Content -->


		</div>
		<!-- End Of Row page -->

	</div>


	<!-- End Of Container page -->
	<script src="https://cdn.babylonjs.com/babylon.js"></script>
	<script src="https://cdn.babylonjs.com/loaders/babylon.glTF2FileLoader.min.js"></script>
	<script src="<?= base_url() ?>asset/js/jquery.min.js"></script>
	<script type="text/javascript">
		var model_path;

		// Inisialisasi Babylon.js
		let canvas = document.getElementById("renderCanvas");
		let engine = new BABYLON.Engine(canvas, true);
		let scene, camera, light;
		let currentHair = null;
		let bodyMesh = null;
		var source_kepala_active;
		var source_rambut_active;


		// Inisialisasi scene
		async function createScene() {
			scene = new BABYLON.Scene(engine);

			camera = new BABYLON.ArcRotateCamera(
				"Camera",
				Math.PI + 4.8,
				Math.PI / 2 - 0.2,
				2,
				new BABYLON.Vector3(0, 1, 0),
				scene
				);
			camera.attachControl(canvas, true);
			camera.lowerRadiusLimit = camera.upperRadiusLimit = camera.radius;

			light = new BABYLON.HemisphericLight("light", new BABYLON.Vector3(0, 1, 0), scene);

			await loadKepala("<?= base_url() ?>asset/model/men/char1.glb"); // Default karakter awal
			loadRambut("<?= base_url() ?>asset/model/men/hair1.glb", function() {
				gantiWarnaRambut();
			}); // Rambut default
		}

		// Fungsi load karakter (dinamis)
		async function loadKepala(source_file) {

			source_file = source_file.split('/');
			filename = source_file[ source_file.length - 1 ];
			source_file.pop();
			model_path = source_file.join("/") + "/";

			// Hapus semua mesh lama (kecuali kamera & cahaya)
			scene.meshes.forEach(mesh => {
				if (mesh !== camera && mesh !== light) {
					mesh.dispose();
				}
			});

			await BABYLON.SceneLoader.AppendAsync(model_path, filename, scene);

			bodyMesh = scene.meshes.find(mesh => mesh.name.includes("men") || mesh.name !== "__root__");
			if (bodyMesh) {
				bodyMesh.position = new BABYLON.Vector3(0, 1, 0);
				bodyMesh.scaling = new BABYLON.Vector3(2, 2, 2);
				bodyMesh.rotation = new BABYLON.Vector3(0, 4.8, 0);
			}

			source_kepala_active = model_path + filename;
		}

		// Fungsi load rambut
		function loadRambut(source_file, callback = false ) {

			if ( callback == false ) {
				callback = function () {
					return 1;
				}
			}
			if (currentHair) {
				currentHair.dispose();
			}

			let parts = source_file.split('/');
			let filename = parts.pop();
			model_path = parts.join("/") + "/";

			hairMaterials = [];

			BABYLON.SceneLoader.ImportMesh("", model_path, filename, scene, function (meshes) {
				currentHair = new BABYLON.TransformNode("hairRoot", scene);

				meshes.forEach(mesh => {
					mesh.parent = currentHair;

					if (mesh.material) {
						// Hapus tekstur agar warna kelihatan
						if (mesh.material.albedoTexture) {
							mesh.material.albedoTexture = null;
						}
						hairMaterials.push(mesh.material);
					}
				});

				currentHair.position = new BABYLON.Vector3(-0.38, 0.85, -1.7);
				currentHair.scaling = new BABYLON.Vector3(2, 2, 2);

				callback();
			});
			//Set source rambut
			source_rambut_active = model_path + filename;
		}

		//++ Fungsi untuk mengganti warna rambut
		var WARNA_RAMBUT_ACTIVE = {
			RED : 0,
			GREEN : 0,
			BLUEE : 0
		}; 

		function warnaRambutObj(r, g, b) {
			let color = new BABYLON.Color3(r / 255, g / 255, b / 255);
			hairMaterials.forEach(material => {
				if (material instanceof BABYLON.PBRMaterial) {
					material.albedoColor = color;
				}
			});
		}
		function gantiWarnaRambut( PARAM_WARNA = WARNA_RAMBUT_ACTIVE ) {
			/*
			=> Mengganti warna rambut berdasarkan nilai yang tersimpan di WARNA_RAMBUT_ACTIVE
			=> Contoh kalo ganti warna rambut dengan nilai default  
			gantiWarnaRambut()

			=> Contoh kalo ganti warna rambut dengan nilai custom  
			gantiWarnaRambut({
				RED : 0, 
				GREEN : 0,
				BLUE : 0
			})
			*/
			// PARAM_WARNA berisi object dengan propertynya sama dengan WARNA RAMBUT ACTIVE

			//set ulang PARAM_WARNA kalo misalnya ada yang ingin merubah itu
			WARNA_RAMBUT_ACTIVE = PARAM_WARNA;

			warnaRambutObj(  PARAM_WARNA.RED, PARAM_WARNA.GREEN, PARAM_WARNA.BLUE  );
		}
		function get_objRGB( value_rgb = "rgb( 0, 0, 0 )" ) {
			const arr_rgb = value_rgb.match(/\d+/g).map(Number); // [nilai_red, nilai_green, nilai_blue]
			var red = arr_rgb[0];
			var green = arr_rgb[1];
			var blue = arr_rgb[2];	
			return {
				RED : red,
				GREEN : green,
				BLUE : blue 
			}
		}

		// Scope Event 
		function MAIN_EVENT() {


			//Ganti Kepala 
			$('#kepala .col_indicator_manekin').on('click', async function () {
				var col_indicator_manekin = $(this);
				// Ambil source file modelnya
				var data_row_json = col_indicator_manekin.attr('data-row-json');
				var data_row_obj = JSON.parse( data_row_json );
				var source_file_model = data_row_obj.source_file_model;
				console.log( source_file_model );
				await loadKepala( source_file_model );
				loadRambut( source_rambut_active, function() {
					gantiWarnaRambut();
				} );
			});

			//Ganti Rambut
			$('#rambut .col_indicator_manekin').on('click', async function () {

				var col_indicator_manekin = $(this);
				// Ambil source file modelnya
				var data_row_json = col_indicator_manekin.attr('data-row-json');
				var data_row_obj = JSON.parse( data_row_json );
				var source_file_model = data_row_obj.source_file_model;
				loadRambut( source_file_model, function() {
					//Mengganti warna rambut dari 
					gantiWarnaRambut();
				});
			});

			//Indicator Warna
			$('.col_indicator_warna').on('click', function() {
				var col_indicator_warna_target = $(this);
				var background_color_hex = col_indicator_warna_target.css('background-color');
				var get_obj_warna = get_objRGB( background_color_hex ) ;//{ RED : 0, GREEN : 0, BLUE : 0 }	


				//Bikin tanda aktif sesuai dengan target 
				$('.col_indicator_warna').removeClass('active');
				col_indicator_warna_target.addClass('active');

				gantiWarnaRambut( get_obj_warna );
			});



		}

		MAIN_EVENT();




		// Render
		createScene();
		engine.runRenderLoop(() => scene.render());



	</script>

	<script type="text/javascript" src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>asset/js/app.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>asset/js/api.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>asset/js/file.js"></script>
	<script src="<?= base_url() ?>asset/js/qrcode.min.js"></script>
	<script src="<?= base_url() ?>asset/js/app_course.js"></script>


</body>
</html>




