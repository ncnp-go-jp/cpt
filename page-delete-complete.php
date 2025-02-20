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
        <p class="p-delete__txt2">退会処理が完了しました。</p>
        <p class="p-delete__txt">今までのご利用ありがとうございました。</p>
        <div class="p-delete__btn-box">
          <a href="<?php echo home_url(); ?>" class="c-btn -brown-rev">トップに戻る</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>