const pageTop=document.querySelector(".p-page__top");jQuery(function(){const a=jQuery(pageTop);jQuery(window).on("scroll",function(){if(jQuery(this).scrollTop()>100){a.addClass("active")}else{a.removeClass("active")}})});jQuery("#page-top").click(function(){jQuery("body,html").animate({scrollTop:0},100);return false});jQuery(function(){jQuery(window).scroll(function(){jQuery(".fade").each(function(){const b=jQuery(this).offset().top;const a=jQuery(window).scrollTop();const c=jQuery(window).height();if(a>b-c){jQuery(this).addClass("view")}})})});

// const pageTop = document.querySelector( ".p-page__top" );
// // const leadInner = jQuery('.l-header__inner');
// // const adminBar = jQuery('.nojq');

// // ページトップボタンの出現
// jQuery(function() {
  
//   const btn = jQuery(pageTop);

//   jQuery(window).on('scroll', function() {
//     if(jQuery(this).scrollTop() > 100 ) {
//       btn.addClass('active');
//     } else {
//       btn.removeClass('active');
//     }
//   });
// });

// // #page-topをクリックした際の設定
// jQuery('#page-top').click(function () {
//   jQuery('body,html').animate({
//       scrollTop: 0//ページトップまでスクロール
//   }, 100);//ページトップスクロールの速さ。数字が大きいほど遅くなる
//   return false;//リンク自体の無効化
// });

// // jQuery(document).ready(function($) {
// //   if ($(adminBar).length > 0) {
// //     leadInner.addClass('active');
// //   }
// // });

// // jQuery(document).ready(function() {
// //   jQuery(body).each(function() {
// //     if (jQuery(this).find('.nojq').hasClass('.nojq')) {
// //       console.log('子要素に child-class クラスが含まれています。');
// //     } else {
// //       console.log('子要素に child-class クラスは含まれていません。');
// //     }
// //   });
// // });

// // 下からふわっとfadeInする
// jQuery(function () {
//   jQuery(window).scroll(function () {
//     jQuery('.fade').each(function () {
//       const targetElement = jQuery(this).offset().top;
//       const scroll = jQuery(window).scrollTop();
//       const windowHeight = jQuery(window).height();
//       if(scroll > targetElement - windowHeight) {
//         jQuery(this).addClass('view');
//       }
//     });
//   });
// });

// // //テキストのカウントアップの設定
// // var bar = new ProgressBar.Line(splash_text, {//id名を指定
// //   strokeWidth: 0,//進捗ゲージの太さ
// //   duration: 1000,//時間指定(1000＝1秒)
// //   trailWidth: 0,//線の太さ
// //   text: {//テキストの形状を直接指定 
// //     style: {//天地中央に配置
// //       position:'absolute',
// //       left:'50%',
// //       top:'50%',
// //       padding:'0',
// //       margin:'0',
// //       transform:'translate(-50%,-50%)',
// //       'font-size':'2rem',
// //       color:'#fff',
// //     },
// //     autoStyleContainer: false //自動付与のスタイルを切る
// //   },
// //   step: function(state, bar) {
// //     bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
// //   }
// // });

// // //アニメーションスタート
// // bar.animate(1.0, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
// //   jQuery("#splash").delay(500).fadeOut(800);//アニメーションが終わったら#splashエリアをフェードアウト
// // });  
