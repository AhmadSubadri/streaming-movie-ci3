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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addbobot" class="btn-warning btn-sm">
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
                                    <th>No.</th>
                                    <th>Nilai Min</th>
                                    <th>Nilai Max</th>
                                    <th>Nilai Huruf</th>
                                    <th>Nilai Bobot</th>
                                    <th>Predikat</th>
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
                                            <td><?= $item->nilai_min; ?></td>
                                            <td><?= $item->nilai_max; ?></td>
                                            <td><?= $item->nilai_huruf; ?></td>
                                            <td><?= $item->nilai_bobot; ?></td>
                                            <td><?= $item->predikat; ?></td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editbobot<?= $item->id; ?>" data-id="<?= $item->id; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a href="<?= site_url() ?>administrator/bobot-nilai/delete/<?= $item->id; ?>" class="btn btn-sm btn-outline-danger tombol-hapus">
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

<!-- Modal Add dosen -->
<div id="Addbobot" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddbobotLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddbobotLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('administrator/bobot-nilai/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nilai Minimal</label>
                        <div class="col-md-12">
                            <input type="number" class="form-control" name="nilai_min" value="" placeholder="Enter Numeric value only" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nilai Maksimal</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nilai_max" value="" placeholder="Enter Numeric value only" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nilai Huruf</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nilai_huruf" value="" placeholder="type nilai huruf" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nilai Bobot</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nilai_bobot" value="" placeholder="Enter Numeric value only" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Predikat</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="predikat" value="" placeholder="type predikat nilai" required="required">
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

<!-- Modal Edit dosen -->
<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="Editbobot<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditbobotLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditbobotLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('administrator/bobot-nilai/update') ?>" method="post">
                        <div class="modal-body row">
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Nilai Minimal</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="nilai_min" value="<?= $item->nilai_min; ?>" placeholder="Enter Numeric value only" required="required">
                                    <input hidden class="form-control" name="id" value="<?= $item->id; ?>" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-12">Nilai Maksimal</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="nilai_max" value="<?= $item->nilai_max; ?>" placeholder="Enter Numeric value only" required="required">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-12">Nilai Huruf</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="nilai_huruf" value="<?= $item->nilai_huruf; ?>" placeholder="type nilai huruf" required="required">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-12">Nilai Bobot</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="nilai_bobot" value="<?= $item->nilai_bobot; ?>" placeholder="Enter Numeric value only" required="required">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="col-md-12">Predikat</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="predikat" value="<?= $item->predikat; ?>" placeholder="Enter predikat nilai" required="required">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info waves-effect btn-sm">Save</button>
                            <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>