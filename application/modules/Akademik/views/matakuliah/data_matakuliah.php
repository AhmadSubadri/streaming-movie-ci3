<div class="container-fluid">
    <div
        class="flash-data"
        data-flashdata="<?= $this->session->flashdata('msg');?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        <div class="ml-auto">
                            <a
                                href="javascript:void(0)"
                                data-toggle="modal"
                                data-target="#Addtahun"
                                class="btn-warning btn-sm">
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
                                    <th>Kode Matakuliah</th>
                                    <th>Nama Matakuliah</th>
                                    <th>SKS Matakuliah</th>
                                    <th>Kode Prodi</th>
                                    <th>Tipe Matakuliah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $item->kode_mk;?></td>
                                    <td><?= $item->nama_mk;?></td>
                                    <td><?= $item->sks_mk;?></td>
                                    <td><?= $item->kode_prodi;?>- <?= $item->nama_prodi;?></td>
                                    <td><?= $item->type_mk;?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editmatkul<?=$item->id;?>"
                                            data-id="<?= $item->id;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a onclick="DeleteMatakuliah(<?= $item->id;?>)" class="btn btn-sm btn-outline-danger">
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

<!-- Modal Add Matakuliah -->
<div
    id="Addtahun"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AddtahunLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddtahunLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-matakuliah/insert')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_mk"
                                value=""
                                placeholder="Enter Numeric value only"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_mk"
                                value=""
                                placeholder="type nama Matakuliah"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">SKS Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="sks_mk"
                                value=""
                                placeholder="Enter numeric SKS"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode Prodi</label>
                        <div class="col-md-12">
                            <select class="form-control" name="kode_prodi" required>
                            <?php if(empty($prodi)):?>
                            <?php else:?>
                                <option>--- Pilih Kode Prodi ---</option>
                                <?php $i=1; foreach($prodi->result() as $item_prodi):?>
                                <option value="<?= $item_prodi->kode_prodi;?>"><?= $item_prodi->kode_prodi;?>-<?= $item_prodi->nama_prodi;?></option>
                                <?php endforeach;?>
                            <?php endif;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Tipe Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="type_mk"
                                value=""
                                placeholder="type Matakuliah"
                                required="required">
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

<!-- Modal Edit matakuliah -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Editmatkul<?= $item->id;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="Editmatkul"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="Editmatkul">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-matakuliah/update')?>"
                method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Kode Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_mk"
                                value="<?= $item->kode_mk;?>"
                                placeholder="Enter numeric value"
                                required="required">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                value="<?= $item->id;?>"
                                placeholder="Enter numeric value"
                                hidden="hidden">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_mk"
                                value="<?= $item->nama_mk;?>"
                                placeholder="type name Matakuliah"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">SKS Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="sks_mk"
                                value="<?= $item->sks_mk;?>"
                                placeholder="type SKS Matakuliah"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kode Prodi</label>
                        <div class="col-md-12">
                            <select class="form-control custom-select" name="kode_prodi" required="required">
                                <option>--Select your Kode Prodi--</option>
                                <?php if(empty($prodi)):?>
                            <?php else:?>
                                <?php foreach($prodi->result() as $itemprodi):?>
                                <option value="<?= $itemprodi->kode_prodi;?>" <?= ($item->kode_prodi == $itemprodi->kode_prodi) ? 'selected' : '' ?>><?=$item->kode_prodi;?>-<?= $itemprodi->nama_prodi;?></option>
                                <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Tipe Matakuliah</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="type_mk"
                                value="<?= $item->type_mk;?>"
                                placeholder="type name"
                                required="required">
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
