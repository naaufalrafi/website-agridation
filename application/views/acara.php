<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/') ?>logorem.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url('assets/styles/') ?>acara.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <title><?= $title ?></title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/img/') ?>logorem.png" alt="Logo Agridation" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('') ?>" style="color: #09421a">Beranda</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link active" href="<?= base_url('Perlombaan') ?>" style="color: #09421a;">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('Webinar') ?>" style="color: #09421a">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('Artikel') ?>" style="color: #09421a">Artikel</a>
                    </li>
                </ul>
                <a href="<?= base_url('Auth/Login') ?>">
                    <button class="btn btn-masuk me-2 ms-4 fw-bold" type="button">Masuk</button>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content -->
    <main>
        <!-- spacing -->
        <div class="row mt-5">
            <div class="col-12"></div>
        </div>
        <!-- spacing -->

        <section id="hero">
            <!-- hero -->
            <div class="container h-100 d-flex align-items-center">
                <div class="text-hero" style="color: white;">
                    <div class="row">
                        <div class="col">
                            <h6 style="opacity: 0.7;">25 September 2022</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9 col-lg-8">
                            <h2 style="font-weight: bold;">Webinar & Workshop Agridation 2022</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <h5>"Pertantian Sebagai Leading Sector Perekonomian Nasional"</h5>
                        </div>
                    </div>
                    <!-- <h6 style="opacity: 0.7;">25 September 2022</h6> -->
                    <!-- <h2 style="width: 400px; font-weight: bold;">Webinar & Workshop Agridation 2022</h2> -->
                    <!-- <h5 style="width: 400px;">"Pertantian Sebagai Leading Sector Perekonomian Nasional"</h5> -->
                </div>
            </div>
        </section>
        <!-- end of hero -->

        <!-- pembicara -->
        <section id="pembicara">
            <!-- <div class="container mt-4">
                <h6 style="color: #125D1B;">Pembicara</h6>
                <div class="row">
                    <div class="col-lg-7 col-xl-5">
                        <h4>Ikuti Webinar & Workshop Pertanian TERBESAR dengan Pembicara Spektakuler</h4>
                    </div>
                </div>
                <p style="opacity: 0.7;">Dapatkan wawasan baru yang menarik dari pembicara yang tidak kalah menarik dan
                    sangat luar biasa
                    dibidangnya</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card card-pembicara">

                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-pembicara">

                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-pembicara">

                        </div>
                    </div>
                </div>
            </div> -->
            <div class="container mt-4">
                <h6 style="color: #125D1B;">Acara</h6>
                <h4 style="color: #032C17;">Jangan Kelewatan Acara Serunya !</h4>
                <div class="row mt-3">
                    <div class="col-8 ww-img">
                        <img src="<?= base_url('assets/img/acara/') ?>ww.png" class="img-fluid mx-auto mx-lg-none" alt="">
                    </div>
                    <div class="col-4">
                        <img src="<?= base_url('assets/img/acara/') ?>illustration.svg" class="img-fluid d-none d-lg-block" alt="">
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row d-flex align-items-center">
                    <div class="col-4">
                        <img src="<?= base_url('assets/img/acara/') ?>mini-event.svg" class="img-fluid d-none d-lg-block" alt="">
                    </div>
                    <div class="col-8 miniEvent">
                        <h6 style="color: #125D1B;">Mini Event</h6>
                        <h4 style="font-weight: bold; color: #032C17;">Tidak Kalah Seru Juga Mini Eventnya !</h4>
                        <p>Kembangkan kemampuanmu dalam bidang pertanian dengan mengikuti mini event dan menangkan
                            hadiah menarik yang menunggumu saat <b>Webinar & Workshop</b> berlangung! </p>
                        <h5 style="font-weight: bold; color: #032C17;">Jadwal Pelaksanaan</h5>
                        <div class="row">
                            <div class="col-4 col-lg-3">
                                <p>Pendaftaran</p>
                                <p>Pengiriman KIT</p>
                                <p>Pengumpulan Hasil</p>
                            </div>
                            <div class="col-8 col-lg-9">
                                <p>13 Agustus 2022 - 20 Agustus 2022</p>
                                <p>15 Agustus 2022 - 20 Agustus 2022</p>
                                <p>1 September 2022 - 22 September 2022</p>
                            </div>
                        </div>
                        <h5 style="font-weight: bold; color: #032C17;">Kriteria Penilaian Mini Event</h5>
                        <div class="row">
                            <div class="col-3 col-lg-3">
                                <p>Tampilan Daun</p>
                                <p>Bentuk Batang</p>
                                <p>Wadah</p>
                                <p>Kreativitas Hasil</p>
                            </div>
                            <div class="col-2 col-lg-1">
                                <p>40%</p>
                                <p>20%</p>
                                <p>20%</p>
                                <p>20%</p>
                            </div>
                            <div class="col-7 col-lg-8">
                                <p>Bentuk daun (berlubang/tidak) dan warna daun(pucat/tidak)</p>
                                <p>Bentuk tanaman</p>
                                <p>Kebersihan air yang menjadi wadah</p>
                                <p>Kreativitas dalam memposting hasil tanaman kit</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-lg-5 col-xl-4">
                                <a href="https://ipb.link/booklet-ww-agridation2022" target="_blank">
                                    <button type="button" class="btn btn-download">Download PDF
                                        <img src="<?= base_url('assets/icon/') ?>download.svg" alt="">
                                    </button>
                                </a>
                            </div>
                            <div class="col-7"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of pembicara -->
    </main>
    <!-- End Of Main Content -->