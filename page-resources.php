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
  <div class="l-base c-white-box-l__wrapper" id="scientific_knowledge">
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">科学的な知見にふれる</h2>
      <div class="p-tab-box__2col -resources">
        <div>
          <p>トラウマやPTSDについて、日々、研究が進められています。トラウマとはどういうものか、PTSDはどのようにして発症し、どうして症状が続くのか、より効果的に治療するためにはどのようにしたら良いか、といった疑問をはじめ、正確な理解と支援を考えるうえで必要な問いが立てられ、データや経験から答えが探られいます。<br>
            ここには、そうした科学の試みに係る情報を得られるリンクを示しました。新しい視点を得たり、安全性や効果・限界を知ったうえで治療を選ぶためのヒントとして、ご参考いただけると幸いです。</p>
        </div>
        <img src="<?php echo THEME_DIR_URI; ?>resources/resources-01.webp" alt="">
      </div>
    </article>
  </div>

</div>

<article class="l-base p-abt-trauma">
  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【トラウマやPTSDに関する研究】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td>International Society for Traumatic Stress Studies</td>
        <td>トラウマやPTSDに関する研究知見を紹介しています。</td>
      </tr>
      <tr>
        <td>一般社団法人日本トラウマティック・ストレス学会</td>
        <td>トラウマやPTSDに関する研究知見を紹介しています。</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【CPTに関する研究】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td>CPTのオフィシャルサイト</td>
        <td>CPTに関連する研究論文が一覧できます。</td>
      </tr>
      <tr>
        <td><span class="c-tooltip tippy01">日本での成果（プレスリリース）</span></td>
        <td>私たちの研究チームで取り組んだ臨床試験の成果です。</td>
      </tr>
    </table>
    <script>
      tippy(' .tippy01', {
        content: "ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト",
        placement: 'bottom',
        arrow: false,
        theme: 'white',
      });
    </script>
  </div>

  <div class="p-table-2col" id="ptsd_guidelines">
    <h3 class="p-table-2col__h">【PTSD治療ガイドライン】<br>日本のガイドライン</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td><a href="https://www.jstss.org/docs/2013090600351/" target="_blank" class="u-black-link">PTSDの薬物療法ガイドライン・初期対応マニュアル （JSTSS） <i class="fa-regular fa-window-restore"></i></a></td>
        <td>日本トラウマティック・ストレス学会が2013年に発刊したガイドライン</td>
      </tr>
      <tr>
        <td><a href="https://www.kongoshuppan.co.jp/book/b616260.html" target="_blank" class="u-black-link">日本語版：PTSD治療ガイドライン <i class="fa-regular fa-window-restore"></i></a></td>
        <td>国際トラウマティック・ストレスが発刊したガイドラインの第３版の邦訳</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【PTSD治療ガイドライン】<br>海外のガイドライン</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td><a href="https://istss.org/clinical-resources/trauma-treatment/new-istss-prevention-and-treatment-guidelines/" target="_blank" class="u-black-link">ISTSS：ISTSS Prevention and Treatment Guidelines <i class="fa-regular fa-window-restore"></i></a></td>
        <td>国際トラウマティック・ストレスが発刊したガイドラインの第３版</td>
      </tr>
      <tr>
        <td><a href="https://www.nice.org.uk/guidance/ng116" target="_blank" class="u-black-link">NICE：NICE guideline（Post-traumatic stress disorder） <i class="fa-regular fa-window-restore"></i></a></td>
        <td>イギリスの国立保健医療研究所が発表しているガイドライン</td>
      </tr>
      <tr>
        <td><a href="https://www.phoenixaustralia.org/australian-guidelines-for-ptsd/" target="_blank" class="u-black-link">Phoenix：Australian PTSD Guidelines <i class="fa-regular fa-window-restore"></i></a></td>
        <td>Phoenix Australia（オーストラリアの心的外傷後メンタルヘルスセンター）によるガイドライン</td>
      </tr>
      <tr>
        <td><a href="https://www.ptsd.va.gov/professional/treat/txessentials/cpg_ptsd_management.asp" target="_blank" class="u-black-link">VADoD：VA/DoD 2023 Clinical Practice Guideline for the Management of PTSD <i class="fa-regular fa-window-restore"></i></a></td>
        <td>アメリカの退役軍人局による臨床実践ガイドライン</td>
      </tr>
    </table>
  </div>

