const flashData2 = $('.flash-data2').data('flashdata');
// console.log (flashData);
if (flashData2 === "Login Failed" ) {
    $.toast({
        heading: 'Login Failed!',
        text: 'Please Check Your Username and Password',
        position: 'top-center',
        loaderBg:'#ff6849',
        icon: 'error',
        hideAfter: 3500, 
        stack: 6
      });
} else if(flashData2 === "Login Success") {
  $.toast({
    heading: 'Login Successfully :)',
    text: 'Welcome to Sistem Informasi Akademik Universitas PGRI Yogyakarta',
    position: 'top-right',
    loaderBg:'#ff6849',
    icon: 'success',
    hideAfter: 3500, 
    stack: 6
  });
}