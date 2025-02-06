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

  <article class="l-base p-abt-intro">
    <section class="p-abt-intro__sec">
      <h3 class="p-abt-intro__h1">安全で有効な治療を届けるために</h3>
      <p>私たちはこれまで、認知処理療法の科学的な検証を慎重に進めてまいりました。これまでの取り組みをもとに、今後は、トラウマティックな体験にあわれ、心的外傷後ストレス症や関連症状で苦しまれている方々に、認知処理療法を少しでも知っていただき、活用していただけたらと願っております。</p>
      <a href="" class="c-btn p-abt-intro__btn">私たちの想いについて　<i class="fas fa-angle-right"></i></a>
    </section>

    <section class="c-white-box-s p-abt-intro__box">
      <h3 class="c-h3 p-abt-intro__h2">運営元</h3>
      <p><span class="u-orange-marker">国立研究開発法人国立精神・神経医療研究センター認知行動療法センター</span>では、設立された2011年より認知行動療法の臨床研究・人材育成・社会実装につとめて参りました。<br>
        研究開発部では、認知処理療法（Cognitive Processing Therapy；CPT）の基礎・臨床研究に励んでおります。</p>
    </section>

    <section class="c-white-box-s p-abt-intro__box">
      <h3 class="c-h3 p-abt-intro__h2">Funding</h3>
      <p>このサイトは、三菱財団社会福祉事業・研究助成を受けて作成されました。<br>
        これまで私たちが行ってきたCPT研究は、日本学術振興会科学研究費助成事業等に支えられて参りました。<br>
        ここに記して、御礼を申し上げます。</p>
      <ul class="p-abt-intro__list">
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「心的外傷後ストレス障害に対する認知処理療法の効果検証と治療メカニズムの解明（研究代表者：堀越勝、研究課題番号：24330204）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（A）「心的外傷後ストレス障害に対する認知処理療法の有効性及び臨床展開（研究代表者：堀越勝、研究課題番号：15H01979）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「トラウマ関連障害への認知処理療法の均てん化のための包括研究（研究代表者：堀越勝、研究課題番号：19H01767）」</li>
        <li>日本学術振興会科学研究費補助金　基盤研究（B）「トラウマ関連障害への認知処理療法の有効性及び作用機序の検証と適用拡大（研究代表者：堀越勝、研究課題番号：22H01097）」</li>
        <li>独立行政法人日本医療研究開発機構　障害者対策総合研究開発事業「新たな認知行動療法プログラムの開発と普及に関する研究（研究分担者：伊藤正哉、課題番号：16769055）」</li>
      </ul>
    </section>

  </article>

</div>

<article class="l-base p-abt-howto">

  <section class="p-abt-howto__sec">
    <h3 class="p-abt-howto__h1">サイトの使い方</h3>
    <p class="p-abt-howto__txt">このサイトを訪れていただき、ありがとうございます。<br>
      ご覧になっているあなたは、どのようなこと知りたくて、訪れてくださったのでしょうか。<br>
      本当は、お一人おひとりにとって必要な情報をお手渡しできれば良いのですが、現実的な制約から、それが叶いません。<br>
      すこしでも情報を探す助けになればと、それぞれの立場の方に届けたい内容をまとめてみました。<br>
      この入り口を、知識という力を得る足がかりに使っていただけると幸いです。</p>
  </section>

  <ul class="p-abt-howto__list">
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-howto-01.jpg" alt="">
      <a href="" class="c-btn -circle-right">トラウマを<br>経験した方へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-howto-02.jpg" alt="">
      <a href="" class="c-btn -circle-right">トラウマを経験した方の<br>ご家族やご友人へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
    <li>
      <img src="<?php echo THEME_DIR_URI; ?>about/about-howto-03.jpg" alt="">
      <a href="" class="c-btn -circle-right">トラウマ経験者の<br>支援を行う方へ</a>
      <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
    </li>
  </ul>

</article>

<?php get_footer(); ?>