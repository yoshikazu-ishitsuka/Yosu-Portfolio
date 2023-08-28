const hamburger = document.querySelector( ".js-hamburger" );
// const Navi      = document.querySelector( ".p-navigation" );
const body      = document.querySelector( "body" );
const backOver  = document.querySelector( ".u-background__overlay" );

hamburger.addEventListener( "click", () => {
  hamburger.classList.toggle( "is-open" );
  // Navi.classList.toggle( "active" );
  body.classList.toggle( "is-open" );
  backOver.classList.toggle( "js-height" );

  // if( window.matchMedia( "(min-width: 600px)" ).matches ) {
  //   dorower.classList.remove( "is-open" );
  // }
  // if( document.getElementById( "wpadminbar" ) != null ) {
	// lHead.classList.toggle( "is-open" );
  // }
});
