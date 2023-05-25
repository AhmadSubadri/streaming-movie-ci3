<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <h4 class="m-b-0 text-white card-title"><?php echo $title ?></h4>
                        <div class="ml-auto">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#Addsetruang" class="btn-warning btn-sm">
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
                                    <th>Program Studi</th>
                                    <th>Ruangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($data)) : ?>
                                <?php else : ?>
                                    <?php $i = 1;
                                    foreach ($data->result() as $item) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $item->nama_prodi; ?></td>
                                            <td>Ruang <?= $item->nama_ruang; ?> - <?= $item->kapasitas; ?> (<?= $item->nama_unit; ?>-<?= $item->nama_gedung; ?>)</td>
                                            <td>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Editsetruang<?= $item->id; ?>" data-id="<?= $item->id; ?>" class="btn btn-sm btn-outline-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit</a>
                                                <a href="<?= site_url() ?>administrator/set-data-ruang/delete/<?= $item->id; ?>" class="btn btn-sm btn-outline-danger tombol-hapus">
                                                    <i class="fa fa-trash"></i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add setruang -->
<div id="Addsetruang" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="AddsetruangLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="AddsetruangLabel">Add
                    <?= $title ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" action="<?= site_url('administrator/set-data-ruang/insert') ?>" method="post">
                <div class="modal-body row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-md-12">Program Studi</label>
                            <div class="col-md-12">
                                <select class="form-control custom-select" name="kode_prodi" required="required">
                                    <option>--Select your Major--</option>
                                    <?php if (empty($prodi)) : ?>
                                    <?php else : ?>
                                        <?php $i = 1;
                                        foreach ($prodi->result() as $itemprodi) : ?>
                                            <option value="<?= $itemprodi->kode_prodi; ?>"><?= $itemprodi->kode_prodi; ?>-<?= $itemprodi->nama_prodi; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-md-12">Nama Unit</label>
                            <div class="col-md-12">
                                <select class="form-control custom-select" name="nama_unit" id="nama_unit" required="required">
                                    <option value="">--Select your unit--</option>
                                    <?php if (!empty($unit)) : ?>
                                        <?php foreach ($unit->result() as $itemunit) : ?>
                                            <option value="<?= $itemunit->unit; ?>"><?= $itemunit->id; ?>-<?= $itemunit->unit; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-md-12">Nama Gedung</label>
                            <div class="col-md-12">
                                <select class="form-select custom-select" name="nama_gedung" id="nama_gedung">
                                    <option class="disabled">--Select your building--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="col-md-12">Checked Room</label>
                            <div class="col-md-12" id="idruangroom">

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

<?php if (empty($data)) : ?>
<?php else : ?>
    <?php $i = 1;
    foreach ($data->result() as $item) : ?>
        <div id="Editsetruang<?= $item->id; ?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="EditsetruangLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="EditsetruangLabel">Edit
                            <?= $title ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" action="<?= site_url('administrator/set-data-ruang/update') ?>" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-md-12">Program Studi</label>
                                <div class="col-md-12">
                                    <select class="form-control custom-select" name="kode_prodi" required="required">
                                        <option>--Select your Major--</option>
                                        <?php if (empty($prodi)) : ?>
                                        <?php else : ?>
                                            <?php $i = 1;
                                            foreach ($prodi->result() as $itemprodi) : ?>
                                                <option value="<?= $itemprodi->kode_prodi; ?>" <?= ($itemprodi->kode_prodi == $item->kode_prodi) ? 'selected' : '' ?>><?= $itemprodi->kode_prodi; ?>-<?= $itemprodi->nama_prodi; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Nama setruang</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="nama_ruang" value="<?= $item->nama_ruang; ?>" placeholder="type name room" required="required">
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
<?php endif; ?>

<script>
    $(document).ready(function() {
        $('#nama_unit').change(function() {
            var nama_unit = $(this).val();
            if (nama_unit !== '') {
                $.ajax({
                    url: '<?= site_url("administrator/data-ruang/autocomplete"); ?>',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        id: nama_unit
                    },
                    success: function(data) {
                        var html = '<option selected="selected" disabled="disabled">--Select your building--</option>';
                        for (var i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].nama_gedung + '">' + data[i].id + ' - ' + data[i].nama_gedung + '</option>';
                        }
                        $('#nama_gedung').html(html);
                    }
                });
            } else {
                $('#nama_gedung').html('<option selected="selected" disabled="disabled">--Select your building--</option>');
            }
        });

        $('#nama_gedung').change(function() {
            var nama_gedung = $(this).val();
            var nama_unit = myElement = document.getElementById("nama_unit").value;
            $.ajax({
                url: '<?= site_url("administrator/data-ruang/autocomplete-to-room"); ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    gedung: nama_gedung,
                    unit: nama_unit
                },
                success: function(data) {
                    var html = '';
                    for (var i = 0; i < data.length; i++) {
                        html += '<input type="checkbox" id="md_checkbox_21' + data[i].id + '" name="ruangansave[]" value="' + data[i].id + '" class="filled-in chk-col-red"/> ' +
                            '<label for = "md_checkbox_21' + data[i].id + '" > ' + data[i].kode_ruang + ' - ' + data[i].nama_ruang + ' </label>&nbsp; &nbsp; &nbsp; <i class="text-danger">-</i>&nbsp; &nbsp; &nbsp;';
                    }
                    $('#idruangroom').html(html);
                }
            });
        });

    });
</script>