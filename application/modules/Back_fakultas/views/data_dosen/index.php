<!-- Filter matakuliah start -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-danger">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title">Filter <?php echo $title ?></h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="<?= site_url('fakultas/data-dosen') ?>" method="get">
                        <div class="modal-body row">
                            <div class="form-group col-sm-12">
                                <div class="row">
                                    <label class="col-md-2">Program Studi</label>
                                    <div class="col-md-6">
                                        <select class="form-control" name="kode_prodi">
                                            <?php if (empty($prodi)) : ?>
                                            <?php else : ?>
                                                <option value="<?= null; ?>">--- Pilih Kode Prodi ---</option>
                                                <?php $i = 1;
                                                foreach ($prodi->result() as $item_prodi) : ?>
                                                    <?php if (isset($_GET['kode_prodi'])) { ?>
                                                        <option value="<?= $item_prodi->kode_prodi; ?>" <?= ($item_prodi->kode_prodi == $_GET['kode_prodi']) ? 'selected' : '' ?>><?= $item_prodi->nama_prodi; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $item_prodi->kode_prodi; ?>"><?= $item_prodi->nama_prodi; ?></option>
                                                    <?php }; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-warning waves-effect btn-sm"><i class="mdi mdi-filter-outline"> </i>Filter</button>
                                        <a href="<?= base_url(); ?>fakultas/data-dosen" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Filter matakuliah end -->

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
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat/tgl lahir</th>
                                    <th>email/telp</th>
                                    <th>Program Studi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($data)):?>
                            <?php else:?>
                                <?php $i=1; foreach($data->result() as $item):?>
                                <tr>
                                    <td><?= $item->nip;?></td>
                                    <td><?= $item->nama_dosen;?></td>
                                    <td><?= $item->jenis_kelamin_dosen;?></td>
                                    <td><?= $item->tempat_lahir_dosen;?>,
                                        <?= $item->tanggal_lahir_dosen;?></td>
                                    <td><?= $item->email_dosen;?><br><?= $item->no_telepon_dosen;?></td>
                                    <td><?= $item->nama_prodi;?></td>
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