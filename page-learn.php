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
        <h2 class="c-h3 c-small-box-list__h1">トラウマとは</h2>
        <div class="c-small-box-list__txt-box">
          <p>人生では、自分の力では対処できないような、とても大きな出来事を体験することがあります。<br>
            個人で対処できないほどの圧倒されるような体験によってもたらされる心の傷を「トラウマ」といいます。</p>
        </div>
        <a href="./about-trauma" class="c-btn">トラウマについて学ぶ　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">トラウマの影響</h2>
        <div class="c-small-box-list__txt-box">
          <p>トラウマを経験すると、多くの人は、体の反応や、考えや気持ちの変化など、さまざまな心身の反応を経験します。これは正常なストレス反応で、「心が弱い人間だから」起こるのではありません。<br>
            そして、トラウマを経験した後の反応は、出来事から時間が経つに従って、次第に落ち着いてきます。</p>
        </div>
        <a href="./influence" class="c-btn">トラウマの影響を学ぶ　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">PTSDとは</h2>
        <div class="c-small-box-list__txt-box">
          <p>トラウマを経験した後、長い期間反応が続く場合は、特別なケアが必要かもしれません。<br>
            症状が1か月以上続き、生活に支障をきたしている場合は、心的外傷後ストレス症（PTSD）を患っている可能性があります。</p>
        </div>
        <a href="./about-ptsd" class="c-btn">PTSDについて学ぶ　<i class="fas fa-angle-right"></i></a>
      </li>
    </ul>

  </div>

</div>

<?php get_footer(); ?>