<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Data Pengumpulan Poposal Business Plan</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pendaftar Business Plan Yang Sudah ataupun Belum Mengumpulkan Proposal</h4>
                                        <p class="card-title-desc">Data Pengumpulan Proposal Business Plan
                                            <br>1. Klik "Lolos" untuk memilih peserta yang lolos tahap Proposal
                                            <br>2. Klik "Tidak" untuk memilih peserta yang tidak lolos tahap Proposal
                                            <br><small class="text-muted">*klik gambar untuk memperbesar</small>
                                            <br><small class="text-muted">*klik nama peserta untuk melihat detail identitas peserta</small></p>
                                        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nama Ketua</th>
                                                <th>Nama Anggota 1</th>
                                                <th>Nama Anggota 2</th>
                                                <th>Nama Anggota 3</th>
                                                <th>Nama Anggota 4</th>
                                                <th>Asal Instansi</th>
                                                <th>Bukti Proposal</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th>Identitas</th>
                                                <th>Follow</th>
                                                <th>Twibbon</th>
                                                <th>Pembayaran</th>
                                                <th>Tanggal Pengumpulan</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($bp as $p):?>
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
                                                    <div class="col-xl-4 col-4">
                                                        Nama Akun Pendaftar 
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?= $p->name ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Nama Ketua 
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?= $p->nama_ketua ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Nama Anggota 1
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?= $p->anggota1 ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Nama Anggota 2
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?= $p->anggota2 ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Nama Anggota 3
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?php if($p->anggota3 == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->anggota3 ?>
                                                    <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Nama Anggota 4
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?php if($p->anggota4 == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->anggota4 ?>
                                                    <?php endif ?>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Asal Instansi
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?php if($p->asal_instansi == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->asal_instansi ?>
                                                    <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        No Telepon 
                                                    </div>
                                                    <div class="col-xl-8 col-8">
                                                        : <?= $p->phone ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4 col-4">
                                                        Email 
                                                    </div>
                                                    <div class="col-xl-8 col-8">
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
                                                <td><?= $p->anggota1 ?></td>
                                                <td><?= $p->anggota2 ?></td>
                                                <td><?php if($p->anggota3 == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->anggota3 ?>
                                                    <?php endif ?>
                                                </td>
                                                <td><?php if($p->anggota4 == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->anggota4 ?>
                                                    <?php endif ?>
                                                </td>
                                                <td><?php if($p->asal_instansi == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <?= $p->asal_instansi ?>
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <?php if($p->pengumpulan_karya == NULL): ?>
                                                        Belum mengumpulkan
                                                    <?php else:?>
                                                        <a href="<?= base_url('assets/media/upload/')?><?= $p->pengumpulan_karya ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->pengumpulan_karya ?>" alt="Bukti Pembayaran <?= $p->nama_ketua ?>" width="100"></a>
                                                    <?php endif ?>
                                                </td>
                                                <td><?php if($p->status =="M"):?>
                                                    <span class="badge rounded-pill bg-soft-danger font-size-12">belum diverifikasi</span>
                                                    <?php elseif($p->status =="V"):?> 
                                                    <span class="badge rounded-pill bg-soft-warning font-size-12">belum mengumpulkan proposal</span>
                                                    <?php elseif($p->status =="PK"):?> 
                                                    <span class="badge rounded-pill bg-soft-success font-size-12">mengumpulkan proposal</span>
                                                    <?php elseif($p->status =="GP"):?> 
                                                    <span class="badge rounded-pill bg-soft-danger font-size-12">gagal tahap proposal</span>
                                                    <?php elseif($p->status =="LP"):?> 
                                                    <span class="badge rounded-pill bg-soft-warning font-size-12">belum mengumpulkan flyer</span>
                                                    <?php elseif($p->status =="PF"):?> 
                                                    <span class="badge rounded-pill bg-soft-success font-size-12">mengumpulkan flyer</span>
                                                    <?php elseif($p->status =="G"):?> 
                                                    <span class="badge rounded-pill bg-soft-danger font-size-12">gagal tahap presentasi</span>
                                                    <?php elseif($p->status =="PP"):?> 
                                                    <span class="badge rounded-pill bg-soft-success font-size-12">mengumpulkan ppt</span>
                                                    <?php else :?>
                                                    <span class="badge rounded-pill bg-soft-warning font-size-12">belum mengumpulkan ppt</span>
                                                    <?php endif ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('Admin/Bp/gagalpro/') . $p->id_glomba ?>"><button class="btn btn-danger" onclick="return confirm('Yakin untuk tidak meloloskan?')">Tidak</button></a>
                                                    <a href="<?= base_url('Admin/Bp/lolospro/') . $p->id_glomba ?>"><button class="btn btn-primary" onclick="return confirm('Yakin untuk meloloskan?')">Lolos</button></a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_identitas ?>" download>
                                                        <button class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_follow ?>" download>
                                                        <button class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php if($p->bukti_posting == NULL): ?>
                                                        -
                                                    <?php else:?>
                                                        <a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_posting?>" download>
                                                        <button class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                                                    </a>
                                                    <?php endif ?>
                                                </td>
                                                <td><a href="<?= base_url('assets/media/upload/')?><?= $p->bukti_pembayaran ?>" target="_blank" rel="noopener noreferrer"><img src="<?= base_url('assets/media/upload/')?><?= $p->bukti_pembayaran ?>" alt="Bukti Pembayaran <?= $p->nama_ketua ?>" width="100"></a></td>
                                                <td><?= $p->date_update ?></td> 
                                            </tr>
                                            <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
    </div>