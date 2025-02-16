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
      <div class="c-form__box p-comp">
        <h2 class="p-comp__h1">利用登録完了</h2>
        <p class="p-comp__txt">ご登録ありがとうございました。</p>

        <div class="p-tab-box__btn-box">
          <a href="<?php echo home_url() . '/expert'; ?>" class="c-btn">利用専用の情報を見る</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>