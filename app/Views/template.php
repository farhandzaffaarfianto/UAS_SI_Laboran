<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>">
  <title>Laboran MOORA</title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="<?= base_url('assets/css/nucleo-icons.css') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/css/nucleo-svg.css') ?>" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link href="<?= base_url('assets/css/custom.css') ?>" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url('assets/css/material-dashboard.css?v=3.2.0') ?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <!-- Sidebar -->
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/img/logo-custom.png') ?>" class="navbar-brand-img" width="30" height="30"
          alt="logo">
        <span class="ms-1 text-sm text-dark">Laboran MOORA</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('/') ?>">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('kriteria') ?>">
            <i class="material-symbols-rounded opacity-5">content_paste</i>
            <span class="nav-link-text ms-1">Kriteria</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('alternatif') ?>">
            <i class="material-symbols-rounded opacity-5">group</i>
            <span class="nav-link-text ms-1">Alternatif</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('penilaian') ?>">
            <i class="material-symbols-rounded opacity-5">bar_chart</i>
            <span class="nav-link-text ms-1">Penilaian</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('matriks') ?>">
            <i class="material-symbols-rounded opacity-5">grid_on</i>
            <span class="nav-link-text ms-1">Matriks Keputusan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('normalisasi') ?>">
            <i class="material-symbols-rounded opacity-5">checklist</i>
            <span class="nav-link-text ms-1">Normalisasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('optimasi') ?>">
            <i class="material-symbols-rounded opacity-5">calculate</i>
            <span class="nav-link-text ms-1">Nilai Optimasi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('yi') ?>">
            <i class="material-symbols-rounded opacity-5">bar_chart</i>
            <span class="nav-link-text ms-1">Nilai Yi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="<?= base_url('ranking') ?>">
            <i class="material-symbols-rounded opacity-5">leaderboard</i>
            <span class="nav-link-text ms-1">Rangking</span>
          </a>
        </li>

      </ul>
    <!-- </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0">
      <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="#">Documentation</a>
        <a class="btn bg-gradient-dark w-100" href="#">Upgrade to Pro</a>
      </div>
    </div> -->
  </aside>

  <!-- Main Content -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0">
            <li class="breadcrumb-item">
              <span style="font-size: 1.5rem; font-weight: 700;">
                <span style="color: blue;">SPK</span>
                <span style="color: black;">Pemilihan Kepala Laboran</span>
              </span>
            </li>
          </ol>
        </nav>
      </div>
    </nav>


    <!-- Dynamic Content Section -->
    <div class="container-fluid py-4">
      <?= $this->renderSection('content') ?>
    </div>
  </main>

  <!-- Footer -->
  <!--
    <footer class="footer py-4">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->

  <!-- Scripts -->
  <script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = { damping: '0.5' }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <?= $this->renderSection('scripts') ?>
</body>

</html>