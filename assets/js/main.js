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
  $('.p-tab-box__tab-list.js-fit').each(function (index, element) {
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

  //「CPTに親しむ」：教材のカテゴリボタンクリックによる表示切り替え
  $('[data-target]').on('click', function (event) {
    $.when(
      // ボタンカラーを変更
      $('[data-target].active').removeClass('active'),
      $(this).addClass('active')
    ).done(function () {
      // 一覧の表示切り替え
      showCaseList();
    });
  });

  //教材一覧の表示切り替え
  function showCaseList() {
    // 表示中の目印であるCSSクラスを一旦削除
    $('.p-doc-list li').removeClass('active')

    // アクティブな選択ボタンから、表示対象の名称を抽出
    var $target_class = $('[data-target].active').data('target'),
      $target_el;

    // 表示対象の名称に一致するコンテンツを抽出
    if ($target_class != 'all') {
      $target_el = $('.p-doc-list li' + '.' + $target_class);
    } else {
      $target_el = $('.p-doc-list li');
    }

    // 対象のコンテンツに目印用のCSSクラスを付与
    $target_el.addClass('active');

    // 一旦全てを非表示にしてから、対象を表示
    $('.p-doc-list li').fadeOut('fast');
    setTimeout(function () {
      $target_el.fadeIn();
    }, 500);
  }

  // WP-Membersで作成されたフォームの必須項目のラベルに対し、
  // テキストを「必須」へ変更
  $('#wpmem_reg .req').text('必須');

  // WP-Membersで作成されたフォームの登録ボタンに対し、
  // テキストを「登録する」へ変更
  $('#wpmem_reg .button_div .buttons').val('登録する');

  // WP-Membersで作成されたチェックボックス内の改行タグを削除
  $('.p-form__row').each(function (index, element) {
    // 改行タグを削除
    var text = $(element).html();
    $(element).html(
      text.replaceAll("<br>", '')
    );

    // オリジナルのチェックボックスを追加
    $.when(
      $(element).find('input[type=checkbox]').after('<span class="icon"></span>')
    ).done(function () {

    });
  });

  // WP-Membersで作成されたチェック項目に対し、１つの項目ごとに改行を入れる。
  // ※input,label,カスタムされたチェックボックスの３つを同じタグで囲むのは難しいため
  if (windowW < 834) {
    $("label.multicheckbox:not(:first-of-type)").after('<br>');
  } else {
    // 見出しも改行
    $("label.multicheckbox").after('<br>');
  }
  // WP-Membersで作成された「主たる職種」の「その他」のテキストエリアのCSSを調整
  $('label[for="occupation_others"]').parent().addClass('-no-border');
});