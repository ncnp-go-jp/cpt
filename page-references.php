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
  <div class="l-base c-white-box-l__wrapper p-references">
    <article class="c-white-box-l">

      <div class="p-img-right-btm-box p-references__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>references/references-01.jpg" alt="" class="p-img-right-btm-box__img -references">
          <h2 class="c-h3 p-tab-box__h2">トラウマへの認知処理療法　治療者のための包括手引き</h2>
          <p>
            CPT実施者必携の包括的な手引き書です。CPTの起源とエビデンス、臨床実践のための準備に始まり、各セッションの進め方が詳述されます。また、実施に際しての考慮事項や治療のバリエーションを、科学的な検証と臨床実践経験に根ざして論じられます。
          </p>
          <a href="https://www.sogensha.co.jp/productlist/detail?id=3961&srsltid=AfmBOoqec9OTk7uk9rE82c-6q-O7iYAuVvaT1tMDiNMfgNL_3ZHH7FT7" class="c-btn p-references__btn" target="_blank">書籍紹介サイトへ　<i class="fa-solid fa-window-restore"></i></a>
        </div>
      </div>

      <div class="p-img-right-btm-box p-references__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>references/references-02.jpg" alt="" class="p-img-right-btm-box__img -references">
          <h2 class="c-h3 p-tab-box__h2">Cognitive Processing Therapy for PTSD<br>Second Edition A Comprehensive Therapist Manual</h2>
          <p>
            包括手引きの改訂版であり、最新版です（2025年２月現在）。治療の概念化に関する新しい章を加えられるとともに、より使いやすい形式になりました。なお、邦訳版はまだ出版されていません。
          </p>
          <a href="https://www.guilford.com/books/Cognitive-Processing-Therapy-for-PTSD/Resick-Monson-Chard/9781462554270" class="c-btn p-references__btn" target="_blank">書籍紹介サイトへ　<i class="fa-solid fa-window-restore"></i></a>
        </div>
      </div>

      <div class="p-img-right-btm-box p-references__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>references/references-03.jpg" alt="" class="p-img-right-btm-box__img -references">
          <h2 class="c-h3 p-tab-box__h2">認知処理療法　退役軍人／軍版<br>：治療者用マニュアル　CPT－C実施用</h2>
          <p>
            退役軍人・軍用として開発されたマニュアルの邦訳版を無料公開しています。退役軍人に特有の文脈で書かれた箇所もありますが、内容面では、軍とは関係のない日本の患者に適用する場合にも参考になるものと思います。自由にダウンロードしてお使いください。
          </p>
          <a href="https://cbt.ncnp.go.jp/images/upload/files/CPT_C_jisshi_manual.pdf" class="c-btn p-references__btn" target="_blank">マニュアルダウンロード　<i class="fa-solid fa-file-pdf"></i></a>
        </div>
      </div>
      <div class="p-img-right-btm-box p-references__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>references/references-04.jpg" alt="" class="p-img-right-btm-box__img -references">
          <h2 class="c-h3 p-tab-box__h2">認知処理療法　退役軍人／軍版<br>：治療者用 & 患者用マテリアルマニュアル</h2>
          <p>
            退役軍人・軍用として開発されたマニュアルに付随する、心理教育用の資料やワークシートをまとめたものの邦訳版を無料公開しています。治療の円滑な実施と進捗管理に役立つ治療者用資料と、患者に配布して使用するワークブックから成っています。自由にダウンロードしてお使いください。
          </p>
          <a href="https://cbt.ncnp.go.jp/images/upload/files/CPT_material.pdf" class="c-btn p-references__btn" target="_blank">マニュアルダウンロード　<i class="fa-solid fa-file-pdf"></i></a>
        </div>
      </div>

      <div class="p-img-right-btm-box p-references__box">
        <div>

          <img src="<?php echo THEME_DIR_URI; ?>references/references-05.jpg" alt="" class="p-img-right-btm-box__img -references">
          <h2 class="c-h3 p-tab-box__h2">認知処理療法に関するQ＆A</h2>
          <p>
            過去に国立精神・神経医療研究センターで行った研修に参加された方からの質問に対し、研修講師が回答した内容をまとめた冊子です。CPTを活用するにあたっての疑問を解消するためにお役立てください。
          </p>
          <a href="<?php echo THEME_DIR_URI; ?>references/cpt_qa.pdf" class="c-btn p-references__btn" target="_blank">冊子ダウンロード　<i class="fa-solid fa-file-pdf"></i></a>
        </div>
      </div>
    </article>
  </div>
</div>
<?php get_footer(); ?>