</article>

<div class="u-bg-orange-gray p-abt-trauma">

  <div class="l-base">
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">科学的な知見にふれる</h2>
      <div class="p-tab-box__2col -resources">
        <div>
          <p>傷ついたとき、困ったときこそ、一人で抱え込まず、社会の資源・支援を活用することが大切です。今は自分にどんな支援が必要かわからなくても、誰かに・どこかにアクセスすることで、状況をよくするための糸口がみつかるかもしれません。<br>
            ここには、困った時に相談できる場所や、一歩踏み出すためのヒントとなりそうなサイトのリンクを示しました。「今、どうすれば良いんだろう？」と迷ったときに眺めていただき、あなたに役立ちそうな情報を見つけていただけると幸いです。</p>
        </div>
        <img src="<?php echo THEME_DIR_URI; ?>resources/resources-02.webp" alt="">
      </div>
    </article>
  </div>
</div>

<article class="l-base p-abt-trauma" id="in-trouble">
  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【困った時に頼れる場所】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td><a href="" target="_blank" class="u-black-link">片柳さん提供の資源リスト <i class="fas fa-file-pdf"></i></a></td>
        <td>コメントが入りますコメントが入りますコメントが入ります</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【頼れる・役立つ情報が得られるサイト】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名前</th>
        <th>コメント</th>
      </tr>
      <tr>
        <td><a href="https://neuropsy-kurume.jp/archives/766" target="_blank" class="u-black-link">久留米大学 心理教育テキスト <i class="fa-regular fa-window-restore"></i></a></td>
        <td>心理教育テキスト等これまで久留米大学医学部神経精神医学講座関係者が作成した資料を公開しているページ</td>
      </tr>
      <tr>
        <td><a href="https://www.j-hits.org" target="_blank" class="u-black-link">兵庫県こころのケアセンター <i class="fa-regular fa-window-restore"></i></a></td>
        <td>研究や研修、相談・診療など「こころのケア」に関する多様な機能を有する全国初の拠点施設</td>
      </tr>
      <tr>
        <td><a href="https://kidsinfost.net" target="_blank" class="u-black-link">子ども情報ステーション <i class="fa-regular fa-window-restore"></i></a></td>
        <td>精神障がいやこころの不調などをかかえた親と家族、その’子ども’を応援するサイト</td>
      </tr>
      <tr>
        <td><a href="https://ptokyo.org" target="_blank" class="u-black-link">ぷれいす東京 <i class="fa-regular fa-window-restore"></i></a></td>
        <td>HIV/エイズとともに生きる人たちがありのままに生きられる環境（コミュニティ）を創り出すことをめざして活動するNPO法人</td>
      </tr>
      <tr>
        <td><a href="https://futures-japan.jp/about/" target="_blank" class="u-black-link">HIV Futures Japanプロジェクト <i class="fa-regular fa-window-restore"></i></a></td>
        <td>HIV陽性者のための総合情報サイト</td>
      </tr>
      <tr>
        <td><a href="https://ova-japan.org" target="_blank" class="u-black-link">OVA <i class="fa-regular fa-window-restore"></i></a></td>
        <td>「『助けて』と言えない」を解決するNPO</td>
      </tr>
      <tr>
        <td><a href="https://cpc.musashino-u.ac.jp/trauma_support/" target="_blank" class="u-black-link">一緒にトラウマについて知ろう <i class="fa-regular fa-window-restore"></i></a></td>
        <td>武蔵野大学心理臨床センターが運営する、トラウマについての知識と対処法を紹介するサイト</td>
      </tr>
      <tr>
        <td><a href="https://www.gender.go.jp/policy/sokushin/ouen/safe/" target="_blank" class="u-black-link">安全・安心な暮らしをしたい <i class="fa-regular fa-window-restore"></i></a></td>
        <td>男女共同参画局による女性応援ポータルサイト。女性が安心して暮らせる社会の実現をめざし、女性を狙った犯罪や配偶者からのＤＶ、ストーカーの防止、対処策を紹介している。</td>
      </tr>
    </table>
  </div>

</article>
<?php get_footer(); ?>