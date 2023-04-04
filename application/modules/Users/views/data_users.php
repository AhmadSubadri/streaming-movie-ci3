<div class="container-fluid">
    <div
        class="flash-data"
        data-flashdata="<?= $this->session->flashdata('msg');?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        </div>
                        <div class="ml-auto">
                            <a
                                href="javascript:void(0)"
                                data-toggle="modal"
                                data-target="#Addusers"
                                class="btn btn-warning btn-sm text-white">+ Create
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
                                    <th>Nama Users</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level Users</th>
                                    <th>Status Users</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $item->nama_users; ?></td>
                                    <td><?= $item->username; ?></td>
                                    <td><?= $item->email_users; ?></td>
                                    <td>
                                        <?php $level = $this->db->where('id_users', $item->id_users)->join('tb_users_level', 'tb_users_level.id_level = tb_users_levels.id_level')->get('tb_users_levels');?>
                                        <?php foreach($level->result() as $lvl):?>
                                            <span class="label label-info"> <?= $lvl->users_level;?> </span>
                                        <?php endforeach;?>
                                    </td>
                                    <td>
                                    <?php if ($item->is_active == 1) {
                                            echo '<span class="label label-success"> Active </span>';
                                        } else {
                                            echo '<span class="label label-danger"> Nonactive </span>';
                                        } ?>
                                    </td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editusers<?=$item->id_users;?>"
                                            data-id="<?= $item->id_users;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            onclick="DeleteLevelUser(<?= $item->id_users;?>)"
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

<!-- Modal Add Fakultas -->
<div
    id="Addusers"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AddusersLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddusersLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-users/insert') ?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Users</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_users"
                                value=""
                                placeholder="Enter Name of Users"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Username</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                value=""
                                placeholder="Enter Username"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input
                                type="email"
                                class="form-control"
                                name="email_users"
                                value=""
                                placeholder="Enter Email"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Users Level</label>
                        <div class="col-md-12">
                            <?php if (empty($ulevel)) : ?>
                        <?php else : ?>
                            <?php foreach ($ulevel->result() as $lev) : ?>
                                <input type="checkbox" name="level[]" id="md<?= $lev->id_level; ?>" class="filled-in chk-col-red" value="<?= $lev->id_level;?>" />
                                <label for="md<?= $lev->id_level; ?>"><?= $lev->users_level; ?></label><br>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                value=""
                                placeholder="Enter Password"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Repeat Password</label>
                        <div class="col-md-12">
                            <input
                                type="password"
                                class="form-control"
                                name="Conf_pass"
                                value=""
                                placeholder="Repeat Enter Password"
                                required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect btn-sm">Save</button>
                        <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Modal Edit Fakultas -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Editusers<?= $item->id_users;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="EditusersLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="EditusersLabel">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('data-users/insert') ?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Users</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_users"
                                value=""
                                placeholder="Enter Name of Users"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Username</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                value=""
                                placeholder="Enter Username"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input
                                type="email"
                                class="form-control"
                                name="email_users"
                                value=""
                                placeholder="Enter Email"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Users Level</label>
                        <div class="col-md-12">
                            <?php if (empty($ulevel)) : ?>
                        <?php else : ?>
                            <?php foreach ($ulevel->result() as $lev) : ?>
                                <input type="checkbox" name="level[]" id="md<?= $lev->id_level; ?>" class="filled-in chk-col-red" value="<?= $lev->id_level;?>" />
                                <label for="md<?= $lev->id_level; ?>"><?= $lev->users_level; ?></label><br>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                value=""
                                placeholder="Enter Password"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="col-md-12">Repeat Password</label>
                        <div class="col-md-12">
                            <input
                                type="password"
                                class="form-control"
                                name="Conf_pass"
                                value=""
                                placeholder="Repeat Enter Password"
                                required="required">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect btn-sm">Update</button>
                        <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
<?php endif;?>