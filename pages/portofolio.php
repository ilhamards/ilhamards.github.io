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
              <button class="filter-btn" data-filter="landing">Topup Games</button>
              <button class="filter-btn" data-filter="ecommerce">Lainnya</button>
            </div>

            <div class="row w-100 g-4">
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="landing">
                <div class="portfolio-card p-3 text-center">
                  <img src="https://placehold.co/300x200" class="img-fluid mb-2" alt="Portfolio 1">
                  <div class="portfolio-title">PT ILHPEDIA</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="company">
                <div class="portfolio-card p-3 text-center">
                  <img src="https://placehold.co/300x200" class="img-fluid mb-2" alt="Portfolio 2">
                  <div class="portfolio-title">PT ILHPEDIA</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="ecommerce">
                <div class="portfolio-card p-3 text-center">
                  <img src="https://placehold.co/300x200" class="img-fluid mb-2" alt="Portfolio 3">
                  <div class="portfolio-title">PT ILHPEDIA</div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 portfolio-item" data-category="property">
                <div class="portfolio-card p-3 text-center">
                  <img src="https://placehold.co/300x200" class="img-fluid mb-2" alt="Portfolio 4">
                  <div class="portfolio-title">PT ILHPEDIA</div>
                </div>
              </div>
            </div>

        </div>
    </div>
</main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>