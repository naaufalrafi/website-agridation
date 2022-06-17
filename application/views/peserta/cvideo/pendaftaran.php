    <div class="isi-konten">
                <div class="top-content">
                    <div class="keterangan-text d-flex justify-content-center">
                        <h5 class="mt-1">Pendaftaran</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Technical Meeting</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Pengumpulan</h5>
                        <img src="<?= base_url('assets/icon/')?>ArrowNextDashboard.svg" class="img-fluid ps-2 opacity-75" alt="">
                        <h5 class="mt-1 ps-2 opacity-75">Pengumuman Pemenang</h5>
                    </div>
                </div>
                <?= form_open_multipart('Lomba/Cvideo/daftarlomba') ?>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Nama Lengkap Ketua</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" name="nama_ketua" id="namaKetua" value="<?= set_value('nama_ketua'); ?>" placeholder="Masukkan nama lengkap Ketua">
                        <?= form_error('nama_ketua', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Nama Anggota 1</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" name="nama_anggota1" id="namaAnggota1" value="<?= set_value('nama_anggota1'); ?>" placeholder="Masukkan nama lengkap Anggota 1">
                        <?= form_error('nama_anggota1', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Nama Anggota 2</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" name="nama_anggota2" id="namaAnggota2" value="<?= set_value('nama_anggota2'); ?>" placeholder="Masukkan nama lengkap Anggota 2 (Opsional)">
                    </div>
                </div>
                <div class="row mt-4 align-items-center">
                    <div class="col-5">
                        <h5>Nama Anggota 3</h5>
                    </div>
                    <div class="col-7">
                        <input type="text" name="nama_anggota3" id="namaAnggota3" value="<?= set_value('nama_anggota3'); ?>" placeholder="Masukkan nama lengkap Anggota 3 (Opsional)">
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
                        <h5>Bukti Pembayaran</h5>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="bukti_pembayaran" type="file" id="formFile">
                        <?= form_error('bukti_pembayaran', '<small class="text-white">', '</small>') ?>
                    </div>
                </div>
                <a href="#" class="">
                    <button type="submit" class="tombol mt-4 d-flex align-items-center justify-content-center"
                        style="color: white;">
                        <h6 class="pt-1">Daftar Lomba</h6>
                    </button>
                </a>
            </form>
            </div>