<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard Peserta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url("assets/admin/css/bootstrap.min.css") ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/admin/css/icons.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("assets/admin/css/app.min.css") ?>" id="app-style" rel="stylesheet" type="text/css" />

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
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="rounded-circle header-profile-user" src="<?= base_url('assets/upload/profile/'). $user['profile']?>" alt="Header Avatar"> <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?= $user['name'] ?></span> <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i> </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?=base_url('auth/login/logout')?>">
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
                        <img src="<?= base_url("assets/admin/images/logo-sm.png") ?>" alt="" height=" 22">
                    </span> <span class="logo-lg">
                        <img src="<?= base_url("assets/admin/images/logo-dark.png") ?>" alt="" height="20">
                    </span> </a>
                <a href="#" class="logo logo-light"> <span class="logo-sm">
                        <img src="<?= base_url("assets/admin/images/logo-sm.png") ?>" alt="" height="22">
                    </span> <span class="logo-lg">
                        <img src="<?= base_url("assets/admin/images/logo-light.png") ?>" alt="" height=" 20">
                    </span> </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
            <div data-simplebar class="sidebar-menu-scroll">
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="<?= base_url('dashboard') ?>" lass="waves-effect"><i class="bx bx-home-alt"></i><span>Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>LKTI</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Podcast</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Fotografi</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Business Plan</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Desain Poster</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Creative Video</span> </a>
                        </li>
                        <li class="menu-title">Acara</li>
                        <li>
                            <a href="<?= base_url('dashboard') ?>" lass="waves-effect"><i class="bx bx-home-alt"></i><span>Webinar</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Workshop</span> </a>
                        </li>
                        <li class="menu-title">General</li>
                        <li>
                            <a href="<?= base_url('user/dashboard') ?>" lass="waves-effect"><i class="bx bx-home-alt"></i><span>Profil</span> </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="bx bx-movie"></i><span>Notifikasi</span> </a>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/login/logout') ?>" class="waves-effect"><i class="bx bx-movie"></i><span>Keluar</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>