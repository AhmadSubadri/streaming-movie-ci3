var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row"><div class="col-sm-3 nopadding"><div class="form-group"> <inp' +
            'ut type="text" class="form-control" id="Schoolname" name="Schoolname[]" value=' +
            '"" placeholder="School name"></div></div><div class="col-sm-3 nopadding"><div ' +
            'class="form-group"> <input type="text" class="form-control" id="Major" name="M' +
            'ajor[]" value="" placeholder="Major"></div></div><div class="col-sm-3 nopaddin' +
            'g"><div class="form-group"> <input type="text" class="form-control" id="Degree' +
            '" name="Degree[]" value="" placeholder="Degree"></div></div><div class="col-sm' +
            '-3 nopadding"><div class="form-group"><div class="input-group"> <select class=' +
            '"form-control" id="educationDate" name="educationDate[]"><option value="">Date' +
            '</option><option value="2015">2015</option><option value="2016">2016</option><' +
            'option value="2017">2017</option><option value="2018">2018</option> </select><' +
            'div class="input-group-append"> <button class="btn btn-danger" type="button" o' +
            'nclick="remove_education_fields(' + room + ');"> <i class="fa fa-minus"></i> <' +
            '/button></div></div></div></div><div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}

var start = 1;

function persebaran_fields(id) {
    start++;
    var objTo = document.getElementById('persebaran_fields' + id)
    var divtest = document.createElement("tr");
    divtest.setAttribute("class", "form-group removeclass" + start);
    var rdiv = 'removeclass' + start;
    divtest.innerHTML = 
    '<td><input type="text" class="form-control form-control-sm" id="kode_mk" name="kode_mk[]" value="" placeholder="School name"></td>'+
    '<td><input name="is_wajib[]" type="checkbox" id="is_wajib" class="chk-col-red" /><label for="is_wajib">Is Wajib</label></td>'+
    '<td><input name="is_paket[]" type="checkbox" id="is_paket" class="chk-col-red" /><label for="is_paket">Is Paket</label></td>'+
    '<td><button class="btn btn-danger btn-sm" type="button" onclick="remove_education_fields(' + start + ');"><i class="fa fa-minus"></i></button></td>';

    objTo.appendChild(divtest)
}

function remove_persebaran_fields(rid) {
    $('.removeclass' + rid).remove();
}