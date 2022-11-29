<?php /*Template Name: page-top */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="entry-content">
		<?php the_content(); ?>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
