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
  <div class="l-base c-white-box-l__wrapper p-assessment_tool">
    <article class="c-white-box-l">

      <div class="p-img-right-btm-box p-assessment_tool__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>assessment_tool/assessment_tool-01.jpg" alt="" class="p-img-right-btm-box__img -assessment_tool">
          <h2 class="c-h3 p-tab-box__h2">PCL-5（質問票）</h2>
          <p>
            PTSD Checklist for DSM-5の日本語版で、PTSDの診断基準に対応した ２０の質問項目で構成される自己記入式の質問紙 です。回答者の PSTD にもっとも影響を与えた心的外傷的出来事を念頭において、直近（過去）１ヶ月間の各症状の程度を回答してもらいます。<br>なお、CPTで毎週のセッションの際にPTSD症状の経過の記録をつけていく際には、過去１週間（※１ヶ月ではなく）の症状についてPCL-5に回答をするようにします。
          </p>
          <a href="http://cpt.ncnp.go.jp/wp-content/uploads/2025/02/PCL-5.pdf" class="c-btn p-assessment_tool__btn" target="_blank">PCL-5（質問票）をダウンロード　<i class="fa-solid fa-file-pdf"></i></a>
        </div>
      </div>

      <div class="p-img-right-btm-box p-assessment_tool__box">
        <div>
          <h2 class="c-h3 p-tab-box__h2">PCL-5について（解説）</h2>
          <p>PCL-5の使用ガイドです。実施法、採点法、解釈について解説していますPCL-5をご使用になる前にご一読ください。
          </p>
          <a href="http://cpt.ncnp.go.jp/wp-content/uploads/2025/02/about_PCL-5.pdf" class="c-btn p-assessment_tool__btn" target="_blank">PCL-5の解説をダウンロード　<i class="fa-solid fa-file-pdf"></i></a>
        </div>
      </div>
    </article>
  </div>
</div>

<article class="l-base p-assessment_tool-detaile">
  <h2 class="c-h2">＊アセスメントツールについて<br class="u-sp">さらなる情報を得たい方へ</h2>
  <p class="p-assessment_tool-detaile__txt">PTSDの症状のスクリーニングや症状評価については、用途に応じて様々なツールが開発されています。日本語版が作成されているものは多くはありませんが、DSM-ⅣでのPTSDに対応した尺度のいくつかは日本語版が作成されています。さらに情報を必要とする方は、目的に応じて、次のサイトをご覧いただければ幸いです。</p>

  <div class="p-assessment_tool-detaile__box">
    <h3>日本語版が作成されている尺度</h3>
    <dl>
      <dt>・PTSD評価尺度（IES-R）</dt>
      <dd><a href="https://www.jstss.org/" target="_blank" class="u-orange-marker">日本トラウマティック・ストレス学会のサイト <i class="fa-regular fa-window-restore"></i></a> に掲載されています。</dd>
    </dl>
    <dl>
      <dt>・PTSD３項目簡易スクリーニング尺度<br>・外傷後ストレス診断尺度DSM-Ⅳ版</dt>
      <dd><a href="https://saigai-kokoro.ncnp.go.jp/" target="_blank" class="u-orange-marker">国立精神・神経医療研究センター ストレス・災害時こころの情報支援センターのサイト <i class="fa-regular fa-window-restore"></i></a> に掲載されています。
      </dd>
    </dl>
    <h3>英語版のさまざまな尺度</h3>
    <dl>
      <dt>・アメリカの退役軍人局</dt>
      <dd><a href="https://www.ptsd.va.gov/" target="_blank" class="u-orange-marker">National Center for PTSDのサイト <i class="fa-regular fa-window-restore"></i></a> に、トラウマ及びPTSDに関連したさまざまな尺度の一覧が掲載されています。</dd>
    </dl>
  </div>
</article>
<?php get_footer(); ?>