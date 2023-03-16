const flashData = $('.flash-data').data('flashdata');
// console.log (flashData);
if (flashData ) {
    $.toast({
        heading: 'Login Failed',
        text: 'Incorect Username and Password',
        position: 'top-center',
        loaderBg:'#ff6849',
        icon: 'error',
        hideAfter: 3500, 
        stack: 6
      });
}