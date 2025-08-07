
<!-- Features Section -->
<section class="features"  id="katalog">
    <div class="container">
        <h2 class="section-title">Katalog Layanan</h2>
        <div class="features-grid">
            <?php for ($i=0; $i < count($data_katalog); $i++) { ?>
                <?php 
                $row_katalog = $data_katalog[$i];
                ?>
                <div class="feature-card">
                    <div class="service-image">
                        <img src="<?= $row_katalog['img'] ?>">
                    </div>
                    <div class="service-content">
                        <h3 class="service-name"> <?=$row_katalog['judul']?>  </h3>
                        <p class="service-description"><?= $row_katalog['deskripsi'] ?></p>
                        <div class="service-price">Rp <?= number_format($row_katalog
                            ['harga']) ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features"  id="layanan_tambahan">
        <div class="container">
            <h2 class="section-title"> Layanan Tambahan </h2>
            <div class="features-grid">
                <?php for ($i=0; $i < count($data_layanan); $i++) { ?>
                    <?php 
                    $row_layanan = $data_layanan[$i];
                    ?>
                    <div class="feature-card">
                        <div class="service-image">
                            <img src="<?= $row_layanan['img'] ?>">
                        </div>
                        <div class="service-content">
                            <h3 class="service-name"> <?=$row_layanan['judul']?>  </h3>
                            <p class="service-description"><?= $row_layanan['deskripsi'] ?></p>
                            <div class="service-price">Rp <?= number_format($row_layanan
                                ['harga']) ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>