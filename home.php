<?php get_header(); ?>
<?php get_template_part("lib/parts/parts-h1"); ?>
<?php get_template_part("lib/parts/parts-breadcrumb"); ?>

	<section class="archive_box">
    <div class="container gutters">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="row custom_content">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="col span_5">
						<figure class="archive_img">
							<a href="<?php the_permalink(); ?>" >
								<?php
								//アイキャッチの取得
								$image_id = get_post_thumbnail_id();
								$image = wp_get_attachment_image_src( $image_id, 'full');
								echo '<img src="'.$image[0].'" alt="'.get_the_title().'">';
								?>
							</a>
						</figure>
					</div>
				<?php endif;?>
        <div class="col <?php if ( has_post_thumbnail() ) : ?>span_7<?php else:?>span_12<?php endif;?>">
          <h2 class="archive_title"><?php the_title(); ?></h2>
          <p class="archive_data"><?php the_time('Y/m/d'); ?></p>
          <div class="archive_text_box"><?php the_excerpt(); ?></div>
          <p class="btn_more"><a href="<?php the_permalink(); ?>" >続きを読む</a></p>
        </div>
      </article>

      <?php endwhile; endif; ?>
			<?php get_template_part("lib/parts/parts-pagination"); ?>
    </div>
  </section>

<?php get_footer(); ?>
