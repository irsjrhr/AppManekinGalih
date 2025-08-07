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
                    <p>Phone: +62 821-1115-9995</p>
                    <p>Alamat: Jl. pendidikan Rt 05 RW 03 nomer 10 , Cinangka Sawangan Depok , Jawa Barat.
                    ini alamat</p>
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