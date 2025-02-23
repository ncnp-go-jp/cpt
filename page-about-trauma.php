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
      <p><b class="u-em-orange-marker">個人で対処できないほどの圧倒されるような体験によってもたらされる心の傷を「トラウマ」といいます。</b><br>
        自分の命が脅かされるような危険な体験をしたり、深刻な怪我をするなど、身体が危険にさられることは、トラウマとなり得ます。また、同意なく性的な行為をされることや暴力を振るわれることなど、心身ともに衝撃を受けるような体験も、トラウマとなり得ます。<br>
        広い意味では、いじめやハラスメントを受けた体験も指し、ストレスによって生じる傷つき全般をトラウマに含めることもあります。一方で、<b class="u-em-orange-marker">医学分野などでは、より狭い意味で使われることが多い</b>です。例えば、米国精神医学会診断統計マニュアル第5版（DSM-5）の基準によれば、心的外傷（＝トラウマ）を、<b class="u-em-orange-marker">「実際にまたは危うく死ぬ、深刻な怪我を負う、性的暴力など、精神的衝撃を受ける体験」と定義しています。</b></p>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base">
  <h2 class="c-h2 p-abt-trauma__h1">どれくらいの人がトラウマを体験するか</h2>
  <div class="p-abt-trauma__txt-box">
    <p>多くの人は、人生のある時点でトラウマとなる出来事を経験します。おそらく、生きていて一度も傷ついた経験のない人はまれでしょうし、かなりの割合の人が、狭い意味でのトラウマも体験しています。<br>
      1,682名に対する面接調査の結果をまとめた<span class="c-tooltip tippy01">Kawakami（2014）</span>（<a href="https://doi.org/10.1016/j.jpsychires.2014.01.015" target="_blank" class="u-black-link ">参照 <i class="fa-regular fa-window-restore"></i></a>）では、<b class="u-em-orange-marker">日本では約60％の人が、人生において何らかのトラウマ体験をしている</b>ことが明らかになりました。もっとも多くの人が経験した出来事は、身近に起きた悲惨な出来事を見たり聞いたりすること、次いで、自分にとって大事な人が予期せず亡くなったことでした。そして、<b class="u-em-orange-marker">トラウマとなる出来事を経験する回数の平均は、3.5回</b>でした。<br>
      トラウマとなる出来事には、さまざまな種類があります。以下に、それぞれの出来事をどれくらいの人が体験しているか、Kawakami（2014）をもとに紹介します。</p>
  </div>
  <script>
    tippy('.tippy01', {
      content: `Kawakami, N., Tsuchiya, M., Umeda, M., Koenen, K. C., Kessler, R. C., & World Mental Health Survey Japan (2014). Trauma and posttraumatic stress disorder in Japan: results from the World Mental Health Japan Survey. Journal of psychiatric research, 53, 157–165.`,
      allowHTML: true, // HTMLを許可
      placement: 'bottom',
      arrow: false,
      theme: 'white',
    });
  </script>

  <section class="p-tab-box">
    <div class="u-sp">
      <ul class="p-tab-box__tab-list js-fit">
        <li class="active" data-tag="tag01">身体的暴力</li>
        <li data-tag="tag02">性的暴力</li>
        <li data-tag="tag03">事故や災害</li>
      </ul>
      <ul class="p-tab-box__tab-list js-fit">
        <li data-tag="tag04">親しい人の死</li>
        <li data-tag="tag05">自分の周りの人のトラウマ</li>
        <li data-tag="tag06">戦争</li>
      </ul>
    </div>
    <div class="u-pc">
      <ul class="p-tab-box__tab-list js-fit">
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
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                暴力を振るわれ、大けがをしたり、危うく死ぬような思いをした体験は、トラウマとして記憶に残ります。暴力は、自分の配偶者や養育者など家庭内で起こることもありますし、他人から殴られたり強盗に遭う体験が突然に起こることもあります。<br>
                調査では、<b class="u-em-orange-marker">16.5％の人が身体的暴力を経験</b>していました。中でも、自分の養育者から身体的虐待を受けた人や、他の誰かから暴力を振るわれ人が多くいます。
              </p>
            </div>
          </div>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal01">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag02">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">性的暴力</h3>
          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                物理的に傷がつくわけではなくても、自分の境界線が破られ、性的な安全が損なわれる出来事は、トラウマになり得ます。レイプや痴漢など、自分の意思とは関わりなく性的なことを強要されることで、尊厳が損なわれたように感じるかもしれません。<br>
                調査では、<b class="u-em-orange-marker">4.3％の人が性的暴力を経験</b>していました。中でも、ストーカー被害の経験率が高かったです。<br>ただし、<span class="c-tooltip tippy02">若年層を対象としたより最近の調査</span> （<a href="https://www.gender.go.jp/policy/no_violence/e-vaw/chousa/pdf/r04_houkoku/01.pdf" target="_blank" class="u-black-link ">参照 <i class="fa-regular fa-file-pdf"></i></a>）では、約4人に1人が何らかの性暴力被害にあったことがあ ると回答するなど、調査によってちがいがあります。
              </p>
            </div>
          </div>

          <script>
            tippy('.tippy02', {
              content: `
      出典：内閣府男女共同参画局. 令和 3 年度若年層に対する性暴力の予防啓発相談事業：若年層の性暴力被害の実態に関するオンラインアンケート及びヒアリング結果報告書. 2022. 
    `,
              allowHTML: true, // HTMLを許可
              placement: 'bottom',
              arrow: false,
              theme: 'white',
            });
          </script>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal02">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag03">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">事故や災害</h3>
          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                このカテゴリには、自動車事故やその他の事故、災害や人災のほか、生命を脅かすような病気も含まれます。突然のことにより、これまでの生活がガラりと変わってしまうような経験も、トラウマになり得るものです。<br>
                調査では、<b class="u-em-orange-marker">22.8％の人が偶発的なトラウマを経験</b>していました。中でも、生命を脅かすような病気、自動車事故、自然災害を経験した人が多くいます。
              </p>
            </div>
          </div>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal03">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section class="p-tab-box__inner">
      </div>

      <div class="p-tab-box__item" data-targetTag="tag04">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">親しい人の死</h3>
          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                事故や災害などで、自分の愛する人が突然に亡くなってしまうことも、トラウマになり得ます。人は誰でもいずれは亡くなるものですが、心の準備もなく急に知らされる不幸は、心に深い傷を残すことがあります。<br>
                調査では、<b class="u-em-orange-marker">23.7％の人が親しい人を予期せぬ形で亡くした経験</b>があると回答しました。
              </p>
            </div>
          </div>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal04">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag05">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">自分の周りの人のトラウマ</h3>
          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                家庭内で暴力が振るわれている場面を目撃することや、誰かが重傷を負ったり（暴力的な方法で）亡くなる姿を見ることも、トラウマになり得ます。自分自身に起きたことだけでなく、自分の大事な人にトラウマとなる出来事が起きることや、自分の子どもが深刻な病気になることを含め、身の回りで起こることで心が深く傷つくこともあるのです。<br>
                調査では、<b class="u-em-orange-marker">30.2％の人が自分の周りの人に起こったトラウマを見たり聞いたりした経験</b>があります。とりわけ、誰かが深刻な怪我をしたり亡くなったりした場面に居合わせたり、家庭内で暴力を伴う争いを見た経験をした人が多くいます。
              </p>
            </div>
          </div>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal05">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag06">
        <section class="p-tab-box__inner">
          <h3 class="c-h2 p-tab-box__h1">戦争</h3>
          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space"></div>
              <!-- <img src="<?php echo THEME_DIR_URI; ?>learn/about-trauma-01.webp" alt="" class="p-img-right-btm-box__img"> -->
              <p>
                自分が戦場に出て戦うことだけでなく、戦争がおきている地域に暮らしたり、捕虜になる経験は、心に大きな傷を残す可能性があります。非常事態に身を置く恐怖や緊迫した日々は、安全にまつわる感覚を覆し、たとえ平穏な日々に戻れたとしても、後々まで影響を及ぼすことがあります。<br>
                調査では、<b class="u-em-orange-marker">8.7％の人が戦争に関連したトラウマを経験</b>していました。中でも、戦争が行われている地域に住んでいたり、実際に自分が戦地に赴いた経験を持つ人が多かったです。
              </p>
            </div>
          </div>

          <!-- <div class="p-tab-box__btn-box">
            <a class="c-btn js-modal-button-target" href="#modal06">クイズに挑戦する　<i class="fa-regular fa-window-restore"></i></a>
          </div> -->
        </section>
      </div>

    </div>
  </section>
