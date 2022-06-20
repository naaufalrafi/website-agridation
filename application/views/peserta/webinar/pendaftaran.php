    <div class="isi-konten">
                <div class="top-content">
                    <div class="d-flex align-items-center">
                        <img src="<?= base_url('assets/icon/')?>bigWW.svg" class="img-fluid d-none d-lg-block" alt="">
                        <div class="text-top ms-3">
                            <h3>Pendaftaran Webinar & Workshop</h3>
                            <p><span>Ayo Menjadi Agen Perubahan Pertanian Indonesia dengan mengikuti Webinar Agridation
                                    serta perluas wawasan dan relasimu.</span> Daftar Segera dan menjadi bagian dari
                                Pertanian
                                Indonesia yang Lebih Baik</p>
                        </div>
                    </div>
                </div>
                <?= form_open_multipart('Acara/Webinarworkshop/daftarwebinar') ?>
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
                <a href="#" class="">
                    <button type="submit" class="tombol mt-4" style="color: white;">
                        <h6>Ikuti Webinar</h6>
                    </button>
                </a>
                </form>
            </div>