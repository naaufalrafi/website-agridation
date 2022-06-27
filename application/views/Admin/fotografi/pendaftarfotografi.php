<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Data Pendaftar Fotografi</h4>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
            <!-- end page title -->
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pendaftar Fotografi</h4>
                                        <p class="card-title-desc">Berisikan semua data pendaftar fotografi dari segala jenis status
                                            <br><small class="text-muted">*klik gambar untuk memperbesar</small>
                                            <br><small class="text-muted">*klik nama peserta untuk melihat detail identitas peserta</small></p>
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nama Pendaftar</th>
                                                <th>Bukti Hasil Karya</th>
                                                <th>Identitas</th>
                                                <th>Follow</th>
                                                <th>Twibbon</th>
                                                <th>Pembayaran</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($fotografi as $p):?>
                                            <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?=$p->id_glomba?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Identitas Peserta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        Nama Peserta 
                                                    </div>
                                                    <div class="col-xl-9">
                                                        : <?= $p->name ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        No Telepon 
                                                    </div>
                                                    <div class="col-xl-9">
                                                        : <?= $p->phone ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        Email 
                                                    </div>
                                                    <div class="col-xl-9">
                                                        : <?= $p->email ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                            <tr>
                                                <td><a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$p->id_glomba?>"><?= $p->nama_ketua ?></a></td>
                                                <td>
                                                    <?php if($p->pengumpulan_karya == NULL): ?>
                                                        Belum mengumpulkan
                                                    <?php else:?>
                                                        <a href="<?= base_url('assets/media/upload/')?><?= $p->pengumpulan_karya ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->pengumpulan_karya ?>" alt="Bukti Pembayaran <?= $p->nama_ketua ?>" width="100"></a>
                                                    <?php endif ?>
                                                </td>
                                                <td><a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_identitas ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->bukti_identitas ?>" alt="Bukti Identitas <?= $p->nama_ketua ?>" width="100"></a></td>
                                                <td><a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_follow ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->bukti_follow ?>" alt="Bukti Follow <?= $p->nama_ketua ?>" width="100"></a></td>
                                                <td><a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_posting ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->bukti_posting ?>" alt="Bukti Twibbon <?= $p->nama_ketua ?>" width="100"></a></td>
                                                <td><a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_pembayaran ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->bukti_pembayaran ?>" alt="Bukti Pembayaran <?= $p->nama_ketua ?>" width="100"></a></td>
                                                <td><?php if($p->status =="M"):?>
                                                    <span class="badge rounded-pill bg-soft-danger font-size-12">belum diverifikasi</span>
                                                    <?php elseif($p->status =="V"):?> 
                                                    <span class="badge rounded-pill bg-soft-warning font-size-12">belum mengumpulkan karya</span>
                                                    <?php else :?>
                                                    <span class="badge rounded-pill bg-soft-success font-size-12">mengumpulkan karya</span>
                                                    <?php endif ?>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    </div>