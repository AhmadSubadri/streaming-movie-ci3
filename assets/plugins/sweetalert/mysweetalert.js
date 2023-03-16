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
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-fakultas/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    swal({   
                        title: "Deleted!",   
                        text: "Your faculty has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-fakultas';
                        }
                    });
                }
            });
        }
    });
}

function DeleteProdi(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus Prodi tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-program-studi/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    swal({   
                        title: "Deleted!",   
                        text: "Your major has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-program-studi';
                        }
                    });
                }
            });
        }
    });
}

function DeleteDosen(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus Data Dosen tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-dosen/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    swal({   
                        title: "Deleted!",   
                        text: "Your data lecturer has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-dosen';
                        }
                    });
                }
            });
        }
    });
}