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
        <li class="active">身体的暴力</li>
        <li>性的暴力</li>
        <li>事故や災害</li>
      </ul>
      <ul class="p-tab-box__tab-list">
        <li class="active">親しい人の死</li>
        <li>自分の周りの人のトラウマ</li>
        <li>戦争</li>
      </ul>
    </div>
    <div class="u-pc">
      <ul class="p-tab-box__tab-list">
        <li class="active">身体的暴力</li>
        <li>性的暴力</li>
        <li>事故や災害</li>
        <li>親しい人の死</li>
        <li>自分の周りの人のトラウマ</li>
        <li>戦争</li>
      </ul>
    </div>

    <section class="p-tab-box__sec">
      <h3 class="c-h2 p-tab-box__h1">身体的暴力</h3>
      <div class="p-img-right-btm-box">
        <div>
          <div class="p-img-right-btm-box__float"><img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.png" alt=""></div>
          暴力を振るわれ、大けがをしたり、危うく死ぬような思いをした体験は、トラウマとして記憶に残ります。暴力は、自分の配偶者や養育者など家庭内で起こることもありますし、他人から殴られたり強盗に遭う体験が突然に起こることもあります。<br>
          調査では、16.5％の人が身体的暴力を経験していました。中でも、自分の養育者から身体的虐待を受けた人や、他の誰かから暴力を振るわれ人が多くいます。
        </div>
      </div>

      <div class="p-tab-box__btn-box">
        <button class="c-btn">クイズに挑戦する　<i class="fa-solid fa-window-restore"></i></button>
      </div>
    </section>

  </section>
</article>
<?php get_footer(); ?>