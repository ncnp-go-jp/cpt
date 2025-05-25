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
          <p class="u-tac">「はい」が３つ以上でした。<br>この結果は、現在、<br><span class="u-dark-orange">PTSDに関して専門的な評価を行うことが推奨される状態である</span><br>ことを示しています。
          </p>
        </div>
        <div class="p-img-right-btm-box">
          <div>
            <div class="p-img-right-btm-box__space -influence"></div>
            <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.webp" alt="" class="p-img-right-btm-box__img -influence02">
            <p>このチェックリストは、症状の評価やスクリーニングに役立つものですが、この結果のみで「PTSDである」と断定することはできません。より詳しく正確に状態を知るためには、専門的な評価を受ける必要があります。詳しい評価を受けたい場合には、専門の医療機関を受診することが役立ちます。<br>病院に苦手意識があったり、診断がつくかもしれないと考えると気後れする場合には、まずは、相談機関や支援機関に連絡してみるのも良いかもしれません。<br>大切なのは、あなた自身が「しんどい」「苦しい」と感じているのであれば、自分だけでどうにかしようとするのではなく、安全な誰かとつながることです。<br>人によっては、つながるための行動をとることに不安を感じるかもしれません。それはとても大事なことです。不安なら、あなたの助けになってくれそうな人や機関について、慎重に調べましょう。そして、調べたら、自分のためになりそうな行動を、勇気を出して試してみましょう。<br>また、本サイトだけでなく、PTSDに関するさまざまな書籍やウェブサイトが公表されています。信頼できる情報をもとに、ご自身の状態をよりよく理解することが、自分にとって役立つ行動を選ぶヒントになるかもしれません。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd/'; ?>" class="c-btn">戻る</a>
          <a href="<?php echo home_url() . '/treatment/resources#in-trouble'; ?>" class="c-btn -orange-rev">困った時に頼れる場所を見る</a>
        </div>

      <?php else: ?>

        <div class="p-result__txt-box">
          <p class="u-tac">「はい」が２つ以下でした。<br>この結果は、現時点では、<br><span class="u-dark-orange">PTSDに関して専門的な評価を受ける必要性は低い</span><br>ことを示しています。
          </p>
        </div>
        <div class="p-img-right-btm-box">
          <div>
            <div class="p-img-right-btm-box__space -influence"></div>
            <img src="<?php echo THEME_DIR_URI; ?>learn/result-01.webp" alt="" class="p-img-right-btm-box__img -influence02">
            <p>このチェックリストは、症状の評価やスクリーニングに役立つものですが、この結果のみで「PTSDではない」と断定することはできません。より詳しく正確に状態を知るためには、専門的な評価を受ける必要があります。詳しい評価を受けたい場合には、専門の医療機関を受診することが役立ちます。<br>PTSD症状に大きく煩わされているのではないなら、何よりです。日々の暮らしの中で、自分を癒したり楽しませたりすることを大事にしながら、お過ごしいただければ幸いです。<br>人によっては、PTSD症状に波があります。普段は穏やかに過ごせていても、何かのきっかけで出来事を思い出したのを機に、症状が強まる場合もあります。また、「記念日反応」と呼ばれる、出来事が起きた節目の時期に不調を感じる人もいます。<br>ご自分の心と体の状態に心を配り、もし不調のサインが出てきたら、またセルフチェックをしてみてください。</p>
          </div>
        </div>
        <div class="p-result__btn-box">
          <a href="<?php echo home_url() . '/learn/about-ptsd#check'; ?>" class="c-btn">戻る</a>
        </div>

      <?php endif; ?>

    </article>
    <ul class="c-note p-checklist__note">
      <li>※【引用元】プライマリ・ケアのための PTSD スクリーニング尺度（DSM 5 版 日本語版）より一部改変：伊藤正哉・宮前光宏・蟹江絢子・横山 知加（2019）</li>
      <li>※このチェックリストは、米国で作成された尺度を日本語に訳したものです。日本語版の<span class="c-tooltip tippy02">スクリーニング</span>尺度として、日本国内では未だ検証されておらず、こでは、米国で検証された結果を公表した論文に基づいて<span class="c-tooltip tippy03">カットオフ</span>値を設定しています。自分の状態についての理解を進めるひとつの手段として活用いただけると幸いです。<br>PC-PTSDに関する専門家向けの情報は<a href="https://www.ptsd.va.gov/professional/assessment/screens/pc-ptsd.asp" target="_blank" class="u-orange-marker">こちら</a>に掲載されています。（National Center for PTSDサイト内／英語）。
      </li>
    </ul>
    <script>
      tippy('.tippy02', {
        content: `まだ病気であると診断されていない人の中から、病気を患っているかもしれない人を簡便に見つけるための方法。診断ではなく、詳しく調べてみる必要がある人を見つけるために用いられる。`,
        allowHTML: true, // HTMLを許可
        placement: 'bottom',
        arrow: false,
        theme: 'white',
      });
      tippy('.tippy03', {
        content: `検査やチェックリストの点数で、"この点数以上は要注意"という目安の点数のこと`,
        allowHTML: true, // HTMLを許可
        placement: 'bottom',
        arrow: false,
        theme: 'white',
      });
    </script>

  </div>

</div>

<!-- モーダルの内容　END -->
<?php get_footer(); ?>