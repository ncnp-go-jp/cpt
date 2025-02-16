<?php
get_header();
?>
<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>
  <div class="l-base">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>