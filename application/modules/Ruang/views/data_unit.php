<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addunit" class="btn-warning btn-sm">
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
                                            <td><?= $item->nama_unit; ?></td>
                                            <td><?= $item->nama_gedung; ?></td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editunit<?= $item->id; ?>" data-id="<?= $item->id; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a href="<?= site_url() ?>administrator/data-unit/delete/<?= $item->id; ?>" class="btn btn-sm btn-outline-danger tombol-hapus">
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

<!-- Modal Add unit -->
<div id="Addunit" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddunitLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddunitLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('administrator/data-unit/insert') ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Nama unit</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_unit" value="" placeholder="type name unit" required="required">
                            <code>Example : Unit 1 (Perhatikan huruf besar kecil)</code>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama Gedung</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_gedung" value="" placeholder="type name gedung" required="required">
                            <code>Example : Gedung A (Perhatikan huruf besar kecil)</code>
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
        <div id="Editunit<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditunitLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditunitLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('administrator/data-unit/update') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Nama Unit</label>
                                <div class="col-md-12">
                                    <input type=" number" class="form-control" name="id" value="<?= $item->id; ?>" placeholder="Enter numeric value" hidden="hidden">
                                    <input type="text" class="form-control" name="nama_unit" value="<?= $item->nama_unit; ?>" placeholder="type name unit" required="required">
                                    <code>Example : Unit 1 (Perhatikan huruf besar kecil)</code>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama Gedung</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_gedung" value="<?= $item->nama_gedung; ?>" placeholder="type name gedung" required="required">
                                    <code>Example : Gedung A (Perhatikan huruf besar kecil)</code>
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