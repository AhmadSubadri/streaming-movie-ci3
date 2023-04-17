<div class="container-fluid">
    <div
        class="flash-data"
        data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
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
                <form
                    class="form-horizontal"
                    action="<?= site_url('data-kurikulum/insert') ?>"
                    method="post">
                    <div class="modal-body row">
                        <div class="form-group col-sm-6 has-danger">
                            <label class="col-md-12 text-danger">Program studi</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kode_prodi" required="required">
                                    <?php if (empty($prodi)) : ?>
                                <?php else : ?>
                                    <option>--- Pilih Kode Prodi ---</option>
                                    <?php $i = 1;
                                    foreach ($prodi as $item_prodi) : ?>
                                    <option value="<?= $item_prodi->kode_prodi; ?>"><?= $item_prodi->kode_prodi; ?>-<?= $item_prodi->nama_prodi; ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-6 has-danger">
                            <label class="col-md-12 text-danger">kurikulum</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kode_kurikulum" required="required">
                                    <?php if (empty($kurikulum)) : ?>
                                <?php else : ?>
                                    <option>--- Pilih Kurikulum ---</option>
                                    <?php $i = 1;
                                    foreach ($kurikulum as $kk) : ?>
                                    <option value="<?= $kk->kode_kurikulum; ?>"><?= $kk->kode_kurikulum; ?>-<?= $kk->nama_kurikulum ; ?></option>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <?php for($i=1;$i<=8; $i++):?>
                        <div class="form-group col-sm-6">
                            <div class="card card-outline-info">
                                <div class="nduwur rounded-top py-3 px-3">
                                    <div class="d-flex flex-wrap">
                                        <h4 class="m-b-0 text-white card-title">Semester <?= $i;?></h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <input type="text" class="form-control form-control-sm" id="semester" name="semester[]" value="<?= $i;?>" placeholder="School name" hidden>
                                    <table id="myTable<?= $i;?>" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Matakuliah</th>
                                                <th>MK. Wajib</th>
                                                <th>MK. Paket</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="persebaran_fields<?= $i;?>">
                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" id="kode_mk" name="kode_mk[]" value="" placeholder="School name"></td>
                                                <td>
                                                    <input name="is_wajib[]" type="checkbox" id="is_wajib" class="chk-col-red" />
                                                    <label for="is_wajib">Is Wajib</label>
                                                </td>
                                                <td>
                                                    <input name="is_paket[]" type="checkbox" id="is_paket" class="chk-col-red" />
                                                    <label for="is_paket">Is Paket</label>
                                                </td>
                                                <td><button class="btn btn-success btn-sm" type="button" onclick="persebaran_fields(<?= $i;?>);"><i class="fa fa-plus"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php endfor;?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect btn-sm">Save</button>
                        <button type="button" class="btn btn-default waves-effect btn-sm">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>