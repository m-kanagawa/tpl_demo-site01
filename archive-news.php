<?php get_header(); ?>
<?php get_template_part("lib/parts/parts-h1"); ?>
<?php get_template_part("lib/parts/parts-breadcrumb"); ?>




<section class="entry-content content-archive">
  <div class="inner">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h2 class="no-style"><?php the_title(); ?></h2>
      <p class="data"><?php the_time('Y/m/d'); ?></p>
      <div class="text"><?php the_excerpt(); ?></div>
      <p class="btn_more"><a href="<?php the_permalink(); ?>" >続きを読む</a></p>
    </article>
  <?php endwhile; endif; ?>
  </div><!-- /.inner -->
</section>

<?php get_template_part("lib/parts/parts-pagination"); ?>

<?php get_footer(); ?>
