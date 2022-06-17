<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/styles/')?>artikel.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />


  <title><?= $title ?></title>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('')?>">
        <img src="<?= base_url('assets/img/')?>logorem.png" alt="Logo Agridation" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('')?>" style="color: #09421a">Beranda</a>
          </li>
          <li class=" nav-item">
            <a class="nav-link active" href="<?= base_url('Lomba')?>" style="color: #09421a;">Lomba</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('Acara')?>" style="color: #09421a">Acara</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('Artikel')?>" style="color: #09421a">Artikel</a>
          </li>
        </ul>
        <a href="<?= base_url('Auth/Login')?>">
          <button class="btn btn-masuk me-2 ms-4 fw-bold" type="button">Masuk</button>
        </a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Spacing Only -->
  <div class="row mt-5">
    <div class="col-12"></div>
  </div>
  <!-- end spacing -->

  <!-- Section Trending Article Start -->
  <section id="trending" class="mt-5">
    <div class="container">
      <h2 class="fw-bold">Trending Artikel</h2>
      <div class="card mb-3 cardTrending" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= base_url('assets/img/artikel/')?>trending.png" class="img-fluid p-2" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <small style="opacity: 0.7;">IT - 24 September 2021</small>
              <h5 class="card-title">Pembuatan Grid Pada Desain Website</h5>
              <p class="card-text">Desain grid merupakan desain yang disusun mengikuti garis baik secara horizontal,
                vertikal maupun diagonal, yang nantinya akan berfungsi sebagai pengatur konten yang di sematkan dalam
                sebuah website.</p>
              <p class="card-text text-end">
                <a href="#">
                  <small>
                    Baca Artikel
                  </small>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Trending Article End -->

  <!-- Section Other Article Start -->
  <section id="artikel" class="pt-1" style="width: 100%; height: 910px;">
    <div class="container">
      <h2 class="font-weight-bold" style="color: #212529;">Other Article</h2>
      <div class="row row-cols-1 row-cols-md-3 mt-5">
        <div class="col col-lg-4 pb-5">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>1.svg" class="card-img-top img-fluid"
              style=" width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>Agribisnis - 21 April 2022</h6>
              <h4>Pertumbuhan Microgen Kankung</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 d-none d-lg-block">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>2.svg" class="card-img-top img-fluid"
              style="width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>Pengembangan diri - 13 April 2022</h6>
              <h4>Menjadi Generasi Gen Z Dengan Filosofi Stoic</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 d-none d-lg-block">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>3.svg" class="card-img-top img-fluid"
              style="width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>IT - 21 April 2022</h6>
              <h4>Perkembangan Bahasa Golang Untuk Back-End 2022</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>1.svg" class="card-img-top img-fluid"
              style=" width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>Agribisnis - 21 April 2022</h6>
              <h4>Pertumbuhan Microgen Kankung</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 d-none d-lg-block">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>2.svg" class="card-img-top img-fluid"
              style="width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>Pengembangan diri - 13 April 2022</h6>
              <h4>Menjadi Generasi Gen Z Dengan Filosofi Stoic</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <div class="col col-lg-4 d-none d-lg-block">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/home/artikel/')?>3.svg" class="card-img-top img-fluid"
              style="width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6>IT - 21 April 2022</h6>
              <h4>Perkembangan Bahasa Golang Untuk Back-End 2022</h4>
              <a href="#">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Section Other Article End -->
