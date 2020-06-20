// メイン説明文吹き出しバツボタンで非表示
$(function(){
    $('.cancel').click(function(){
        $('.main .balloon').hide()
    });
});


// ハンバーガーメニュー
$(function(){
  $('.menu').on('click',function(){
      $('.header-gnav').slideToggle(200);
      $('.menu').toggleClass('on');
  });
});

$(function(){
  $('.footer-menu').on('click',function(){
      $('.header-gnav').slideToggle(200);
      $('.menu').toggleClass('on');
  });
});

// フッター追従メニュー
$(function(){
  $('.footer-share').on('click',function(){
    $('.footer-share-list').fadeToggle();
    // .slideToggle(200);
    $('.footer-share-list').toggleClass('on');
  });

  $('.footer-share-list-close').click(function(){
    $('.footer-share-list').fadeOut();
    $('.footer-share-list').removeClass('on');
  });


  $('.footer-freeword').on('click',function(){
    $('.footer-freeword-list').fadeToggle();
    // .slideToggle(200);
    $('.footer-freeword-list').toggleClass('on');
  });

  $('.footer-freeword-list-close').click(function(){
    $('.footer-freeword-list').fadeOut();
    $('.footer-freeword-list').removeClass('on');
  });


  $('.footer-location').on('click',function(){
    $('.footer-location-list').fadeToggle();
    // .slideToggle(200);
    $('.footer-location-list').toggleClass('on');
  });

  $('.footer-location-list-close').click(function(){
    $('.footer-location-list').fadeOut();
    $('.footer-location-list').removeClass('on');
  });
});



// メイン画像オートスライド
$(document).ready(function(){
  $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      infinite: true,
      speed: 2500,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      arrows: false,
      cssEase: 'linear'
  });
});



//■page topボタン
$(function(){
    var topBtn=$('#pageTop');
    topBtn.hide();
     
    //◇ボタンの表示設定
    $(window).scroll(function(){
      if($(this).scrollTop()>80){
    
        //---- 画面を80pxスクロールしたら、ボタンを表示する
        topBtn.fadeIn();
    
      }else{
    
        //---- 画面が80pxより上なら、ボタンを表示しない
        topBtn.fadeOut();
    
      }
    });
    
     
    
    // ◇ボタンをクリックしたら、スクロールして上に戻る
    topBtn.click(function(){
      $('body,html').animate({
      scrollTop: 0},500);
      return false;
    
    });
    
    
    });



// フッター追従グロナビ
$(window).scroll(function() {
  var scroll_len = $(window).scrollTop();
  var page_len   = $(document).height();
  var window_len = $(window).height();
  var header_margin = 200;
  var footer_margin = 100;
  if ( (scroll_len > header_margin) && (scroll_len < page_len - window_len - footer_margin) ) {
    $('.l-footer.fixed').animate({height: 'show'}, 'slow' );
  } else {
    $('.l-footer.fixed').animate({height: 'hide'}, 'slow' );
  }
});


// スライダー
$('.top3-box, .select-country-box').slick({
  dots: true,
  arrows: false,
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
//   autoplay: true,
// 　autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        dots: true,
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1
      }
    }
  ]
});



