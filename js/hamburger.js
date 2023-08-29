const hamburger      = document.querySelector( ".js-hamburger" );
const naviSide       = document.querySelector( ".p-navigation__sidebar" );
const body           = document.querySelector( "body" );
const backOver       = document.querySelector( ".u-background__overlay" );
const sideBar        = document.querySelector( ".l-sidebar" );
const naviItemsSide  = document.querySelectorAll( ".p-navigation__menu__item--sidebar" );
const menuItem       = document.querySelector( ".menu-item" );
const lHead          = document.querySelector( ".l-header" );

// ハンバーガーメニュー押下時の処理
hamburger.addEventListener( "click", () => {
  hamburger.classList.toggle( "is-open" );
  naviSide.classList.toggle( "is-open" );
  body.classList.toggle( "is-open" );
  backOver.classList.toggle( "js-height" );
  sideBar.classList.toggle( "is-open" );
  
  naviItemsSide.forEach( element => {
    element.classList.toggle( "is-open" );
  });

  // if( window.matchMedia( "(min-width: 600px)" ).matches ) {
  //   dorower.classList.remove( "is-open" );
  // }
  if( document.getElementById( "wpadminbar" ) != null ) {
	lHead.classList.toggle( "is-open" );
  }
});

// リサイズしたらハンバーガーメニューを閉じる
window.addEventListener("resize", () => {
  hamburger.classList.remove( "is-open" );
  naviSide.classList.remove( "is-open" );
  body.classList.remove( "is-open" );
  backOver.classList.remove( "js-height" );
  sideBar.classList.remove( "is-open" );
  
  naviItemsSide.forEach( element => {
    element.classList.remove( "is-open" );
  });

});

// ハンバーガーメニュー内のナビゲーションメニュー押下時の処理
document.addEventListener('DOMContentLoaded', function() {
  var menuItems = document.querySelectorAll('.menu-item a');
  menuItems.forEach(function(item) {
    item.addEventListener('click', function(event) {
      // event.preventDefault();
      // ここにクリック時の処理を追加
      hamburger.classList.remove( "is-open" );
      naviSide.classList.remove( "is-open" );
      body.classList.remove( "is-open" );
      backOver.classList.remove( "js-height" );
      sideBar.classList.remove( "is-open" );
      
      naviItemsSide.forEach( element => {
        element.classList.remove( "is-open" );
      });
            
    });

  });

  jQuery(document).ready(function($) {
    $('.menu-item a').on('click', function(event) {
      // event.preventDefault();
      var target = $(this.hash);
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 800);
    });
  });
});
