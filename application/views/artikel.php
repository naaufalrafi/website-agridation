

  <!-- Spacing Only -->
  <div class="row mt-5">
    <div class="col-12"></div>
  </div>
  <!-- end spacing -->

  <!-- Section Trending Article Start -->
  <section id="trending" class="mt-5">
    <div class="container">
      <h2 class="fw-bold">Trending Artikel</h2>
      <?php foreach($trending as $t):?>
      <div class="card mb-3 cardArtikel">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= base_url('assets/img/artikel/')?><?= $t->foto ?>" class="img-fluid p-2" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <small style="opacity: 0.7;" class="text-white"><?= $t->kategori?> - <?php $yrdata= strtotime($t->date_created); echo date('d M Y', $yrdata); ?></small>
              <h5 class="card-title text-white"><?= $t->judul ?></h5>
              <p class="card-text text-white"><?= substr($t->isi, 0, 220) . "..." ?></p>
              <p class="card-text">
                <a href="<?= base_url('Artikel/detail/').$t->id_artikel ?>" class="text-white" style="text-decoration:none; opacity: 0.7;">
                  <small>
                    Baca Artikel
                  </small>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </section>
  <!-- Section Trending Article End -->

  <!-- Section Other Article Start -->
  <section id="artikel" class="pt-1" style="width: 100%; height: 910px;">
    <div class="container">
      <h2 class="font-weight-bold" style="color: #212529;">Other Article</h2>
      <div class="row row-cols-1 row-cols-md-3 mt-5">
        <?php foreach($artikel as $a):?>
        <div class="col col-lg-4 pb-5">
          <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
            <img src="<?= base_url('assets/img/artikel/')?><?= $a->foto ?>" class="card-img-top img-fluid"
              style=" width: 280px; display: block; margin: auto; padding-top: 10px;">
            <div class="card-body">
              <h6><?= $a->kategori?> - <?php $yrdata= strtotime($a->date_created); echo date('d M Y', $yrdata); ?></h6>
              <h4><?= $a->judul ?></h4>
              <a href="<?= base_url('Artikel/detail/').$a->id_artikel?>">
                Baca Artikel
              </a>
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- Section Other Article End -->
