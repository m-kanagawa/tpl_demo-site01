<?php /*Template Name: page-top-en */ ?>
<?php get_header(); ?>

<!-- Slider全体のコンテナ -->
<div class="swiper mk-mv">
	<div class="swiper-wrapper mk-mv__inner">
		<!-- Slideさせたいコンテンツ -->
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image1.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image1_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">All your dreams can come true,</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">if we have the courage to pursue them.</span></p>
			</div>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image2.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image2_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">Sometimes the questions</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">are complicated and</span></p>
				<p class="passingBar delay2"><span class="passingBarIn">the answers are simple.</span></p>
			</div>
		</div>
		<div class="swiper-slide">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image3.jpg" class="pc-only" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/lib/img/image3_sp.jpg" class="sp-only" alt="">
			<div class="mk-mv__copy">
				<p class="passingBar"><span class="passingBarIn">The great gift of human beings</span></p>
				<p class="passingBar delay1"><span class="passingBarIn">is that we have the power</span></p>
				<p class="passingBar delay2"><span class="passingBarIn">of empathy.</span></p>
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


<section class="sec01">
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
