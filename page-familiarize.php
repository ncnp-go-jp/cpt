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

  <div class="l-base c-white-box-l__wrapper">
    <dvi class="p-abt-trauma__txt-box">
      <p>認知処理療法（CPT）は、 PTSDの症状やその他の問題からの回復を妨げ、個人が「行き詰まり」状態に陥る可能性のある考えの傾向に対処することで、症状や日常生活の改善を図る心理療法です。通常は、治療提供者としての訓練を受けた専門家とともに、全12回のセッションに取り組み、考え直しのスキルを身につけていきます。<br>
        一方で私たちは、CPTで用いられる考え方は、それ自体が、トラウマとの向き合い方の指針になると考えています。また、治療の中で使う資料やワークシートは、トラウマ体験の影響に苦しむ人が、自分で自分を助けるためにも役立つ可能性があると考えます。<br>
        ここには、まずはもう少しCPTのことを知ってみたい、試しに自分で取り組んでみたいと思った時に、手に取っていただきやすい情報をまとめました。パラパラと眺めていただき、もし何かあなたの役立ちそうなものが見つかれば幸いです。</p>
    </dvi>
  </div>

</div>

<?php
global $post;
$the_query = new WP_Query(
  array(
    'post_type' => 'documents',
    'post_status' => 'publish',
    'posts_per_page' => -1, // 全件表示
  )
);
if ($the_query->have_posts()) :
?>

  <div class="l-base">
    <article class="p-tab-box -doc-list u-bg-white">
      <div class="u-sp">
        <ul class="p-tab-box__tab-list -fixed-width u-bg-orange-gray">
          <li class="active" data-target="all">ALL</li>
          <li data-target="booklet">小冊子</li>
          <li data-target="manga">マンガ</li>
        </ul>
        <ul class="p-tab-box__tab-list -fixed-width u-bg-orange-gray">
          <li data-target="books">書籍</li>
          <li data-target="workbook">ワークシート</li>
          <li data-target="video">ビデオ</li>
        </ul>
      </div>
      <div class="u-pc">
        <ul class="p-tab-box__tab-list -fixed-width u-bg-orange-gray">
          <li class="active" data-target="all">ALL</li>
          <li data-target="booklet">小冊子</li>
          <li data-target="manga">マンガ</li>
          <li data-target="books">書籍</li>
          <li data-target="workbook">ワークシート</li>
          <li data-target="video">ビデオ</li>
        </ul>
      </div>

      <div class="p-tab-box__wrapper">

        <div class="p-tab-box__item active" data-targetTag="all">
          <section class="p-tab-box__inner">

            <ul class="p-doc-list">

              <?php
              while ($the_query->have_posts()) : $the_query->the_post();

                // 表示切り替え用に、属するカテゴリをCSSに追加
                $target =  get_field('about-cpt-cat');
                $add_class = $target['value'];
              ?>

                <li class="<?php echo $add_class; ?>"><a href="<?php the_permalink(); ?>">
                    <?php
                    $img_url = THEME_DIR_URI . 'common/no-image.webp';
                    if (get_field('about-cpt-list-thumb')) {
                      $img_url = get_field('about-cpt-list-thumb');
                    }
                    ?>
                    <img src="<?php echo $img_url; ?>" alt="<?php the_title(); ?>">
                    <dl>
                      <dt><?php the_field('about-cpt-ttl'); ?></dt>
                      <dd><?php the_field('about-cpt-list-txt'); ?></dd>
                    </dl>
                    <?php
                    $tag = get_field('about-cpt-cat');
                    ?>
                    <span class="p-doc-list__tag"><?php echo $tag['label']; ?></span>
                  </a></li>

              <?php endwhile; ?>

            </ul>

          </section>
        </div>

      </div>
    </article>
  </div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>