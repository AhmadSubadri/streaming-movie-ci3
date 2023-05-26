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
                                    <th>Kode Kurikulum</th>
                                    <th>Nama Kurikulum</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data->result() as $item) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $item->kode_kurikulum; ?></td>
                                        <td><?= $item->nama_kurikulum; ?></td>
                                        <td>
                                            <?php if ($item->status == 1) : ?>
                                                <span class="label label-success"> Active </span>
                                            <?php else : ?>
                                                <span class="label label-danger"> Nonactive </span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?= site_url('prodi/data-kurikulum-detail/' . $item->nama_kurikulum) ?>" class="btn btn-sm btn-outline-success">
                                                <i class="mdi mdi-information-outline"></i>
                                                Detail</a>
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