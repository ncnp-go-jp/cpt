<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="p-hdr">
    <div class="l-wide p-hdr__inner">
      <h1>CPT</h1>

      <button class="p-hdr__btn js-gnav-toggle"></button>

      <nav class="p-gnav js-gnav-toggle">
        <div class="p-gnav__inner">
          <ul class="p-gnav__list">
            <li>
              <span class="js-sub-list-toggle">サイトについて</span>
              <ul class="p-gnav__sub-list">
                <li><a href="">想い</a></li>
                <li><a href="">トラウマを経験した方へ</a></li>
                <li><a href="">トラウマを経験した方のご家族やご友人へ</a></li>
                <li><a href="">トラウマ経験者の支援を行う方へ</a></li>
              </ul>
            </li>
            <li>
              <span class="js-sub-list-toggle">トラウマについて学ぶ</span>
              <ul class="p-gnav__sub-list">
                <li><a href="">トラウマとは</a></li>
                <li><a href="">トラウマの影響</a></li>
                <li><a href="">PTSDとは</a></li>
              </ul>
            </li>
            <li>
              <span class="js-sub-list-toggle">治療を知る</span>
              <ul class="p-gnav__sub-list">
                <li><a href="">PTSDの治療</a></li>
                <li><a href="">CPTとは</a></li>
                <li><a href="">CPTの進め方</a></li>
                <li><a href="">CPTに親しむ</a></li>
                <li><a href="">治療を受けた人の声</a></li>
              </ul>
            </li>
            <li>
              <a href="">情報資源を得る</a>
            </li>
            <li>
              <a href="">お知らせ</a>
            </li>
          </ul>
          <div class="p-gnav__btn-box">
            <a href="" class="c-btn p-gnav__btn">ログイン</a>
            <a href="" class="c-btn -brown p-gnav__btn">会員登録</a>
          </div>
        </div>
      </nav>
    </div>

  </header>

  <div class="p-gnav__bg"></div>

  <main>