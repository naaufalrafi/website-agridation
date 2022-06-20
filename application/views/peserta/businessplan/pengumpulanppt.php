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
                                    <h5 class="mt-1 ps-2 opacity-75">Flyer</h5>
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
                                    <h5 class="mt-1 ps-2">Presentasi</h5>
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
                        <div class="text-top ms-3 pe-2">
                            <h3>Pengumpulan Power Point</h3>
                            <p class="fs-6"><span class="fw-bold">Selamat Kamu Terpilih Menjadi Finalis.</span><span
                                    class="opacity-75">Ayo
                                    teruskan
                                    perjuanganmu menjadi agen perubahan
                                    dengan
                                    mempersiapkan file presentasimu dan kirimkan file tersebut menuju Gform dan berikan
                                    bukti pengisian disini</span></p>
                            <div class=" row">
                                <div class="col">
                                    <button type="button" class="btn btn-cart">Isi Gform
                                        <img src="<?= base_url('assets/icon/')?>gform.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/Illustration/')?>presentasi.svg" class="img-fluid w-50" alt="">
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5 mt-4">
                        <h5>Bukti Pengisian</h5>
                        <p style="font-size: 12px; opacity: 0.7;">*Screenshot Pengisian Gform</p>
                    </div>
                    <?= form_open_multipart('Lomba/Businessplan/pengumpulanppt') ?>
                    <div class="col-7">
                        <input class="form-control" name="bukti_pengumpulanppt" type="file" id="formFile">
                         <?= form_error('bukti_pengumpulanppt', '<small class="text-white">', '</small>') ?>
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