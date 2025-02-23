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

    <section class="p-reg__sec">
      <h2 class="">利用登録のお願い</h2>
      <p>認知処理療法に関心をお寄せいただき、ありがとうございます。<br>
        私たちは、みなさまに広くPTSDの支援法に関する情報を届けることに加えて、メンタルヘルスをサポートする臨床家のみなさまへ向けて、より専門的な情報をお伝えしたいと考えています。<br>
        メンタルヘルスや支援に係る専門家が、CPTについて学ぶにあたりお役立ていただける情報を、本サイトの利用ページにて提供してまいります。</p>
      <p>利用ページを利用するには、下記よりご登録いただけますようお願いいたします。<br>
        下記フォームに入力いただき、「登録」ボタンを押していただけましたら、入力されたメールアドレスに利用登録完了のお知らせをお送りいたします。<br>
        なお、ご利用にあたっては、必ずお一人ずつのご登録をお願いいたします。</p>
      <p>※ご登録される情報の扱いは、当サイトの<a href="<?php echo home_url() . '/privacy'; ?>" class="u-orange-marker">プライバシーポリシー</a>をご確認ください。</p>
    </section>
    <section class="p-reg__sec">
      <h2 class="">利用ページでご覧いただける主な内容</h2>
      <p>
      <ul class="c-list u-bold">
        <li><span>・</span>パブリックドメインのCPTマニュアル：退役軍人／軍版に開発されたマニュアルと、CPTの進捗管理に役立つ資材。</li>
        <li><span>・</span>動画教材：国立精神・神経医療研究センターで行った過去の研修動画。</li>
        <li><span>・</span>アセスメントツール：PCL-5（DSM-5のPTSD診断基準に準拠して作成された自己記入式尺度）</li>
      </ul>
      </p>
      <p>上記のほか、CPTを実施するにあたり参考となる情報をまとめています。心理支援に関する基本的な知識を持っている方を想定していますが、これから学んでいきたいとお考えの方にもご覧いただけたら幸いです。</p>
    </section>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="c-form">
          <div class="c-form__box p-form">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>