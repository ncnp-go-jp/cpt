<?php
$ttl = ''; // 見出し
$img_url = THEME_DIR_URI; // 画像

if (is_archive()) {
  $ttl = 'お知らせ';
  $img_url .= 'news/news-topview.webp';
}
?>

<div class="l-base p-sv">
  <h1 class="p-sv__ttl"><?php echo $ttl; ?></h1>
  <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>" class="p-sv__img">
</div>