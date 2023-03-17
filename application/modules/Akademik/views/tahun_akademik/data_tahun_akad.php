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
                                    <th>Kode / Tahun Akademik</th>
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
                                    <td><?= $item->kode_tahun_akademik;?> <br> <?= $item->nama_tahun_akademik;?></td>
                                    <td><?= $item->tgl_mulai_krs;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_akhir_krs;?></td>
                                    <td><?= $item->tgl_awal_ubah;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_akhir_ubah;?></td>
                                    <td><?= $item->tgl_kuliah_awal;?><i class="mdi mdi-arrow-down-bold"><br><?= $item->tgl_kuliah_akhir;?></td>
                                    <td><?php if ($item->semester == "1") { echo "Ganjil"; } else if ($item->semester == "2") { echo "Genap"; }
                                    ?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Edittahun<?=$item->id_tahun;?>"
                                            data-id="<?= $item->id_tahun;?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            href="<?= site_url()?>tahun-akademik/delete/<?= $item->id_tahun;?>"
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

<!-- Modal Add dosen -->
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
                action="<?= site_url('tahun-akademik/insert')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode Tahun Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_tahun"
                                value=""
                                placeholder="Enter Numeric value only"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Tahun Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_tahun"
                                value=""
                                placeholder="type nama tahun akademik"
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

<!-- Modal Edit dosen -->
<?php if(empty($data)):?>
<?php else:?>
<?php $i=1; foreach($data->result() as $item):?>
<div
    id="Edittahun<?= $item->id_tahun;?>"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="EdittahunLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="EdittahunLabel">Edit
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form
                class="form-horizontal"
                action="<?= site_url('tahun-akademik/update')?>"
                method="post">
                <div class="modal-body row">
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Kode Tahun Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_tahun"
                                value="<?= $item->kode_tahun_akademik;?>"
                                placeholder="Enter Numeric value only"
                                required="required">
                            <input
                                hidden
                                class="form-control"
                                name="id_tahun"
                                value="<?= $item->id_tahun;?>"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="col-md-12">Nama Tahun Akademik</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_tahun"
                                value="<?= $item->nama_tahun_akademik;?>"
                                placeholder="type nama tahun akademik"
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