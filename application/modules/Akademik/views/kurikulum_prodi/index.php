<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <div class="d-flex flex-wrap">
                        <div>
                            <h4 class="m-b-0 text-white card-title"><?= $title ?></h4>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" action="<?= site_url('administrator/data-kurikulum/insert') ?>" method="post">
                    <div class="modal-body row">
                        <div class="form-group col-sm-6 has-danger">
                            <label class="col-md-12 text-danger">Program studi</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kode_prodi" id="kode_prodi" required="required">
                                    <?php if (empty($prodi)) : ?>
                                    <?php else : ?>
                                        <option>--- Pilih Kode Prodi ---</option>
                                        <?php foreach ($prodi as $item_prodi) : ?>
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
                                        <?php foreach ($kurikulum as $kk) : ?>
                                            <option value="<?= $kk->kode_kurikulum; ?>"><?= $kk->kode_kurikulum; ?>-<?= $kk->nama_kurikulum; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <?php for ($i = 1; $i <= 8; $i++) : ?>
                            <div class="form-group col-sm-6">
                                <div class="card card-outline-info">
                                    <div class="nduwur rounded-top py-3 px-3">
                                        <div class="d-flex flex-wrap">
                                            <h4 class="m-b-0 text-white card-title">Semester <?= $i; ?></h4>
                                            <div class="ml-auto">
                                                <button class="btn btn-warning btn-sm" type="button" onclick="persebaran_fields(<?= $i; ?>);">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <input type="text" class="form-control form-control-sm" name="semester[]" value="<?= $i; ?>" placeholder="School name" hidden>
                                        <table id="myTable<?= $i; ?>" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Matakuliah</th>
                                                    <th>MK. Wajib</th>
                                                    <th>MK. Paket</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="persebaran_fields<?= $i; ?>">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
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
<!-- Sertakan library Select2 -->
<!-- ... Your HTML code ... -->

<script>
    function persebaran_fields(id) {
        var kode_prodi = document.getElementById('kode_prodi').value;
        var existingForms = document.querySelectorAll('[id^="autokommatakuliah"]');
        start = existingForms.length + 1;
        var objTo = document.getElementById('persebaran_fields' + id);
        var divtest = document.createElement('tr');
        divtest.setAttribute('class', 'form-group removeclass' + start);
        var rdiv = 'removeclass' + start;
        divtest.innerHTML =
            '<td>' +
            '<select class="form-select custom-select" name="matakuliah[]" id="autokommatakuliah' + start + '"></select>' +
            '</td>' +
            '<td><input name="is_wajib[]" type="checkbox" id="is_wajib' + start + '" class="chk-col-red" /><label for="is_wajib' + start + '"></label></td>' +
            '<td><input name="is_paket[]" type="checkbox" id="is_paket' + start + '" class="chk-col-red" /><label for="is_paket' + start + '"></label></td>' +
            '<td><button class="btn btn-danger btn-sm" type="button" onclick="remove_persebaran_fields(' + start + ');"><i class="fa fa-minus"></i></button></td>';

        objTo.appendChild(divtest);
        var selectElement = document.getElementById('autokommatakuliah' + start);
        selectElement.style.width = '100%';
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= site_url("administrator/kurikulum-prodi/autocomplete"); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                var html = '';
                html += '<option selected="selected" disabled="disabled">Select Mtakuliah</option>';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].kode_mk + '">' + data[i].nama_mk + '</option>';
                }
                selectElement.innerHTML = html;
                $(selectElement).select2();
            }
        };
        xhr.send('id=' + kode_prodi);
    }

    function remove_persebaran_fields(rid) {
        $('.removeclass' + rid).remove();
    }
</script>