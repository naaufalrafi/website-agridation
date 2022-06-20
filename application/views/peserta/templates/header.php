<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profil - Agridation</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/')?>profil.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/lomba-lainnya/')?>pendaftaran.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/lomba-lainnya/')?>techmeet.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/lomba-lainnya/')?>pengumpulan.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/lkti/')?>presentasi.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/')?>ww-pendaftaran.css">
    <link rel="stylesheet" href="<?= base_url('assets/styles/dashboard/')?>minievent-pendaftaran.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center pt-3 fw-bold">Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="<?= base_url('Peserta/Profil')?>">Profil</a>
                </li>
                <li>
                    <a href="#">Notifikasi</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Lomba</a>
                    <ul class="collapse list-unstyled sub-menu" id="homeSubmenu">
                        <li>
                            <a href="<?= base_url('Lomba/Lkti')?>">LKTI</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Lomba/Podcast')?>">Podcast</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Lomba/Fotografi')?>">Fotografi</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Lomba/Businessplan')?>">Business Plan</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Lomba/Poster')?>">Desain Poster</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Lomba/Cvideo')?>">Creative Video</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Acara</a>
                    <ul class="collapse list-unstyled sub-menu" id="pageSubmenu">
                        <li>
                            <a href="<?= base_url('Acara/Webinarworkshop')?>">Webinar & Workshop</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Acara/Minievent')?>">Mini Event</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Artikel</a>
                </li>
                <li>
                    <a href="<?= base_url('Auth/Login/Logout')?>"  onclick="return confirm('Yakin ingin keluar?')">Keluar</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-konten">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="gambar w-100 d-none d-lg-block">
                        <img src="<?= base_url('assets/img/')?>logorem.png" style="display: block; margin: auto;" alt="Logo-agridation">
                    </div>

                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <img src="<?= base_url('assets/img/')?>profil.svg" alt="" style="margin: 0; padding: 0;">
                            </a>
                        </li>
                    </ul>
                    
                </div>
            </nav>