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

    <link rel="stylesheet" href="<?=base_url('assets/styles/')?>lupasandi.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <title>Lupa Sandi</title>
</head>

<body>
    <div class="container" style="height: 100vh">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100%">
            <!-- <div class="col-lg-3"></div> -->
            <div class="col-lg-6 col-12 lupaSandi">
                <img src="<?=base_url('assets/img/')?>logorem.png" alt="" width="198px" class="pt-5"
                    style="display: block; margin: auto" />
                <h4 class="fw-bold pt-5">Lupa Kata Sandi</h4>
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('Auth/Forgotpassword') ?>" method="POST">
                    <div class="mb-3 mt-4">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="contoh@gmail.com">
                         <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                        <button type="submit" class="btn" style="color: white;">Kirim Pesan</button>
                </form>
                <hr>
                <p><span>Sudah memiliki akun?</span> <a href="<?= base_url('Auth/Login')?>">Masuk</a></p>
                <p><span>Belum memiliki akun?</span> <a href="<?= base_url('Auth/Regist')?>">Daftar Sekarang</a></p>
            </div>
            <!-- <div class="col-lg-3"></div> -->
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>