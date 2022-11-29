<?php get_header(); ?>
<?php get_template_part("lib/parts/parts-h1"); ?>
<?php get_template_part("lib/parts/parts-breadcrumb"); ?>

  <?php if ( is_page('sitemap') ) : ?>
    <?php get_template_part("lib/parts/content-sitemap"); ?>
  <?php endif; ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="entry-content">
    <div class="inner">
      <?php the_content(); ?>
    </div><!-- /.post -->
  </section>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
