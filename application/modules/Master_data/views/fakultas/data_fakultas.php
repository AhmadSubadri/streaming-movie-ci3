<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg');?>"></div>
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
                                data-target="#AddFakultas"
                                class="btn btn-info text-white">+ Create
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
                                    <th>Kode Fakultas</th>
                                    <th>Nama Fakultas</th>
                                    <th>Kode PT</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                                <?php else:?>
                                    <?php $i=1; foreach($data->result() as $item):?>
                                        <tr>
                                            <td><?= $i++;?></td>
                                            <td><?= $item->kode_fak;?></td>
                                            <td><?= $item->nama_fak;?></td>
                                            <td><?= $item->kode_pt;?></td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-outline-warning"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> Delete</a>
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
    id="AddFakultas"
    class="modal fade in"
    tabindex="-1"
    role="dialog"
    aria-labelledby="AddFakultasLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddFakultasLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('data-fakultas/insert')?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-12">Kode Fakultas</label>
                        <div class="col-md-12">
                            <input
                                type="number"
                                class="form-control"
                                name="kode_fak"
                                value=""
                                placeholder="Enter numeric value" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama Fakultas</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="nama_fak"
                                value=""
                                placeholder="type name faculty" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Kode PT</label>
                        <div class="col-md-12">
                            <input
                                type="text"
                                class="form-control"
                                name="kode_pt"
                                value="<?= $kodePT->kode_pt;?>"
                                placeholder="type name" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="submit"
                        class="btn btn-info waves-effect btn-sm" >Save</button>
                    <button
                        type="button"
                        class="btn btn-default waves-effect btn-sm">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>