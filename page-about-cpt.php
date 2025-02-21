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
      <h2 class="c-h2 c-white-box-l__h1">CPT｜認知処理療法<br class="u-sp">（Cognitive Processing Therapy）</h2>
      <p>CPTとは、非常に深刻な出来事の後に、こころの傷を受けることによって生じるトラウマの症状、そしてそれに伴って生じてくる抑うつ状態や強い罪悪感に対して効果的な心理療法です。毎週、12回の個人セッション（50分）か、集団セッション（90分）で実施します。<br>
        これまで、性暴力被害者、子どもの頃からの虐待、戦争体験などによる心的外傷後ストレス障害（PTSD）を対象に、その有効性が報告されてきました。その有効性は、米国、オーストラリア、ドイツ、コンゴなど、世界の多くの地域で確認されています。<br>
        CPTはアメリカのリーシック博士、マンソン博士、チャード博士という、3人の女性の臨床心理学者によって開発されました。</p>
      <picture>
        <source media="(min-width: 834px)" srcset="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-04-pc.webp">
        <img src="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-04-sp.webp" alt="">
      </picture>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base">

  <h2 class="c-h2 p-abt-trauma__h1">CPTの特徴</h2>
  <p>CPTは、トラウマとなる出来事からの回復が困難である理由や、PTSDの症状が日常生活にどのような影響を与えるかを理解する方法を提供します。トラウマとなる経験が思考や信念をどのように変化させるか、そして思考が現在の感情や行動にどのように影響を与えるかを特定することに焦点を当てます。<br>
    PTSDの症状やその他の問題からの回復を妨げ、個人が「行き詰まり」状態に陥る可能性のある考えの傾向に対処することで、トラウマの記憶に関する苦痛を軽減し、日常生活の改善を目指します。</p>
  <picture>
    <source media="(min-width: 834px)" srcset="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-05-pc.webp">
    <img src="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-05-sp.webp" alt="">
  </picture>
  <p class="c-note u-tar">CPTの公式ウェブサイト（https://cptforptsd.com）をもとに作成</p>

</article>

<div class="u-bg-orange-gray">
  <article class="p-abt-trauma l-base">

    <h2 class="c-h2 p-abt-trauma__h1">CPTのバリエーション</h2>
    <div class="p-abt-trauma__txt-box">
      <p>個人での12回のセッションを基本とするCPTですが、PTSDを抱えた方のニーズに応えるため、さまざまな形のCPTが開発されてきました。例えば、グループで行うCPTもあり、そこでは、参加者は「体験したトラウマの詳細はセッション中は話さない」というルールの下、安全な環境で互いに学び合うことができます。短期間に集中的に進める方法や、回数を調整して進めるなど、治療により参加しやすく、効果を発揮しやすい方法も模索されています（→詳しく知りたい方は、<a href="" target="_blank" class="u-orange-marker">エビデンス</a>へ）<br>
        日本では、次の３つの形のマニュアルが作られ、研究が進められています。</p>
    </div>

    <section class="p-tab-box u-bg-white">
      <ul class="p-tab-box__tab-list -fixed-width u-bg-orange-gray">
        <li class="active" data-tag="tag01">CAYAP</li>
        <li data-tag="tag02">CPT-AUD</li>
        <li data-tag="tag03">CPT-Group</li>
      </ul>

      <div class="p-tab-box__wrapper">

        <div class="p-tab-box__item active" data-targetTag="tag01">
          <section class="p-tab-box__inner">
            <h3 class="c-h2 p-tab-box__h1">CAYAP｜PTSD関連の臨床状態<br class="u-sp">にある青年へのCPTの適用</h3>
            <div class="p-tab-box__2col">
              <div>
                <p>つらい出来事を体験した思春期から青年期（13〜25歳）の方を対象にしたトラウマから回復するための心理療法です。<br>
                  思春期・青年期特有のトラウマによる悩みにも取り組むことができるよう、基本のCPTに、情動コントロールや安全のための対処スキルの学習、安心できる環境構築のために養育者面接を加えて実施します。</p>
              </div>
              <img src="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-01.webp" alt="">
            </div>
            <div class="p-tab-box__btn-box">
              <a href="" target="_blank" class="c-btn">関連サイトへ　<i class="fa-solid fa-window-restore"></i></a>
            </div>
          </section>
        </div>

        <div class="p-tab-box__item" data-targetTag="tag02">
          <section class="p-tab-box__inner">
            <h3 class="c-h2 p-tab-box__h1">CPT-AUD｜アルコール使用症を<br class="u-sp">併発するPTSDへのCPTの適用</h3>
            <div class="p-tab-box__2col">
              <div>
                <p>アルコール使用症（Alcohol Use Disorder：AUD）は、PTSDを患う人が同時に抱えやすい問題の一つです。AUDがあることで、PTSDの治療も難航しやすいことが知られています。<br>
                  一部の人は、PTSDのつらい症状を和らげるためにお酒を飲むようです。一部の研究では、CPTに取り組み、PTSDの症状が改善することで、AUDの症状も緩和することが報告されています。</p>
              </div>
              <img src="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-02.webp" alt="">
            </div>
            <div class="p-tab-box__btn-box">
              <a href="" target="_blank" class="c-btn">関連サイトへ　<i class="fa-solid fa-window-restore"></i></a>
            </div>
          </section>
        </div>

        <div class="p-tab-box__item" data-targetTag="tag03">
          <section class="p-tab-box__inner">
            <h3 class="c-h2 p-tab-box__h1">集団版CPT｜仲間とともに<br class="u-sp">取り組むCPT</h3>
            <div class="p-tab-box__2col">
              <div>
                <p>CPTは、数名を対象としたグループでも実施することができます。治療全体の流れは個人療法と同じですが、１回のセッションは90分であること、グループの中ではトラウマ体験の詳細は話さないといった点が異なります。起こった出来事の詳細を治療担当者と話し合う必要がある場合は、個人のセッションと組み合わせて行う場合があります。</p>
              </div>
              <img src="<?php echo THEME_DIR_URI; ?>treatment/about-cpt-03.webp" alt="">
            </div>
            <div class="p-tab-box__btn-box">
              <a href="" target="_blank" class="c-btn">関連サイトへ　<i class="fa-solid fa-window-restore"></i></a>
            </div>
          </section>
        </div>

      </div>
    </section>

    <div class="p-ttl-txt-box">
      <h2 class="p-ttl-txt-box__ttl">実施者になるには</h2>
      <p>CPTが開発された米国では、CPTの実施者になるためのステップが確立され、<a href="" target="_blank" class="u-orange-marker">実施者の登録制度</a>も整えられています。<br>
        日本においては、現在、研修や実施者養成の制度を作っている最中です。CPTの実践に関心をお持ちの援助専門職の方は、お知らせから研修情報をご確認いただくとともに、<a href="" target="_blank" class="u-orange-marker">会員登録</a>を行い当サイトでご提供するマテリアルへのリーチをご検討ください。</p>
    </div>

    <div class="p-ttl-txt-box">
      <h2 class="p-ttl-txt-box__ttl">治療を受けた人の声</h2>
      <p>私たちCPTの研究チームでこれまでに実施した研究に参加された方々にご協力いただき、治療を受けた体験を綴っていただきました。CPTに関心を持たれた方、治療を受けてみようか迷っている方が、CPTに取り組む体験をイメージする一助としていただければ幸いです。</p>
      <div class="p-ttl-txt-box__btn-box">
        <a href="../voice" class="c-btn">治療を受けた人の声を見る　<i class="fas fa-angle-right"></i></a>
      </div>
    </div>

  </article>
</div>

<?php get_footer(); ?>