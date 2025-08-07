<!-- Hero Section -->
<section class="hero mt-4" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Revolusi Gaya Rambut Digital</h1>
                <p>Rasakan pengalaman barber virtual yang revolusioner dengan teknologi 3D terdepan. Pilih bentuk wajah, coba berbagai model rambut, dan lihat hasilnya secara real-time sebelum memotong rambut Anda!</p>
                <div class="hero-buttons">
                    <a href="<?= base_url('Manekin') ?>" class="btn-primary">Coba Sekarang</a>
                    <a href="<?= base_url('Landing/tentang') ?>" class="btn-secondary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-visual">
                <!-- 3D visualization placeholder -->
            </div>
        </div>
    </div>
</section>

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

    <!-- How It Works Section -->
    <section class="how-it-works" id="step">
        <div class="container">
            <h2 class="section-title">Cara Kerja</h2>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Pilih Bentuk Wajah</h3>
                    <p>Mulai dengan memilih bentuk wajah yang sesuai dengan wajah Anda dari berbagai pilihan yang tersedia.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Pilih Model Rambut</h3>
                    <p>Jelajahi koleksi model rambut dan pilih yang paling cocok dengan gaya dan preferensi Anda.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Sesuaikan Warna</h3>
                    <p>Eksperimen dengan berbagai warna rambut untuk menemukan yang paling cocok dengan kepribadian Anda.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Preview Hasil</h3>
                    <p>Lihat hasil akhir dari berbagai sudut dan nikmati gaya rambut baru Anda secara virtual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Siap Mencoba Gaya Rambut Baru?</h2>
            <p>Mulai petualangan styling rambut digital Anda sekarang dan temukan gaya yang sempurna!</p>
            <a href="<?= base_url('Manekin') ?>" class="btn-primary">Mulai Styling Sekarang</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title">Hubungi Kami</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Alamat</h3>
                            <p>Jl. pendidikan Rt 05 RW 03 nomer 10 , Cinangka Sawangan Depok , Jawa Barat.</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h3>Call</h3>
                            <p>+62 815-1340-4197</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>ksu.inkam@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div class="contact-details">
                            <h3>Waktu Kerja</h3>
                            <p>Senin - Jumat<br>
                            9:00AM - 05:00PM</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-row">
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Your Email" required>
                        </div>
                        <input type="text" placeholder="Subject" required>
                        <textarea placeholder="Message" rows="6" required></textarea>
                        <button type="submit" class="btn-primary">Kirim Email</button>
                        <a href="<?= $wa ?>" class="btn btn-success mt-5" style="width: 100%;"> Booking Sekarang </a>
                    </form>
                </div>
            </div>
        </div>
    </section>

