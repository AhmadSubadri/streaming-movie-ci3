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
                                    <th>Nama/NPM</th>
                                    <th>email/telp</th>
                                    <th>Prodi</th>
                                    <th>Periode</th>
                                    <th>Beasiswa</th>
                                    <th>JK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($data as $item):?>
                                <tr>
                                    <td><?= $i++;?></td>
                                    <td><?= $item['nama_mahasiswa'];?><br><i class="text-primary small"><?= $item['npm_mahasiswa'];?></i></td>
                                    <td><?= $item['email_mahasiswa'];?><br><?= $item['telp_mahasiswa'];?></td>
                                    <td><?= $item['nama_prodi'];?></td>
                                    <td><?= $item['periode'];?></td>
                                    <td><?= $item['beasiswa'];?></td>
                                    <td><?= $item['jenis_kelamin_mahasiswa'];?></td>
                                    <td>
                                        <a
                                            href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#Editdosen<?=$item['id'];?>"
                                            data-id="<?= $item['id'];?>"
                                            class="btn btn-sm btn-outline-warning">
                                            <i class="fa fa-pencil"></i>
                                            Edit</a>
                                        <a
                                            onclick="DeleteDosen(<?= $item['id'];?>)"
                                            class="btn btn-sm btn-outline-danger">
                                            <i class="fa fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>