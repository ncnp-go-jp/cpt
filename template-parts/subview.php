<?php
$ttl = ''; // 見出し
$img_url = THEME_DIR_URI; // 画像
// パーマリンクを取得
$page = get_post(get_the_ID());
$slug = $page->post_name;

if (is_archive()) {
  $ttl = 'お知らせ';
  $img_url .= 'news/news-topview.webp';
} elseif (is_page("privacy")) {
  $ttl = 'プライバシーポリシー';
  $img_url .= 'privacy/policy-topview.webp';
} elseif (is_page("sitepolicy")) {
  $ttl = 'サイトポリシー';
  $img_url .= 'privacy/policy-topview.webp';
} elseif (is_page("sitemap")) {
  $ttl = 'サイトマップ';
  $img_url .= 'sitemap/sitemap-topview.webp';
}
?>

<div class="l-base p-sv">
  <h1 class="p-sv__ttl "><?php echo $ttl; ?></h1>
  <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>" class="p-sv__img -<?php echo $slug; ?>">
</div>