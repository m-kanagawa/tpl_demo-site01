<?php /*Template Name: page-top */ ?>
<?php get_header(); ?>

<!-- Slider全体のコンテナ -->
<div class="swiper mk-mv">
	<div class="swiper-wrapper mk-mv__inner">
		<!-- Slideさせたいコンテンツ -->
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image1.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image1_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">追いかけ続ける勇気さえあれば、</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">夢は必ず叶います</span></p>
			</div>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image2.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image2_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">時には、</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">問いが複雑になっているだけで、</span></p>
				<p class="passingBar delay2"><span class="passingBarIn">答えはごくシンプルなこと</span></p>
				<p class="passingBar delay3"><span class="passingBarIn">だったりします</span></p>
			</div>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image3.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image3_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">人間が授かった大いなる才能、</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">それは共感する力です</span></p>
			</div>
		</div>
	</div>
	<!-- ページネーション（※省略可） -->
	<div class="swiper-pagination"></div>
</div>

<section class="top-lead">
	<div class="top-lead__inner">
		<div class="top-lead__text-box">
			<h2>h2タイトルタイトルタイトルタイトルタイトル</h2>
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
		</div>
	</div>
</section>


<section class="sec02">
	<div class="sec01__inner">
		<h2>h2タイトルタイトルタイトルタイトルタイトル</h2>
		<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
	</div>
</section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="entry-content">
		<?php the_content(); ?>
  </section>
<?php endwhile; endif; ?>



<?php $locale = get_locale(); /* 現在のロケールを取得 */ ?>
<?php if( 'en_US' == $locale ): ?>
	<!-- （英語用） -->
	<?php get_template_part("lib/parts/parts-post-en"); ?>
<?php else: ?>
	<!-- （英語以外用、日本語と英語のみの場合は日本語用） -->
	<?php get_template_part("lib/parts/parts-post"); ?>
<?php endif; ?>



<?php get_footer(); ?>
