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
      <h2 class="c-h2 c-white-box-l__h1">トラウマとは</h2>
      <p>個人で対処できないほどの圧倒されるような体験によってもたらされる心の傷を「トラウマ」といいます。<br>
        自分の命が脅かされるような危険な体験をしたり、深刻な怪我をするなど、身体が危険にさられることは、トラウマとなり得ます。また、同意なく性的な行為をされることや暴力を振るわれることなど、心身ともに衝撃を受けるような体験も、トラウマとなり得ます。<br>
        広い意味では、いじめやハラスメントを受けた体験も指し、ストレスによって生じる傷つき全般をトラウマに含めることもあります。一方で、医学分野などでは、より狭い意味で使われることが多いです。例えば、米国精神医学会診断統計マニュアル第5版（DSM-5）の基準によれば、心的外傷（＝トラウマ）を、「実際にまたは危うく死ぬ、深刻な怪我を負う、性的暴力など、精神的衝撃を受ける体験」と定義しています。</p>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base">
  <h2 class="c-h2 p-abt-trauma__h1">どれくらいの人がトラウマを体験するか</h2>
  <div class="p-abt-trauma__txt-box">
    <p>多くの人は、人生のある時点でトラウマとなる出来事を経験します。おそらく、生きていて一度も傷ついた経験のない人はまれでしょうし、かなりの割合の人が、狭い意味でのトラウマも体験しています。<br>
      1,682名に対する面接調査の結果をまとめたKawakami（2014）<i class="far fa-question-circle u-dark-orange"></i>では、<b>日本では約60％の人が、人生において何らかのトラウマ体験をしている</b>ことが明らかになりました。もっとも多くの人が経験した出来事は、身近に起きた悲惨な出来事を見たり聞いたりすること、次いで、自分にとって大事な人が予期せず亡くなったことでした。そして、トラウマとなる出来事を経験する回数の平均は、3.5回でした。<br>
      トラウマとなる出来事には、さまざまな種類があります。以下に、それぞれの出来事をどれくらいの人が体験しているか、Kawakami（2014）をもとに紹介します。</p>
  </div>

  <section class="p-tab-box">
    <div class="u-sp">
      <ul class="p-tab-box__tab-list">
        <li class="active" data-tag="tag01">身体的暴力</li>
        <li data-tag="tag02">性的暴力</li>
        <li data-tag="tag03">事故や災害</li>
      </ul>
      <ul class="p-tab-box__tab-list">
        <li data-tag="tag04">親しい人の死</li>
        <li data-tag="tag05">自分の周りの人のトラウマ</li>
        <li data-tag="tag06">戦争</li>
      </ul>
    </div>
    <div class="u-pc">
      <ul class="p-tab-box__tab-list">
        <li class="active" data-tag="tag01">身体的暴力</li>
        <li data-tag="tag02">性的暴力</li>
        <li data-tag="tag03">事故や災害</li>
        <li data-tag="tag04">親しい人の死</li>
        <li data-tag="tag05">自分の周りの人のトラウマ</li>
        <li data-tag="tag06">戦争</li>
      </ul>
    </div>

    <div class="p-tab-box__wrapper">

      <div class="p-tab-box__item active" data-targetTag="tag01">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">身体的暴力</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                暴力を振るわれ、大けがをしたり、危うく死ぬような思いをした体験は、トラウマとして記憶に残ります。暴力は、自分の配偶者や養育者など家庭内で起こることもありますし、他人から殴られたり強盗に遭う体験が突然に起こることもあります。<br>
                調査では、16.5％の人が身体的暴力を経験していました。中でも、自分の養育者から身体的虐待を受けた人や、他の誰かから暴力を振るわれ人が多くいます。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag02">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">性的暴力</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                物理的に傷がつくわけではなくても、自分の境界線が破られ、性的な安全が損なわれる出来事は、トラウマになり得ます。レイプや痴漢など、自分の意思とは関わりなく性的なことを強要されることで、尊厳が損なわれたように感じるかもしれません。<br>
                調査では、4.3％の人が性的暴力を経験していました。中でも、ストーカー被害の経験率が高かったです。ただし、若年層を対象としたより最近の調査では、約4人に1人が何らかの性暴力被害にあったことがあ ると回答するなど、調査によってちがいがあります。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag03">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">事故や災害</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                このカテゴリには、自動車事故やその他の事故、災害や人災のほか、生命を脅かすような病気も含まれます。突然のことにより、これまでの生活がガラりと変わってしまうような経験も、トラウマになり得るものです。<br>
                調査では、22.8％の人が偶発的なトラウマを経験していました。中でも、生命を脅かすような病気、自動車事故、自然災害を経験した人が多くいます。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
        </section class="p-tab-box__inner">
      </div>

      <div class="p-tab-box__item" data-targetTag="tag04">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">親しい人の死</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                事故や災害などで、自分の愛する人が突然に亡くなってしまうことも、トラウマになり得ます。人は誰でもいずれは亡くなるものですが、心の準備もなく急に知らされる不幸は、心に深い傷を残すことがあります。<br>
                調査では、23.7％の人が親しい人を予期せぬ形で亡くした経験があると回答しました。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag05">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">自分の周りの人のトラウマ</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                家庭内で暴力が振るわれている場面を目撃することや、誰かが重傷を負ったり（暴力的な方法で）亡くなる姿を見ることも、トラウマになり得ます。自分自身に起きたことだけでなく、自分の大事な人にトラウマとなる出来事が起きることや、自分の子どもが深刻な病気になることを含め、身の回りで起こることで心が深く傷つくこともあるのです。<br>
                調査では、30.2％の人が自分の周りの人に起こったトラウマを見たり聞いたりした経験があります。とりわけ、誰かが深刻な怪我をしたり亡くなったりした場面に居合わせたり、家庭内で暴力を伴う争いを見た経験をした人が多くいます。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag06">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">戦争</h3>
          <div class="p-img-right-btm-box">
            <div class="p-img-right-btm-box__inner">
              <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt="" class="p-img-right-btm-box__img">
              <p>
                自分が戦場に出て戦うことだけでなく、戦争がおきている地域に暮らしたり、捕虜になる経験は、心に大きな傷を残す可能性があります。非常事態に身を置く恐怖や緊迫した日々は、安全にまつわる感覚を覆し、たとえ平穏な日々に戻れたとしても、後々まで影響を及ぼすことがあります。<br>
                調査では、8.7％の人が戦争に関連したトラウマを経験していました。中でも、戦争が行われている地域に住んでいたり、実際に自分が戦地に赴いた経験を持つ人が多かったです。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btn-box">
            <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
          </div>
      </div>
  </section>
  </div>

  </section>
</article>
<?php get_footer(); ?>