<footer style="background-color: #4169E1;" class="py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4 footer-contact">
        <div class="footer-logo mb-0">
            <h2 class="mb-0">ilhdev.com</h2>
        </div>
        <span class="footer-text-one mb-2">
         <span class="tagline">Jasa Website Murah Dan Profesional.</span>
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
          <li><a href="<?= BASE_URL ?>">Beranda</a></li>
          <li><a href="<?= BASE_URL ?>/pages/portofolio">Portofolio</a></li>
          <li><a href="<?= BASE_URL ?>/pages/paket-website">Paket Website</a></li>
          <li><a href="<?= BASE_URL ?>/pages/tentang-kami">Tentang Kami</a></li>
          <li><a href="<?= BASE_URL ?>/pages/kontak">Kontak</a></li>
        </ul>
      </div>

      <div class="col-md-3 mb-4 text-center text-md-start footer-actions">
        <div class="d-grid gap-2 mb-3">
          <a href="https://wa.me/6281233972458?text=Halo%20min,%20saya%20tertarik%20dengan%20jasa%20pembuatan%20website,%20apakah%20bisa%20konsultasi%20?" class="btn btn-outline-light btn-lg rounded-pill">
            <i class="ph-fill ph-whatsapp-logo me-2"></i> Konsultasi
          </a>
        </div>
        <div class="d-flex gap-3 mt-3 justify-content-center">
          <a href="https://www.facebook.com/ilham.sellerr" class="social-link"><i class="ph-fill ph-facebook-logo"></i></a>
          <a href="https://www.instagram.com/ilhdev" class="social-link"><i class="ph-fill ph-instagram-logo"></i></a>
          <a href="https://www.linkedin.com/in/muhamat-ilham-ardiansa-b4256923a/" class="social-link"><i class="ph-fill ph-linkedin-logo"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<nav class="mobile-bottom-nav d-md-none">
    <a href="<?= BASE_URL ?>" class="nav-link text-center">
        <i class="ph-bold ph-house fs-4"></i>
        <div class="small">Beranda</div>
    </a>
    <a href="<?= BASE_URL ?>/pages/portofolio" class="nav-link text-center">
        <i class="ph-bold ph-briefcase fs-4"></i>
        <div class="small">Portofolio</div>
    </a>
    <a href="<?= BASE_URL ?>/pages/paket-website" class="nav-link text-center">
        <i class="ph-bold ph-globe fs-4"></i>
        <div class="small">Paket</div>
    </a>
    <a href="<?= BASE_URL ?>/pages/tentang-kami" class="nav-link text-center">
        <i class="ph-bold ph-info fs-4"></i>
        <div class="small">Tentang</div>
    </a>
    <a href="<?= BASE_URL ?>/pages/kontak" class="nav-link text-center">
        <i class="ph-bold ph-phone fs-4"></i>
        <div class="small">Kontak</div>
    </a>
</nav>




<!-- Offline jQuery -->
<script src="<?= BASE_URL ?>/js/jquery.min.js"></script>
<script src="<?= BASE_URL ?>/js/owl.caraousel.min.js"></script>
<script src="<?= BASE_URL ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/js/datatables.min.js"></script>
<script src="<?= BASE_URL ?>/js/swiper-bundle.min.js"></script>
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

document.addEventListener("DOMContentLoaded", function () {
    let currentPath = window.location.pathname.replace(/^\/|\/$/g, ""); 
    let uriParts = currentPath.split("/"); 
    let lastPart = uriParts[uriParts.length - 1]; 

    document.querySelectorAll(".mobile-bottom-nav .nav-link").forEach(link => {
        let href = link.getAttribute("href").replace(/^\.\/|\/$/g, ""); 
        let hrefParts = href.split("/");
        let hrefLast = hrefParts[hrefParts.length - 1];

        if (hrefLast === "" && (currentPath === "" || lastPart === "ilhamards.github.io")) {
            link.classList.add("active");
        }
        else if (lastPart === hrefLast) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
});

  const filterButtons = document.querySelectorAll(".filter-btn");
  const portfolioItems = document.querySelectorAll(".portfolio-item");

  filterButtons.forEach(button => {
    button.addEventListener("click", () => {
      filterButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      const filter = button.getAttribute("data-filter");

      portfolioItems.forEach(item => {
        if (filter === "all" || item.getAttribute("data-category") === filter) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
</script>
</body>
</html>
