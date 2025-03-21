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
  <div class="l-base p-thought-intro">
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">私たちの想い</h2>
      <p>このウェブサイトへと訪れていただきまして、誠にありがとうございます。<br>
        認知処理療法は、日本では20年ほど前に研究がはじまりました。<br>
        米国の病院や研究機関で長年、臨床心理の実践と研究にとり組まれてきた堀越勝さんが、当時、犯罪被害にあわれた方への支援のひとつとして日本に紹介したのがはじまりです。<br>
        心的外傷後ストレス症への認知処理療法は、当時からもっともエビデンスが積み重なっている心理療法でした。いまでは、45以上のランダム化比較試験（という厳格な検証方法）の結果が報告されており、世界中で必要とするかたに届けられています。<br>
        私たちは、トラウマティック・ストレスのケアや心的外傷後ストレス症への治療には、たしかな有効性や安全性が求められると考えてきました。そのために、この療法の普及に力を入れる前に、まずは科学的な検証を慎重に進めてまいりました。<br>
        その科学研究に20年を要してしまいましたが、日本でも認知処理療法を広く活用していただける根拠となるひとつの成果を公表できました。<br>
        今後は、トラウマティックな体験にあわれ、心的外傷後ストレス症や関連症状で苦しまれている方々に、認知処理療法を少しでも知っていただき、活用していただけたらと願っております。<br>
        このウェブサイトは、そのための情報をお伝えするものです。<br>
        あなたにとって、少しでもお役に立てられたらと、願っております。</p>
      <div class="p-thought-intro__note">
        <p>認知行動療法センター<br>
          研究開発部長<br>
          伊藤　正哉</p>
      </div>
    </article>
  </div>

</div>

<article class="l-base p-thought-mem">
  <h2 class="c-h2">CPTの研究・実践に取り組むメンバー</h2>
  <p class="p-thought-mem__txt">科学研究に取り組んできた20年、皆で力を合わせながら、ほんとうに多くの方々に助けていただきながら、歩んできました。<br>
    ここではそのほんの一部、現在CBTセンターと密に関わりながら活動しているメンバーを紹介します。<br>
    このメンバーがハブとなり、CPTの研究・実践をますます拡げていけたらと考えています。</p>
  <table class="p-thought-mem__table">
    <tr>
      <th>認知行動療法センター　CPT研究チーム</th>
      <td>伊藤 正哉　ITO, Masaya</td>
      <td>片柳 章子　KATAYANAGI, Akiko</td>
      <td>宮前 光宏　MIYAMAE, Mitsuhiro</td>
      <td>柳 百合子　YANAGI, Yuriko</td>
      <td>金子 響介　KANEKO, Kyosuke</td>
      <td>伊藤 愛　ITO, Ai</td>
    </tr>
    <tr>
      <th>連携機関　パートナー</th>
      <td>大江 美佐里　OE, Misari</td>
      <td>菊池 安希子　KIKUCHI, Akiko</td>
      <td>中島 聡美　NAKAJIMA, Satomi</td>
      <td>大澤 香織　OSAWA, Kaori</td>
      <td>山口 慶子　YAMAGUCHI, Keiko</td>
      <td>高岸 百合子　TAKAGISHI, Yuriko</td>
      <td>牧田 潔　MAKITA, Kiyoshi</td>
      <td>中山 千秋　NAKAYAMA, Chiaki</td>
      <td>今野 理恵子　KONNO Rieko</td>
      <td>猪俣 珠恵　INOMATA Tamae</td>
      <td>田中 敏志　TANAKA, Satoshi</td>
      <td>羽太 裕子　HABUTA, Yuko</td>
    </tr>
    <tr>
      <th>アドバイザー／スーパーバイザー</th>
      <td>堀越 勝　HORIKOSHI, Masaru</td>
      <td>蟹江 絢子　KANIE, Ayako</td>
      <td>パトリシア・A・リーシック　Patricia A. Resick</td>
    </tr>
  </table>
</article>

<?php get_footer(); ?>