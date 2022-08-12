<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/')?>logorem.png">
    <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/css/icons.min.css") ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url("assets/css/app.min.css") ?>" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="rounded-circle header-profile-user" src="<?= base_url('assets/img/')?>profil.svg" alt="Header Avatar"> <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?=$this->session->userdata('name')?></span> <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= base_url('Auth/Login/Logout')?>" onclick="return confirm('Yakin ingin keluar?')">
                                    <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                                    <span class="align-middle">Sign out</span>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"> <i class="uil-cog"></i> </button>
                        </div>
                    </div>
                </div>
        </header>
        <div class="vertical-menu">
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark"> <span class="logo-sm">
                        <img src="<?= base_url('assets/img/')?>logorem.png" alt="">
                    </span> <span class="logo-lg">
                        <img src="<?= base_url('assets/img/')?>logorem.png" alt="">
                    </span> </a>
                <a href="#" class="logo logo-light"> <span class="logo-sm">
                        <img src="<?= base_url('assets/img/')?>logorem.png" alt="">
                    </span> <span class="logo-lg">
                        <img src="<?= base_url('assets/img/')?>logorem.png" alt="">
                    </span> </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
            <div data-simplebar class="sidebar-menu-scroll">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="<?= base_url('Admin/Dashboard') ?>" lass="waves-effect"><i class="fa-solid fa-house"></i><span>Dashboard</span> </a>
                        </li>
						<li class="menu-title">Lomba</li>
                        <?php if($this->session->userdata('id_role') == 1) : ?>
                        <!-- SEMUA -->
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-crop"></i><span>Desain Poster</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Poster')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-camera"></i><span>Fotografi</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Fotografi')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-podcast"></i><span>Podcast</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Podcast')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Podcast/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Podcast/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-video"></i><span>Creative Video</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Cvideo')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Cvideo/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Cvideo/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-book"></i><span>LKTI</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Lkti')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/pengumpulanppt')?>">Finalis dan Pengumpulan PPT</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-briefcase"></i><span>Business Plan</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Bp')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulankarya')?>">Pengumpulan Proposal</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulanflyer')?>">Pengumpulan Flyer</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulanppt')?>">Finalis dan Pengumpulan PPT</a>
								</li>
							</ul>
						</li>
                        <?php elseif($this->session->userdata('id_role') == 3):?>
                            <!-- LKTI -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-book"></i><span>LKTI</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Lkti')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
								<li> <a href="<?= base_url('Admin/Lkti/pengumpulanppt')?>">Finalis dan Pengumpulan PPT</a>
								</li>
							</ul>
						</li>
                        <?php elseif($this->session->userdata('id_role') == 4):?>
                            <!-- PODCAST -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-podcast"></i><span>Podcast</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Podcast')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Podcast/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Podcast/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <?php elseif($this->session->userdata('id_role') == 5):?>
                            <!-- BUSINESS PLAN -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-briefcase"></i><span>Business Plan</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Bp')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulankarya')?>">Pengumpulan Proposal</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulanflyer')?>">Pengumpulan Flyer</a>
								</li>
								<li> <a href="<?= base_url('Admin/Bp/pengumpulanppt')?>">Finalis dan Pengumpulan PPT</a>
								</li>
							</ul>
						</li>
                        <?php elseif($this->session->userdata('id_role') == 6):?>
                            <!-- CVIDEO -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-video"></i><span>Creative Video</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Cvideo')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Cvideo/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Cvideo/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <?php elseif($this->session->userdata('id_role') == 7):?>
                            <!-- FOTOGRAFI -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-camera"></i><span>Fotografi</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Fotografi')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <?php else : ?>
                            <!-- POSTER -->
                            <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-crop"></i><span>Desain Poster</span> </a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Poster')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <?php endif ?>  
						<li class="menu-title">Acara</li>
						<li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-crop"></i><span>Webinar & Workshop</span></a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Poster')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Poster/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                        <li>
							<a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fa-solid fa-camera"></i><span>Mini Event</span></a>
							<ul class="sub-menu" aria-expanded="true">
								<li> <a href="<?= base_url('Admin/Fotografi')?>">Pendaftar</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/verifikasi')?>">Verifikasi</a>
								</li>
								<li> <a href="<?= base_url('Admin/Fotografi/pengumpulankarya')?>">Pengumpulan Karya</a>
								</li>
							</ul>
						</li>
                    </ul>
                </div>
            </div>
        </div>