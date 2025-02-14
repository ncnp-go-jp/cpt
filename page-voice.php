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
  <div class="l-base">

    <article class="p-voice">
      <ul class="p-voice__list">
        <?php if (have_rows('voice-list')): ?>
          <?php while (have_rows('voice-list')) : the_row(); ?>
            <li>
              <figure class="p-voice__figure">
                <img src="<?php the_sub_field('voice-img'); ?>" alt="">
                <figcaption><?php the_sub_field('voice-name'); ?></figcaption>
              </figure>
              <?php the_sub_field('voice-txt'); ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </article>

  </div>

  <?php get_footer(); ?>