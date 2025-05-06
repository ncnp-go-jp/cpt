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
          <p>トラウマやPTSDについて、日々、研究が進められています。トラウマとはどういうものか、PTSDはどのようにして発症し、どうして症状が続くのか、より効果的に治療するためにはどのようにしたら良いか、といった疑問をはじめ、正確な理解と支援を考えるうえで必要な問いが立てられ、データや経験から答えが探られています。<br>ここには、そうした科学の試みについて情報を得られるリンクを示しました。新しい視点を得たり、安全性や効果、限界を知ったうえで治療を選ぶためのヒントとして、お役立ていただけると幸いです。</p>
        </div>
        <img src="<?php echo THEME_DIR_URI; ?>resources/resources-01.webp" alt="">
      </div>
    </article>
  </div>

</div>

<article class="l-base p-abt-research">
  <div class="p-table-2col" id="trauma_guidelines">
    <h3 class="p-table-2col__h">【トラウマやPTSDに関する研究】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
      </tr>
      <tr>
        <td>
          <a href="https://istss.org/" target="_blank" class="u-black-link">International Society for Traumatic Stress Studies <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>トラウマやPTSDに関する研究知見を紹介しています。</td>
      </tr>
      <tr>
        <td>
          <a href="https://www.jstss.org/categories/bunya/ptsd/dissertation/" target="_blank" class="u-black-link">一般社団法人日本トラウマティック・ストレス学会 <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>トラウマやPTSDに関する研究知見を紹介しています。</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col" id="trauma_guidelines">
    <h3 class="p-table-2col__h">【国立精神・神経医療研究センター<br class="u-sp">での取り組み】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
      </tr>
      <tr>
        <td>
          <a href="https://www.ncnp.go.jp/nimh/behavior/" target="_blank" class="u-black-link">行動医学研究部 <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>PTSDの病態研究や治療研究に取り組んでいます。</td>
      </tr>
      <tr>
        <td>
          <a href="https://cbt.ncnp.go.jp/" target="_blank" class="u-black-link">認知行動療法センター <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>認知行動療法の研究や実施者の育成を行っています。</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col" id="cpt_guidelines">
    <h3 class="p-table-2col__h">【CPTに関する研究】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
      </tr>
      <tr>
        <td>
          <a href="https://cptforptsd.com/cpt-resources/" target="_blank" class="u-black-link">CPTのオフィシャルサイト <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>CPTに関連する研究論文が一覧できます。</td>
      </tr>
      <tr>
        <td><span class="c-tooltip tippy01">日本での成果</span><br>
          <a href="https://www.ncnp.go.jp/topics/2023/20230105p.html" target="_blank" class="u-black-link ">パイロット試験 <i class="fa-regular fa-window-restore"></i></a>・
          <a href="https://www.ncnp.go.jp/topics/detail.php?@uid=3jF5q0KbgWiZmKqt" target="_blank" class="u-black-link ">無作為割付試験 <i class="fa-regular fa-window-restore"></i></a>
        </td>
        <td>私たちの研究チームで取り組んだ臨床試験の成果です。</td>
      </tr>




    </table>
    <script>
      tippy(' .tippy01', {
        content: '2025-02-06<br>Masaya Ito, Akiko Katayanagi, Mitsuhiro Miyamae, Tamae Inomata, Yuriko Takagishi, Akiko Kikuchi, Miyuki Makino, Yoko Matsuda, Keiko Yamaguchi, Chiaki Nakayama, Kyosuke Kaneko, Chika Yokoyama, Fumi Imamura, Ayako Kanie, Mari Oba, Satoshi Tanaka, Satomi Nakajima, Tomomi Narisawa, Kyoko Akutsu, Rieko Konno, Yuki Oe, Naotsugu Hirabayashi, Toshi A. Furukawa, Patricia A. Resick and Masaru Horikoshi：Cognitive Processing Therapy for Posttraumatic Stress Disorder in Japan: A Randomized Controlled Trial. JAMA Network Open.<br><br>2022-12-14<br>Yuriko Takagishi, Masaya Ito, Ayako Kanie, Nobuaki Morita, Miyuki Makino, Akiko Katayanagi, Tamae Sato, Fumi Imamura, Satomi Nakajima, Yuki Oe, Masami Kashimura, Akiko Kikuchi, Tomomi Narisawa, Masaru Horikoshi：Feasibility, acceptability, and preliminary efficacy of cognitive processing therapy in Japanese patients with posttraumatic stress disorder.　Journal of Traumatic Stress<br><br>2021-01-24<br>片柳章子， 中島聡美， 伊藤正哉， 蟹江絢子， 堀越勝: 性暴力被害者への認知処理療法適用による心的外傷後ストレス障害の回復過程.認知療法研究<br><br>2017-01-02<br>Masaya Ito,Masaru Hrikoshi,Akiko Katayanagi,Mitsuhiro Miyamae,Yriko Takagishi,Yoshitake Takebayashi,Ayako Kanie,Naotsugu Hirabayashi: Study protocol for a randomised controlledtrial of cognitive processing therapy for post - traumatic stress disorder among Japanese patients: the Safety,Power,Intimacy,Esteem,Trust(SPINET) study,BMJ Open,2017.',
        placement: 'bottom',
        arrow: false,
        theme: 'white',
        allowHTML: true,
      });
    </script>
  </div>

  <div class="p-table-2col" id="ptsd_guidelines">
    <h3 class="p-table-2col__h">【PTSD治療ガイドライン】<br>日本のガイドライン</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
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

  <div class="p-table-2col" id="ptsd_guidelines-en">
    <h3 class="p-table-2col__h">【PTSD治療ガイドライン】<br>海外のガイドライン</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
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
      <h2 class="c-h2 c-white-box-l__h1">社会の中にあるさまざまな資源と出会う</h2>
      <div class="p-tab-box__2col -resources">
        <div>
          <p><b class="u-em-orange-marker">傷ついたとき、困ったときこそ、一人で抱え込まず、社会の資源・支援を活用することが大切</b>です。今は自分にどんな支援が必要かわからなくても、誰かに・どこかにアクセスすることで、状況をよくするための糸口がみつかるかもしれません。<br>
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
        <th>名称</th>
        <th>説明</th>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-00.pdf" target="_blank" class="u-black-link">社会的サポートリスト（全体） <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会の中にあるさまざまなサポートのうち、無料相談を受けることができる機関がリストされています。</td>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-01.pdf" target="_blank" class="u-black-link">├ 電話・SNS相談 <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会的サポートリストから、電話やSNSで相談できる支援機関と、インターネットやSNSに関する相談先を抜粋しています。</td>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-02.pdf" target="_blank" class="u-black-link">├ 被害者支援 <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会的サポートリストから、被害者支援センターとワンストップ支援センターを抜粋しています。</td>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-03.pdf" target="_blank" class="u-black-link">├ 配偶者・身近な人からの暴力等の被害の相談 <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会的サポートリストから、配偶者や身近な人からの暴力被害者への支援を行っている施設や、女性センターを抜粋しています。</td>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-04.pdf" target="_blank" class="u-black-link">├ 児童に係る相談 <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会的サポートリストから、児童相談所と、児童虐待などに関する相談窓口を抜粋しています。</td>
      </tr>
      <tr>
        <td><a href="<?php echo THEME_DIR_URI; ?>resources/resources-05.pdf" target="_blank" class="u-black-link">├ 精神保健福祉法センター／物質乱用の相談 <i class="fa-regular fa-file-pdf"></i></a></td>
        <td>社会的サポートリストから、精神保健福祉センターと、物質乱用の電話相談、自助グループを抜粋しています。</td>
      </tr>
    </table>
  </div>

  <div class="p-table-2col">
    <h3 class="p-table-2col__h">【頼れる・役立つ情報が得られるサイト】</h3>
    <table class="p-table-2col__table">
      <tr>
        <th>名称</th>
        <th>説明</th>
      </tr>
      <tr>
        <td><a href="https://neuropsy-kurume.jp/production" target="_blank" class="u-black-link">久留米大学 心理教育テキスト <i class="fa-regular fa-window-restore"></i></a></td>
        <td>心理教育テキスト等これまで久留米大学医学部神経精神医学講座関係者が作成した資料を公開しているページ</td>
      </tr>
      <tr>
        <td><a href="https://www.j-hits.org" target="_blank" class="u-black-link">兵庫県こころのケアセンター <i class="fa-regular fa-window-restore"></i></a></td>
        <td>研究や研修、相談・診療など「こころのケア」に関する多様な機能を有する全国初の拠点施設</td>
      </tr>
      <tr>
        <td><a href="https://kidsinfost.net" target="_blank" class="u-black-link">子ども情報ステーション <i class="fa-regular fa-window-restore"></i></a></td>
        <td>精神障がいやこころの不調などをかかえた親と家族、その'子ども’を応援するサイト</td>
      </tr>
      <!-- <tr>
        <td><a href="https://ptokyo.org" target="_blank" class="u-black-link">ぷれいす東京 <i class="fa-regular fa-window-restore"></i></a></td>
        <td>HIV/エイズとともに生きる人たちがありのままに生きられる環境（コミュニティ）を創り出すことをめざして活動するNPO法人</td>
      </tr> -->
      <tr>
        <td><a href="https://futures-japan.jp/about/" target="_blank" class="u-black-link">HIV Futures Japanプロジェクト <i class="fa-regular fa-window-restore"></i></a></td>
        <td>HIV陽性者に役立つ情報を集約したポータルサイト。同団体が３～５年に１回実施しているHIV陽性者対象大規模調査の結果もリンクさせている</td>
      </tr>
      <tr>
        <td><a href="https://ova-japan.org" target="_blank" class="u-black-link">OVA <i class="fa-regular fa-window-restore"></i></a></td>
        <td>「『助けて』が受け止められる社会をつくる」ことをビジョンとし、テクノロジーやマーケティングを用いて、困っている人に必要な情報と支援を届けるNPO法人</td>
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