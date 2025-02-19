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
  <div class="l-base c-white-box-l__wrapper p-movie">
    <article class="c-white-box-l">

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-01.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal01">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">１．CPTの概要と理論</h2>
          <p>
            認知処理療法とはどのような治療なのか、背景となる考え方をかみ砕いて紹介します。PTSDの症状を維持させるメカニズムとPTSDに特有の課題を概説し、その解消のためにどのようなアプローチを行なっていくのかを解説しています。<br>
            （講師：堀越勝、時間：約24分）
          </p>
        </div>
      </div>

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-02.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal02">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">２．症状評価：PTSD症状の理解</h2>
          <p>
            CPTを適切に行うために必要な症状評価について概説します。<br>
            症状評価の目的、活用の仕方、一般的な流れや視点を論じたうえで、CPT実施に先立ち行われるPTSD症状の評価方法を具体的に解説しています。<br>
            （講師：宮前光宏、時間：約35分）
          </p>
        </div>
      </div>


      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-03-1.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal03-1">動画を見る　<i class="fa-solid fa-video"></i></a>

            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-03-2.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal03-2">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">３．PTSDの心理教育<br>
            　　3-1. 3-2.　PTSDの機能モデル</h2>
          <p>PTSDの症状維持のメカニズムや、CPTが依って立つ理論について、学術的な見地から解説します。<br>（講師：伊藤正哉、時間：①約18分、②約48分）
          </p>
        </div>
      </div>


      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-03-3.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal03-3">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">　　3-3.　CPT全体の概要、治療前の準備と評価</h2>
          <p>CPTの治療の全体像を示したうえで、セッション１から２で行われる心理教育と、スタックポイントの特定について解説します。CPTを導入するにあたり、考慮すべき対象者の特徴（物質乱用や、自殺念慮、解離等、治療に影響を与えると思われるもの）や治療導入のタイミングに係る考え方も紹介しています。<br>
            （講師：菊池安希子、時間：約38分）
          </p>
        </div>
      </div>

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-04-1.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal04-1">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">４．スタックポイント、ABC用紙、考え直し用紙<br>
            　　4-1.　第２段階　スタックポイントを見つける</h2>
          <p>Session２の進め方を、デモ映像を含めて解説します。出来事の意味筆記を読み上げ、スタックポイント同定するプロセスを紹介します。<br>
            （講師：牧野みゆき、時間：約23分）
          </p>
        </div>
      </div>


      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-04-2.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal04-2">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">　　4-２.　第２段階　ABC用紙</h2>
          <p>Session３の進め方を、デモ映像を含めて解説します。ABC用紙の位置付けや使い方、セッションの中で患者が用紙に取り組むのを支援する方法を紹介します。<br>
            （講師：猪俣（佐藤）珠恵、時間：約18分）
          </p>
        </div>
      </div>

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-04-3.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal04-3">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">　　4-３.　第３段階　インデックスイベントの処理</h2>
          <p>Session４・５の進め方を、デモ映像を含めて解説します。最もトラウマティックな出来事を取り上げ、ソクラテス式問答を通して、スタックポイントの考え直しを進める方法を紹介します。<br>（講師：髙岸百合子、時間：約44分）
          </p>
        </div>
      </div>

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-04-4.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal04-4">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">　　4-４.　第４段階　考え直す力をつける</h2>
          <p>Session５-７の進め方を解説します。患者が自ら考え直しを進める力を身につけるために役立つ３つの用紙（考え直し用紙、問題ある思考パターン用紙、信念を考え直す用紙）の概略と使い方を紹介します。<br>（講師：髙岸百合子、時間：約18分）
          </p>
        </div>
      </div>

      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-05-1.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal05-1">動画を見る　<i class="fa-solid fa-video"></i></a>
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-05-2.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal05-2">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">５．５つのテーマ、再発予防<br>　　５-1. ５-２.　第５段階　５つのテーマ</h2>
          <p>Session５-Session８-12の進め方を、デモ映像を含めて解説します。トラウマ体験により影響を受けやすい５つのテーマ（安全、信頼、力とコントロール、価値、親密さ）を１つ１つ取り上げ、それぞれの考え直しで焦点を当てる必要のあるポイントをを紹介します。また、研修の締めくくりのご挨拶を収録しています。<br>（講師：伊藤正哉、時間：①約37分、②約31分）
          </p>
        </div>
      </div>
      <div class="p-movie-right-btm-box">
        <div>
          <div class="p-movie-right-btm-box__img">
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-06-2.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal06-1">動画を見る　<i class="fa-solid fa-video"></i></a>
            <img src="<?php echo THEME_DIR_URI; ?>movie/movie-06-2.webp" alt="">
            <a class="js-modal-button-target c-btn p-movie__btn" href="#modal06-2">動画を見る　<i class="fa-solid fa-video"></i></a>
          </div>
          <h2 class="c-h3 p-tab-box__h2">６．特典映像：座談会　CPT臨床の実際</h2>
          <p>５名の臨床家が、それぞれの実践から得られた経験知を、座談会形式で紹介します。CPTを実臨床で活用する際に直面する課題や、実践にあたって大事にしていること、留意点について論じています。<br>（講師：今村扶美・片柳章子・中島聡美・森田展彰、堀越勝、司会：猪俣（佐藤）珠恵、時間：前半：約26分、後半：約30分）
          </p>
        </div>
      </div>






    </article>
  </div>
</div>

<!-- モーダルの内容　START -->
<!-- モーダルの各IDは呼び出しボタンの[href]に設定されたIDと一致する -->

<div id="modal01" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">１．CPTの概要と理論</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-01b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-01.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal02" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">２．症状評価：PTSD症状の理解</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-02b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-02.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal03-1" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">3-1. PTSDの機能モデル</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-03-1b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-03-1.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal03-2" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">3-2. PTSDの機能モデル</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-03-2b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-03-2.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal03-3" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">3-3.　CPT全体の概要、治療前の準備と評価</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-03-3b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-03-3.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal04-1" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">4-1.　第２段階　スタックポイントを見つける</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-04-1b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-04-1.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal04-2" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">4-2.　第２段階　ABC用紙</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-04-2b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-04-2.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal04-3" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">4-3.　第３段階　インデックスイベントの処理</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-04-3b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-04-3.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal04-4" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">4-4.　第４段階　考え直す力をつける</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-04-4b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-04-4.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal05-1" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">５-1. 第５段階　５つのテーマ</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-05-1b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-05-1.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal05-2" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">５-2. 第５段階　５つのテーマ</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-05-2b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-05-2.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal06-1" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">６．特典映像：座談会　CPT臨床の実際 前編</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-06-1b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-06-1.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>

<div id="modal06-2" class="p-modal">
  <div class="p-modal__inner -movie">
    <h3 class="p-modal__ttl">６．特典映像：座談会　CPT臨床の実際 後編</h3>
    <video controls poster="<?php echo THEME_DIR_URI; ?>movie/movie-06-2b.webp">
      <source src="<?php echo MEDIA_DIR_URI; ?>2025/02/movie-06-2.mp4" type="video/mp4">
      お使いのブラウザでは動画の再生がサポートされていません。
    </video>
    <div class="p-modal__btn-box">
      <button class="c-btn p-modal__btn js-modal-close">閉じる</button>
    </div>
  </div>
</div>


<!-- モーダルの内容　END -->

<?php get_footer(); ?>