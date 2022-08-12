<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <?php if($this->session->userdata('id_role') == 1) : ?>
                <!-- SEMUA -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Keseluruhan Pendaftar Lomba</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $daftar ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Lomba</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverif ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LKTI -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar LKTI</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $lkti ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar LKTI</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumveriflkti ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- BUSINESS PLAN -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Business Plan</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $bplan ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Business Plan</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifbplan ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PODCAST -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Podcast</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $podcast ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Podcast</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifpodcast ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POSTER -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Desain Poster</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $poster ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Desain Poster</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifposter ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CVIDEO -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Creative Video</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $cvideo ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Creative Video</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifcvideo ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOTOGRAFI -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Fotografi</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $foto ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Fotografi</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumveriffoto ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($this->session->userdata('id_role') == 3):?>
                <!-- LKTI -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar LKTI</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $lkti ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar LKTI</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumveriflkti ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php elseif($this->session->userdata('id_role') == 4):?>
                <!-- PODCAST -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Podcast</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $podcast ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Podcast</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifpodcast ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($this->session->userdata('id_role') == 5):?>
                <!-- BUSINESS PLAN -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Business Plan</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $bplan ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Business Plan</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifbplan ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($this->session->userdata('id_role') == 6):?>
                <!-- CVIDEO -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Creative Video</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $cvideo ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Creative Video</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifcvideo ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($this->session->userdata('id_role') == 7):?>
                <!-- FOTOGRAFI -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Fotografi</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $foto ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Fotografi</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumveriffoto ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else : ?>
                <!-- POSTER -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Pendaftar Desain Poster</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $poster ?></span></h4>
                                <p class="text-muted mb-0">Total Pendaftar Desain Poster</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div id="growth-chart"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?= $belumverifposter ?></span></h4>
                                <p class="text-muted mb-0">Pendaftar Belum Diverifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>  
    </div>