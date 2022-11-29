<div id="side_column">
  <?php get_search_form(); ?>
  <h2 class="side_ttl">最近の記事</h2>
  <div class="side_news">
    <ul><?php wp_get_archives( 'type=postbypost&limit=5' ); ?></ul>
  </div>
  <div class="side_shop_box">
    <p class="side_shop_img"><img src="<?php echo get_template_directory_uri(); ?>/lib/img/share/side_img01.jpg" width="240" height="153" alt=""></p>
    <h3 class="side_shop_ttl">店長コメント</h3>
    <p class="side_shop_txt">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
  </div>
  <div class="news_box cf">
    <h3>カテゴリー</h3>
    <ul class="side_list">
      <?php
        $args = array(
          'orderby' => 'name'
        );
        $categories = get_categories( $args );
        foreach ( $categories as $category ) {
          $cat_link = get_category_link($category->cat_ID);
          echo '<li class="category-list__item"><a href="' . $cat_link . '">' . $category->name . '</a></li>';
        }
      ?>
    </ul>
  </div><!-- /.news_box -->
  <div class="news_box cf">
    <h3>アーカイブ</h3>
    <ul class="side_list">
      <?php wp_get_archives( 'post_type=post&type=monthly' ); ?>
    </ul>
  </div><!-- /.news_box -->
  <div class="news_box cf">
    <h3 class="ttl_side">最新のお知らせ<a href="/news/">一覧</a></h3>
    <dl class="news_list">
    <?php query_posts('posts_per_page=5&cat=3&paged='.$paged); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <dt class="news_date"><?php the_time('Y.m.d') ?></dt>
      <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    </dl>
  </div><!-- /.news_box -->
</div>