/* ***************for animation*************** */
$(document).ready(function() {
    // show the overlay and disable clicks
    $('.overlay').show();
    // $('body').addClass('loading');
    $('.xyz').hide();
    
    // hide the loader and enable clicks after 3 seconds
    setTimeout(function() {
    $('.x').fadeOut();
    // $('body').removeClass('loading');
    $('.xyz').show();
  }, 3000);
  
  });
  /* ***************END*************** */
