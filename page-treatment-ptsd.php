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
      <h2 class="c-h2 c-white-box-l__h1">推奨される治療法</h2>
      <p>PTSDに対してどのような治療法が推奨できるかは、いくつかの機関が発行している<a href="<?php echo home_url() . '/resources#ptsd_guidelines' ?>" class="u-orange-marker">「治療ガイドライン」</a> で知ることができます。<br>2025年2月現在では、<b class="u-em-orange-marker">トラウマに焦点を当てた心理療法と薬物療法の両方が、PTSDの治療に有効</b>であることが示されています。心理療法と薬物療法は、併用することもあります。トラウマに焦点を当てた心理療法（CPT、PE、EMDRなど）では、それぞれの治療に特徴的な技法を用いてトラウマとなる出来事の記憶やその意味に焦点を当てていきます。よく効くけれども治療を途中でやめてしまう人の割合が高いなど、課題もあることから、より良い治療法を開発するための<a href="<?php echo home_url() . '/resources#scientific_knowledge' ?>" class="u-orange-marker">研究が続けられています</a>。</p>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base">

  <section class="p-tab-box">
    <div class="u-sp">
      <ul class="p-tab-box__tab-list -fixed-width">
        <li class="active" data-tag="tag01">薬物療法</li>
        <li data-tag="tag02">CPT</li>
        <li data-tag="tag03">PE</li>
      </ul>
      <ul class="p-tab-box__tab-list -fixed-width">
        <li data-tag="tag04">EMDR</li>
        <li data-tag="tag05">その他の治療</li>
      </ul>
    </div>
    <div class="u-pc">
      <ul class="p-tab-box__tab-list -fixed-width">
        <li class="active" data-tag="tag01">薬物療法</li>
        <li data-tag="tag02">CPT</li>
        <li data-tag="tag03">PE</li>
        <li data-tag="tag04">EMDR</li>
        <li data-tag="tag05">その他の治療</li>
      </ul>
    </div>

    <div class="p-tab-box__wrapper">

      <div class="p-tab-box__item active" data-targetTag="tag01">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">PTSDに対する薬物療法</h3>
          <div class="p-img-right-btm-box">
            <div>
              <p>国際トラウマティックストレス学会（ISTSS）のガイドラインでは、<b class="u-em-orange-marker">抗うつ薬の一種である、SSRI（選択的セロトニン再取り込み阻害薬）とSNRI（セロトニン・ノルエピネフリン再取り込み阻害薬）を推奨</b>しています。具体的には、SSRIのセルトラリン、パロキセチン、フルオキセチン、SNRIのベンラファキシンです。このうち、日本でPTSD治療の保険適用となっているのは、セルトラリン、パロキセチンです。<br>薬物療法を受けるには、これらの薬を処方してくれる医療者に会う必要があります。<b class="u-em-orange-marker">かかりつけの医師と相談して、治療をどのように進めていくかを決めます。薬に対する反応（副作用を含む）をモニタリングし、必要であれば服用量を変更するため、 担当の医師の定期的な受診が必要</b>です。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">どのように作用するか</h2>
            <p>PTSDでは、脳がストレスへの反応を調整する働きが変化している可能性が示されています。PTSDを患っている人は、脳内の特定の化学物質（神経伝達物質と呼ばれます）の量が、PTSDでない人とは異なっているようです。SSRIやSNRIは、これらの<b class="u-em-orange-marker">脳内化学物質のバランスを調整することで、PTSDの症状を改善する</b>と考えられています。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">期待される効果</h2>
            <p>ISTSSのガイドラインでは、薬物療法はPTSDの治療として推奨されていますが、心理療法に比べて効果は劣ることが指摘されています。服用を始めて、約4～6週間で良くなってきますが、変化があらわれる期間には個人差があります。また、効果を持続させるためには、薬を飲み続ける必要があります。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">リスクや負担</h2>
            <p>SSRIやSNRIを服用することで、胃のむかつき、発汗、頭痛、めまいなどの副作用が、軽度から中等度の強さで生じる可能性があります。性欲の減退やオーガズムを得ることの困難さなど、性的な副作用がある人もいます。副作用には短期的なものもありますが、薬を服用している限り続くものもあります。</p>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag02">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">CPT：認知処理療法</h3>
          <div class="p-img-right-btm-box">
            <div>
              <p>CPT（Cognitive Processing Therapy）は、Rescik博士らによって開発された、<b class="u-em-orange-marker">認知行動療法の１つ</b>です。PTSD治療に特化したプロトコルで、<b class="u-em-orange-marker">１２セッションで構成</b>されます。<b class="u-em-orange-marker">治療提供者と一対一で行う個人セッションのほか、</b>１、２名の治療提供者とPTSDを患っている人が集まり６～１０名ほどの<b class="u-em-orange-marker">グループで行うこともできます。</b>通常は、１回６０分（個人）から９０分（集団）のセッションを、週に１か２回、行います。<br>CPTではまず、治療の概要や理論を学んだ後、トラウマ体験が生活に与えた影響をふり返ります。次の数セッションで、トラウマについて抱いていた考えを話したり、ワークシートを使った見直しを行いながら、これまでとは異なる視点で考える試みをします。終盤には、トラウマによって影響を受けやすい５つのテーマに焦点を当てて、新たな考えを生み出す力を育みます。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">どのように作用するか</h2>
            <p>トラウマは、自分自身や世界に対する考え方を変えてしまうことがあります。起こったことは自分のせいだと思ったり、世界は危険な場所だと思ったりするかもしれません。このような考え方は、PTSDから抜け出せず、以前楽しめていたことを逃してしまう原因になります。<br>CPTでは、<b class="u-em-orange-marker">このような考えに対処する新しい方法を学びます。</b>自分の「考えていること」と「実際に起こったこと」を見比べながら、<b class="u-em-orange-marker">これまでとは異なる視点で出来事を捉えることで、自然な感情の働きを取り戻し、自分自身や世界に対する見方をより現実的で実際的なものにしていきます。</b></p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">期待される効果</h2>
            <p>国際トラウマティックストレス学会のガイドラインをはじめとして、複数の治療ガイドラインで、PTSD治療の第一選択の一つに挙げられています。 CPTでは、トラウマ体験によって動揺した「考え」に焦点を当て、PTSDからの回復に役立つ新たな見方を身につけます。治療提供者との話し合いや自ら行う考え直しのワークを通じて、怒りや悲しみ、罪悪感などの感情に対処できるようになります。<br>
              原則として１２回のセッションで構成されますが、数回のセッションで気分が良くなる人もいます。CPTの効果は、最終セッションの後も長く続くことがよくあります。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">リスクや負担</h2>
            <p>トラウマに関連した記憶や信念について話したり書いたりするときに、軽度から中等度の不快感を経験します。このような感覚が生じるのは通常は短い期間であり、CPTを続けているうちに気分がよくなる傾向にあります。<br>
              セッションでは毎回、自宅で行う課題が出され、それに取り組む必要があります。課題の内容は、体験した出来事があなたにどんな影響を与えたかを振り返るものや、治療の中で学んだスキルを練習するものです。</p>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag03">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">PE：持続エクスポージャー療法</h3>
          <div class="p-img-right-btm-box">
            <div>
              <p>PE（Prolonged Exposure）は、Foa博士によって開発された、<b class="u-em-orange-marker">PTSDに特化した認知行動療法の１つ</b>です。通常は週に１回、<b class="u-em-orange-marker">計８～１５回のセッション</b>を行います。<b class="u-em-orange-marker">１回１時間半のセッションを、治療提供者と一対一で行います。</b><br>
                PEではまず、治療の概要を説明し、あなたの過去の経験について詳しく知ることから始めます。また、不安に対処するための呼吸法を学びます。続いて、治療提供者と一緒に、トラウマ以来遠ざかっている人や場所、活動等のリストを作ります。リストをもとに、避けてきた状況や対象にくり返し接したり、トラウマの詳細を治療提供者と話し合ったりします。そうすることで、次第に不快感が和らぎ、トラウマに関わるものを避ける必要がなくなっていきます。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">どのように作用するか</h2>
            <p>PTSDを患った人が、トラウマを思い出させるものを避けようとすることはよくあります。これは、その場では気持ちを楽にするのに役立ちますが、長期的には、PTSDの症状を長引かせてしまいます。<br><b class="u-em-orange-marker">PEは、あなたが恐怖に直面するのを助ける</b>ことによって機能します。<b class="u-em-orange-marker">トラウマの詳細を話したり、避けてきた安全な状況に直面したりすることに慣れることで、PTSDの症状が軽減</b>し、自分の人生をよりよくコントロールできるようになります。
            </p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">期待される効果</h2>
            <p>世界の多くのガイドラインで、PTSDの治療の第一選択肢として挙げられます。トラウマについて話すことで、恐怖、怒り、悲しみなどの感情を和らげることができます。治療の中でトラウマの体験と向き合うことで、治療外の時間に嫌な記憶が割って入ってくることが少なくなります。<br>数回のセッションで、気分が改善する人もいます。PEの効果は、最終セッションの後も長く続くことがよくあります。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">リスクや負担</h2>
            <p>新しい活動に参加するときや、トラウマに関連した記憶について話すときに、軽度から中等度の不快感を経験します。このような感覚が生じるのは通常は短い期間であり、PEを続けているうちに気分がよくなる傾向にあります。<br>治療中は、自宅で行う課題が出され、それに取り組む必要があります。課題の内容は、セッション中でトラウマについて話したものを録音し、それを自宅で聞くことや、トラウマ体験以来避けてきた活動に取り組むことなどです。</p>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag04">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">EMDR：眼球運動による脱感作と再処理法</h3>
          <div class="p-img-right-btm-box">
            <div>
              <p>EMDR（Eye Movement Desensitization and Reprocessing）は、Shapiro博士によって開発された、PTSDの心理療法です。 <b class="u-em-orange-marker">治療提供者と一対一で行う個人療法で、 週１回、５０～９０分のセッションを約１～３ヶ月続けます。</b><br>EMDRではまず、トラウマに対する身体的・感情的反応について学びます。治療に取り組む準備として、新しい対処法を学んだ後、治療の中で焦点を当てる記憶を特定します。その記憶を心に留めながら、苦痛が和らぐまで、前後の動きや音（治療提供者が動かす指、点滅する光、片耳ずつ鳴る音など）にも注意を向け、その体験を振り返ります。最終的には、トラウマの記憶を心に留めながら、肯定的な考えや感情に集中できるようにしていきます。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">どのように作用するか</h2>
            <p>トラウマの後、PTSDの人はしばしば自分の身に起こったことの意味を理解するのに苦労します。EMDRでは、<b class="u-em-orange-marker">トラウマの記憶を思い浮かべながら、前後の動きや音に注意を払うことで、その記憶を経験する方法に変化を起こします。</b>効き目を生み出すメカニズムは十分には明らかになっていませんが、EMDRがトラウマに関連する動揺した記憶、思考、感情を処理するのに役立ち、PTSDの症状を軽快させることが知られています。</p>
          </div>

          <div class="p-ttl-txt-box">
            <div>
              <h2 class="c-h3 p-tab-box__h2">期待される効果</h2>
              <p>世界の多くのガイドラインで、PTSDの治療の第一選択肢として挙げられています。<br>多くの人は数回のセッションで症状の改善に気づきます。EMDRの効果は、最終セッションの後も長く続くことが知られています。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">リスクや負担</h2>
            <p>トラウマに関連した記憶や考えに焦点を当てるとき、不快感を感じることがあります。このような感覚が生じるのは通常は短い時間であり、EMDRを続けているうちに気分がよくなる傾向にあります。<br>
              PTSDに対する他の心理療法のような自宅で取り組む課題はなく、短期的な治療であるため、治療を受ける側にとっての負担は少なめです。</p>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag05">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">その他の治療</h3>
          <div class="p-img-right-btm-box">
            <div>
              <p>PTSDの治療法には他にも多くの種類があり、その中には、PTSDに効果があるかどうかを確かめるための研究が継続して行われているものがいくつもあります。最新の情報を知りたい場合は、新しく発表される論文等の情報を集めるのが役立ちますし、証拠の蓄積に基づき各治療法がどれくらい推奨されているのかを知りたい場合は、学会等が発行するガイドラインが役立ちます。<br>ここでは、先に挙げた４つ以外にも、よく知られた方法をいくつか挙げ、概略をお示しします。</p>
            </div>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">TF-CBT　トラウマフォーカスト認知行動療法</h2>
            <p>TF-CBT（ (Trauma-Focused Cognitive Behavioral Therapy）は、Deblinger博士らにより開発された、<b class="u-em-orange-marker">３〜１８歳の子どものトラウマに焦点化した認知行動療法</b>です。いくつかの治療ガイドラインにおいて、子どものトラウマ治療の第一選択として推奨されているプログラムです。週１回、１回は６０-９０分をかけて行われ、８〜１６週で構成されます。子どもと養育者が、トラウマ体験の記憶を適切に処理し、トラウマに関連する考えや感情、不適応的な行動を、うまく調整できるようになることを目指します。<b class="u-em-orange-marker">子どもだけで行うセッション、保護者だけで行うセッション、親子合同のセッションから構成</b>され、その中で、<b class="u-em-orange-marker">感情調整や関わりのスキルをはじめとした、さまざまな知識とスキルを身につけます。</b>は、子どものPTSD症状だけでなく、トラウマに関連したうつや不安症状、行動上の問題、恥や罪悪感といった感情、社会生活能力などの回復が期待できるほか、養育者の抑うつやPTSD症状、養育能力や子どものサポート機能の向上にも効果を発揮します。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">STAIR ナラティブセラピー</h2>
            <p>STAIR（Skills Training in Affective and Interpersonal Regulation）Narrative Therapyは、<b class="u-em-orange-marker">複雑性PTSDに対する効果が期待される心理療法</b>です。複雑性PTSDは、持続的な虐待やドメスティック・バイオレンスなどのトラウマ体験をきっかけとして発症し、PTSDの主要な症状（侵入症状や、覚醒度と反応性の著しい変化など）に加えて、感情の調整や対人関係に困難があるなどの症状を伴うことを特徴とします。通常のPTSDに比べて、日常生活や社会生活の支障がより大きく、併存疾患も多いことがわかっています。Cloitre博士らが開発したSTAIR ナラティブセラピーは、現在の感情調整や対人関係の困難さに対処するスキルトレーニング（Skills Training in Affective and Interpersonal Regulation; STAIR）とトラウマに焦点を当てた治療（Narrative Therapy）を組み合わせた治療法で、複数のランダム化比較試験によって安全性と有効性が報告されています。<br>複雑性PTSDでは、PTSDの主症状が改善しても社会生活を送る上での機能障害が残ることが多いことから、STAIRナラティブセラピーでは、<b class="u-em-orange-marker">PTSD症状軽減に加え、感情調節や対人関係スキルを培うことによって、社会的な機能を改善</b>することを目指します。</p>
          </div>

          <div class="p-ttl-txt-box">
            <h2 class="p-ttl-txt-box__ttl">WET：筆記エクスポージャー療法</h2>
            <p>WET（Written Exposure Therapy) は、Sloan博士らによって開発された、筆記を中心としたPTSDのための心理療法です。<b class="u-em-orange-marker">トラウマ体験にまつわり考えたことや感じたことを文章にすることと、文章を書くことについて治療提供者と話し合うことで、PTSDの症状の緩和を図ります。WETでは、通常は週に１回、各回５０分のセッションを合計５回行います。</b>その中で、自分のトラウマについて書く課題に取り組みます。最初のセッションでは、PTSDの症状やトラウマに対する一般的な反応について学びます。その後、治療提供者が筆記の方法を伝え、書きながらトラウマ体験について確認します。残りの回のセッションでも、筆記を行い、それが完成したら、治療提供者と話をします。そうすることで、<b class="u-em-orange-marker">出来事に関する考えや感情の扱い方が身につき、PTSDの症状を軽減するのに役立つ新しい視点を見つけられるようになります。</b><br>現在のところ、WETに関する研究は、CPTやPE、EMDRなど他のトラウマに焦点を当てた心理療法を支持する研究ほど多くはありませんが、効果を検証した研究ではPTSD症状の軽減に効果的であることが示されています。また、症状の改善に要するセッション数が他の治療法よりも少なく、治療を最後までやり遂げられる人の割合が高いことが特徴です。</p>
          </div>

        </section>
      </div>

    </div>
  </section>
</article>

<?php get_footer(); ?>