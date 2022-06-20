<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?=base_url('assets/styles/')?>daftar.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <title>Daftar Agridation</title>
</head>

<body>
    <section class="" style="height: 100vh;">
        <div class="container h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-12 col-lg-6 d-none d-lg-block d-xl-block kiri">
                    <div class="textDesc h-100">
                        <h3>Lanjutkan Perjuangan Mengembangkan Pertanian Indonesia</h3>
                    </div>
                </div>
                <div class="overflow-auto col-12 col-lg-6 kanan">
                    <img src="<?=base_url('assets/img/')?>logorem.png" alt="" width="198px" class="pt-5"
                        style="display: block; margin: auto" />
                    <h4 class="fw-bold pt-5">Daftar</h4>
                    <form action="<?php echo base_url('Auth/Regist'); ?>" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>" placeholder="Masukan Nama Lengkap Anda">
                            <?= form_error('nama_lengkap', '<small class="text-white">', '</small>') ?>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Masukan Email Anda">
                            <?= form_error('email', '<small class="text-white">', '</small>') ?>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nik">Nomor Telepon</label>
                                <br>
                                <input type="number" class="nik" id="phone" value="<?= set_value('phone'); ?>" name="phone" placeholder="Masukan No Telepon Anda">
                                <?= form_error('phone', '<small class="text-white">', '</small>') ?>
                            </div>
                            <div class="col">
                                <label for="nik">Jenis Kelamin</label>
                                <br>
                                <label for="gender" class="gender">
                                    <input type="radio" id="gender" name="gender" value="Laki-laki" <?= set_radio('gender', 'Laki-laki'); ?>>
                                    Laki-Laki
                                </label>
                                <br>
                                <label for="gender" class="gender">
                                    <input type="radio" id="gender" name="gender" value="Perempuan" <?= set_radio('gender', 'Perempuan'); ?>>
                                    Perempuan
                                </label>
                                <br>
                                 <?= form_error('gender', '<small class="text-white">', '</small>') ?>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password">Kata Sandi</label>
                            <input type="password" id="password1" name="password1" placeholder="Masukan Kata Sandi">
                            <?= form_error('password1', '<small class="text-white">', '</small>') ?>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password">Konfirmasi Kata Sandi</label>
                            <input type="password" id="password2" name="password2"
                                placeholder="Masukan Kembali Kata Sandi">
                        </div>
                            <button type="submit" class="btn mb-3 mt-3" style="color: white;">Daftar</button>
                        <hr>
                        <h6 class="daftar mb-3 mt-3"><a href="<?= base_url('Auth/Forgotpassword')?>">Lupa Kata Sandi?</a></h6>
                        <h6 class="daftar mb-3 mt-3"><span>Sudah Memiliki Akun?</span><a href="<?= base_url('Auth/Login')?>">Masuk</a>
                        </h6>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>