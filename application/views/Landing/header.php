<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Hair Style Studio - Virtual Barber Experience</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/landing.css"> 
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/katalog_tentang.css"> 

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="#" class="logo">
                <img src="<?= base_url('asset/gam/logo.png') ?>" class="logo_img">
            </a>
            <ul class="nav-links">
                <?php foreach ($data_nav as $key => $row_nav) {?>
                    <li style="padding-top: 20px;"><a href="<?= $row_nav['link'] ?>"><?= $row_nav['menu'] ?></a></li>
                <?php } ?>

            </ul>
            <a href="<?= base_url() ?>Manekin" class="cta-button">Mulai Sekarang</a>
        </nav>
    </header>