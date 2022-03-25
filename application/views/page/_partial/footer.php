<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <!-- <h3>Mamba</h3> -->
          <img src="<?= base_url() ?>assets/home/img/logo.png" alt="Logo SMA Negeri 3 Bojonegoro" class="img-fluid mb-2">
          <p>
            Jl. Monginsidi Nomor 09 <br>
            Kabupaten Bojonegoro, Jawa Timur<br><br>
            <strong>Phone:</strong> 081 130 550 222<br>
            <strong>Email:</strong> sman3bojonegoro@gmail.com<br>
          </p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Profile</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">PPDB</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Info Kelulusan</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Galeri</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Video</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Foto</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Info Kelulusan</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <div id="map"></div>
          <!-- <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form> -->

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>SMAN 3 Bojonegoro</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/home/vendor/purecounter/purecounter.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/home/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/home/js/main.js"></script>
<script>
  var map = L.map('map', {
    // zoomControl: false
  }).setView([-7.1643399, 111.8839697], 14);

  var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
  }).addTo(map);

  var marker = L.marker([-7.1643399, 111.8839697]).addTo(map);

  map.on('click', onMapClick);
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
</body>

</html>