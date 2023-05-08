<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top">
                    <div class="py-3 px-3">
                        <div class="d-flex flex-wrap">
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
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
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Matakuliah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <?php $chield_data = $this->db->select('*')->from('tb_matakuliah')->where('kode_dosen', $item->kd_dosen)->where('kode_prodi', $item->kd_prodi)->get(); ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><i class="text-primary  "><?= $item->nip; ?></i></td>
                                        <td><?= $item->nama_dosen; ?></td>
                                        <td><?= $item->jenis_kelamin_dosen; ?></td>
                                        <td>
                                            <?php $j = 1;
                                            foreach ($chield_data->result() as $mk) : ?>
                                                <div class="shadow-sm shadow-info m-2 px-2 bg-white rounded">
                                                    <?= $j++; ?>. <?= $mk->nama_mk; ?> <span class="label label-danger">RPS</span><span class="label label-info m-2">LPP</span><span class="label label-danger m-2">Nilai</span><br>
                                                </div>
                                            <?php endforeach; ?>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Editdosen<?= $item->id; ?>" data-id="<?= $item->id; ?>" class="btn btn-sm btn-outline-warning">
                                                <i class="fa fa-pencil"></i>
                                                Edit</a>
                                            <button data-id="<?= $item->id; ?>" class="detail-dosen btn btn-sm btn-outline-info">
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



<!-- Modal Edit dosen -->
<?php $i = 1;
foreach ($data->result() as $item) : ?>
    <div id="Editdosen<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditdosenLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="EditdosenLabel">Edit
                        <?= $title ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" action="<?= site_url('data-camaba/update') ?>" method="post">
                    <div class="modal-body row">
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Nama dosen</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="nama_dosen" value="<?= $item->nama_dosen; ?>" placeholder="Enter numeric value" required="required" readonly>
                                <input type="number" class="form-control" name="id" value="<?= $item->id; ?>" placeholder="Enter numeric value" required="required" hidden>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">NIP Mahasiwa</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="nip" value="<?= $item->nip; ?>" placeholder="type name lecturer" required="required">
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Jenis Kelamin</label>
                            <div class="col-md-12">
                                <select class="form-control" name="jenis_kelamin_dosen" readonly disabled>
                                    <option>--- Select Gender ---</option>
                                    <option value="Laki-Laki" <?= ($item->jenis_kelamin_dosen == "Laki-laki") ? 'selected' : ''; ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= ($item->jenis_kelamin_dosen == "Perempuan") ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Tempat Lahir</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="tempat_lahir_dosen" value="<?= $item->tempat_lahir_dosen; ?>" placeholder="type place of birth" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Tanggal Lahir</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control" name="tanggal_lahir_dosen" value="<?= $item->tanggal_lahir_dosen; ?>" placeholder="type date of birth" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email_dosen" value="<?= $item->email_dosen; ?>" placeholder="type pos code" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Telephon</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control" name="no_telepon_dosen" value="<?= $item->no_telepon_dosen; ?>" placeholder="type phone number" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="col-md-12">Program Studi</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="kode_prodi" value="<?= $item->nama_prodi; ?>" placeholder="type phone number" required="required" readonly>
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