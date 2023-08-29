const pageTop = document.querySelector( ".p-page__top" );

jQuery(function() {
  
  const btn = jQuery(pageTop);

  jQuery(window).on('scroll', function() {
    if(jQuery(this).scrollTop() > 100 ) {
      btn.addClass('active');
    } else {
      btn.removeClass('active');
    }
  });
});
