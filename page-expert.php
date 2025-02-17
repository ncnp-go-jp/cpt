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
  <div class="l-base c-white-box-l__wrapper">
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">ご利用にあたって</h2>
      <p>認知処理療法に関心をお寄せいただき、ありがとうございます。<br>当会員ページは、メンタルヘルスをサポートする臨床家のみなさまへ向けて、より専門的な情報をお伝えするために設けられています。CPTを使いこなすためには、心理支援に関する基本的な知識を持っていることと、心理支援専門職として人と関わるコミュニケーションの技術が必要となります。しかし、これらの基礎をお持ちの方にとっては、CPTのプロトコルに習熟するための道のりは決して険しくはありません。ぜひ、CPTのアプローチを学んでいただき、日々、臨床で出会う方々に活用いただけたらと願っております。
      </p>
    </article>
  </div>
</div>
<article class="p-expert l-base">
  <div class="l-base">
    <ul class="c-small-box-list">
      <li class="u-bg-orange-gray">
        <h2 class="c-h3 c-small-box-list__h1">CPTに係る資料</h2>
        <div class="c-small-box-list__txt-box">
          <p>CPT は各回のセッションで扱う内容が予め決められている、マニュアルベースの心理療法です。一定の訓練を受けた臨床家が、マニュアルに則り実施することで、効果を発揮します。<br>ここでは、CPTの実施に必要なマニュアルを紹介しています。無料公開のものから、出版社で扱っている最新版まで、ニーズに応じてお手にとっていただければ幸いです。</p>
        </div>
        <a href="./references/" class="c-btn">CPTに係る資料を見る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li class="u-bg-orange-gray">
        <h2 class="c-h3 c-small-box-list__h1">動画教材</h2>
        <div class="c-small-box-list__txt-box">
          <p>国立精神・神経医療研究センターで行った過去の研修動画公開しています。講義の中では、模擬事例を用いたセッションのロールプレイの様子も紹介しています。<br>CPTの全体像と実施のイメージを掴むためにご活用ください。</p>
        </div>
        <a href="./movie/" class="c-btn">動画教材を見る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li class="u-bg-orange-gray">
        <h2 class="c-h3 c-small-box-list__h1">アセスメントツール</h2>
        <div class="c-small-box-list__txt-box">
          <p>PTSD症状を測るための自己記入式の尺度であるPCL-5を紹介しています。ダウンロードできる質問票も提供していますので、PTSDのスクリーニングや、症状のモニタリングにご活用ください。</p>
        </div>
        <a href="./assessment_tool/" class="c-btn">アセスメントツールを見る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li class="u-bd-beige">
        <h2 class="c-h3 c-small-box-list__h1">お問い合わせ</h2>
        <div class="c-small-box-list__txt-box">
          <p>当サイトに掲載されている情報に関するお問い合わせは、下記のボタンをクリックし、お問い泡絵あわせフォームからお願いいたします。</p>
          <p>なお、トラウマやPTSDに係る相談・診療に関する内容は、原則として受付けておりません。お問い合わせいただいてもお答えしかねますので、予めご了承いただけますと幸いです。</p>
        </div>
        <a href="./contact/" class="c-btn">お問い合わせをする　<i class="fas fa-angle-right"></i></a>
      </li>
    </ul>

  </div>
</article>



<?php get_footer(); ?>