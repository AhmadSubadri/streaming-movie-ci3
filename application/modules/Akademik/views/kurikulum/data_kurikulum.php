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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addkurikulum" class="btn-warning btn-sm">
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
                                    <th>Kode Kur.</th>
                                    <th>Nama Kur.</th>
                                    <th>Status</th>
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
                                                <?php if ($item->status == 1) : ?>
                                                    <span class="label label-success"> Active </span>
                                                <?php else : ?>
                                                    <span class="label label-danger"> Nonactive </span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#<?= $item->id_kur; ?>" data-id="<?= $item->id_kur; ?>" class="btn btn-sm btn-outline-success">
                                                    <i class="mdi mdi-information-outline"></i>
                                                    Detail</a>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editkurikulum<?= $item->id_kur; ?>" data-id="<?= $item->id_kur; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a onclick="DeleteKurikulum(<?= $item->id_kur; ?>)" class="btn btn-sm btn-outline-danger">
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
<div id="Addkurikulum" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddkurikulumLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddkurikulumLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('data-kurikulum/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Program Studi</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kode_prodi" required>
                                <?php if (empty($prodi)) : ?>
                                <?php else : ?>
                                    <option>--- Pilih Kode Prodi ---</option>
                                    <?php $i = 1;
                                    foreach ($prodi as $item_prodi) : ?>
                                        <option value="<?= $item_prodi->kode_prodi; ?>"><?= $item_prodi->kode_prodi; ?>-<?= $item_prodi->nama_prodi; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Kode kurikulum</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="kode_kurikulum" value="" placeholder="type nama kurikulum akademik" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama kurikulum</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_kurikulum" value="" placeholder="type nama kurikulum" required="required">
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
        <div id="Editkurikulum<?= $item->id_kur; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditkurikulumLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditkurikulumLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('data-kurikulum/update') ?>" method="post">
                        <div class="modal-body row">
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Program Studi</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="kode_prodi" required>
                                        <?php if (empty($prodi)) : ?>
                                        <?php else : ?>
                                            <option>--- Pilih Kode Prodi ---</option>
                                            <?php $i = 1;
                                            foreach ($prodi as $item_prodi) : ?>
                                                <option value="<?= $item_prodi->kode_prodi; ?>" <?= ($item->kode_prodi == $item_prodi->kode_prodi) ? 'selected' : ''; ?>><?= $item_prodi->kode_prodi; ?>-<?= $item_prodi->nama_prodi; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                    <input hidden class="form-control" name="id" value="<?= $item->id_kur; ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Kode kurikulum</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="kode_kurikulum" value="<?= $item->kode_kurikulum; ?>" placeholder="type nama kurikulum" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Nama kurikulum</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_kurikulum" value="<?= $item->nama_kurikulum; ?>" placeholder="type nama kurikulum" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Status Kurikulum</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="status" value="<?= $item->status; ?>" placeholder="type nama kurikulum" required="required">
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