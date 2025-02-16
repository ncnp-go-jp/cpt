<?php
get_header();
?>

<div class="p-sv-02">
  <h1><?php the_title(); ?></h1>
</div>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>
  <div class="l-base">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="c-form">
          <div class="c-form__box p-mypage">

            <?php echo do_shortcode('[wpmem_profile]'); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>