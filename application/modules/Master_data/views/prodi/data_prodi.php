<div class="container-fluid">
<div
        class="flash-data"
        data-flashdata="<?= $this->session->flashdata('msg');?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        </div>
                        <div class="ml-auto">
                            <a
                                href="javascript:void(0)"
                                data-toggle="modal"
                                data-target="#Addprodi"
                                class="btn-warning btn-sm">
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
                                    <th>Kode Prodi</th>
                                    <th>Nama Prodi</th>
                                    <th>Jenjang</th>
                                    <th>Kode PT</th>
                                    <th>Kode Fak</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $item->kode_prodi;?></td>
                                    <td><?= $item->nama_prodi;?></td>
                                    <td><?= $item->jenjang_pendidikan;?></td>
                                    <td><?= $item->kode_pt;?></td>
                                    <td><?= $item->nama_fak;?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editprodi<?=$item->idprodi;?>"
                                            data-id="<?= $item->id;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            onclick="DeleteProdi(<?= $item->idprodi;?>)"
                                            class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add prodi -->
<div
    id="Addprodi"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AddprodiLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddprodiLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-program-studi/insert')?>"
                method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Kode prodi</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_prodi"
                                value=""
                                placeholder="Enter numeric value"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama prodi</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_prodi"
                                value=""
                                placeholder="type name major"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Jenjang Pendidikan</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="jenjang_pendidikan"
                                value=""
                                placeholder="type name jenjang"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Fakultas</label>
                        <div class="col-md-12">
                            <select class="form-control custom-select" name="kode_fak" required="required">
                                <option>--Select your Faculty--</option>
                                <?php if(empty($fakultas)):?>
                            <?php else:?>
                                <?php foreach($fakultas->result() as $itemfak):?>
                                <option value="<?= $itemfak->kode_fak;?>"><?= $itemfak->nama_fak;?></option>
                                <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kode PT</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="kode_pt"
                                value="<?= $kodePT->kode_pt;?>"
                                placeholder="type name"
                                readonly="readonly">
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

<!-- Modal Edit prodi -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Editprodi<?= $item->idprodi;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="EditprodiLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="EditprodiLabel">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-program-studi/update')?>"
                method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Kode prodi</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_prodi"
                                value="<?= $item->kode_prodi;?>"
                                placeholder="Enter numeric value"
                                required="required">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                value="<?= $item->idprodi;?>"
                                placeholder="Enter numeric value"
                                hidden="hidden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama prodi</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_prodi"
                                value="<?= $item->nama_prodi;?>"
                                placeholder="type name faculty"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Jenjang Pendidikan</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="jenjang_pendidikan"
                                value="<?= $item->jenjang_pendidikan;?>"
                                placeholder="type name faculty"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Fakultas</label>
                        <div class="col-md-12">
                            <select class="form-control custom-select" name="kode_fak" required="required">
                                <option>--Select your Faculty--</option>
                                <?php if(empty($fakultas)):?>
                            <?php else:?>
                                <?php foreach($fakultas->result() as $itemfak):?>
                                <option value="<?= $itemfak->kode_fak;?>" <?= ($item->kodefak == $itemfak->kode_fak) ? 'selected' : '' ?>><?= $itemfak->nama_fak;?></option>
                                <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kode PT</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="kode_pt"
                                value="<?= $item->kode_pt;?>"
                                placeholder="type name"
                                readonly="readonly">
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
<?php endforeach;?>
<?php endif;?>