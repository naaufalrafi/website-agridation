    <div class="isi-konten">
                <div class="top-content">
                    <div class="keterangan-text d-flex justify-content-center">
                        <div class="row align-items-center border-bottom pb-3">
                            <div class="col">
                                <h5 class="mt-1">Pendaftaran</h5>
                            </div>
                            <div class="col">
                                <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                            </div>
                            <div class="col">
                                <h5 class="mt-1 ps-2 opacity-75">Pengiriman KIT</h5>
                            </div>
                            <div class="col">
                                <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                            </div>
                            <div class="col">
                                <h5 class="mt-1 ps-2 opacity-75">Pengumpulan</h5>
                            </div>
                            <div class="col">
                                <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                            </div>
                            <div class="col">
                                <h5 class="mt-1 ps-2 opacity-75">Pengumuman Pemenang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <img src="<?= base_url('assets/img/acara/')?>mini-event.svg" class="img-fluid w-50 d-none d-lg-block" alt="">
                        <div class="text-top ms-3">
                            <h3>Pendaftaran Mini Event</h3>
                            <p><span>Ikuti mini event serunya untuk mengembangkan kemampuanmu dibidang pertanian dan
                                    menangkan hadiah menariknya.</span> Jangan Lupa Paket KIT-nya untuk mengikuti Mini
                                Event</p>
                            <div class="row">
                                <div class="col-2 col-lg-4"></div>
                                <div class="col-6 col-lg-4">
                                    <button type="button" class="btn btn-cart">Beli Paket Kit
                                        <img src="<?= base_url('assets/icon/')?>cart.svg" alt="">
                                    </button>
                                </div>
                                <div class="col-4 col-lg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_open_multipart('Acara/minievent/daftarevent') ?>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Nama Lengkap</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" name="nama_lengkap" id="namaKetua" value="<?= set_value('nama_lengkap'); ?>" placeholder="Masukkan nama lengkap Ketua">
                        <?= form_error('nama_lengkap', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Bukti Identitas</h5>
                        <p style="font-size: 12px; opacity: 0.7;">*KTP/KTM/SIM/KK</p>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_identitas" type="file" id="buktiidentitas" value="<?= set_value('bukti_identitas'); ?>">
                        <?= form_error('bukti_identitas', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Bukti Mengikuti Instagram @agridationsvipb</h5>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_follow" type="file" id="formFile">
                        <?= form_error('bukti_follow', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Bukti Posting Twibbon Agridation</h5>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_posting" type="file" id="formFile">
                        <?= form_error('bukti_posting', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Bukti Pembelian</h5>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_pembelian" type="file" id="formFile">
                        <?= form_error('bukti_pembelian', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <a href="#" class="">
                    <button type="submit" class="tombol mt-4 d-flex align-items-center justify-content-center"
                        style="color: white;">
                        <h6 class="pt-1">Ikuti Mini Event</h6>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2" alt="">
                    </button>
                </a>
                </form>
            </div>