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
          <div class="c-form__box p-login">
            <p class="p-login__txt">この情報へのアクセスは<br class="u-sp">メンバーに限定されています。<br>
              ログインしてください。<br>
              利用登録は、下記リンクを<br class="u-sp">クリックしてください。</p>
            <div class="u-tac p-login__btn-box">
              <a href="<?php echo home_url() . '/expert/member_reg_form'; ?>" class="c-btn -brown">利用登録</a>
            </div>

            <div class="p-form">
              <?php
              echo do_shortcode('[wpmem_form login]');
              ?>
            </div>

            <p class="u-tac p-login__note">パスワードを忘れた場合<br class="u-sp"><a href="<?php echo home_url() . '/expert/reset'; ?>" class="u-orange-marker">パスワードリセット</a></p>

          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>