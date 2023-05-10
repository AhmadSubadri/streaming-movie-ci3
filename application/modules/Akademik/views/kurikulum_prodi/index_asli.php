<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg'); ?>"></div>
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
                <form class="form-horizontal" action="<?= site_url('administrator/data-kurikulum/insert') ?>" method="post">
                    <div class="modal-body row">
                        <div class="form-group col-sm-6 has-danger">
                            <label class="col-md-12 text-danger">Program studi</label>
                            <div class="col-md-12">
                                <select class="form-control" name="kode_prodi" id="kode_prodi" required="required">
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
                                            <h4 class="m-b-0 text-white card-title">Semester
                                                <?= $i; ?></h4>
                                            <div class="ml-auto">
                                                <button class="btn btn-warning btn-sm" type="button" onclick="persebaran_fields(<?= $i; ?>);">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <input type="text" class="form-control form-control-sm" id="semester" name="semester[]" value="<?= $i; ?>" placeholder="School name" hidden="hidden">
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

<script>
    // var start = 1;
    // $('#kode_prodi').change(function() {
    //     var id = $(this).val();
    //     $.ajax({
    //         url: "<?= site_url('administrator/kurikulum-prodi/autocomplete'); ?>",
    //         method: "POST",
    //         data: {
    //             id: id
    //         },
    //         async: true,
    //         dataType: 'json',
    //         success: function(data) {

    //             var html = '';
    //             var i;
    //             // html += '<option selected="selected" disabled="disabled">Silahkan pilih MK</option>';
    //             for (i = 0; i < data.length; i++) {
    //                 html += '<option value="' + data[i].kode_mk + '">' + data[i].nama_mk + '</option>';
    //             }
    //             $('#autokommatakuliah').html(html);
    //         }
    //     });
    //     return false;
    // });

    // function persebaran_fields(id) {
    //     start++;
    //     var objTo = document.getElementById('persebaran_fields' + id)
    //     var divtest = document.createElement("tr");
    //     divtest.setAttribute("class", "form-group removeclass" + start);
    //     var rdiv = 'removeclass' + start;
    //     divtest.innerHTML =
    //         '<td>' +
    //         '<select class="form-select custom-select" name="matakuliah" id="autokommatakuliah"> </select> ' +
    //         // '<div class="col-md-12" id="autokommatakuliah"><input type="text" class="typeahead form-control" name="matakuliah" placeholder="type matakuiah" required="required"><input type="text" class="form-control" id="idmk" value="" name="idmk" hidden></div>' +
    //         '</td>' +
    //         '<td><input name="is_wajib[]" type="checkbox" id="is_wajib' + start + '" class="chk-col-red" /><label for="is_wajib' + start + '"></label></td>' +
    //         '<td><input name="is_paket[]" type="checkbox" id="is_paket' + start + '" class="chk-col-red" /><label for="is_paket' + start + '"></label></td>' +
    //         '<td><button class="btn btn-danger btn-sm" type="button" onclick="remove_education_fields(' + start + ');"><i class="fa fa-minus"></i></button></td>';

    //     objTo.appendChild(divtest);
    //     var selectElement = document.getElementById('autokommatakuliah' + start);
    //     var select2 = new Select2(selectElement, {
    //         dropdownParent: selectElement
    //     });
    // }

    var start = 1;
    document.getElementById('kode_prodi').addEventListener('change', function() {
        var id = this.value;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?= site_url("administrator/kurikulum-prodi/autocomplete"); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                var selectElement = document.getElementById('autokommatakuliah');
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].kode_mk + '">' + data[i].nama_mk + '</option>';
                }
                selectElement.innerHTML = html;
                var select2 = new Select2(selectElement, {
                    dropdownParent: selectElement
                });
            }
        };
        xhr.send('id=' + id);
    });

    function persebaran_fields(id) {
        start++;
        var objTo = document.getElementById('persebaran_fields' + id);
        var divtest = document.createElement('tr');
        divtest.setAttribute('class', 'form-group removeclass' + start);
        var rdiv = 'removeclass' + start;
        divtest.innerHTML =
            '<td>' +
            '<select class="form-select custom-select" name="matakuliah" id="autokommatakuliah' + start + '"> </select> ' +
            '</td>' +
            '<td><input name="is_wajib[]" type="checkbox" id="is_wajib' + start + '" class="chk-col-red" /><label for="is_wajib' + start + '"></label></td>' +
            '<td><input name="is_paket[]" type="checkbox" id="is_paket' + start + '" class="chk-col-red" /><label for="is_paket' + start + '"></label></td>' +
            '<td><button class="btn btn-danger btn-sm" type="button" onclick="remove_education_fields(' + start + ');"><i class="fa fa-minus"></i></button></td>';

        objTo.appendChild(divtest);
        var selectElement = document.getElementById('autokommatakuliah' + start);
        var select2 = new Select2(selectElement, {
            dropdownParent: selectElement
        });
    }


    function remove_persebaran_fields(rid) {
        $('.removeclass' + rid).remove();
    }
    // $(function() {
    //     $(document).ready(function() {
    //         const autokommatakuliah = document.getElementById('autokommatakuliah');
    //         const select2 = new Select2(autokommatakuliah, {
    //             dropdownParent: autokommatakuliah
    //         });
    //         // $('#autokommatakuliah').select2({
    //         //     dropdownParent: $("#autokommatakuliah")
    //         // });

    //     });
    // });
</script>