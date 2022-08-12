<?php foreach($artikel as $a):?>
<section style="background-color: #F8F9FA;">
  <section id="path" style="background-color: #F8F9FA;">
    <div class="align-items-center container">
      <div class="container py-5">
        <div class="row">
                    <div class="col pt-4 mt-5 d-flex">
                        <a href="<?= base_url('Artikel')?>">
                            <img src="<?= base_url('assets/icon/')?>arrowPrev.svg" class="img-fluid" width="25px" alt="">
                        </a>
                        <h3 class="ms-3">Artikel / <span class="fw-bold">Detail</span></h3>
                    </div>
                </div>
      </div>
    </div>
  </section>
  <!-- Path end -->
  <section style="background-color: #F8F9FA;" class="pb-4">
    <div class="align-items-center container">
        <h2 class="fw-bold text-center mb-4" ><?= $a->judul?></h2>
        <div class="row">
            <img src="<?= base_url('assets/img/artikel/')?><?= $a->foto ?>" class="img-fluid mb-4 text-center justify-content-center">
        </div>
        <p> <?= $a->isi?></p>
    </div>
  </section>
</section>
<?php endforeach ?>