<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Data Pendaftar Desain Poster</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pendaftar Desain Poster</h4>
                                        <p class="card-title-desc">Berisikan semua data pendaftar desain poster dari segala jenis status
                                            <br><small class="text-muted">*klik gambar untuk memperbesar</small></p>
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nama Pendaftar</th>
                                                <th>Hasil Karya</th>
                                                <th>Identitas</th>
                                                <th>Follow</th>
                                                <th>Twibbon</th>
                                                <th>Pembayaran</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($poster as $p):?>
                                            <tr>
                                                <td><?= $p->nama_ketua ?></td>
                                                <td><?= $p->pengumpulan_karya ?></td>
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