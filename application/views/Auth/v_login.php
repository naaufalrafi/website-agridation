<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <link rel="stylesheet" href="<?=base_url('assets/styles/')?>masuk.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />

  <title>Masuk ke Agridation</title>
</head>

<body>
  <section class="" style="height: 100vh;">
    <div class="container" style="height: 100vh">
      <div class="row d-flex align-items-center" style="height: 100%">
        <div class="col-12 col-lg-6 d-none d-lg-block d-xl-block kiri">
          <div class="textDesc h-100">
            <h3>Lanjutkan Perjuangan Mengembangkan Pertanian Indonesia</h3>
          </div>
        </div>
        <div class="col-12 col-lg-6 kanan">
          <img src="<?=base_url('assets/img/')?>logorem.png" alt="" width="198px" class="pt-5" style="display: block; margin: auto" />
          <h4 class="fw-bold pt-5">Masuk</h4>
          <form action="/action_page.php">
            <div class="mb-3 mt-3">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="contoh@gmail.com">
            </div>
            <div class="mb-3 mt-3">
              <label for="password">Kata Sandi</label>
              <input type="password" id="password" name="password" placeholder="Masukan Kata Sandi Akun Anda">
            </div>
            <h6 class="forgot"><a href="lupaSandi.html">Lupa Kata Sandi?</a></h6>
            <a href="#">
              <button type="submit" class="btn" style="color: white;">Masuk</button>
            </a>
            <h6 class="daftar"><span>Belum Punya Akun?</span> <a href="<?= base_url('Auth/Regist')?>">Daftar Sekarang</a></h6>
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