<?php /*Template Name: page-top */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="entry-content">
		<?php the_content(); ?>
  </section>
<?php endwhile; endif; ?>

<div class="lang"><?php echo do_shortcode( '[bogo]' ); ?></div>


<?php $locale = get_locale(); /* 現在のロケールを取得 */ ?>
<?php if( 'en_US' == $locale ): ?>
	<!-- （英語用） -->
	<?php get_template_part("lib/parts/parts-post-en"); ?>
<?php else: ?>
	<!-- （英語以外用、日本語と英語のみの場合は日本語用） -->
	<?php get_template_part("lib/parts/parts-post"); ?>
<?php endif; ?>



<?php get_footer(); ?>
