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
                                data-target="#Adddosen"
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
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat/tgl lahir</th>
                                    <th>Alamat</th>
                                    <th>Kode Pos</th>
                                    <th>email/telp</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $item->nama_dosen;?><br><?= $item->nip;?></td>
                                    <td><?= $item->jenis_kelamin_dosen;?></td>
                                    <td><?= $item->tempat_lahir_dosen;?>,
                                        <?= $item->tanggal_lahir_dosen;?></td>
                                    <td><?= $item->alamat_dosen;?></td>
                                    <td><?= $item->kode_pos_dosen;?></td>
                                    <td><?= $item->email_dosen;?><br><?= $item->no_telepon_dosen;?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editdosen<?=$item->id;?>"
                                            data-id="<?= $item->id;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            onclick="DeleteDosen(<?= $item->id;?>)"
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

<!-- Modal Add dosen -->
<div
    id="Adddosen"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AdddosenLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AdddosenLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-dosen/insert')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">NIP Dosen</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="nip"
                                value=""
                                placeholder="Enter numeric value"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Nama dosen</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_dosen"
                                value=""
                                placeholder="type name lecturer"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Jenis Kelamin</label>
                        <div class="col-md-12">
                            <select class="form-control" name="jenis_kelamin_dosen">
                                <option>--- Select Gender ---</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Tempat Lahir</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="tempat_lahir_dosen"
                                value=""
                                placeholder="type place of birth"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_lahir_dosen"
                                value=""
                                placeholder="type date of birth"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea
                                class="form-control"
                                name="alamat_dosen"
                                placeholder="type address"
                                required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Kode Pos</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_pos_dosen"
                                value=""
                                placeholder="type pos code"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Telephon</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="no_telepon_dosen"
                                value=""
                                placeholder="type phone number"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input
                                type="email"
                                class="form-control"
                                name="email_dosen"
                                value=""
                                placeholder="type email valid"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
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

<!-- Modal Edit dosen -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Editdosen<?= $item->id;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="EditdosenLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="EditdosenLabel">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-dosen/update')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">NIP Dosen</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="nip"
                                value="<?= $item->nip;?>"
                                placeholder="Enter numeric value"
                                required="required">
                            <input
                                type="number"
                                class="form-control"
                                name="id"
                                value="<?= $item->id;?>"
                                placeholder="Enter numeric value"
                                required="required" hidden>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Nama dosen</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_dosen"
                                value="<?= $item->nama_dosen;?>"
                                placeholder="type name lecturer"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Jenis Kelamin</label>
                        <div class="col-md-12">
                            <select class="form-control" name="jenis_kelamin_dosen">
                                <option>--- Select Gender ---</option>
                                <option value="Laki-Laki" <?= ($item->jenis_kelamin_dosen == "Laki-Laki") ? 'selected' : '';?>>Laki-Laki</option>
                                <option value="Perempuan" <?= ($item->jenis_kelamin_dosen == "Perempuan") ? 'selected' : '';?>>Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Tempat Lahir</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="tempat_lahir_dosen"
                                value="<?= $item->tempat_lahir_dosen;?>"
                                placeholder="type place of birth"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Tanggal Lahir</label>
                        <div class="col-md-12">
                            <input
                                type="date"
                                class="form-control"
                                name="tanggal_lahir_dosen"
                                value="<?= $item->tanggal_lahir_dosen;?>"
                                placeholder="type date of birth"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <textarea
                                class="form-control"
                                name="alamat_dosen"
                                placeholder="type address"
                                required="required"><?= $item->alamat_dosen;?></textarea>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Kode Pos</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_pos_dosen"
                                value="<?= $item->kode_pos_dosen;?>"
                                placeholder="type pos code"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Telephon</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="no_telepon_dosen"
                                value="<?= $item->no_telepon_dosen;?>"
                                placeholder="type phone number"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input
                                type="email"
                                class="form-control"
                                name="email_dosen"
                                value="<?= $item->email_dosen;?>"
                                placeholder="type email valid"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
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