<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addruangan" class="btn-warning btn-sm">
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
                                    <th>Kode Ruang</th>
                                    <th>Nama Ruang</th>
                                    <th>Nama Unit</th>
                                    <th>Nama Gedung</th>
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
                                            <td><?= $item->kode_ruang; ?></td>
                                            <td><?= $item->nama_ruang; ?></td>
                                            <td><?= $item->nama_unit; ?></td>
                                            <td><?= $item->nama_gedung; ?></td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editruangan<?= $item->id; ?>" data-id="<?= $item->id; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a href="<?= site_url() ?>administrator/data-ruang/delete/<?= $item->id; ?>" class="btn btn-sm btn-outline-danger tombol-hapus">
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

<!-- Modal Add ruangan -->
<div id="Addruangan" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddruanganLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddruanganLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('administrator/data-ruang/insert') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Kode ruangan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="kode_ruang" value="" placeholder="Enter numeric value" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama ruangan</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_ruang" value="" placeholder="type name room" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama Unit</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_unit" value="" placeholder="type name unit" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama Gedung</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_gedung" value="" placeholder="type name gedung" required="required">
                        </div>
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

<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="Editruangan<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditruanganLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditruanganLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('administrator/data-ruang/update') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Kode ruangan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="kode_ruang" value="<?= $item->kode_ruang; ?>" placeholder="Enter numeric value"">
                                    <input type=" number" class="form-control" name="id" value="<?= $item->id; ?>" placeholder="Enter numeric value" hidden="hidden">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama ruangan</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_ruang" value="<?= $item->nama_ruang; ?>" placeholder="type name room" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama Unit</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_unit" value="<?= $item->nama_unit; ?>" placeholder="type name unit" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama Gedung</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_gedung" value="<?= $item->nama_gedung; ?>" placeholder="type name gedung" required="required">
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