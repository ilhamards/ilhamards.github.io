<?php include __DIR__ . '/../layouts/header.php'; ?>

<main>
    <div class="content container my-4 px-3">
        <div class="section-one d-flex flex-column justify-content-center align-items-center">
             <h1 class="text-one text-center mb-1 mt-4">
                Tentang <span class="highlight"> Kami </span>
              </h1>

             <div class="ilhdev-about row w-100 align-items-center mt-5 mb-2 gx-5">
                <div class="col-12 col-md-5 text-center mb-4">
                    <div class="img-wrapper" style="overflow: hidden; border-radius: 15px; box-shadow: 0 15px 35px rgba(0,0,0,0.15);">
                        <img src="<?= BASE_URL ?>/image/tentang-kami.png" alt="ILHDEV Team" class="img-fluid transition-scale" style="transition: transform 0.3s ease;">
                    </div>
                </div>

                <div class="col-12 col-md-7 text-center text-md-start mb-2 mt-4 mt-md-0 mb-md-0">
                   <p class="deskripsi-two" style="font-size: 1rem; line-height: 1.8; color: #4B5563;text-align:justify;">
                        <strong style="color: #4169E1;">ILHDEV</strong> didirikan pada tahun 2022.  
                        Sejak saat itu, kami telah membantu berbagai UMKM, personal bisnis, hingga perusahaan besar dalam membangun kehadiran online mereka, dengan puluhan website yang berhasil kami selesaikan.  
                        Kami juga terdaftar di situs freelance seperti <strong>Fastwork.id</strong> dan membuka layanan freelance di <strong>Facebook</strong>.  
                        Tim kami mampu mendampingi Anda mulai dari membangun konsep hingga finishing project, sehingga solusi yang diberikan <strong style="color: #4169E1;">efektif, modern, dan profesional</strong>.
                    </p>
                </div>

                
            </div>



              <div class="d-flex justify-content-center section-gap flex-wrap mb-2 flex-column align-items-center">
          <div class="text-center mb-3">
              <h2 class="text-two">Kenapa Harus Milih Kami ?</h2>
              <p class="deskripsi-two">
                  Kami menawarkan <strong>Solusi Website Murah dan Profesional</strong> yang dirancang untuk membantu bisnis Anda berkembang.
              </p>
          </div>

          <div class="row g-4 justify-content-center w-100">
              <div class="col-6 col-md-4 col-lg-3 text-center d-flex">
                  <div class="feature-card shadow-sm h-100 w-100">
                      <i class="ph-fill ph-lightning"></i>
                      <h5 class="mt-3">Harga Terjangkau</h5>
                      <p class="text-muted">
                          Layanan website dengan kualitas terbaik tanpa membuat kantong Anda bolong. Cocok untuk semua skala bisnis.
                      </p>
                  </div>
              </div>

              <div class="col-6 col-md-4 col-lg-3 text-center d-flex">
                  <div class="feature-card shadow-sm h-100 w-100">
                      <i class="ph-fill ph-laptop"></i>
                      <h5 class="mt-3">Desain Profesional</h5>
                      <p class="text-muted">
                          Tampilan modern, responsif, dan sesuai identitas brand Anda untuk memberikan kesan pertama yang kuat.
                      </p>
                  </div>
              </div>

              <div class="col-6 col-md-4 col-lg-3 text-center d-flex">
                  <div class="feature-card shadow-sm h-100 w-100">
                      <i class="ph-fill ph-rocket-launch"></i>
                      <h5 class="mt-3">Proses Cepat</h5>
                      <p class="text-muted">
                          Website bisa online hanya dalam hitungan hari, tanpa mengorbankan kualitas dan fungsionalitas.
                      </p>
                  </div>
              </div>

               <div class="col-6 col-md-4 col-lg-3 text-center d-flex">
                  <div class="feature-card shadow-sm h-100 w-100">
                      <i class="ph-fill ph-phone-call"></i>
                      <h5 class="mt-3">Free Konsultasi 24 Jam</h5>
                      <p class="text-muted">
                          Tim kami siap membantu kapan saja. Konsultasi cepat, mudah, dan gratis tanpa batasan jam.
                      </p>
                  </div>
              </div>
          </div>
      </div>


              <div class="content-2 container my-4 px-3 mb-4">
                <div class="d-flex justify-content-center flex-wrap mt-3 mb-2 flex-column align-items-center">
                        <div class="text-center mt-3 mb-3">
                            <h2 class="text-two">Teknologi dan Partner Kami</h2>
                            <p class="deskripsi-two">Dengan dukungan teknologi canggih dan kemitraan strategis, kami mewujudkan website yang fungsional, aman, dan dapat diandalkan untuk bisnis Anda.</p>
                        </div>

                        <div class="d-flex flex-wrap justify-content-center align-items-center">
                        <img src="<?= BASE_URL ?>/image/google.webp" alt="Google" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/idcloud.webp" alt="Cloud" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/cloudflare.png" alt="Cloudflare" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/vs.png" alt="Visual Studio Code" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/pinterest.png" alt="Pinterest" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/nodejs.png" alt="Node.js" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/laravel.png" alt="Laravel" class="partner-logo">
                        <img src="<?= BASE_URL ?>/image/ci.png" alt="CodeIgniter" class="partner-logo">
                        </div>
                </div>
                </div>
        </div>
    </div>
</main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>