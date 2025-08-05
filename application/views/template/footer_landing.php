<!-- Section FAQ -->
<section class="section_faq wow animate__animated animate__slideInLeft" style="background: none;">
  <div class="container">
    <!-- Row Content -->
    <div class="row row_content">
      <!-- Col Desc -->
      <div class="col-sm-6 col_desc">
        <h1 class="title_section"> Frequently Asked Questions (FAQ) </h1>
      </div>
      <!-- End Of Col Desc -->
      <!-- Col Faq -->
      <div class="col-sm col_faq">
        <!-- Box Faq - Loop -->
        <?php for ($j=0; $j < count($data_faq); $j++) { ?>
          <?php 
          $row_faq = $data_faq[$j];
          ?>
          <div class="box_faq">
            <!-- Header Faq --> 

            <div class="header_faq">
              <?= $row_faq['pertanyaan'] ?>

              <button class="btn btn-default btn_headerFaq">
                <i class="fas fa-chevron-right open"></i>
                <i class="fas fa-times close"></i>
              </button>
            </div>
            <!-- End Of Header Faq -->
            <!-- Body Faq -->
            <div class="body_faq">
              <?= $row_faq['jawaban'] ?>
            </div>
            <!-- End Of Body Faq -->

          </div>
        <?php } ?>
        <!-- End Of Box Faq - Loop -->

      </div>
      <!-- End Of Col Faq -->
    </div>
    <!-- End Of Row Content -->
  </div>
</section>  
<!-- End Of Section FAQ -->

<!-- Section Lokasi -->
<section class="section_lokasi wow animate__animated animate__slideInLeft">
  <div class="container">
    <!-- Row Content -->
    <div class="row row_content">
      <!-- Col Desc -->
      <div class="col-sm-12 text-center col_desc mb-3">
        <h1 class="title_section"> Lokasi </h1>
      </div>
      <!-- End Of Col Desc -->
      <!-- Col Faq -->
      <div class="col-sm col_faq">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.109997289694!2d106.61566749991044!3d-6.193911048902062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9bf18e93217%3A0xdcbd7b5bf0b8b249!2sTangcity%20Mall!5e0!3m2!1sid!2sid!4v1744584060076!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
      </div>
      <!-- End Of Col Faq -->
    </div>
    <!-- End Of Row Content -->
  </div>
</section>  
<!-- End Of Section Lokasi -->



</div>
<!-- End Of Col Content -->
</div>
<!-- End Of Row page -->

</div>
<!-- End Of Container page -->
<script src="<?= base_url() ?>asset/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>asset/js/app.js"></script>
<script>
  new WOW().init();
</script>

<footer class="lms-footer">
  <div class="footer-container">

    <div class="footer-section">
      <img src="<?= base_url() ?>asset/gam/logopanjang.png" class="mb-3">
      <!-- <h3>Certara</h3> -->
      <p>Solusi Tepat untuk Anak Cerdas & Percaya Diri</p>
    </div>

    <div class="footer-section">
      <h4>Kantor Pusat</h4>
      <p>Jl. Aceh No.12, RT.004/RW.007, Gembor, Kec. Periuk, Kota Tangerang, Banten 15133<br>Tangerang, Indonesia</p>
      <p>☎️ +62 816-268-304 <br>📧 bimbelcertaraindonesia@gmail.com</p>
    </div>

    <div class="footer-section">
      <h4>Navigasi</h4>
      <ul>
        <?php for ($i=0; $i < count($data_menu); $i++) { ?>
          <?php $data_row = $data_menu[$i] ?>
          <li><a href="<?= $data_row['url'] ?>"><?= $data_row['menu'] ?></a></li>
        <?php } ?>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Ikuti Kami</h4>
      <div class="social-icons">
        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
        <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    &copy; 2025 Certara@irsjrhr. All rights reserved.
  </div>
</footer>


</body>
</html>



