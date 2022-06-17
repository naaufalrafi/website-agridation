<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- end page title -->
            <div class="row">
                <div class="col-md-10 col-12">
                   <h5>Pengumpulan PowerPoint</h5>
                   <p>Ayo Lanjutkan Perjalananmu sebagai Agen Perubahan dengan mengumpulkan hasil karya terbaikmu melalui Gform dan kirimkan bukti pengisianmu kesini. Jangan lupa juga gabung Grup WA untuk informasi lebih lanjut</p>
                   <a href="#" target="_blank" rel="noopener noreferrer"><button class="btn btn-primary">gform</button></a>
                   <div class="row">
                    <div class="col-sm-10">
                        <div class="col-md-10 col-12">
                            <?= form_open_multipart('Lomba/Businessplan/pengumpulanppt') ?>
                                <div class="mb-3 row">
                                    <label for="namaKetua" class="col-sm-4 col-form-label">Bukti Pengisian <br> <small>*Screenshot Pengisian Gform</small></label>
                                    <div class="col-sm-8">
                                    <input class="form-control" name="bukti_pengumpulanppt" type="file" id="formFile">
                                    <?= form_error('bukti_pengumpulanppt', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Kumpulkan Karya -></button>
                            </form>
                        </div>
                    </div>
                   </div>
                </div>
                <!-- end col-->
            </div>
        </div>
    </div>