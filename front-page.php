<?php
get_header();
?>

<div class="u-bg-orange-gray">
  <div class="p-front-mv">
    <picture class="p-front-mv__img">
      <source media="(min-width: 834px)" srcset="<?php echo THEME_DIR_URI; ?>top/front-topview-pc.webp">
      <img src="<?php echo THEME_DIR_URI; ?>top/front-topview-sp.webp" alt="知識は、ちから。">
    </picture>

    <article class="p-front-mv__txt-box">
      <h2>知識は、ちから。</h2>
      <p>心に傷を負った経験から、立ち直り、<br>
        歩みを進めるための情報サイト</p>
    </article>
  </div>
</div>

<div class="u-bg-orange-gray p-front-sec">
  <article class="l-base">

    <section class="p-front-sec__item">
      <figure>
        <img src="<?php echo THEME_DIR_URI; ?>top/front-01.webp" alt="生きていれば、誰しも、傷つくことがある。" class="">
      </figure>
      <div class="p-front-sec__txt-box">
        <div>
          <h3>生きていれば、誰しも、<br class="u-sp">傷つくことがある。</h3>
          <p>傷ついたとき、どうしたらよいか。<br>
            傷ついた心を抱えて、どう生きていこうか。</p>
          <p>そんな問いを抱えた方たちとの関わりから生まれた志が<br class="u-pc">このサイトを作りました。</p>
        </div>
        <a href="./about" class="c-btn p-front-sec__btn">このサイトについて　<i class="fas fa-angle-right"></i></a>
      </div>
    </section>

    <section class="p-front-sec__item">
      <figure>
        <img src="<?php echo THEME_DIR_URI; ?>top/front-02.webp" alt="知識は、ちから。" class="">
      </figure>
      <div class="p-front-sec__txt-box">
        <div>
          <h3>知識は、ちから。</h3>
          <p>自分の力では対処できないような大きな出来事がもたらす混乱。<br>
            そこから抜け出す鍵の一つは、知識をもって、<br class="u-pc">何が起こったのかをできるだけ冷静な目で見ることです。</p>
        </div>
        <a href="./learn" class="c-btn p-front-sec__btn">トラウマについて学ぶ　<i class="fas fa-angle-right"></i></a>
      </div>
    </section>

    <section class="p-front-sec__item">
      <figure>
        <img src="<?php echo THEME_DIR_URI; ?>top/front-03.webp" alt="心の傷にも、治療が必要。" class="">
      </figure>
      <div class="p-front-sec__txt-box">
        <div>
          <h3>心の傷にも、治療が必要。</h3>
          <p>けがをした時と同じように、<br class="u-pc">心が傷ついた時にも、手当てが必要です。<br>
            自然には癒えない痛みを抱えているなら、<br class="u-pc">専門的な治療が役に立つかもしれません。</p>
        </div>
        <a href="./treatment" class="c-btn p-front-sec__btn">治療を知る　<i class="fas fa-angle-right"></i></a>
      </div>
    </section>

    <section class="p-front-sec__item">
      <figure>
        <img src="<?php echo THEME_DIR_URI; ?>top/front-04.webp" alt="納得するまで知る。準備を整える。" class="">
      </figure>
      <div class="p-front-sec__txt-box">
        <div>
          <h3>納得するまで知る。準備を整える。</h3>
          <p>心の傷に触れることや、一歩踏みだすには、勇気が要ります。<br class="u-pc">不安なときには、情報を集めることが役立ちます。<br class="u-pc">ご参考まで、科学的な根拠を示す記事や、理論を詳述する書籍、さまざまな支援団体やその他の資源を示しました。</p>
        </div>
        <a href="./resources" class="c-btn p-front-sec__btn">情報資源を得る　<i class="fas fa-angle-right"></i></a>
      </div>
    </section>

  </article>
</div>

