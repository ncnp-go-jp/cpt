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
      <h2 class="c-h2 c-white-box-l__h1">PTSDの症状
      </h2>
      <p>PTSDは、生命の危機にさらされるような出来事を経験した後に発症する可能性があります。<br>
        PTSDの症状には、次のような4つのタイプがあります。症状は、トラウマとなる出来事の直後に現れることが多いですが、数ヶ月から数年経ってから現れることもあります。また、何年にもわたって症状が現れたり消えたりすることもあります。4つの症状が1か月以上続き、生活に支障をきたしている場合に、「PTSD」と診断されます。</p>

      <ul class="p-modal-btn-list">
        <li><a class="js-modal-button-target" href="#modal01">侵入症状</a></li>
        <li><a class="js-modal-button-target" href="#modal02">回避症状</a></li>
        <li><a class="js-modal-button-target" href="#modal03">認知と気分の陰性変化</a></li>
        <li><a class="js-modal-button-target" href="#modal04">覚醒度と反応性の著しい変化</a></li>
      </ul>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base" id="check">
  <h2 class="c-h2 p-abt-trauma__h1">PTSDセルフチェック（PC-PTSD）</h2>
  <div class="p-abt-trauma__txt-box">
    <p>いままでに、あなたはトラウマとなるような出来事を経験したことがありますか？<br>
      もし、トラウマを経験した後に時間が経ってもずっと苦しいままであれば、治療や支援を受けることが、今の苦境から抜け出す鍵になるかもしれません。<br>
      通常では考えられないような、非常に恐ろしくて、悲惨な出来事を経験した後、その影響からなかなか抜け出せず、普段の生活に不便が生じている方は、下のボタンをクリックして、PTSDの症状をチェックしてみてください。</p>
  </div>

  <form method="post" action="./result/#result" class="p-checklist">
    <h3 class="c-h2">PTSDの症状をチェック</h3>
    <p class="p-checklist__txt1">最近の１か月間で、あなたは…</p>

    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check01" id="symptom01">
      <span class="icon"></span>
      <label for="symptom01">その出来事に関する悪夢をみたり、考えたくないのにその出来事に関する考えが頭に浮かんできたりしましたか</label>
    </div>
    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check02" id="symptom02">
      <span class="icon"></span>
      <label for="symptom02">その出来事についてがんばって考えないようにしたり、その出来事を思い出させる状況をわざと避けようとしたりしましたか</label>
    </div>
    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check03" id="symptom03">
      <span class="icon"></span>
      <label for="symptom03">常に身構えていたり、警戒していたり、ちょっとしたことにびくっと驚いたりしていましたか</label>
    </div>
    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check04" id="symptom04">
      <span class="icon"></span>
      <label for="symptom04">気持ちが麻痺（まひ）したように感じたり、人々・活動・周囲から切り離されているように感じたりしましたか</label>
    </div>
    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check05" id="symptom05">
      <span class="icon"></span>
      <label for="symptom05">その出来事や、その出来事のせいで生じている問題について、罪悪感を感じたり、自分自身や他人を非難せずにはいられなかったりしましたか</label>
    </div>
    <div class="p-checklist__item">
      <input type="checkbox" name="symptom[]" value="check06" id="symptom06">
      <span class="icon"></span>
      <label for="symptom06">その出来事に関する悪夢をみたり、考えたくないのにその出来事に関する考えが頭に浮かんできたりしましたか</label>
    </div>

    <input type="submit" class="c-btn" value='症状をチェックする'>
  </form>
  <p class="p-checklist__note">※【引用元】プライマリ・ケアのための PTSD スクリーニング尺度（ DSM 5 版 日本語版）より一部改変：伊藤正哉・宮前光宏・蟹江絢子・横山 知加 (2019）</p>

</article>

<div class="u-bg-orange-gray">
  <div class="l-base p-abt-trauma">

    <h2 class="c-h2 p-abt-trauma__h1">PTSDを患う人の割合、期間</h2>
    <div class="p-abt-trauma__txt-box">
      <p>多くの人は、人生のある時点でトラウマとなる出来事を経験します。そして、一時的にはその出来事に対処するために苦労しても、時間をかけて回復していきます。一部の人はPTSDを発症し、時に長い期間、症状を抱えます。しかし、PTSDを患っている人の正確な数はわかっていません。PTSDについて、全ての人に尋ねた研究は一つもないからです。そのような制約はあるものの、多数の人の協力を得ることで、どれくらいの割合の人がPTSDを経験するのかを推計することができます。<br>
        ここでは、<span class="c-tooltip tippy01">Kawakami（2014）</span>の調査から、日本ではどれくらいの割合の人がPTSDを発症しているかを紹介します。</p>
    </div>

    <script>
      tippy(' .tippy01', {
        content: "ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト",
        placement: 'bottom',
        arrow: false,
        theme: 'white',
      });
    </script>

    <article class="c-white-box-l">

      <div class="p-img-right-btm-box">
        <div>
          <div class="p-img-right-btm-box__space -ptsd"></div>
          <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-01.png" alt="" class="p-img-right-btm-box__img -ptsd">
          <h2 class="c-h3 p-tab-box__h2">PTSDを患う人の割合</h2>
          <p>
            人生の中で何らかのトラウマを経験した人のうち、PTSDを患った人の割合は1.6%でした。経験した出来事別で見ると、その経験をした人の中でPTSDを患う確率が高いのは、「他人に殴られた」（5.7％）、「レイプされた」（5.6％）、「子供が重い病気にかかった」（4.4％）といった出来事でした。<br>
            「トラウマ」と一括りにはできないほど、どのような種類の出来事を、どのように体験したかによって、その人に与える影響の大きさは異なるようです。
          </p>
        </div>
      </div>

      <div class="p-img-right-btm-box">
        <div>
          <div class="p-img-right-btm-box__space -ptsd"></div>
          <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-02.png" alt="" class="p-img-right-btm-box__img -ptsd">
          <h2 class="c-h3 p-tab-box__h2">PTSDを患う期間</h2>
          <p>
            調査への回答者がPTSDを患っていた期間の平均は、４年９ヶ月余りでした。経験した出来事別で見ると、罹病期間が長いのは、「家庭内で暴力を伴う争いを見た」（49年０ヵ月）、「自分の養育者から身体的虐待を受けた」（25年9ヵ月）出来事でした。一方で、罹病期間が最も短かった「ストーカー被害」「大切な人がトラウマを経験した」出来事でも、罹病期間は約１年間でした。<br>
            罹病期間は人によって大きく異なり、時に、ごく長い期間にわたり症状が続くことがわかっています。
          </p>
        </div>
      </div>

      <div class="p-img-right-btm-box">
        <div>
          <h2 class="c-h3 p-tab-box__h2">PTSDからの回復が難しい理由</h2>
          <p>
            上に挙げたようなPTSDの症状は、一時的には、トラウマを経験した人の多くの人に経験されるものです。しかし大抵は、時間が経つにつれて自然と症状が回復していきます。一方で、自然な回復が何らかの理由によって途中で阻まれてしまうと、一部の人はPTSDを発症し、時に長い期間、症状を抱えます。<br>
            PTSDの症状が長引く原因の一つは、トラウマについて思い出すことを避けたり、自然な感情を避けたりすることで、かえって、脳が未処理の出来事について考え続けようとしてしまうことです。トラウマの記憶が侵入的にあらわれたり、悪夢を見たりするのは、起こったことの意味を心が理解しようとする働きによるものと考えられています。出来事にふれることを避けることで、出来事のことをうまく整理して記憶に留めようとする機会が奪われてしまうのです。<br>
            ですから、PTSDに対する心理的な支援で効果を発揮しているものの多くは、トラウマに向き合い、記憶の整理を手伝う形をとっています。PTSDから回復するためには、一時的には、トラウマに向き合う機会が必要だと考えられています。
          </p>
        </div>
      </div>

    </article>
  </div>
</div>

<!-- モーダルの内容　START -->
<!-- モーダルの各IDは呼び出しボタンの[href]に設定されたIDと一致する -->

<div id="modal01" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">侵入症状</h3>
    <div class="p-modal__2col">
      <div class="p-modal__txt-box">
        <p><b>症状の説明：</b><br>
          トラウマとなる出来事の記憶や体験が、自分の意思とは関係なく、よみがえってきます。「再体験症状」とも呼ばれます。</p>
        <p><b>症状の例：</b></p>
        <ul class="c-list-disc">
          <li>悪夢を見る</li>
          <li>その出来事を再び経験しているようにかんじ、行動する（フラッシュバック）</li>
          <li>その出来事を追体験させるようなものを見たり、聞いたり、匂いをかいだりすることをきっかけに、強い苦痛を感じる</li>
        </ul>
      </div>
      <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-03.jpg" alt="" class="p-modal__img">
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal02" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">回避症状</h3>
    <div class="p-modal__2col">
      <div class="p-modal__txt-box">
        <p><b>症状の説明：</b><br>
          トラウマとなる出来事を思い出すことを避けたり、思い出させるものを避けるようになります。</p>
        <p><b>症状の例：</b></p>
        <ul class="c-list-disc">
          <li>トラウマとなる出来事とむすびつく人や場所を避ける</li>
          <li>出来事について話すことや考えることを避ける</li>
        </ul>
      </div>
      <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-03.jpg" alt="" class="p-modal__img">
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal03" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">認知と気分の陰性変化</h3>
    <div class="p-modal__2col">
      <div class="p-modal__txt-box">
        <p><b>症状の説明：</b><br>
          トラウマとなる出来事を経験する前よりも、否定的な考えや感情を持つようになります。</p>
        <p><b>症状の例：</b></p>
        <ul class="c-list-disc">
          <li>ポジティブな感情を感じなくなる</li>
          <li>感覚が麻痺したように感じる</li>
          <li>以前は楽しめていたことへの興味を失う</li>
          <li>世の中は完全に危険であり、誰も信用できないと考える</li>
          <li>出来事について罪悪感や恥ずかしさを感じる</li>
          <li>もっと何かをしていれば出来事を防げたのではないかと考える</li>
        </ul>
      </div>
      <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-03.jpg" alt="" class="p-modal__img">
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<div id="modal04" class="p-modal">

  <div class="p-modal__inner">
    <h3 class="p-modal__ttl">覚醒度と反応性の著しい変化</h3>
    <div class="p-modal__2col">
      <div class="p-modal__txt-box">
        <p><b>症状の説明：</b><br>
          神経が高ぶったり、過敏になったりします。
          過覚醒とも呼ばれます。</p>
        <p><b>症状の例：</b></p>
        <ul class="c-list-disc">
          <li>常に警戒していなければならないような感覚</li>
          <li>怒りっぽくなったり、いらだちやすくなる</li>
          <li>なかなか眠れない</li>
          <li>集中することが難しい</li>
        </ul>
      </div>
      <img src="<?php echo THEME_DIR_URI; ?>learn/ptsd-03.jpg" alt="" class="p-modal__img">
    </div>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>

</div>

<!-- モーダルの内容　END -->
<?php get_footer(); ?>