// ViewMore（もっと見る）
var moreNum = 10;
$('.new-reviews-box:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
$('.view-more').on('click', function() {
  $('.new-reviews-box.is-hidden').slice(0, moreNum).removeClass('is-hidden');
  if ($('.new-reviews-box.is-hidden').length == 0) {
    $('.view-more').fadeOut();
  }
});


// 店舗ヘッダー追従
jQuery(function($) {
	var nav = $('.l-header'),
	offset = nav.offset();// メニュー部分の位置情報を取得
	$(window).scroll(function () {
	  if($(window).scrollTop() > offset.top) { // スクロールした距離が、ページ上部からナビまでの距離を超えた場合
	    nav.addClass('fixed-top');
	  } else {// スクロールした距離が、ページ上部からナビまでの距離より少ない場合
	    nav.removeClass('fixed-top');
	  }
	});
});

// 店舗ヘッダー追従の現在のページハイライト
$(function(){
  $('.controllerHeader li a').each(function(){
    var $href = $(this).attr('href');
    if(location.href.match($href)) {
      $(this).parent().addClass('current');
    } else {
      $(this).parent().removeClass('current');
    }
  });
});


//　トップコンテンツ、クリックで表示切り替え
$(function() {

  $('.pmd_1').click(function(e) {
    $('.pmd_1').addClass("active");
    $('.area_1').addClass("active");
    $('.pmd_2').removeClass("active");
    $('.area_2').removeClass("active");
    $('.pmd_3').removeClass("active");
    $('.area_3').removeClass("active");
    $('.pmd_4').removeClass("active");
    $('.area_4').removeClass("active");
  });
  $('.pmd_2').click(function(e) {
    $('.pmd_1').removeClass("active");
    $('.area_1').removeClass("active");
    $('.pmd_2').addClass("active");
    $('.area_2').addClass("active");
    $('.pmd_3').removeClass("active");
    $('.area_3').removeClass("active");
    $('.pmd_4').removeClass("active");
    $('.area_4').removeClass("active");
  });
  $('.pmd_3').click(function(e) {
    $('.pmd_1').removeClass("active");
    $('.area_1').removeClass("active");
    $('.pmd_2').removeClass("active");
    $('.area_2').removeClass("active");
    $('.pmd_3').addClass("active");
    $('.area_3').addClass("active");
    $('.pmd_4').removeClass("active");
    $('.area_4').removeClass("active");
  });
  $('.pmd_4').click(function(e) {
    $('.pmd_1').removeClass("active");
    $('.area_1').removeClass("active");
    $('.pmd_2').removeClass("active");
    $('.area_2').removeClass("active");
    $('.pmd_3').removeClass("active");
    $('.area_3').removeClass("active");
    $('.pmd_4').addClass("active");
    $('.area_4').addClass("active");
  });
});


//　店舗トップグロナビ、クリックで表示切り替え
// $(function(){
//   $('.gnav01').click(function(){
//     $('.store-top01').show();
//     $('.store-top02').hide();
//     $('.store-top03').hide();
//     $('.store-top04').hide();
//   });
//   $('.gnav02').click(function(){
//     $('.store-top01').hide();
//     $('.store-top02').show();
//     $('.store-top03').hide();
//     $('.store-top04').hide();
//   });
//   $('.gnav03').click(function(){
//     $('.store-top01').hide();
//     $('.store-top02').hide();
//     $('.store-top03').show();
//     $('.store-top04').hide();
//   });
//   $('.gnav04').click(function(){
//     $('.store-top01').hide();
//     $('.store-top02').hide();
//     $('.store-top03').hide();
//     $('.store-top04').show();
//   });
// });
$(function() {
  $('.gnav01').click(function(e) {
    $('.store-top01').addClass("active");
    $('.store-top02').removeClass("active");
    $('.store-top03').removeClass("active");
    $('.store-top04').removeClass("active");
  });
  $('.gnav02').click(function(e) {
    $('.store-top01').removeClass("active");
    $('.store-top02').addClass("active");
    $('.store-top03').removeClass("active");
    $('.store-top04').removeClass("active");
  });
  $('.gnav03').click(function(e) {
    $('.store-top01').removeClass("active");
    $('.store-top02').removeClass("active");
    $('.store-top03').addClass("active");
    $('.store-top04').removeClass("active");
  });
  $('.gnav04').click(function(e) {
    $('.store-top01').removeClass("active");
    $('.store-top02').removeClass("active");
    $('.store-top03').removeClass("active");
    $('.store-top04').addClass("active");
  });
});



// スワイプボックス
//$(function() {
//  $( '.swipebox' ).swipebox();
//});

// $(function(){
//   $('a[href$=jpg]').swipebox();
// });


// 画像が見つからない場合Noimgに変換
$(document).ready(function() {
  //画像にclassを付加
  $('img').addClass('miss');
  //画像が見つからないときにエラーイベント発生
  $('img.miss').error(function() {
      //置換処理
      $(this).attr({
          src: 'http://nanson.xsrv.jp/wp-content/uploads/2020/05/noimage.jpg',
          alt: 'none image',
          // style:'border: 1px solid #eee;width:150px;height:150px;margin:25px;'
      });
  });
});


// ローディング画面
// $(function(){
// 	var loader = $('.loader-wrap');

	//ページの読み込みが完了したらアニメーションを非表示
	// $(window).on('load',function(){
	// 	loader.fadeOut();
	// });

	//ページの読み込みが完了してなくても3秒後にアニメーションを非表示にする
// 	setTimeout(function(){
// 		loader.fadeOut();
// 	},3000);
// });


// ローディング画面２
window.onload = function() {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}