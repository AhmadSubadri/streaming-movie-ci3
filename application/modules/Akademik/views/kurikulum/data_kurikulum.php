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
                                data-target="#Addkurikulum"
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
                                    <th>Kode / kurikulum Akademik</th>
                                    <th>Batas Pengisian KRS</th>
                                    <th>Batas Perubahan KRS</th>
                                    <th>Tanggal Perkuliahan</th>
                                    <th>Semester</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $item->kode_kurikulum_akademik;?> <br> <?= $item->nama_kurikulum_akademik;?></td>
                                    <td><?= $item->tgl_mulai_krs;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_akhir_krs;?></td>
                                    <td><?= $item->tgl_awal_ubah;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_akhir_ubah;?></td>
                                    <td><?= $item->tgl_kuliah_awal;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_kuliah_akhir;?></td>
                                    <td><?php if ($item->semester == "1") { echo "Ganjil"; } else if ($item->semester == "2") { echo "Genap"; }
                                    ?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editkurikulum<?=$item->id_kurikulum;?>"
                                            data-id="<?= $item->id_kurikulum;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            href="<?= site_url()?>kurikulum-akademik/delete/<?= $item->id_kurikulum;?>"
                                            class="btn btn-sm btn-outline-danger tombol-hapus">
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

<!-- Modal Add kurikulum -->
<div
    id="Addkurikulum"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AddkurikulumLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddkurikulumLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('kurikulum-akademik/insert')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode kurikulum Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_kurikulum"
                                value=""
                                placeholder="Enter Numeric value only"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama kurikulum Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_kurikulum"
                                value=""
                                placeholder="type nama kurikulum akademik"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Semester</label>
                        <div class="col-md-12">
                        <select class="form-control" name="semester" required>
                                <option>--- Pilih Semester ---</option>
                                <option value="1">Ganjil</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Batas KRS</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_awal_krs" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_akhir_krs">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Batas Perubahan KRS</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_awal_ubah">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_akhir_ubah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Tanggal Perkuliahan</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_kuliah_awal">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_kuliah_akhir">
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

<!-- Modal Edit kurikulum -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Editkurikulum<?= $item->id_kurikulum;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="EditkurikulumLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="EditkurikulumLabel">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('kurikulum-akademik/update')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode kurikulum Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_kurikulum"
                                value="<?= $item->kode_kurikulum_akademik;?>"
                                placeholder="Enter Numeric value only"
                                required="required">
                            <input
                                hidden
                                class="form-control"
                                name="id_kurikulum"
                                value="<?= $item->id_kurikulum;?>"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama kurikulum Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_kurikulum"
                                value="<?= $item->nama_kurikulum_akademik;?>"
                                placeholder="type nama kurikulum akademik"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Semester</label>
                        <div class="col-md-12">
                        <select class="form-control" name="semester">
                                <option>--- Pilih Semester ---</option>
                                <option value="1" <?= ($item->semester == "1") ? 'selected' : '';?>>Ganjil</option>
                                <option value="2" <?= ($item->semester == "2") ? 'selected' : '';?>>Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Batas KRS</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_awal_krs" value="<?= $item->tgl_mulai_krs;?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_akhir_krs" value="<?= $item->tgl_akhir_krs;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Batas Perubahan KRS</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_awal_ubah" value="<?= $item->tgl_awal_ubah;?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_akhir_ubah" value="<?= $item->tgl_akhir_ubah;?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Tanggal Perkuliahan</label>
                        <div class="col-md-12">
                            <div class="input-daterange input-group" id="date-range">
                                <input type="date" class="form-control" name="tgl_kuliah_awal" value="<?= $item->tgl_kuliah_awal;?>">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info b-0 text-white">s/d</span>
                                    </div>
                                <input type="date" class="form-control" name="tgl_kuliah_akhir" value="<?= $item->tgl_kuliah_akhir;?>">
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
    </div>
</div>
<?php endforeach;?>
<?php endif;?>