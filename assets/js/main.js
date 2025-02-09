/*jslint node: true */
'use strict';

jQuery(function ($) {

  //現在のページURLのハッシュ部分を取得
  const hash = location.hash;

  //ハッシュ部分がある場合の条件分岐
  if (hash) {
    if ($(hash).length > 0) {
      //ページ遷移後のスクロール位置指定
      $('html, body').stop().scrollTop(0);
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
  $('a[href^="#"]').not('a.js-modal-button-target').click(function () {
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

  // タブ一覧の個々のタブの横幅を調整する
  $('.p-tab-box__tab-list').each(function (index, element) {
    var listChildren = $(element).children(),
      totalLength = 0;

    // タブ一覧のテキストの総文字数を計算
    listChildren.each(function (index2, element2) {
      totalLength += $(element2).text().length;
    });

    // 各タブの文字数を元に、横の比率を取得し、設定
    listChildren.each(function (index2, element2) {
      var txtLength = $(element2).text().length,
        ratio = txtLength / totalLength,
        ratioCss = Math.round(ratio * 100, 1);
      $(element2).css("flex-grow", ratioCss / 10);
    });
  });

  // タブの切り替え
  $('[data-tag]').on('click', function () {
    var tagNum = $(this).data('tag');
    // 一度全てを非表示に
    $('[data-targetTag]').removeClass('active');
    $('[data-tag]').removeClass('active');

    // 該当のコンテンツを表示
    $('[data-tag="' + tagNum + '"]').addClass('active');
    $('[data-targetTag="' + tagNum + '"]').addClass('active');
  });

  // モーダル内の最初のコンテンツを可視化
  $('.p-modal').each(function (index, element) {
    $(element).find('.p-modal__inner').first().addClass('active');
  });

  // モーダルの設定
  $('.js-modal-button-target').modaal({
    hide_close: true, // 閉じるボタンを非表示
    overlay_opacity: 0.3, // 背景の透過率
    after_close: function () { // 閉じたあとのイベント
      // モーダル内のコンテンツを初期化
      $('.p-modal').each(function (index, element) {
        $(element).find('.p-modal__inner').removeClass('active');
        $(element).find('.p-modal__inner').first().addClass('active');
      });
    }
  });

  // モーダル内の「はい」「いいえ」ボタンをクリック
  $('.js-modal-button-next').on('click', function () {
    // 現在のコンテンツを非表示に
    $(this).parent().parent().removeClass('active');

    // 次のコンテンツを表示
    $(this).parent().parent().next().addClass('active');
  });

  // モーダル内のボタンを閉じるボタンに設定
  $('.js-modal-close').on('click', function () {
    $('.js-modal-button-target').modaal('close');
  });

});