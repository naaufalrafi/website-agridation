
                            
                              
                                    
    <div class="isi-konten">
                <div class="top-content">
                    <div class="keterangan-text d-flex justify-content-center">
                        <h5 class="mt-1 opacity-75">Pendaftaran</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Technical Meeting</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2">Pengumpulan</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Presentasi</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Pengumuman Pemenang</h5>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <img src="<?= base_url('assets/Illustration/')?>pengumpulanKit.svg" class="img-fluid w-50" alt="">
                        <div class="text-top ms-3">
                            <h3>Pengumpulan Karya</h3>
                            <p class="fs-6 opacity-75">Ayo Lanjutkan Perjalananmu sebagai Agen Perubahan dengan
                                mengumpulkan hasil karya terbaikmu melalui Gform dan kirimkan bukti pengisianmu kesini.
                                Jangan lupa juga gabung Grup WA untuk informasi lebih lanjut</p>
                            <div class=" row">
                                <div class="col">
                                    <button type="button" class="btn btn-cart">Isi Gform
                                        <img src="<?= base_url('assets/icon/')?>gform.svg" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5 mt-4">
                        <h5>Bukti Pengisian</h5>
                        <p style="font-size: 12px; opacity: 0.7;">*Screenshot Pengisian Gform</p>
                    </div>
                    <?= form_open_multipart('Lomba/Lkti/pengumpulankarya') ?>
                    <div class="col-7">
                        <input class="form-control" name="bukti_pengumpulankarya" type="file" id="formFile">
                        <?= form_error('bukti_pengumpulankarya', '<small class="text-white">', '</small>') ?>
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