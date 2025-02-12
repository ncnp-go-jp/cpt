<?php
get_header();

// 親ページから送られたチェックの結果を受信
$symptom = [];
if (isset($_POST['symptom']) && is_array($_POST['symptom'])) {
  $symptom = $_POST['symptom'];
}
$result_len = count($symptom); // チェック数
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
  <div class="l-base c-white-box-l__wrapper" id="result">
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">チェック結果</h2>

      <?php if ($result_len >= 3): ?>
        <div class="p-result__txt-box">
          <p class="u-tac">「はい」が３つ以上あるあなたは<br>
            <span class="u-dark-orange">PTSDを患っているのかも<br class="u-sp">しれません。</span>
          </p>
        </div>
        <div class="p-img-right-btm-box">
          <div>
            <div class="p-img-right-btm-box__space -influence"></div>
            <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.png" alt="" class="p-img-right-btm-box__img -influence02">
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd/#check'; ?>" class="c-btn">診断をやり直す</a>
          <a href="<?php echo home_url() . '/treatment/familiarize'; ?>" class="c-btn -orange-rev">CPTに親しむを見る</a>
        </div>

      <?php else: ?>

        <div class="p-result__txt-box">
          <p class="u-tac">「はい」が２つ以下のあなたは<br>
            <span class="u-dark-orange">PTSDを患っている可能性は<br class="u-sp">低いようです。</span>
          </p>
        </div>
        <div class="p-img-right-btm-box">
          <div>
            <div class="p-img-right-btm-box__space -influence"></div>
            <img src="<?php echo THEME_DIR_URI; ?>learn/result-01.png" alt="" class="p-img-right-btm-box__img -influence02">
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入テキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd'; ?>" class="c-btn">PTSDとはを見る</a>
        </div>

      <?php endif; ?>

    </article>
    <p class="c-note">※【引用元】プライマリ・ケアのための PTSD スクリーニング尺度（ DSM 5 版 日本語版）より一部改変：伊藤正哉・宮前光宏・蟹江絢子・横山 知加 (2019）</p>

  </div>

</div>

<!-- モーダルの内容　END -->
<?php get_footer(); ?>