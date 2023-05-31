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
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addjadwal" class="btn-warning btn-sm">
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
            <form class="form-horizontal" action="<?= site_url('prodi/penjadwalan/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Matakuliah</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kode_mk" required>
                                <?php if (empty($mk)) : ?>
                                <?php else : ?>
                                    <option>--- Pilih Matakuliah ---</option>
                                    <?php $i = 1;
                                    foreach ($mk->result() as $itemmk) : ?>
                                        <option value="<?= $itemmk->kode_mk; ?>"><?= $itemmk->kode_mk; ?>-<?= $itemmk->nama_mk; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Ruangan</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kode_ruang" required>
                                <?php if (empty($ruang)) : ?>
                                <?php else : ?>
                                    <option>--- Pilih Ruangan ---</option>
                                    <?php $i = 1;
                                    foreach ($ruang->result() as $itemrg) : ?>
                                        <option value="<?= $itemrg->kode_ruang; ?>"><?= $itemrg->kode_ruang; ?>-<?= $itemrg->nama_ruang; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Hari</label>
                        <div class="col-md-12">
                            <select class="form-control" name="hari">
                                <option>--- Select Day ---</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Jam Perkuliahan</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="time" class="form-control" name="jam_mulai">
                                <input type="text" class="form-control" name="kode_prodi" value="<?= $prodi->kode_prodi; ?>" hidden>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                </div>
                                <input type="time" class="form-control" name="jam_selesai">
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

<!-- Modal Edit jadwal -->
<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="Editjadwal<?= $item->idjadwalprodi; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditjadwalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditjadwalLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('prodi/penjadwalan/update') ?>" method="post">
                        <div class="modal-body row">
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Matakuliah</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="kode_mk" required>
                                        <?php if (empty($mk)) : ?>
                                        <?php else : ?>
                                            <option>--- Pilih Matakuliah ---</option>
                                            <?php $i = 1;
                                            foreach ($mk->result() as $itemmk) : ?>
                                                <option value="<?= $itemmk->kode_mk; ?>" <?= ($item->kode_mk == $itemmk->kode_mk) ? 'selected' : ''; ?>><?= $itemmk->kode_mk; ?>-<?= $itemmk->nama_mk; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="col-md-12">Ruangan</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="kode_ruang" required>
                                        <?php if (empty($ruang)) : ?>
                                        <?php else : ?>
                                            <option>--- Pilih Ruangan ---</option>
                                            <?php $i = 1;
                                            foreach ($ruang->result() as $itemrg) : ?>
                                                <option value="<?= $itemrg->kode_ruang; ?>" <?= ($item->kode_ruang == $itemrg->kode_ruang) ? 'selected' : ''; ?>><?= $itemrg->kode_ruang; ?>-<?= $itemrg->nama_ruang; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Hari</label>
                                <div class="col-md-12">
                                    <select class="form-control" name="hari">
                                        <option>--- Select Day ---</option>
                                        <option value="Senin" <?= ($item->hari == "Senin") ? 'selected' : ''; ?>>Senin</option>
                                        <option value="Selasa" <?= ($item->hari == "Selasa") ? 'selected' : ''; ?>>Selasa</option>
                                        <option value="Rabu" <?= ($item->hari == "Rabu") ? 'selected' : ''; ?>>Rabu</option>
                                        <option value="Kamis" <?= ($item->hari == "Kamis") ? 'selected' : ''; ?>>Kamis</option>
                                        <option value="Jum'at" <?= ($item->hari == "Jum'at") ? 'selected' : ''; ?>>Jum'at</option>
                                        <option value="Sabtu" <?= ($item->hari == "Sabtu") ? 'selected' : ''; ?>>Sabtu</option>
                                        <option value="Minggu" <?= ($item->hari == "Minggu") ? 'selected' : ''; ?>>Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Jam Perkuliahan</label>
                                <div class="col-md-12">
                                    <div class="input-daterange input-group" id="date-range">
                                        <input type="time" class="form-control" name="jam_mulai" value="<?= $item->jam_mulai; ?>">
                                        <input type="text" class="form-control" name="idjadwalprodi" value="<?= $item->idjadwalprodi; ?>" hidden>
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                        </div>
                                        <input type="time" class="form-control" name="jam_selesai" value="<?= $item->jam_selesai; ?>">
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