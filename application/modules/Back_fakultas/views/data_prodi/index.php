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


