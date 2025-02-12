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
    <article class="c-white-box-l">
      <h2 class="c-h2 c-white-box-l__h1">トラウマに対する一般的な反応
      </h2>
      <p>あらゆる種類のトラウマはストレス反応を引き起こします。人々はしばしば、トラウマとなる出来事の後、生き延びたことに対する安堵感を最初に感じると言います。その後、ストレス、恐怖、怒りが続くことがあります。トラウマによって、人々は起こった出来事について考え続け、そのことを止められなくなることがあります。トラウマとなる出来事は、覚醒度（警戒感や「用心している」という感覚）を高めることもあります。その結果、人々は周囲の音や光景に対して強く反応するようになります。<br>
        自分自身や自分の知人がトラウマとなる出来事に反応したときに何が起こっているのかを理解できれば、恐怖心が和らぎ、うまく対処できるようになるかもしれません。 反応は誰にでも起こりうることです。危機に対応する訓練を受けた軍人や退役軍人、災害救助や救援活動に従事する人々にも起こりうることです。</p>
    </article>
  </div>

</div>

<article class="p-abt-trauma l-base">

  <section class="p-tab-box">
    <div class="u-sp">
      <!-- スマホはJS側で幅を調整 -->
      <ul class="p-tab-box__tab-list js-fit">
        <li class="active" data-tag="tag01">身体の反応</li>
        <li data-tag="tag02">考えの反応</li>
        <li data-tag="tag03">気持ちの反応</li>
      </ul>
    </div>
    <div class="u-pc">
      <ul class="p-tab-box__tab-list -fixed-padding">
        <li class="active" data-tag="tag01">身体の反応</li>
        <li data-tag="tag02">考えの反応</li>
        <li data-tag="tag03">気持ちの反応</li>
      </ul>
    </div>

    <div class="p-tab-box__wrapper">

      <div class="p-tab-box__item active" data-targetTag="tag01">
        <section class="p-tab-box__inner">

          <h3 class="c-h2 p-tab-box__h1">身体の反応</h3>

          <div class="p-tab-box__top-txt">
            <p>命にかかわるような重大な出来事に直面すると、しばしば、「闘争ー逃走ー凍結反応」と呼ばれる身体の反応が自動的に生じます。「危ない！」という信号を脳がキャッチすると、自分の身を守り、生き残る可能性を高めるために必要な準備を、身体が始めるのです。<br>
              以下に示すような身体の反応は、自分自身の意思とは関係なく、自動的に生じるようにプログラムされています。危機に直面したとき、ゆっくり考えていたら、その間に命が奪われてしまうかもしれません。いち早く反応することで、それだけ、生き延びる確率を高めることができます。</p>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-01.png" alt="" class="p-img-right-btm-box__img -influence01">
              <h2 class="c-h3 p-tab-box__h2">たたかう・逃げる</h2>
              <p>
                走ったり戦ったりできるように、身体が準備をします。手や足の大きな筋肉に血液と酸素がすばやく送りこまれるため、心臓がドキドキしたり、血の気が引いて気絶しそうになったり、お腹を蹴られたような感覚になります。また、その瞬間に必要のない身体の機能が低下します。つまり、難しいことをじっくり考えたり、食べ物を消化するのは後回しになります。
              </p>
            </div>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.png" alt="" class="p-img-right-btm-box__img -influence02">
              <h2 class="c-h3 p-tab-box__h2">かたまる</h2>
              <p>
                身体の痛みと感情的な痛みを和らげようとするスイッチが、自動的に入ります。痛みを感じなくなったり、まるで映画を見ているかのように、その出来事が他の誰かに起こっているような感覚になる人もいます。感情や時間の感覚が麻痺したり、自分の体から抜け出したような感覚を体験することもあります。
              </p>
            </div>
          </div>

          <div class="p-tab-box__btm-txt">
            <p>出来事の最中に生じた上記のような反応は、その時の光景や音、においなどと結びついて記憶され、危機が去った後でも、トラウマや危険を知らせるアラームとして機能するようになることがあります。例えば、横断歩道を渡っているときに事故に遭った人が、事故後に横断歩道を見ると固まってしまう、といったことが起こります。危険を知らせるアラームが誤作動して、安全な場面でも、身体が反応してしまうのです。<br>
              そうした誤作動は、通常は、時が経つにつれて弱まっていきます。アラームが鳴っても、自分の身に危険が及ばない経験を繰り返すことで、だんだんと、「もう安全なんだ」ということがわかってくるためです。一方で、出来事を思い出させるような手がかりを避けることで、誤作動に気づく機会を逃してしまい、何が危険で何が危険でないのか、正確に判断できないままになってしまいます。
            </p>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag02">
        <section class="p-tab-box__inner">

          <h3 class="c-h2 p-tab-box__h1">考えの反応</h3>

          <div class="p-tab-box__top-txt">
            <p>予想もしなかったショックな出来事に直面した時、人は、起こったことの意味を理解しようとします。「どうしてこんなことが起こったのだろう？」「なんで私がこんな目に遭わなかくてはならなかったのだろう？」と自分に問いかけ、それに答えを出すことで、自分を納得させようとするのです。<br>
              その自問自答の中で、人は「考え」を調節します。それまでの価値観に合わせて出来事を解釈することもあれば、出来事によって世界観や自分に対する見方が大きく揺るがされることもあります。もともと持っていた考え方が、「やっぱりそうだ」と確信されることもあります。いずれにしても、予期せぬ、あるいは納得し得ない理不尽な体験を、自分で理解しようとする試みです。以下に、トラウマを体験した後に生じる考えの反応のパターンを示しました。</p>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-01.png" alt="" class="p-img-right-btm-box__img -influence01">
              <h2 class="c-h3 p-tab-box__h2">もともと持っていた考えに則り出来事を解釈する</h2>
              <p>
                例えば、「悪いことをするとバチが当たる」と教えられて育った人が酷い目に遭うと、「私が何か悪いことをしたから、こんな酷いことが起こった」と、出来事を解釈するかもしれません。予期せぬ出来事が起こって理解しがたいときには、それまで抱いていた考え方のフィルターを通して出来事を解釈することで、自分を納得させようとすることがあります。
              </p>
            </div>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.png" alt="" class="p-img-right-btm-box__img -influence02">
              <h2 class="c-h3 p-tab-box__h2">これまで持っていた考えを極端に変える</h2>
              <p>
                「世の中はいい人ばかり」と捉えていた人が、人に酷い裏切られ方をすると、「世の中は悪い人ばかり」「もう誰も信じられない」と考えるようになるかもしれません。出来事がそれまで抱いてきた世界観と合わない時は、自分の信念をがらりと変えることで、自分を納得させようとすることがあります。
              </p>
            </div>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-03.png" alt="" class="p-img-right-btm-box__img -influence02">
              <h2 class="c-h3 p-tab-box__h2">これまで持っていた考えを強める</h2>
              <p>長い間つらい人生を送ってきて、トラウマを受ける前から自分自身・他者・世界に対して否定的な見方を抱いている人もいます。そのような人々にとっては、出来事は、それまで抱いていた否定的な見方が正しかったことを確信するきっかけになるかもしれません。例えば、「他の人は信用できない」と考えていた人が、他の人から裏切られる体験をすると、より一層人を信じられなくなります。</p>
            </div>
          </div>

          <div class="p-tab-box__btm-txt">
            <p>上記のような考え方をしていると、自分自身が苦しかったり、人とうまく関わっていくのが難しくなったりすることがあります。もし、出来事を体験してから生きているのが苦しいと感じるのなら、いったん落ち着ついて、その出来事の事実をよく見直してみることが役立つかもしれません。「この出来事って、本当のところ、何だったのだろうか」を改めて考えてみることで、苦しさから抜け出す糸口が見つかるかもしれません。</p>
          </div>

          <div class="p-tab-box__btn-box">
            <a href="../treatment/about-cpt" class="c-btn">CPTについて詳しく見る　<i class="fas fa-angle-right"></i></a>
          </div>

        </section>
      </div>

      <div class="p-tab-box__item" data-targetTag="tag03">
        <section class="p-tab-box__inner">

          <h3 class="c-h2 p-tab-box__h1">気持ちの反応</h3>

          <div class="p-tab-box__top-txt">
            <p>トラウマとなるような出来事の後には、2種類の感情が起こります。ひとつめは、出来事から生じる「自然な感情」、もうひとつの感情は、出来事に関連してあなたが考えることから生まれる「作られた感情」です。<br>
              出来事の最中や後に、本来は自然に体験されるはずの感情を感じる機会がもてなかったり、知らぬ間に抑え込まれてしまうことがあります。一方で、本来は体験し得なかった感情が生じて、苦しむようなこともあります。<br>
              「作られた感情」はその元となった考えを見直し、「自然な感情」は自然に任せて感じることで、トラウマによって揺さぶられた気持ちは次第に穏やかになっていきます。</p>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-01.png" alt="" class="p-img-right-btm-box__img -influence01">
              <h2 class="c-h3 p-tab-box__h2">自然な感情</h2>
              <p>
                同じような出来事に出会えば誰でも感じるような普遍的な感情は、「自然な感情」です。危険にさらされたときは「恐怖」が、傷つけられたときは「怒り」が、自分にとって良いことがあったら「喜び」が、大事なものを失ったら「悲しみ」が生まれます。<br>
                自然な感情は、そのままに感じるようにすれば、自然と消えていきます。例えば、悲しいことがあったら思いっきり悲しみ、泣くことで、感情が穏やかに変化していきます。
              </p>
            </div>
          </div>

          <div class="p-img-right-btm-box">
            <div>
              <div class="p-img-right-btm-box__space -influence"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-02.png" alt="" class="p-img-right-btm-box__img -influence02">
              <h2 class="c-h3 p-tab-box__h2">作られた感情</h2>
              <p>
                自然な感情とは対照的に、出来事から直接生じるのではなく、その出来事に対する解釈や考えから生じる感情を「作られた感情」と言います。意図的に「作り上げている」からではなく、その感情が、特定の思考によって作り出されるから「作られた感情」と呼ばれます。<br>
                たとえば、火事を経験した人が、「他の人を助けるべきだったのに、なんで自分はそうしなかったのだろう」「いつまで経っても立ち直れない自分は、ダメな人間だ」などと考えていると、罪悪感や自分への怒りが湧いてくるかもしれません。出来事についてふり返る時、くり返しこのように考える中で、作られた感情が増えたり強まったりします。
              </p>
            </div>
          </div>

          <div class="p-img-right-btm-box -influence03">
            <div>
              <div class="p-img-right-btm-box__space -influence03"></div>
              <img src="<?php echo THEME_DIR_URI; ?>learn/influence-03.png" alt="" class="p-img-right-btm-box__img -influence02">
              <h2 class="c-h3 p-tab-box__h2">自然な感情と作られた感情の関係</h2>
              <p>トラウマを経験した後、作られた感情によって、自然な感情を感じるのが妨げられてしまうことがあります。例えば、人からひどい暴力を振るわれた人が、暴力を振るった相手に怒りやひどいことが起こった悲しみを感じるかわりに、自分自身に腹を立てることがあります。「相手を怒らせて暴力を振るうような態度をとった自分が悪い」「相手が怒るのを防げなかった自分は愚かだ」と考えて、自分に腹を立てるのです。<br>
                出来事の経験から立ち直るには、作られた感情を生みだす考えを見つめ直し、自然な感情を感じるのを自分に許すことが大切です。自然な感情を感じるようにすれば、辛い感情は時間とともに和らぎ、やがて消えていくからです。</p>
            </div>
          </div>

        </section class="p-tab-box__inner">
      </div>

    </div>
  </section>
</article>

<?php get_footer(); ?>