<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top">
                    <div class="py-3 px-3">
                        <div class="d-flex flex-wrap">
                            <h4 class="m-b-0 text-white card-title"><?php echo $title ?> <?= $this->session->userdata('nama_users'); ?></h4>
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
                                    <th>Matakuliah</th>
                                    <th>SKS</th>
                                    <th>Type</th>
                                    <th>Dosen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->nama_mk; ?> (Kode. <?= $item->kode_mk; ?>)</td>
                                        <td><?= $item->sks_mk; ?></td>
                                        <td><?= $item->type_mk; ?></td>
                                        <td><?= $item->nama_dosen; ?></td>
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