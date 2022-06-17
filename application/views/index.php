<!-- Hero Start -->
  <header>
    <section id="hero" style="height: 100vh; background-color: #125D1B">
      <div class="container" style="height: 100%;">
        <div class="row d-flex align-items-center pt-5" style="height: 100%;">
          <div class="col-7 main-col">
            <div class="row">
              <div class="col-12">
                <h5>AGRIDATION 2022</h5>
              </div>
              <div class="col-8">
                <h3>Let's start joining the Agricultural Day Competition 2022</h3>
              </div>
              <div class="col-10">
                <p>AGRIDATION adalah kegiatan yang bertujuan untuk meningkatkan kreativitas dan inovasi di bidang
                  pertanian dalam rangka memperingati Hari Tani Nasional.
                </p>
              </div>
              <div class="col-11">
                <div class="button-hero">
                  <div class="row">
                    <div class="col-7">
                      <img src="<?= base_url('assets/img/home/')?>insideButtonHero.png" class="img-fluid p-2" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-4">
                      <a href="<?= base_urL('Auth/Login')?>">
                        <img src="<?= base_url('assets/img/home/')?>btn-sementara.png" class="img-fluid p-2" alt="">
                      </a>
                    </div>
                    <!-- <button type="button" class="btn btn-primary">Daftar Sekarang</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-5">
            <img src="<?= base_url('assets/img/home/')?>hero-img.svg" class="img-fluid d-none d-lg-block" alt="">
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Hero End -->
  </header>

  <!-- Main Content -->
  <main>
    <!-- Section Sekilas Tentang Agri -->
    <section id="info">
      <div class="container" style="height: 100%;">
        <div class="row d-flex align-items-center containerInfo mt-4 mb-4">
          <div class="d-flex align-items-center col-12 col-lg-6">
            <img src="<?=base_url('assets/img/home/')?>videoAgri.svg" class="img-fluid" alt="">
          </div>
          <div class="col-12 col-lg-6 overflow-auto">
            <h3 class="fw-bold">Pertanian Sebagai Leading Sektor Pertanian Nasional</h3>
            <div class="infoText mt-lg-0 overflow-auto" style="height: 100px;">
              <p>Agridation merupakan acara peringatan Hari Tani Nasional yang diadakan Sekolah Vokasi IPB Universty.
                Tujuan beralngsungnya acara ini untuk meningkatkan kreativitas dan inovasi generasi muda dalam sektor
                pertanian untuk memajukan sektor pertanian nasional. Untuk mencapai tujuan tersebut diadakan 6 mata
                lomba dan 2 buah acara yang tidak kalah seru.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of section -->

    <!-- Section Perlombaan -->
    <section id="perlombaan">
      <div class="container" style="height: 100%;">
        <div class="row d-flex align-items-center" style="height: 100%;">
          <div class="col col-lg-7 col-xl-8">
            <h4 class="fw-bold">Ikuti Berbagai Macam Perlombaan</h4>
            <p>Buktikan dirimu dengan menampilkan karya terbaikmu pada 6 mata lomba tingkat
              nasional dan jadikan tempat untuk mengasah kreativitas dan skillmu. Serta bersama menjadi agen perubahan
              untuk sektor pertanian indonesia yang lebih maju lagi dengan berbagai ide inovasimu</p>
            <a href="<?= base_urL ('Lomba')?>">
              <button class="btn btnLomba">
                Lihat Selengkapnya
                <img src="<?= base_url('assets/icon/')?>arrow.svg" width="10px" class="ms-3" style="margin-bottom: 2px;" alt="">
              </button>
            </a>
          </div>
          <div class="col col-lg-5 col-xl-4 d-none d-lg-block  ">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"
              style="width: 410px;">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/icon/')?>camera.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Photography Competition</h4>
                      <img src="<?= base_url('assets/icon/')?>line.svg" alt="">
                      <ul>
                        <li>Umum (15-22 Tahun)</li>
                        <li>Bersifat Individu</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/img/lomba/')?>podcast.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">PodCast</h4>
                      <img src="<?= base_url('assets/icon/')?>line.svg" alt="">
                      <ul>
                        <li>Umum (15-22 Tahun)</li>
                        <li>Bersifat Individu atau Kelompok</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/img/lomba/')?>bp.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Business Plan</h4>
                      <img src="<?= base_url('assets/icon/')?>line.svg" alt="">
                      <ul>
                        <li>Mahasiswa Aktif D3/D4/S1 PTN maupun PTS di seluruh Indonesia</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/img/lomba/')?>cv.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Creative Video</h4>
                      <img src="<?= base_url('assets/icon/')?>line.svg" alt="">
                      <ul>
                        <li>Umum (15-22 Tahun)</li>
                        <li>Bersifat Kelompok 2-4 Anggota</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/img/lomba/')?>poster.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">Desain Poster</h4>
                      <img src="<?= base_url('assets/icon/line.svg')?>" alt="">
                      <ul>
                        <li>Umum (15-22 Tahun)</li>
                        <li>Bersifat Individu</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <div class="card cardInfo d-block" style="width: 305px; height: 300px; margin-left: 52px;">
                    <img src="<?= base_url('assets/img/lomba/')?>kti.svg" class="card-img-top"
                      style="display: block; margin: auto; width: 128px;" alt="...">
                    <div class="card-body">
                      <h4 class="card-title text-center">LKTI</h4>
                      <img src="<?= base_url('assets/icon/')?>line.svg" alt="">
                      <ul>
                        <li>Umum (15-25 Tahun)</li>
                        <li>Bersifat Kelompok</li>
                        <li>
                          <a href="#" class="fw-bold">
                            Lihat Selengkapnya
                            <img src="<?= base_url('assets/icon/')?>arrow.svg" width="8px" class="ms-2" alt="">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Perlombaan -->

    <!-- Section Lainnya -->
    <section id="lainnya">
      <div class="container" style="height: 100%;">
        <div class="row d-flex align-items-center" style="height: 100%;">
          <div class="col-12 col-lg-7 col-xl-6 mt-3 md-3 mt-lg-0 md-lg-0">
            <img src="<?= base_url('assets/img/home/')?>acaraLainnya.svg" class="img-fluid" alt="">
          </div>
          <div class="col-12 col-lg-5 col-xl-6">
            <h3>Ikuti Juga Acara Seru Lainnya</h3>
            <p>Jangan sampai ketinggalan 2 acara besar untuk menajdi bagian dari ratusan agen perubahan Indonesia
              lainnya pada sektor pertanian Nasional. Catat tanggalnya 25 September 2022 !!!</p>
            <a href="<?= base_url('Acara')?>">
              <button class="btn btnLomba">
                Lihat Selengkapnya
                <img src="<?= base_url('assets/icon/')?>arrow.svg" width="10px" class="ms-3" style="margin-bottom: 2px;" alt="">
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Lainnya -->

    <!-- Section Artikel -->
    <section id="artikel" class="pt-5">
      <div class="container">
        <div class="row">
          <div class="col-1 col-lg-1">
            <h3>Artikel</h3>
          </div>
          <div class="col-3 col-lg-8"></div>
          <div class="col-8 col-lg-3">
            <a href="<?= base_url('Artikel')?>">
              <button class="btn btnLomba">
                Lihat Selengkapnya
                <img src="<?= base_url('assets/icon/')?>arrow.svg" width="10px" class="ms-3" style="margin-bottom: 2px;" alt="">
              </button>
            </a>
          </div>
        </div>
        <div class="row row-cols-1 mt-3">
          <div class="col col-lg-4">
            <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
              <img src="<?= base_url('assets/img/home/artikel/')?>1.svg" class="card-img-top img-fluid"
                style=" width: 280px; display: block; margin: auto; padding-top: 10px;">
              <div class="card-body">
                <h6>Agribisnis - 21 April 2022</h6>
                <h4>Pertumbuhan Microgen Kankung</h4>
                <a href="#">
                  Baca Artikel
                </a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 d-none d-lg-block">
            <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
              <img src="<?= base_url('assets/img/home/artikel/')?>2.svg" class="card-img-top img-fluid"
                style="width: 280px; display: block; margin: auto; padding-top: 10px;">
              <div class="card-body">
                <h6>Pengembangan diri - 13 April 2022</h6>
                <h4>Menjadi Generasi Gen Z Dengan Filosofi Stoic</h4>
                <a href="#">
                  Baca Artikel
                </a>
              </div>
            </div>
          </div>
          <div class="col col-lg-4 d-none d-lg-block">
            <div class="card cardArtikel" style="max-width: 300px; max-height: 400px;">
              <img src="<?= base_url('assets/img/home/artikel/')?>3.svg" class="card-img-top img-fluid"
                style="width: 280px; display: block; margin: auto; padding-top: 10px;">
              <div class="card-body">
                <h6>IT - 21 April 2022</h6>
                <h4>Perkembangan Bahasa Golang Untuk Back-End 2022</h4>
                <a href="#">
                  Baca Artikel
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Artikel -->

    <!-- Section Partner -->
    <!-- <section id="partner" class="pt-3 pb-3">
      <div class="container">
        <h2 style="color: white;" class="text-center">Partner</h2>
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
          <div class="col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
          <div class=" col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
          <div class=" col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="row mt-3 d-flex align-items-center justify-content-center">
          <div class="col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
          <div class="col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
          <div class=" col-3">
            <img src="/assets/img/home/partner.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Of Partner -->
  </main>
  <!-- End Of Main Content -->