<?php get_header(); ?>
<?php get_template_part("lib/parts/parts-h1"); ?>
<?php get_template_part("lib/parts/parts-breadcrumb"); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="entry-content content-single">
    <div class="inner">
			<h2 class="style_ttl"><?php the_title(); ?></h2>
			<p class="data"><?php the_time('Y/m/d'); ?></p>
			<div class="single-text-box"><?php the_content(); ?></div>
		</div>
  </article>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>