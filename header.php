<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KS2SDSFL');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KS2SDSFL"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header class="p-hdr">
    <div class="l-wide p-hdr__inner">
      <h1><a href="<?php echo home_url(); ?>">CPT</a></h1>

      <button class="p-hdr__btn js-gnav-toggle"></button>

      <nav class="p-gnav js-gnav-toggle">
        <div class="p-gnav__inner">
          <ul class="p-gnav__list">
            <li>
              <div class="p-gnav__parent">
                <a href="<?php echo home_url() . '/about'; ?>">サイトについて</a>
                <button class="js-sub-list-toggle"></button>
              </div>
              <ul class="p-gnav__sub-list">
                <li><a href="<?php echo home_url() . '/about/thought'; ?>">想い</a></li>
                <!-- <li><a href="<?php echo home_url() . '/about/experienced-person'; ?>">トラウマを経験した方へ</a></li> -->
                <!-- <li><a href="<?php echo home_url() . '/about/family-friends'; ?>">トラウマを経験した方のご家族やご友人へ</a></li> -->
                <!-- <li><a href="<?php echo home_url() . '/about/supporter'; ?>">トラウマ経験者の支援を行う方へ</a></li> -->
              </ul>
            </li>
            <li>
              <div class="p-gnav__parent">
                <a href="<?php echo home_url() . '/learn'; ?>">トラウマについて学ぶ</a>
                <button class="js-sub-list-toggle"></button>
              </div>
              <ul class="p-gnav__sub-list">
                <li><a href="<?php echo home_url() . '/learn/about-trauma'; ?>">トラウマとは</a></li>
                <li><a href="<?php echo home_url() . '/learn/influence'; ?>">トラウマの影響</a></li>
                <li><a href="<?php echo home_url() . '/learn/about-ptsd'; ?>">PTSDとは</a></li>
              </ul>
            </li>
            <li>
              <div class="p-gnav__parent">
                <a href="<?php echo home_url() . '/treatment'; ?>">治療を知る</a>
                <button class="js-sub-list-toggle"></button>
              </div>
              <ul class="p-gnav__sub-list">
                <li><a href="<?php echo home_url() . '/treatment/treatment-ptsd'; ?>">PTSDの治療</a></li>
                <li><a href="<?php echo home_url() . '/treatment/about-cpt'; ?>">CPTとは</a></li>
                <li><a href="<?php echo home_url() . '/treatment/steps'; ?>">CPTの進め方</a></li>
                <li><a href="<?php echo home_url() . '/treatment/familiarize'; ?>">CPTに親しむ</a></li>
              </ul>
            </li>
            <li>
              <div class="p-gnav__parent">
                <a href="<?php echo home_url() . '/resources'; ?>">情報資源を得る</a>
              </div>
            </li>
            <li>
              <div class="p-gnav__parent">
                <a href="<?php echo home_url() . '/news'; ?>">お知らせ</a>
              </div>
            </li>
            <?php
            // ログインユーザーのみに表示
            if (is_user_logged_in()):
            ?>
              <li>
                <div class="p-gnav__expert">
                  <a href="<?php echo home_url() . '/expert'; ?>">専門家向け資料</a>
                </div>
              </li>
            <?php endif; ?>
          </ul>
          <div class="p-gnav__btn-box">
            <?php if (is_user_logged_in()): ?>
              <div class="c-btn-wrapper -orange-rev">
                <?php echo do_shortcode('[wpmem_logout]ログアウト[/wpmem_logout]'); ?>
              </div>
              <a href="<?php echo home_url() . '/expert/mypage'; ?>" class="c-btn -brown">マイページ</a>
            <?php else : ?>
              <div class="c-btn-wrapper">
                <?php echo do_shortcode('[wpmem_login_link]ログイン[/wpmem_login_link]'); ?>
              </div>
              <div class="c-btn-wrapper -brown">
                <?php echo do_shortcode('[wpmem_reg_link]利用登録[/wpmem_reg_link]'); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </nav>
    </div>

  </header>

  <div class="p-gnav__bg"></div>

  <main>