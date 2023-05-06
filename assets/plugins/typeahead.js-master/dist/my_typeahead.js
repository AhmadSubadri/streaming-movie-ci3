// Autocomplete Dosen select
var dosen = new Bloodhound({
    remote: {
        url: 'data-matakuliah/autocomplete?query=%QUERY',
        wildcard: '%QUERY'
    },
    datumTokenizer: Bloodhound
        .tokenizers
        .whitespace('query'),
    queryTokenizer: Bloodhound.tokenizers.whitespace
});

$('#autokodedosen .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
}, {
    name: 'dosennama',
    display: 'nama_dosen',
    source: dosen,
    templates: {
        suggestion: function (data) {
            return '<div><strong>' + data.id + '</strong> - ' + data.nama_dosen + '</div>';
        }
    }
}).on('typeahead:selected', function (event, data) {
    $('#iddosen').val(data.id);
});

// pemilihan matakukiah
// $('#kode_prodi').change(function(){ 
//     var kode_prodi = $(this).val();
//     $.ajax({
//         url : "kurikulum-prodi/get-mk-byprodi",
//         method : "POST",
//         data : {id: kode_prodi},
//         async : true,
//         dataType : 'json',
//         success: function(data){

//             var html = '';
//             var i;
//             html += '<option selected="selected" disabled="disabled">Silahkan pilih matakuliah</option>';
//             for(i=0; i<data.length; i++){
//                 html += '<option value="'+data[i].kode_mk+'">'+data[i].nama_mk+'</option>';
//             }
//             $('#autokommatakuliah').html(html);
//         }
//     });
//     return false;
// });


var mk = new Bloodhound({
    remote: {
        url: 'kurikulum-prodi/autocomplete?query=%QUERY',
        wildcard: '%QUERY'
    },
    datumTokenizer: Bloodhound
        .tokenizers
        .whitespace('query'),
    queryTokenizer: Bloodhound.tokenizers.whitespace
});

$('#autokommatakuliah .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
}, {
    name: 'matakuliah',
    display: 'nama_mk',
    source: mk,
    templates: {
        suggestion: function (data) {
            return '<div><strong>' + data.kode_mk + '</strong> - ' + data.nama_mk + '</div>';
        }
    }
}).on('typeahead:selected', function (event, data) {
    $('#idmk').val(data.kode_mk);
});