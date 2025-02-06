/*jslint node: true */
'use strict';

jQuery(function ($) {

  //現在のページURLのハッシュ部分を取得
  const hash = location.hash;

  //ハッシュ部分がある場合の条件分岐
  if (hash) {
    if ($(hash).length > 0) {
      //ページ遷移後のスクロール位置指定
      $("html, body").stop().scrollTop(0);
      $(window).on('load', function () {
        //リンク先を取得
        const target = $(hash);
        //リンク先までの距離を取得
        const scrollPosition = target.offset().top - $('header').innerHeight();
        $('html, body').animate({
          scrollTop: scrollPosition
        }, 500, 'swing');
        return false;
      });
    }
  }

  //ページ内移動
  $('a[href^="#"]').click(function () {
    var href = $(this).attr('href'),
      target = $(href === "#" || href === "" ? 'html' : href);
    $('body,html').animate({
      scrollTop: target.offset().top - $('header').innerHeight()
    }, 500, 'swing');
    return false;
  });

  // 要素の高さを揃える
  $('.js-matchHeight').matchHeight();

  var windowW = $(window).width();

  // スマホ：メニューボタン：タッチ時の開閉
  $('.js-gnav-toggle').on('click', function () {
    $(this).toggleClass('active');
    $('.p-gnav,.p-gnav__bg').fadeToggle();
  });

  // スマホ：メインメニュー：タッチ時の開閉
  $('.js-sub-list-toggle').on('click', function () {
    if (windowW < 1200) {
      $(this).toggleClass('active');
      $(this).parent().next('.p-gnav__sub-list').slideToggle();
    }
  });

  // メニューをクリック時に誤ってメニュー全体が閉じないようにする
  $('.p-gnav__inner').on('click', function (event) {
    event.stopPropagation();
  });
});