<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="<?= base_url('assets/img/')?>logorem.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets/styles/')?>lomba.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />


  <title><?= $title ?></title>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            <a class="nav-link active" href="<?= base_url('Perlombaan')?>" style="color: #09421a;">Lomba</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('Webinar')?>" style="color: #09421a">Acara</a>
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

  <!-- Section Lomba Start -->
  <section id="lomba">
    <div class="container">
      <h2 class="text-center mt-3 fw-bold" style="color: #032C17;">Perlombaan</h2>
      <div class="row mt-3">
        <div class="col mb-3">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>ltki.svg" class="img-fluid pt-3 mx-auto" alt="lkti">
            </div>
            <div class="card-body">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Karya Tulis Ilmiah Competition</h5>
              </div>
              <ul>
                <li>Umum (15-25 Tahun)</li>
                <li>Setiap tim teridiri dari dua sampai tiga orang</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>5"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
        <div class="col mb-3">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>Podcast.svg" class="img-fluid pt-3 mx-auto" alt="Poster Competition">
            </div>
            <div class="card-body">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Podcast Competition</h5>
              </div>
              <ul>
                <li>Umum (15-25 Tahun)</li>
                <li>Bersifat individu atau kelompok (2 orang)</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>4"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
        <div class="col mb-3">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>BP.svg" class="img-fluid pt-3 mx-auto" alt="Business Plan">
            </div>
            <div class="card-body">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Business Plan Competition</h5>
              </div>
              <ul>
                <li>Mahasiswa aktif D3/D4/S1 di PTN maupun PTS seluruh Indonesia</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>6"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col mb-4">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>cv.svg" class="img-fluid pt-3 mx-auto" alt="Creative Video">
            </div>
            <div class="card-body">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Creative Video Competition</h5>
              </div>
              <ul>
                <li>Umum (15-25 Tahun)</li>
                <li>Bersifat Kelompok (2-4 Anggota)</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>3"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>fotografi.svg" class="img-fluid pt-3 mx-auto" alt="Photography">
            </div>
            <div class="card-body ">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Photography Competition</h5>
              </div>
              <ul>
                <li>Umum (15-25 Tahun)</li>
                <li>Bersifat individu</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>1"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card card-lomba">
            <div class="img-card-lomba d-flex justify-content-center" style="height: 150px;">
              <img src="<?= base_url('assets/Illustration/')?>Poster.svg" class="img-fluid pt-3 mx-auto" alt="Poster">
            </div>
            <div class="card-body ">
              <div class="card-block text-center border-bottom border-white mb-3">
                <h5 class="card-title mb-3">Poster Competition</h5>
              </div>
              <ul>
                <li>Umum (15-25 Tahun)</li>
                <li>Bersifat individu</li>
              </ul>
              <a href="<?= base_url('Perlombaan/detail/')?>2"
                class="text-decoration-none text-white float-end">Lihat selengkapnya &gt;&gt;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Lomba End  -->

  <!-- Section Timeline Start -->

  <section id="timeline">
    <div class="container mt-4">
      <h2 class="font-weight-bold text-center">Timeline</h2>
      <div class="dropdown">
        <select class="btn btn-lomba" name="" id="">
          <option value="BP">Business Plan</option>
          <option value="lkti">Karya Tulis Ilmiah</option>
          <option value="lain">Lainnya</option>
        </select>
      </div>
      <div class="img-timeline overflow-auto mt-3" style="height: 600px;">
        <div class="BP box">
          <img src="<?= base_url('assets/img/lomba/')?>BP.png" class="img-fluid" alt="">
        </div>
        <div class="lkti box">
          <img src="<?= base_url('assets/img/lomba/')?>ltki.png" class="img-fluid" alt="">
        </div>
        <div class="lain box">
          <img src="<?= base_url('assets/img/lomba/')?>lainnya.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Section Timeline End -->

  <!-- Footer Start -->
  <footer class="section-footer mt-5 mb-4">
    <div class="container mt-5 pb-2">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-lg-3 mt-3">
              <h5 style="font-weight: 500;">Mengembangkan Pertanian Menuju Kehidupan Terbaik</h5>
              <div class="d-flex col justify-content-center" style="width: 305px; height: 87px;">
                <img src="<?= base_url('assets/img/')?>logorem.png" alt="">
              </div>

            </div>

            <div class="col-12 col-lg-3">
              <h5 class="font-weight-bold">Layanan</h5>
              <ul class="list-unstyled">
                <li><a href="<?= base_url('Snk')?>" class="text-secondary">Syarat dan Ketentuan</a></li>
                <li><a href="#" class="text-secondary">Bantuan</a></li>
              </ul>
            </div>

            <div class="col-12 col-lg-3">
              <h5 class="font-weight-bold">Agridation</h5>
              <ul class="list-unstyled">
                <li><a href="<?= base_url('Artikel')?>" class="text-secondary">Artikel</a></li>
                <li><a href="<?= base_url('Dokumentasi')?>" class="text-secondary">Dokumentasi</a></li>
                <li><a href="<?= base_url('Tentang')?>" class="text-secondary">Tentang Kami</a></li>
              </ul>
            </div>

            <div class="col-12 col-lg-3">
              <h5 class="font-weight-bold">Kontak</h5>
              <ul class="list-unstyled">
                <li><a target="_blank" href="https://www.instagram.com/agridationsvipb/" class="text-secondary">Instagram</a></li>
                <li><a target="_blank" href="https://goo.gl/maps/rFJQvxbGhyFEgGwL7" class="text-secondary">Jl. Raya Dramaga
                    Kampus IPB Dramaga Bogor 16680 West Java, Indonesia</a></li>
                <li><a target="_blank" href="mailto:agridationsvipb@gmail.com" class="text-secondary">agridationsvipb@gmail.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row border-bottom justify-content-center align-items-center pt-4 pb-2">
        <div class="col-auto text-gray-500 font-weight-light text-secondary">
          @2022 Agridation | Sekolah Vokasi IPB Universtity
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->


  <!-- Script-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>


  <!-- Dropdown Option -->
  <script>
    $(document).ready(function () {
      $("select").change(function () {
        $(this).find("option:selected").each(function () {
          var optionValue = $(this).attr("value");
          if (optionValue) {
            $(".box").not("." + optionValue).hide();
            $("." + optionValue).show();
          } else {
            $(".box").hide();
          }
        });
      }).change();
    });
  </script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>