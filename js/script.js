const pageTop = document.querySelector( ".p-page__top" );
// const leadInner = jQuery('.l-header__inner');
// const adminBar = jQuery('.nojq');

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

// jQuery(document).ready(function($) {
//   if ($(adminBar).length > 0) {
//     leadInner.addClass('active');
//   }
// });

// jQuery(document).ready(function() {
//   jQuery(body).each(function() {
//     if (jQuery(this).find('.nojq').hasClass('.nojq')) {
//       console.log('子要素に child-class クラスが含まれています。');
//     } else {
//       console.log('子要素に child-class クラスは含まれていません。');
//     }
//   });
// });
