    <div class="isi-konten">
                <div class="top-content">
                    <div class="top-content border-bottom pb-3">
                        <div class=" d-flex justify-content-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="mt-1 opacity-75">Pendaftaran</h5>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                                </div>
                                <div class="col">
                                    <h5 class="mt-1 ps-2 opacity-75">Proposal</h5>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                                </div>
                                <div class="col">
                                    <h5 class="mt-1 ps-2">Flyer</h5>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                                </div>
                                <div class="col">
                                    <h5 class="mt-1 ps-2 opacity-75">Technical Meeting</h5>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                                </div>
                                <div class="col">
                                    <h5 class="mt-1 ps-2 opacity-75">Presentasi</h5>
                                </div>
                                <div class="col">
                                    <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                                </div>
                                <div class="col">
                                    <h5 class="mt-1 ps-2 opacity-75">Pengumuman Pemenang</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <div class="text-top ms-3">
                            <h3>Pengumpulan Flyer</h3>
                            <p class="fs-6">Selamat Kamu Melanjut Ketahap Dua. <span class="opacity-75">Ayo teruskan
                                    perjuanganmu menjadi agen perubahan
                                    dengan
                                    mempersiapkan flyer businessmu menuju grand final dan kirimkan file tersebut menuju
                                    Gform dan berikan bukti pengisian disini</span></p>
                            <div class=" row">
                                <div class="col">
                                    <button type="button" class="btn btn-cart">Isi Gform
                                        <img src="<?= base_url('assets/icon/')?>gform.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/Illustration/')?>flyer.svg" class="img-fluid w-50" alt="">
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <?= form_open_multipart('Lomba/Businessplan/pengumpulanflyer') ?>
                    <div class="col-5 mt-4">
                        <h5>Bukti Pengisian</h5>
                        <p style="font-size: 12px; opacity: 0.7;">*Screenshot Pengisian Gform</p>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_pengumpulanflyer" type="file" id="formFile">
                        <?= form_error('bukti_pengumpulanflyer', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <a href="#" class="">
                    <button type="submit" class="tombol mt-4 d-flex align-items-center justify-content-center"
                        style="color: white;">
                        <h6 class="pt-1">Kumpulkan Karya</h6>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2" alt="">
                    </button>
                </a>
                </form>
            </div>