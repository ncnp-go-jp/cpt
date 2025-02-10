<?php
$tag = ''; // タグ内のテキスト
$ttl = ''; // 見出し
$img_url_pc = THEME_DIR_URI; // 画像
$img_url_sp = THEME_DIR_URI; // 画像
$txt = ''; // テキスト
$is_parent_page = false; // 親ページか否か

if (is_page('about')) {
  $ttl = 'サイトについて';
  $img_url_pc .= 'about/about-topview-pc.jpg';
  $img_url_sp .= 'about/about-topview-sp.jpg';
  $txt = '「知識は、ちから。」生きていれば、誰しも、傷つくことがあります。<br>傷ついたとき、どうしたらよいか。傷ついた心を抱えて、どう生きていこうか。<br>そんな問いを考える時、歩みをすすめる力になる情報を提供することが、<br class="u-pc">このサイトの志です。';
  $is_parent_page = true;
} else if (is_page('experienced-person')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマを<br class="u-sp">経験した方へ';
  $img_url_pc .= 'about/about-topview-pc.jpg';
  $img_url_sp .= 'about/about-topview-sp.jpg';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('family-friends')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマを<br class="u-sp">経験した方の<br class="u-sp">ご家族やご友人へ';
  $img_url_pc .= 'about/about-topview-pc.jpg';
  $img_url_sp .= 'about/about-topview-sp.jpg';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('supporter')) {
  $tag = 'サイトについて';
  $ttl = 'トラウマ経験者の<br class="u-sp">支援を行う方へ';
  $img_url_pc .= 'about/about-topview-pc.jpg';
  $img_url_sp .= 'about/about-topview-sp.jpg';
  $txt = 'ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト';
} else if (is_page('thought')) {
  $tag = 'サイトについて';
  $ttl = '想い';
  $img_url_pc .= 'about/about-topview-pc.jpg';
  $img_url_sp .= 'about/about-topview-sp.jpg';
  $txt = '私たちはこれまで、認知処理療法の科学的な検証を慎重に進めてまいりました。<br>これまでの取り組みをもとに、今後は、トラウマティックな体験にあわれ、心的外傷後ストレス症や関連症状で苦しまれている方々に、認知処理療法を少しでも知っていただき、活用していただけたらと願っております。';
} else if (is_page('learn')) {
  $ttl = 'トラウマについて学ぶ';
  $img_url_pc .= 'learn/learn-topview-pc.jpg';
  $img_url_sp .= 'learn/learn-topview-sp.jpg';
  $txt = '生きていれば、誰しも、傷つくことがあります。もし、自分の力では対処できないような大きな出来事を経験したら、動揺し、混乱します。そこから抜け出す鍵の一つは、知識をもって、何が起こったのかをできるだけ冷静な目で見ることです。<br>ここでは、トラウマとは何か、トラウマが生活にどのような影響を及ぼすのかを紹介します。';
  $is_parent_page = true;
} else if (is_page('about-trauma')) {
  $tag = 'トラウマについて学ぶ';
  $ttl = 'トラウマの影響';
  $img_url_pc .= 'learn/learn-topview-pc.jpg';
  $img_url_sp .= 'learn/learn-topview-sp.jpg';
  $txt = 'トラウマを経験すると、多くの人は、体の反応や、考えや気持ちの変化など、さまざまな心身の反応を経験します。これは正常なストレス反応で、「心が弱い人間だから」起こるのではありません。<br>そして、トラウマを経験した後の反応は、出来事から時間が経つに従って、次第に落ち着いてきます。';
} else if (is_page('influence')) {
  $tag = 'トラウマについて学ぶ';
  $ttl = 'トラウマの影響';
  $img_url_pc .= 'learn/learn-topview-pc.jpg';
  $img_url_sp .= 'learn/learn-topview-sp.jpg';
  $txt = 'トラウマを経験すると、多くの人は、体の反応や、考えや気持ちの変化など、さまざまな心身の反応を経験します。これは正常なストレス反応で、「心が弱い人間だから」起こるのではありません。<br>そして、トラウマを経験した後の反応は、出来事から時間が経つに従って、次第に落ち着いてきます。';
}

?>

<div class="l-base p-mv
  <?php if ($is_parent_page) {
    echo '-parent-page';
  } ?>
  <?php if (is_page('learn') || is_parent_slug() == 'learn') {
    echo ' -learn';
  } ?>
  ">
  <?php if ($tag): ?>
    <span class="p-mv__tag"><?php echo $tag; ?></span>
  <?php endif ?>
  <h1 class="p-mv__ttl 
  <?php if (!$tag) {
    echo '-large';
  } ?>"><?php echo $ttl; ?></h1>
  <picture class="p-mv__img">
    <source media="(min-width: 834px)" srcset="<?php echo $img_url_pc; ?>">
    <img src="<?php echo $img_url_sp; ?>" alt="<?php the_title(); ?>">
  </picture>
  <p class="p-mv__txt"><?php echo $txt; ?></p>
</div>