</article>

<!-- モーダルの内容　START -->
<!-- モーダルの各IDは呼び出しボタンの[href]に設定されたIDと一致する -->

<div id="modal01" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">はい</button>
      <button class="c-btn -orange-rev p-modal__btn js-modal-button-next">いいえ</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal02" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマ経験をした人のうち、どれくらいの割合の人がどれくらいの期間、PTSDを患ったと思いますか？</p>
    </div>
    <input type="text" placeholder="回答を入力する" class="p-modal__input-txt">
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">送信</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマを経験した人のうち、PTSDを患った人の割合は1.6%でした。また、PTSDを患っていた期間の平均は、９年４ヶ月余りでした。罹病期間は人によって大きく異なりますが、時に、ごく長い期間にわたり症状が続くことがわかっています。</p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal03" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">はい</button>
      <button class="c-btn -orange-rev p-modal__btn js-modal-button-next">いいえ</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal04" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマ経験をした人のうち、どれくらいの割合の人がどれくらいの期間、PTSDを患ったと思いますか？</p>
    </div>
    <input type="text" placeholder="回答を入力する" class="p-modal__input-txt">
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">送信</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマを経験した人のうち、PTSDを患った人の割合は1.6%でした。また、PTSDを患っていた期間の平均は、９年４ヶ月余りでした。罹病期間は人によって大きく異なりますが、時に、ごく長い期間にわたり症状が続くことがわかっています。</p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal05" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">はい</button>
      <button class="c-btn -orange-rev p-modal__btn js-modal-button-next">いいえ</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>テキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
      </p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal06" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマ経験をした人のうち、どれくらいの割合の人がどれくらいの期間、PTSDを患ったと思いますか？</p>
    </div>
    <input type="text" placeholder="回答を入力する" class="p-modal__input-txt">
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-button-next">送信</button>
    </div>
  </div>

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">クイズ　結果</h3>
    <div class="p-modal__txt-box">
      <p>何らかのトラウマを経験した人のうち、PTSDを患った人の割合は1.6%でした。また、PTSDを患っていた期間の平均は、９年４ヶ月余りでした。罹病期間は人によって大きく異なりますが、時に、ごく長い期間にわたり症状が続くことがわかっています。</p>
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<!-- モーダルの内容　END -->

<?php get_footer(); ?>