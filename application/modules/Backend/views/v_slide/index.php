<?php $this->load->view('template/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Slide</h5>
                    </div>
                    <div>
                        <a href="<?= site_url('data-slide/insert') ?>" class="btn btn-sm btn-primary m-1"><i class="ti ti-circle-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($data)) : ?>
                            <?php else : ?>
                                <?php $i = 1;
                                foreach ($data as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->judul; ?></td>
                                        <td><?= $item->deskripsi; ?></td>
                                        <td>
                                            <?php if ($item->gambar == NULL) : ?>
                                                <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/dashboard/images/3824385.png" onclick="showImage(this);" width="100%" height="100px" class="card-img-top rounded-0 gambarberkas" alt="..."></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)"><img src="<?= base_url('assets/dashboard/images/slider/' . $item->gambar); ?>" onclick="showImage(this);" width="100%" height="100px" class="card-img-top rounded-0 gambarberkas" alt="..."></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('data-slide/update/' . $item->id) ?>" class="btn btn-sm btn-success m-1">Edit</a>
                                            <a href="<?= site_url('data-slide/delete/' . $item->id) ?>" class="btn btn-sm btn-danger m-1">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>