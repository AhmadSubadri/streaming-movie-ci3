
// Autocomplete Dosen select
var dosen = new Bloodhound({
    remote: {
        url: 'data-matakuliah/autocomplete',
        wildcard: '%QUERY'
    },
    datumTokenizer: Bloodhound
        .tokenizers
        .whitespace('dosennama'),
    queryTokenizer: Bloodhound.tokenizers.whitespace
});

$('#autokodedosen .typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
}, {
    name: 'dosennama',
    display: 'nama',
    source: dosen,
    templates: {
        suggestion: function (data) {
            return '<div><strong>' + data.id + '</strong> - ' + data.nama + '</div>';
        }
    }
});
$('#autokodedosen .typeahead').bind(
    'typeahead:select',
    function (ev, suggestion) {
        $('#iddosen').val(suggestion.id);
        $('#dosennama').val(suggestion.nama);
    }
);