<?php $this->load->view('template/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Data Video</h5>
                    </div>
                    <div>
                        <a href="<?= site_url('data-video/insert') ?>" class="btn btn-sm btn-primary m-1"><i class="ti ti-circle-plus"></i> Tambah Data</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Published</th>
                                <th>Category</th>
                                <th>Thumbnile</th>
                                <th>Act.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($data)) : ?>
                            <?php else : ?>
                                <?php $i = 1;
                                foreach ($data as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->judul; ?><br><?= $item->durasi; ?></td>
                                        <td><?= $item->tanggal_unggah; ?></td>
                                        <td><?= $item->kategori; ?></td>
                                        <td>
                                            <?php if ($item->thumbnail == NULL) : ?>
                                                <a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/dashboard/images/3824385.png" onclick="showImage(this);" width="100%" height="100px" class="card-img-top rounded-0 gambarberkas" alt="..."></a>
                                            <?php else : ?>
                                                <a href="javascript:void(0)"><img src="<?= base_url('assets/dashboard/images/thumbnile/' . $item->thumbnail); ?>" onclick="showImage(this);" width="100%" height="100px" class="card-img-top rounded-0 gambarberkas" alt="..."></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('data-video/update/' . $item->idvideo) ?>" class="btn btn-sm btn-success m-1">Edit</a>
                                            <a href="<?= site_url('data-video/delete/' . $item->idvideo) ?>" class="btn btn-sm btn-danger m-1">Delete</a>
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