const flashData = $('.flash-data').data('flashdata');
// console.log (flashData);
if (flashData) {
    swal({
        title : 'Berhasil',
        text : flashData,
        type : 'success'
    });
}

function DeleteFakultas(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus fakultas tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        cancelButtonText: "No, cancel!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-fakultas/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    // swal("Deleted!", "Your data faculty has been deleted.", "success");
                    window.location.href = 'data-fakultas/delete';
                }
            });
            // return swal("Error!", "Your deleted fail.", "success");
        } else {     
            swal("Cancelled", "Your data Faculty is safe :)", "error");   
        } 
    });
}