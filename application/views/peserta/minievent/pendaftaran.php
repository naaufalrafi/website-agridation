<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="col-md-10 col-12">
                    <?= form_open_multipart('Acara/minievent/daftarevent') ?>
                    <div class="mb-3 row">
                        <label for="namaKetua" class="col-sm-4 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                        <input type="text" name="nama_lengkap" class="form-control" id="namaKetua" value="<?= set_value('nama_lengkap'); ?>">
                        <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="col-sm-4 col-form-label">Bukti Identitas</label>
                        <div class="col-sm-8">
                        <input class="form-control" name="bukti_identitas" type="file" id="buktiidentitas" value="<?= set_value('bukti_identitas'); ?>">
                        <?= form_error('bukti_identitas', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="col-sm-4 col-form-label">Bukti Mengikuti Instagram @agridationsvipb</label>
                        <div class="col-sm-8">
                        <input class="form-control" name="bukti_follow" type="file" id="formFile">
                        <?= form_error('bukti_follow', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="col-sm-4 col-form-label">Bukti Posting Twibbon Agridation</label>
                        <div class="col-sm-8">
                        <input class="form-control" name="bukti_posting" type="file" id="formFile">
                        <?= form_error('bukti_posting', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="col-sm-4 col-form-label">Bukti Pembelian</label>
                        <div class="col-sm-8">
                        <input class="form-control" name="bukti_pembelian" type="file" id="formFile">
                        <?= form_error('bukti_pembelian', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <div class="col-sm-12">
                            <button class="btn btn-primary col-sm-12">Daftar Lomba</button>
                        </div>
                     </div>
                    </form>
                </div>
                <!-- end col-->
            </div>
        </div>
    </div>