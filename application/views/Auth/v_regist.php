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
                    <form action="/action_page.php">
                        <div class="mb-3 mt-3">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nik">NIK</label>
                            <input type="text" id="nik" name="nik" placeholder="Masukan NIK Anda">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukan Email Anda">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nik">NIK</label>
                                <br>
                                <input type="text" class="nik" id="nik" name="nik" placeholder="Masukan NIK Anda">
                            </div>
                            <div class="col">
                                <label for="nik">NIK</label>
                                <br>
                                <label for="laki" class="gender">
                                    <input type="radio" id="laki" name="gender" value="Laki-Laki">
                                    Laki-Laki
                                </label>
                                <br>
                                <label for="perempuan" class="gender">
                                    <input type="radio" id="perempuan" name="gender" value="Perempuan">
                                    Perempuan
                                </label>
                                <br>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password">Kata Sandi</label>
                            <input type="password" id="password" name="password" placeholder="Masukan Kata Sandi">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password">Konfirmasi Kata Sandi</label>
                            <input type="password" id="password" name="password"
                                placeholder="Masukan Kembali Kata Sandi">
                        </div>
                        <a href="#">
                            <button type="submit" class="btn mb-3 mt-3" style="color: white;">Daftar</button>
                        </a>
                        <hr>
                        <h6 class="daftar mb-3 mt-3"><a href="lupaSandi.html">Lupa Kata Sandi?</a></h6>
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