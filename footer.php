</main>

<footer class="u-bg-light-gray">
	<div class="l-wide">
		<div class="p-ftr">

			<h2 class="p-ftr__h1"><a href="<?php echo home_url(); ?>">CPT</a></h2>

			<dl class=" p-ftr__list-01">
				<dd>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/about'; ?>">サイトについて</a></h3>
					<ul class="p-ftr__sub-list">
						<li><a href="<?php echo home_url() . '/about/thought'; ?>">想い</a></li>
						<!-- <li><a href="<?php echo home_url() . '/about/experienced-person'; ?>">トラウマを経験した方へ</a></li> -->
						<!-- <li><a href="<?php echo home_url() . '/about/family-friends'; ?>">トラウマを経験した方のご家族やご友人へ</a></li> -->
						<!-- <li><a href="<?php echo home_url() . '/about/supporter'; ?>">トラウマ経験者の支援を行う方へ</a></li> -->
					</ul>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/learn'; ?>">トラウマについて学ぶ</a></h3>
					<ul class="p-ftr__sub-list">
						<li><a href="<?php echo home_url() . '/learn/about-trauma'; ?>">トラウマとは</a></li>
						<li><a href="<?php echo home_url() . '/learn/influence'; ?>">トラウマの影響</a></li>
						<li><a href="<?php echo home_url() . '/learn/about-ptsd'; ?>">PTSDとは</a></li>
					</ul>
				</dd>

				<dd>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/treatment'; ?>">治療を知る</a></h3>
					<ul class="p-ftr__sub-list">
						<li><a href="<?php echo home_url() . '/treatment/treatment-ptsd'; ?>">PTSDの治療</a></li>
						<li><a href="<?php echo home_url() . '/treatment/about-cpt'; ?>">CPTとは</a></li>
						<li><a href="<?php echo home_url() . '/treatment/steps'; ?>">CPTの進め方</a></li>
						<li><a href="<?php echo home_url() . '/treatment/familiarize'; ?>">CPTに親しむ</a></li>
						<li><a href="<?php echo home_url() . '/treatment/voice'; ?>">治療を受けた人の声</a></li>
					</ul>
				</dd>
			</dl>

			<dl class="p-ftr__list-02">
				<dd>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/resources'; ?>">情報資源を得る</a></h3>
				</dd>
				<dd>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/news'; ?>">お知らせ</a></h3>
					<!-- <ul class="p-ftr__sub-list">
						<li><a href="">カテゴリ1</a></li>
						<li><a href="">カテゴリ2</a></li>
						<li><a href="">カテゴリ3</a></li>
					</ul> -->
				</dd>
				<?php
				// ログインユーザーのみに表示
				if (is_user_logged_in()):
				?>
					<dd>
						<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/expert'; ?>">専門家向け資料</a></h3>
					</dd>
				<?php endif; ?>
				<!-- <dd>
					<h3 class="p-ftr__ttl"><a href="<?php echo home_url() . '/column'; ?>">コラム</a></h3>
					<ul class="p-ftr__sub-list">
						<li><a href="">カテゴリ1</a></li>
						<li><a href="">カテゴリ2</a></li>
						<li><a href="">カテゴリ3</a></li>
					</ul>
				</dd> -->
			</dl>

			<div class="p-ftr__info-box">
				<img src="<?php echo THEME_DIR_URI; ?>common/logo.webp" alt="国立研究開発法人 国立精神・神経医療研究センター 認知行動療法センター" class="p-ftr__logo">
				<p>国立研究開発法人<br>
					国立精神・神経医療研究センター<br>
					認知行動療法センター</p>
				<p>法人番号 6012705001563</p>
				<p>〒187-8551 東京都小平市小川東町4-1-1</p>
			</div>

		</div>

		<div class="p-ftr__btm-box">
			<ul class="p-ftr__btm-list">
				<li><a href="<?php echo home_url() . '/privacy'; ?>">プライバシーポリシー</a></li>
				<li><a href="<?php echo home_url() . '/sitepolicy'; ?>">サイトポリシー</a></li>
				<!-- <li><a href="<?php //echo home_url() . '/sitemap'; 
													?>">サイトマップ</a></li> -->
			</ul>
			<p class="p-ftr__cr">Copyright © National Center of Neurology and Psychiatry All rights reserved.</p>
		</div>

	</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>