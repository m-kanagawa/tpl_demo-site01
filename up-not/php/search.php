<?php get_header(); ?>
<?php get_template_part("lib/parts/parts-h1"); ?>
<?php get_template_part("lib/parts/parts-breadcrumb"); ?>
  <?php
      global $wp_query;
      $total_results = $wp_query->found_posts;
      $search_query = get_search_query();
  ?>
  <div class="inner post_box archive_box">
    <p><?php echo $search_query; ?>の検索結果<span>（<?php echo $total_results; ?>件）</span></p>
    <?php if( $total_results >0 ):if(have_posts()):while(have_posts()): the_post();?>
    <article class="archive_box_inner custom_content">
      <h2 class="archive_ttl"><?php the_title(); ?></h2>
      <div class="archive_txt_box"><?php the_excerpt(); ?></div>
      <p class="btn_more"><a href="<?php the_permalink(); ?>" >続きを読む</a></p>
    </article>
    <?php endwhile; endif; else: ?>
      <?php echo $search_query; ?> に一致する情報は見つかりませんでした。
    <?php endif; ?>
  </div><!-- /.inner -->
	<?php get_template_part("lib/parts/parts-pagination"); ?>
<?php get_footer(); ?>