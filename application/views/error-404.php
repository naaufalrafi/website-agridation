<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= base_url('assets/styles/error-page/')?>error.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

    <title>Email Terkirim</title>
</head>

<body>
    <div class="container" style="height: 100vh">
        <div class="row d-flex align-items-center justify-content-center" style="height: 100%">
            <div class="col-1"></div>
            <div class="col-lg-6 col gagal">
                <img src="<?= base_url('assets/Illustration/')?>404.svg" class="img-fluid mt-5" style="display: block; margin: auto;"
                    alt="">
                <div class="text-gagal text-center mt-4">
                    <h3 class="fw-bold">404.</h3>
                    <h4> Halaman Tidak Dapat ditemukan</h4>
                    <p class="opacity-75">Halaman yang anda cari tidak ada atau link yang anda masukkan terdapat
                        kesalahan. Cek kembali link yang digunakan</p>
                    <a href="<?= base_url('')?>">
                        <button class="btn btn-error">
                            Kembali menuju beranda
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>