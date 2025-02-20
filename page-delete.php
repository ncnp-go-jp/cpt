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
    <div class="c-form">
      <div class="c-form__box p-delete">
        <p class="p-delete__txt">退会処理を行います。</p>
        <p class="p-delete__txt u-brown">よろしいですか？</p>
        <div class="p-delete__btn-box">
          <?php echo do_shortcode('[plugin_delete_me]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>