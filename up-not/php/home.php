<?php get_header(); ?>

  <h1 class="page_ttl">ブログ</h1>
  <div class="breadcrumbBox">
    <?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
  </div>

  <div class="inner post_box archive_box">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="archive_box_inner custom_content">
          <h2 class="archive_ttl"><?php the_title(); ?></h2>
          <figure class="archive_img">
            <a href="<?php the_permalink(); ?>" >
              <?php
              //アイキャッチの取得
              if (has_post_thumbnail()){
              $image_id = get_post_thumbnail_id();
              $image = wp_get_attachment_image_src( $image_id, 'full');
              echo '<img src="'.$image[0].'" alt="'.get_the_title().'">';
              //記事本文の最初の画像を取得+アイキャッチも記事本文にも画像がない場合の処理
              } else {?>
              <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
              <?php } ?>
            </a>
          </figure>
          <div class="archive_txt_wrap">
            <p class="archive_data"><?php the_time('Y/m/d'); ?></p>
            <div class="archive_txt_box"><?php the_excerpt(); ?></div>
            <p class="btn_more"><a href="<?php the_permalink(); ?>" >続きを読む</a></p>
          </div>
        </article>
      <?php endwhile; endif; ?>
      <?php if (function_exists("pagination")) {
          pagination($additional_loop->max_num_pages);
      } ?>
  </div><!-- /.inner -->


<?php get_footer(); ?>