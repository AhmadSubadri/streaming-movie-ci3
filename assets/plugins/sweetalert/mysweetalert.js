const flashData = $('.flash-data').data('flashdata');
// console.log (flashData);
if (flashData) {
    swal({
        title : 'Berhasil',
        text : flashData,
        type : 'success',
        timer: 1500,   
        showConfirmButton: false 
    });
}

$('.tombol-hapus').on('click', function(e) {
	e.preventDefault();
    const href = $(this).attr('href');
    swal({   
        title: "Are you sure?",   
        text: "Anda Yakin akan menghapus data tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false 
    }, function(){   
        document.location.href = href;
    });  
});

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
                        confirmButtonText: "Ok",e
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

function DeleteLevelUser(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus Level tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-user-level/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function() {
                    swal({   
                        title: "Deleted!",   
                        text: "Your level has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-user-level';
                        }
                    });
                }
            });
        }
    });
}

function DeleteUsersData(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus User tersebut?",
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-users/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function() {
                    swal({   
                        title: "Deleted!",   
                        text: "Your user has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-users';
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

function DeleteMatakuliah(id) {
    swal({   
        title: "Are you sure?",   
        text: "Anda yakin akan menghapus Data Matakuliah tersebut?",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        cancelButtonText: "No, cancel!",   
        confirmButtonText: "Yes, delete it!",   
        closeOnConfirm: false,
    }, function(isConfirm){   
        if (isConfirm) {
            $.ajax({
                url: 'data-matakuliah/delete',
                method: "POST",
                data: {
                    id: id
                },
                success: function(response) {
                    swal({   
                        title: "Deleted!",   
                        text: "Your data matakuliah has been deleted.",   
                        type: "success", 
                        confirmButtonColor: "#DD6B55",  
                        confirmButtonText: "Ok",
                    }, function(isConfirm){
                        if (isConfirm) {
                            window.location.href = 'data-matakuliah';
                        }
                    });
                }
            });
        }
    });
}