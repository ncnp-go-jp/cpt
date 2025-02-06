<?php
get_header();
?>

<?php
// メインビューをテンプレート化。
// 表示内容はtenplate-parts/mainview.phpにて設定
get_template_part('template-parts/mainview');
?>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>
  <div class="l-base">
    <ul class="c-small-box-list">
      <li>
        <h2 class="c-h3 c-small-box-list__h1">中見出し中見出し中見出し中見出し</h2>
        <div class="c-small-box-list__txt-box">
          <p>テキストが入りますテキストが入りますテキストが入ります<br>
            テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          <p>テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
        <a href="./" class="c-btn">詳しくはこちら　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">中見出し中見出し中見出し中見出し</h2>
        <div class="c-small-box-list__txt-box">
          <p>テキストが入りますテキストが入りますテキストが入ります<br>
            テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          <p>テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
        <a href="./" class="c-btn">詳しくはこちら　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">中見出し中見出し中見出し中見出し</h2>
        <div class="c-small-box-list__txt-box">
          <p>テキストが入りますテキストが入りますテキストが入ります<br>
            テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          <p>テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
        <a href="./" class="c-btn">詳しくはこちら　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">中見出し中見出し中見出し中見出し</h2>
        <div class="c-small-box-list__txt-box">
          <p>テキストが入りますテキストが入りますテキストが入ります<br>
            テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
          <p>テキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </div>
        <a href="./" class="c-btn">詳しくはこちら　<i class="fas fa-angle-right"></i></a>
      </li>
    </ul>

  </div>

</div>

<?php
// 「サイトについて」の子画面共通パーツ
get_template_part('template-parts/about-common-area');
?>

<?php get_footer(); ?>