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
            <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.webp" alt="" class="p-img-right-btm-box__img -influence02">
            <p>この結果をもって、「PTSDだ」と決まるわけではありません。より詳しく正確にご自分の状態を知るためには、医療機関を受診することが役立ちます。<br>病院に苦手意識があったり、診断がつくかもしれないと考えると気後れする場合には、まずは、相談機関や支援機関に連絡してみるのも良いかもしれません。<br>大切なのは、あなた自身が「しんどい」「苦しい」と感じているのであれば、自分だけでどうにかしようとするのではなく、安全な誰かとつながることです。<br>人によっては、つながるための行動をとることに不安を感じるかもしれません。それはとても大事なことです。不安なら、あなたの助けになってくれそうな人や機関について、慎重に調べましょう。そして、調べたら、自分のためになりそうな行動を、勇気を出して試してみましょう。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd/'; ?>" class="c-btn">戻る</a>
          <a href="<?php echo home_url() . '/treatment/resources#in-trouble'; ?>" class="c-btn -orange-rev">困った時に頼れる場所を見る</a>
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
            <img src="<?php echo THEME_DIR_URI; ?>learn/result-01.webp" alt="" class="p-img-right-btm-box__img -influence02">
            <p>PTSD症状に大きく煩わされているのではないなら、何よりです。日々の暮らしの中で、自分を癒したり楽しませたりすることを大事にしながら、お過ごしいただければ幸いです。<br>人によっては、PTSD症状に波があります。普段は穏やかに過ごせていても、何かのきっかけで出来事を思い出したときに、急に症状が強まる場合もあります。また、「記念日反応」と呼ばれる、出来事が起きた節目の時期に不調を感じる人もいます。<br>ご自分の心と体の状態に心を配り、もし不調のサインが出てきたら、またセルフチェックをしてみてください。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd#check'; ?>" class="c-btn">戻る</a>
        </div>

      <?php endif; ?>

    </article>
    <p class="c-note">※【引用元】プライマリ・ケアのための PTSD スクリーニング尺度（ DSM 5 版 日本語版）より一部改変：伊藤正哉・宮前光宏・蟹江絢子・横山 知加 (2019）</p>

  </div>

</div>

<!-- モーダルの内容　END -->
<?php get_footer(); ?>