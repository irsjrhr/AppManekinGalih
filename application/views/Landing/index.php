<?php
$data_nav = [
    ["menu" => "Beranda", "link" => base_url() . "#"],
    ["menu" => "Katalog", "link" => base_url() . "#katalog"],
    ["menu" => "Step", "link" => base_url() . "#step"],
    ["menu" => "Kontak Kami", "link" => base_url() . "#contact"],
]
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Hair Style Studio - Virtual Barber Experience</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>asset/css/landing.css"> 

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="#" class="logo">Cah Bagus</a>
            <ul class="nav-links">
                <?php foreach ($data_nav as $key => $row_nav) {?>
                    <li style="padding-top: 20px;"><a href="<?= $row_nav['link'] ?>"><?= $row_nav['menu'] ?></a></li>
                <?php } ?>

            </ul>
            <a href="#" class="cta-button">Mulai Sekarang</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero mt-4" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Revolusi Gaya Rambut Digital</h1>
                    <p>Rasakan pengalaman barber virtual yang revolusioner dengan teknologi 3D terdepan. Pilih bentuk wajah, coba berbagai model rambut, dan lihat hasilnya secara real-time sebelum memotong rambut Anda!</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn-primary">Coba Sekarang</a>
                        <a href="#how-it-works" class="btn-secondary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <!-- 3D visualization placeholder -->
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="katalog">
        <div class="container">
            <h2 class="section-title">Katalog Layanan</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-icon classic-cut">✂️</span>
                    <h3>Classic Cut</h3>
                    <p>Potongan rambut klasik dengan teknik tradisional yang sudah terbukti. Cocok untuk gaya formal dan kasual dengan hasil yang timeless dan elegan.</p>
                    <div class="price">Rp 50.000</div>
                </div>
                <div class="feature-card">
                    <span class="feature-icon design-3d">🎯</span>
                    <h3>3D Hair Design</h3>
                    <p>Pengalaman virtual hair styling dengan teknologi 3D terdepan. Coba berbagai model rambut secara real-time sebelum memutuskan potongan.</p>
                    <div class="price">Rp 75.000</div>
                </div>
                <div class="feature-card">
                    <span class="feature-icon premium-styling">👑</span>
                    <h3>Premium Styling</h3>
                    <p>Layanan styling premium dengan treatment khusus, produk berkualitas tinggi, dan teknik styling terbaru untuk hasil yang maksimal.</p>
                    <div class="price">Rp 100.000</div>
                </div>
                <div class="feature-card">
                    <span class="feature-icon color-style">🎨</span>
                    <h3>Color & Style</h3>
                    <p>Kombinasi pewarnaan rambut profesional dan styling sesuai trend terkini. Dari warna natural hingga bold color yang eye-catching.</p>
                    <div class="price">Rp 150.000</div>
                </div>
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
            <a href="#" class="btn-primary">Mulai Styling Sekarang</a>
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
                            <p>Jl. Ki Hajar Dewantara No 8<br>
                                RT003/RW005<br>
                                Sawah Lama, Ciputat, Tangerang<br>
                            Selatan, Banten 15413</p>
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
                        <button type="submit" class="btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Cah Bagus</h3>
                    <p>Revolusi dalam dunia styling rambut dengan teknologi 3D yang memungkinkan Anda mencoba berbagai gaya sebelum memotong rambut.</p>
                </div>
                <div class="footer-section">
                    <h3>Layanan</h3>
                    <p><a href="#">Classic Cut</a></p>
                    <p><a href="#">3D Hair Design</a></p>
                    <p><a href="#">Premium Styling</a></p>
                    <p><a href="#">Color & Style</a></p>
                </div>
                <div class="footer-section">
                    <h3>Kontak</h3>
                    <p>Email: ksu.inkam@gmail.com</p>
                    <p>Phone: +62 815-1340-4197</p>
                    <p>Alamat: Jl. Ki Hajar Dewantara No 8, Ciputat</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Cah Bagus. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                header.style.background = 'rgba(0, 0, 0, 0.9)';
            }
        });

        // Add hover effects to feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all feature cards and steps
        document.querySelectorAll('.feature-card, .step').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>