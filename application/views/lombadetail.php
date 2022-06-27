<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url('assets/styles/')?>detailLomba.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <title>Detail Lomba</title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/index.html">
                <img src="<?= base_url('assets/img/')?>logorem.png" alt="Logo Agridation" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index.html" style="color: #09421a">Beranda</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link active" href="/public/lomba.css" style="color: #09421a">Lomba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/public/acara.html" style="color: #09421a">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/public/artikel.html" style="color: #09421a">Artikel</a>
                    </li>
                </ul>
                <a href="/public/masuk.html">
                    <button class="btn btn-masuk me-2 ms-4 fw-bold" type="button">Masuk</button>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Content -->
    <?php foreach ($lomba as $l) :?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col pt-5 d-flex">
                        <a href="<?= base_url('Perlombaan')?>">
                            <img src="<?= base_url('assets/icon/')?>arrowBack.svg" class="img-fluid" width="25px" alt="">
                        </a>
                        <h4 class="fw-bold ms-3">Lomba / Detail</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-4">
                <div class="container h-100 pb-4 pt-4">
                    <div class="row mt-4">
                        <div class="col-3">
                            <img src="<?= base_url('assets/Illustration/')?><?= $l->foto ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h2 class="fw-bold"><?= $l->nama_lomba ?></h2>
                            <a target="_blank" href="<?= $l->link_booklet ?>">
                                <button class="btn btn-download" type="button">
                                    Download PDF
                                    <img src="<?= base_url('assets/icon/')?>download.svg" class="img-fluid" alt="">
                                </button>
                            </a>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <h4>Ketentuan Umum</h4>
                            <?= $l->ketentuan_umum ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h4>Ketentuan Lomba</h4>
                            <?= $l->ketentuan_lomba ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h4>Pendaftaran Lomba</h4>
                            <?= $l->pendaftaran_lomba ?>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <img src="<?= base_url('assets/Illustration/')?>tanggal.svg" class="img-fluid d-none d-md-block" alt="">
                        </div>
                        <div class="col-12 col-md-9">
                            <h4>Jadwal Pelaksanaan</h4>
                            <?= $l->jadwal_pelaksanaan ?>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <h4>Kriteria Penilaian</h4>
                        <?= $l->kriteria_penilaian ?>
                        <div class="col-3">
                            <img src="<?= base_url('assets/Illustration/')?>kriteria.svg" class="img-fluid d-none d-md-block" alt="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <img src="<?= base_url('assets/Illustration/')?>penghargaan.svg" class="img-fluid d-none d-md-block" alt="">
                        </div>
                        <div class="col-12 col-md-9">
                            <h4>Penghargaan</h4>
                            <?= $l->penghargaan ?>
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col">
                                    <a href="<?=base_url($l->link_daftar) ?>">
                                        <button type="button" class="btn btn-daftar">Daftar Lomba</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Of Main Content -->
    <?php endforeach ?>