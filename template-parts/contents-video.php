<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="p-cont-video">
      <article class="p-cont-video__inner">

        <h2 class="p-cont-video__ttl">
          <?php
          if (get_field('about-cpt-video-ttl')):
            the_field('about-cpt-video-ttl');
          endif;
          ?>
        </h2>

        <?php if (get_field('about-cpt-video-movie')): ?>
          <div class="p-cont-video__frame">
            <iframe
              src="https://www.youtube.com/embed/<?php the_field('about-cpt-video-movie'); ?>?rel=0"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen>
            </iframe>
          </div>
        <?php endif; ?>

        <div class="p-cont-video__txt">
          <p>
            <?php
            if (get_field('about-cpt-video-txt')):
              the_field('about-cpt-video-txt');
            endif;
            ?>
          </p>
        </div>

        <?php
        $terms = get_the_terms($post->ID, 'documents-cat');
        if ($terms) :
          foreach ($terms as $term) :
        ?>
            <section class="p-cont-video__cat-box">
              <h3 class="p-cont-video__h2"><?php echo $term->name; ?></h3>
              <div>
                <?php echo term_description($term->term_id, 'documents-cat'); ?>
              </div>
            </section>
        <?php
          endforeach;
        endif;
        ?>

      </article>
      <div class="p-tab-box__btn-box">
        <a class="c-btn" href="<?php echo home_url() . '/treatment/familiarize/'; ?>">一覧を見る　<i class="fas fa-angle-right"></i></a>
      </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>