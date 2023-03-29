<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        </div>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addusers" class="btn-warning btn-sm">
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
                                    <th>Nama Users</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level Users</th>
                                    <th>Status Users</th>
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
                                            <td><?= $item->nama_users; ?></td>
                                            <td><?= $item->username; ?></td>
                                            <td><?= $item->email_users; ?></td>
                                            <td><?= $level->users_level; ?></td>
                                            <td><?php if ($item->is_active == 1) {
                                                    echo '<span class="label label-success"> Active </span>';
                                                } else {
                                                    echo '<span class="label label-danger"> Nonactive </span>';
                                                } ?></td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editusers<?= $item->id_users; ?>" data-id="<?= $item->id_users; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a href="<?= site_url() ?>users/delete/<?= $item->id_users; ?>" class="btn btn-sm btn-outline-danger tombol-hapus">
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
<div id="Addusers" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddusersLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddusersLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('users/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Users</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="nama_users" value="" placeholder="Enter Name of Users" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Username</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" value="" placeholder="Enter Username" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="emaul" class="form-control" name="email_users" value="" placeholder="Enter Email" required="required">
                            <input hidden class="form-control" name="is_active" value="1" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Users Level</label>
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary pull-left p-t-0">
                                <?php if (empty($ulevel)) : ?>
                                <?php else : ?>
                                    <?php foreach ($ulevel->result() as $lev) : ?>
                                        <input id="checkbox-signup" type="checkbox">
                                        <label for="checkbox-signup"><?= $lev->users_level ?></label>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" value="" placeholder="Enter Password" required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Repeat Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="nama_tahun" value="" placeholder="Repeat Enter Password" required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect btn-sm">Save</button>
                        <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                    </div>
            </form>
        </div>
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
        <div id="Editusers<?= $item->id_users; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditusersLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditusersLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('users/update') ?>" method="post">
                        <div class="modal-body row">
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Nama Users</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="kode_tahun" value="" placeholder="Enter Numeric value only" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Username</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_tahun" value="" placeholder="type nama tahun akademik" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_tahun" value="" placeholder="type nama tahun akademik" required="required">
                                    <input hidden class="form-control" name="id_tahun" value="1" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Users Level</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_tahun" value="" placeholder="type nama tahun akademik" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_tahun" value="" placeholder="type nama tahun akademik" required="required">
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-md-12">Repeat Password</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_tahun" value="" placeholder="type nama tahun akademik" required="required">
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