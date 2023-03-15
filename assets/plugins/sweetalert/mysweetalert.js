const flashData = $('.flash-data').data('flashdata');
// console.log (flashData);
if (flashData) {
    swal({
        title : 'Berhasil',
        text : flashData,
        type : 'success'
    });
}