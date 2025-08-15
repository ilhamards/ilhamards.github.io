<footer style="background-color: #4169E1;" class="py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 footer-contact">
        <div class="footer-logo mb-3">
          <img src="https://placehold.jp/900x300.png" alt="Logo">
        </div>
        <span class="footer-text-one mb-2">
          ILHDEV <span class="tagline">| Professional Website Development for Your Business.</span>
        </span>

        <div class="contact-info mt-3">
          <p><i class="ph-fill ph-envelope"></i> info@ilhdev.com</p>
          <p><i class="ph-fill ph-whatsapp-logo"></i> 0812-3397-2458</p>
        </div>
      </div>

      <div class="col-md-2 mb-4 footer-links">
        <h6>Informasi</h6>
        <ul class="list-unstyled">
          <li><a href="#">Ketentuan Layanan</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4 footer-links">
        <h6>Konten</h6>
        <ul class="list-unstyled">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Portofolio</a></li>
          <li><a href="#">Paket Website</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4 text-center text-md-start footer-actions">
        <div class="d-grid gap-2 mb-3">
          <a href="#" class="btn btn-outline-light btn-lg rounded-pill">
            <i class="ph-fill ph-whatsapp-logo me-2"></i> Konsultasi
          </a>
        </div>
        <div class="d-flex gap-3 mt-3 justify-content-center">
          <a href="#" class="social-link"><i class="ph-fill ph-facebook-logo"></i></a>
          <a href="#" class="social-link"><i class="ph-fill ph-instagram-logo"></i></a>
          <a href="#" class="social-link"><i class="ph-fill ph-linkedin-logo"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<nav class="mobile-bottom-nav d-md-none">
    <a href="/" class="nav-link active text-center">
        <i class="ph-bold ph-house fs-4"></i>
        <div class="small">Beranda</div>
    </a>
    <a href="/portofolio" class="nav-link text-center">
        <i class="ph-bold ph-briefcase fs-4"></i>
        <div class="small">Portofolio</div>
    </a>
    <a href="/paket-website" class="nav-link text-center">
        <i class="ph-bold ph-globe fs-4"></i>
        <div class="small">Paket</div>
    </a>
    <a href="/tentang-kami" class="nav-link text-center">
        <i class="ph-bold ph-info fs-4"></i>
        <div class="small">Tentang</div>
    </a>
    <a href="/kontak" class="nav-link text-center">
        <i class="ph-bold ph-phone fs-4"></i>
        <div class="small">Kontak</div>
    </a>
</nav>




<!-- Offline jQuery -->
<script src="./js/jquery.min.js"></script>
<script src="./js/owl.caraousel.min.js"></script>
<!-- Offline Bootstrap JS -->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/datatables.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000, 
      disableOnInteraction: false, 
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

$(document).ready(function(){
  var owl = $(".portoOwl");

  owl.owlCarousel({
    loop: true,
    margin: 30,
    center: true,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: { items: 1 },
      768: { items: 3 }
    }
  });

  owl.on('changed.owl.carousel', function(event) {
    var items = $(this).find('.owl-item');
    items.removeClass('center-slide');
    items.eq(event.item.index + Math.floor(event.page.size / 2)).addClass('center-slide'); 
  });

  owl.trigger('refresh.owl.carousel');
});
</script>
</body>
</html>
