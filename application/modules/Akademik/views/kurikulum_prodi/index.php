<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        </div>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#AddkurikulumProdi" class="btn-warning btn-sm">
                                <i class="mdi mdi-plus"></i>
                                Create
                                <?= $title ?></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h3 class="card-title">Daftar <?= $title ?>
                        </h3>
                        <hr>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Program Studi</th>
                                    <th>Kode Kurikulum</th>
                                    <th>Nama Kurikulum</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($data)) : ?>
                                <?php else : ?>
                                    <?php $i = 1;
                                    foreach ($data->result() as $item) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $item->nama_prodi; ?></td>
                                            <td><?= $item->kode_kurikulum; ?></td>
                                            <td><?= $item->nama_kurikulum; ?></td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#AddkurikulumProd<?= $item->id_kp; ?>" data-id="<?= $item->id_kp; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a onclick="DeleteKurikulumProdi(<?= $item->id_kp; ?>)" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa fa-trash"></i>
                                                    Delete</a>
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
</div>

<!-- Modal Add kurikulum -->
<div id="AddkurikulumProdi" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddkurikulumProdiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddkurikulumProdiLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('data-kurikulum/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Tahun kurikulum</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="tahun_kurikulum" value="" min="1900" max="2099" placeholder="Enter Numeric value only" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Nama kurikulum</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_kurikulum" value="" placeholder="type nama kurikulum akademik" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Batas Kurikulum</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tanggal_awal" required>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-success b-0 text-white">s/d</span>
                                </div>
                                <input type="date" class="form-control" name="tanggal_akhir">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info waves-effect btn-sm">Save</button>
                    <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Edit kurikulum -->
<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="AddkurikulumProd<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddkurikulumProdLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="AddkurikulumProdLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('data-kurikulum/update') ?>" method="post">
                        <div class="modal-body row">
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Tahun kurikulum</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="tahun_kurikulum" value="<?= $item->tahun_kurikulum; ?>" placeholder="Enter Numeric value only" required="required">
                                    <input hidden class="form-control" name="id" value="<?= $item->id; ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Nama kurikulum</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_kurikulum" value="<?= $item->nama_kurikulum; ?>" placeholder="type nama kurikulum" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Batas KRS</label>
                                <div class="col-md-12">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="date" class="form-control" name="tanggal_awal" value="<?= $item->tanggal_awal; ?>">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                        </div>
                                        <input type="date" class="form-control" name="tanggal_akhir" value="<?= $item->tanggal_akhir; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info waves-effect btn-sm">Update</button>
                            <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>