<article class="l-base p-news-col">
  <h2 class="p-front-sec__h1">お知らせ</h2>

  <?php
  $the_query = new WP_Query(
    array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 4, // 表示件数
    )
  );
  if ($the_query->have_posts()) : ?>
    <ul class="p-news-col__list">
      <?php
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li><a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <p><?php the_title(); ?></p>
          </a></li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  <a href="<?php echo home_url() . '/news'; ?>" class="c-btn">お知らせ一覧　<i class="fas fa-angle-right"></i></a>
</article>

<!-- <div class="u-bg-orange-gray">
  <article class="l-base p-column-slide">
    <h2 class="p-front-sec__h1">コラム</h2>

    <?php
    $the_query = new WP_Query(
      array(
        'post_type' => 'column',
        'post_status' => 'publish',
        'posts_per_page' => 6, // 表示件数
      )
    );
    if ($the_query->have_posts()) : ?>

      <div class="p-column-slide__list">
        <div class="splide" id="splide-top" aria-label="トップ画面スライド">
          <div class="splide__track">
            <ul class="splide__list">
              <?php
              while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                <li class="splide__slide"><a href="<?php the_permalink(); ?>">
                    <?php
                    $img_url = THEME_DIR_URI . 'common/no-image.webp';
                    if (get_field('column-list-thumb')) {
                      $img_url = get_field('column-list-thumb');
                    }
                    ?>
                    <figure>
                      <img data-splide-lazy="<?php echo $img_url; ?>" alt="">
                    </figure>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <p><?php the_field('column-list-txt'); ?></p>
                  </a></li>
              <?php endwhile; ?>
            </ul>
          </div>
          <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev button prev"><i class="fas fa-angle-left"></i></button>
            <button class="splide__arrow splide__arrow--next button next"><i class="fas fa-angle-right"></i></button>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <a href="./column" class="c-btn">コラム一覧　<i class="fas fa-angle-right"></i></a>
  </article>
</div> -->

<div class="u-bg-ligh-brown">
  <article class="p-front-info l-base">
    <h2 class="p-front-info__h1">CPTを実践したい専門家へ</h2>
    <p class="p-front-info__txt1">私たちは、CPTを実践する仲間が増えていくことを願っています。<br>
      メンタルヘルスをサポートする臨床家のみなさまへ向けて、<br class="u-pc">より専門的な情報をお伝えいたします。</p>
    <div class="p-front-info__box">
      <section class="p-front-info__item">
        <h3 class="p-front-info__h2">利用登録のお願い</h3>
        <p>私たちは、みなさまに広くPTSDの支援法に関する情報を届けることに加えて、メンタルヘルスをサポートする臨床家のみなさまへ向けて、より専門的な情報をお伝えしたいと考えています。<br>
          メンタルヘルスや支援に係る専門家が、CPTについて学ぶにあたりお役立ていただける情報を、本サイトの登録者ページにて提供してまいります。</p>
      </section>
      <section class="p-front-info__item">
        <h3 class="p-front-info__h2">登録者ページでご覧いただける<br class="u-sp">主な内容</h3>
        <ul class="p-front-info__list">
          <li>パブリックドメインのCPTマニュアル：退役軍人／軍版に開発されたマニュアルと、CPTの進捗管理に役立つ資材。</li>
          <li>動画教材：国立精神・神経医療研究センターで行った過去の研修動画。</li>
          <li>アセスメントツール：PCL-5（DSM-5のPTSD診断基準に準拠して作成された自己記入式尺度）。</li>
        </ul>
      </section>
    </div>
    <?php
    // ログイン状態に応じたURLを設定
    $expert_url = is_user_logged_in() ? home_url('/expert') : './expert/member_reg_form';
    // ボタンのタイトルもログイン状態によって変更
    $expert_button_text = is_user_logged_in() ? '専門家向け資料はこちら' : '利用登録はこちら';
    ?>
    <a href="<?php echo $expert_url; ?>" class="c-btn -white"><?php echo $expert_button_text; ?>　<i class="fas fa-angle-right"></i></a>
  </article>
</div>
<?php get_footer(); ?>