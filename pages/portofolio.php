<?php include __DIR__ . '/../layouts/header.php'; ?>

<main>
    <div class="content container my-4 px-3">
        <div class="section-one d-flex flex-column justify-content-center align-items-center">
             <h1 class="text-one text-center mb-1 mt-4">
                <span class="highlight">Portofolio </span>Kami
              </h1>
              <span class="deskripsi-one text-center mb-4">
               Kami mengubah ide bisnis Anda menjadi website yang profesional dan efektif. <br class="desktop-only" /> Temukan bagaimana kami bisa membantu bisnis Anda berkembang melalui desain web yang luar biasa.
              </span>

            <div class="d-flex flex-wrap gap-2 justify-content-center mt-4 mb-4">
              <button class="filter-btn active" data-filter="all">Semua</button>
              <button class="filter-btn" data-filter="topup">Topup Games</button>
              <button class="filter-btn" data-filter="lainnya">Lainnya</button>
            </div>

            <div class="row w-100 g-4">
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="topup">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-1.png" class="img-fluid mb-2" alt="Portfolio 1">
                  <div class="portfolio-title">ILHTOPUP</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="topup">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-2.png" class="img-fluid mb-2" alt="Portfolio 2">
                  <div class="portfolio-title">Titanz Store</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="lainnya">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-3.jpg" class="img-fluid mb-2" alt="Portfolio 3">
                  <div class="portfolio-title">LinkTech Digital</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="lainnya">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-4.png" class="img-fluid mb-2" alt="Portfolio 4">
                  <div class="portfolio-title">ILHSMM</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="lainnya">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-5.png" class="img-fluid mb-2" alt="Portfolio 4">
                  <div class="portfolio-title">ILHPAY</div>
                </div>
              </div>
                <div class="col-md-3 col-sm-6 portfolio-item" data-category="lainnya">
                <div class="portfolio-card p-3 text-center">
                  <img src="<?= BASE_URL ?>/image/porto-5.png" class="img-fluid mb-2" alt="Portfolio 4">
                  <div class="portfolio-title">Bidders | Website Lelang</div>
                </div>
              </div>
            </div>

        </div>
    </div>
</main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>