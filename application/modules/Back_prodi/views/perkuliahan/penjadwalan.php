<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?> <?= $this->session->userdata('nama_users'); ?></h4>
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
                        <h3 class="card-title"><?= $title ?>
                            Info</h3>
                        <hr>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matakuliah</th>
                                    <th>Hari</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->nama_mk; ?> (Kode. <?= $item->kode_mk; ?>)</td>
                                        <td><?= $item->hari; ?></td>
                                        <td><?= $item->jam_mulai; ?></td>
                                        <td><?= $item->jam_selesai; ?></td>
                                        <td><?= $item->nama_ruang; ?></td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Editjadwal<?= $item->idjadwalprodi; ?>" data-id="<?= $item->idjadwalprodi; ?>" class="btn btn-sm btn-outline-warning">
                                                <i class="fa fa-pencil"></i>
                                                Edit</a>
                                            <button data-id="<?= $item->idjadwalprodi; ?>" class="btn btn-sm btn-outline-info">
                                                <i class="fa fa-eye"></i>
                                                Detail</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Add jadwal -->
<div id="Addjadwal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddjadwalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddjadwalLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('administrator/data-jadwal/insert') ?>" method="post">
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
                        <label class="col-md-12">Kode jadwal</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="kode_jadwal" value="" placeholder="type nama jadwal akademik" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama jadwal</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_jadwal" value="" placeholder="type nama jadwal" required="required">
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

<!-- Modal Edit jadwal -->
<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="Editjadwal<?= $item->idjadwalprodi; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditjadwalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditjadwalLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('administrator/data-jadwal/update') ?>" method="post">
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
                                    <input hidden class="form-control" name="id" value="<?= $item->idjadwalprodi; ?>" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Kode jadwal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="kode_jadwal" value="<?= $item->kode_jadwal; ?>" placeholder="type nama jadwal" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Nama jadwal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_jadwal" value="<?= $item->nama_jadwal; ?>" placeholder="type nama jadwal" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Status jadwal</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="status" value="<?= $item->status; ?>" placeholder="type nama jadwal" required="required">
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