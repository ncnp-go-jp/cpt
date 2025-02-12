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
        <h2 class="c-h3 c-small-box-list__h1">PTSDの治療</h2>
        <div class="c-small-box-list__txt-box">
          <p>PTSDには治療法があります。治療によって、症状を治したり、症状の強さが軽くなったりする可能性があります。そして、症状によって滞っていた日常生活や人間関係が、スムーズに行くようになる可能性があります。これまでの研究から、トラウマに焦点を当てた心理療法と薬物療法の両方が、PTSDの治療に有効であることが証明されています。</p>
        </div>
        <a href="./treatment-ptsd" class="c-btn">PTSDの治療を知る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">CPTとは</h2>
        <div class="c-small-box-list__txt-box">
          <p>認知処理療法（CPT）は、心的外傷後ストレス症（PTSD）や関連症状に対する認知行動療法（思考や感情に焦点を当てた治療）です。PTSDの症状やその他の問題からの回復を滞らせる可能性のある「考え」の傾向に気づき、対処する術を身につけます。</p>
        </div>
        <a href="./about-cpt" class="c-btn">CPTを知る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">CPTの進め方</h2>
        <div class="c-small-box-list__txt-box">
          <p>CPTは、全12回の各セッションの中で、どんなことに取り組むかが決まっている療法です。支援を求める人にとって、今、CPTに取り組むことが役立つかを判断したうえで、決まった手順に則り実施することで、PTSDや関連する症状の改善に効果を発揮します。</p>
        </div>
        <a href="./steps" class="c-btn">CPTの進め方を知る　<i class="fas fa-angle-right"></i></a>
      </li>
      <li>
        <h2 class="c-h3 c-small-box-list__h1">CPTに親しむ</h2>
        <div class="c-small-box-list__txt-box">
          <p>当サイトをご覧になって、CPTを活用したい・より詳しく知りたいと思われた方は、下記の資料もご覧ください。自分自身でCPTを理解するほか、PTSDやトラウマにお悩みの方への支援の一助としてもご活用いただけると幸いです。</p>
        </div>
        <a href="./familiarize" class="c-btn">CPTに親しむを知る　<i class="fas fa-angle-right"></i></a>
      </li>
    </ul>

  </div>

</div>

<?php get_footer(); ?>