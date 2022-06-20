<div class="isi-konten">
                
                <h2>Hi, <?= $user['name']?></h2>
                <p>Selamat datang untuk berkarya !</p>
                <?php if($check) : ?>
                    <h4 class="mt-3">Lanjutkan Perjalananmu</h4>
                <?php else : ?>
                <?php endif ?>
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($lkti as $lkti):?>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Lkti')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>ltki.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">LKTI</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($business as $b):?>
                        <div class="col">
                        <a href="<?= base_url('Lomba/Businessplan')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>BP.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Business Plan</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($fotografi as $f):?>
                        <div class="col">
                        <a href="<?= base_url('Lomba/Fotografi')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>fotografi.svg" class="img-fluid mx-auto m-3"
                                    width="110px" alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Fotografi</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($poster as $p):?>
                        <div class="col">
                        <a href="<?= base_url('Lomba/Poster')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>Poster.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Desain Poster</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($podcast as $po):?>
                        <div class="col">
                        <a href="<?= base_url('Lomba/Podcast')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>podcast.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Podcast</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($cvideo as $c):?>
                        <div class="col">
                        <a href="<?= base_url('Lomba/Cvideo')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>cv.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Creative Video</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($webinar as $w):?>
                        <div class="col">
                        <a href="<?= base_url('Acara/Webinarworkshop')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>ww.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Webinar Workshop</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                    <?php foreach ($minie as $m):?>
                        <div class="col">
                        <a href="<?= base_url('Acara/Minievent')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>minievent.svg" class="img-fluid mx-auto m-3"
                                    width="110px" alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Mini Event</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
                <h4 class="mt-3">Ikuti Berbagai Macam Perlombaan</h4>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <a href="<?= base_url('Lomba/Businessplan')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>BP.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Business Plan</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Lkti')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>ltki.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">LKTI</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Fotografi')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>fotografi.svg" class="img-fluid mx-auto m-3"
                                    width="110px" alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Fotografi</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Podcast')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>podcast.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Podcast</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Cvideo')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>cv.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Creative Video</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Lomba/Poster')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>Poster.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Desain Poster</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <h4 class="mt-3">Ikuti Acara yang Tidak Kalah Seru</h4>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <a href="<?= base_url('Acara/Webinarworkshop')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>ww.svg" class="img-fluid mx-auto m-3" width="110px"
                                    alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Webinar Workshop</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('Acara/Minievent')?>">
                        <div class="card card-lomba shadow">
                            <div class="gambar-card d-flex justify-content-center" style="height: 128px;">
                                <img src="<?= base_url('assets/Illustration/')?>minievent.svg" class="img-fluid mx-auto m-3"
                                    width="110px" alt="Illustration-bp">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">Mini Event</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>