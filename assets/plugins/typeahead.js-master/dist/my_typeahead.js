
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