<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILHDEV - Jasa Website Murah Dan Profesional.</title>

    <!-- Favicon -->
    <link rel="icon" href="https://placehold.jp/150x150.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="https://placehold.jp/150x150.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://placehold.jp/150x150.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://placehold.jp/150x150.png">

    <meta name="description" content="Jasa Website Murah Dan Profesional">
    <meta name="author" content="ILHPEDIA">

    <?php include __DIR__ . '/../config.php'; ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/owl.caraousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/datatable.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= BASE_URL ?>">
            <img src="https://placehold.jp/900x300.png" alt="Logo">
        </a>

        <div class="social-icons d-flex d-lg-none ms-auto">
            <a href="https://www.instagram.com/ilhdev"><i class="ph-fill ph-instagram-logo"></i></a>
            <a href="https://www.linkedin.com/in/muhamat-ilham-ardiansa-b4256923a/"><i class="ph-fill ph-linkedin-logo"></i></a>
            <a href="https://www.facebook.com/ilham.sellerr"><i class="ph-fill ph-facebook-logo"></i></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <?php
                function isActive($page) {
                    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); 
                    $uriParts = explode('/', $uri); 

                    if ($page === '' && (empty($uri) || end($uriParts) === 'ilhamards.github.io')) {
                        return 'active';
                    }

                    return end($uriParts) === $page ? 'active' : '';
                }
                ?>
                            <li class="nav-item">
                    <a class="nav-link <?= isActive('') ?>" href="<?= BASE_URL ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('portofolio') ?>" href="<?= BASE_URL ?>/pages/portofolio">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('paket-website') ?>" href="<?= BASE_URL ?>/pages/paket-website">Paket Website</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('tentang-kami') ?>" href="<?= BASE_URL ?>/pages/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('kontak') ?>" href="<?= BASE_URL ?>/pages/kontak">Kontak</a>
                </li>
            </ul>

            <div class="social-icons d-none d-lg-flex">
                 <a href="https://www.instagram.com/ilhdev"><i class="ph-fill ph-instagram-logo"></i></a>
                <a href="https://www.linkedin.com/in/muhamat-ilham-ardiansa-b4256923a/"><i class="ph-fill ph-linkedin-logo"></i></a>
                <a href="https://www.facebook.com/ilham.sellerr"><i class="ph-fill ph-facebook-logo"></i></a>
            </div>
        </div>
    </div>
</nav>
