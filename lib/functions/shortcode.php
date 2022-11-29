<?php
  // 投稿カテゴリ別一覧
	// [(コード名) slug="(スラッグ)" per="(記事数)"]
  add_shortcode( 'news', function($atts) {
    extract(shortcode_atts( array(
        'slug' => null,
        'per' => '10',
    ), $atts ));

    $paged = get_query_var('paged');
    $args = array(
      'posts_per_page' => $per,
      'paged' => $paged,
      'category_name' => $slug,
      'post_type' => 'post'
    );
    $the_query = new WP_Query( $args );

    if($the_query->have_posts()) {
      ob_start(); ?>

      <dl class="post-list">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div>
					<a href="<?php the_permalink(); ?>">
						<dt><?php echo get_the_date('Y.m.d'); ?></dt>
						<dd><?php
									$days=14; //Newをつける日数
									$today=date_i18n('U'); $entry=get_the_time('U');
									$diff1=date('U',($today - $entry))/86400;
									if ($days > $diff1){echo'<span class="iconNew">New!</span>';}
								?>
						<?php the_title_attribute(); ?></dd>
					</a>
				</div>
        <?php endwhile; wp_reset_postdata(); ?>
      </dl>

      <?php
      return ob_get_clean();
    }
  } );

  // Facebook
	// [fb url="【Facebook URL】"]
  add_shortcode( 'fb', function($atts) {
    extract(shortcode_atts( array(
        'url' => null,
        'width' => '500',
    ), $atts ));
    ob_start(); ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v12.0';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-page" data-href="<?= $url ?>" data-tabs="timeline" data-width="<?= $width ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?= $url ?>" class="fb-xfbml-parse-ignore"><a href="<?= $url ?>"><?= $url ?></a></blockquote></div>

    <?php
    return ob_get_clean();
  } );

  // Twitter
	// [tw url="【Twitter URL】"]
  add_shortcode( 'tw', function($atts) {
    extract(shortcode_atts( array(
        'url' => null,
        'width' => '500',
        'height' => '500',
    ), $atts ));
    ob_start(); ?>

    <a class="twitter-timeline" data-width="<?= $width ?>" data-height="<?= $height ?>" href="<?= $url ?>?ref_src=twsrc%5Etfw"><?= $url ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <?php
    return ob_get_clean();
  } );

	function getNewItems($atts) {
		extract(shortcode_atts(array(
			"num" => '',	//最新記事リストの取得数
			"cat" => ''	//表示する記事のカテゴリー指定
		), $atts));
		global $post;
		$oldpost = $post;
		$myposts = get_posts('post_type=news&numberposts='.$num.'&order=DESC&orderby=post_date&taxonomy=news&term='.$cat);
		$retHtml='<dl>';
		foreach($myposts as $post) :
		$cat = get_the_terms($post->ID,'');//get_the_categoryをget_the_termsに変更
		$catname = $cat[0]->cat_name;
		$catslug = $cat[0]->slug;
		setup_postdata($post);
		$days=14; //Newをつける日数
		$today=date_i18n('U');
		$entry=get_the_time('U');
		$diff1=date('U',($today - $entry))/86400;
		// if(has_post_thumbnail()){
		// 	$retHtml.=get_the_post_thumbnail($page->ID,'medium');
		// }
		$retHtml.='<dt>'.get_the_date().'</dt>';
		$retHtml.='<dd>';
		if ($days > $diff1) {
			$retHtml.='<span class="iconNew">New!</span>';
		}
		$retHtml.='<a href="'.get_permalink().'">'.the_title("","",false).'</a></dd>';
		endforeach;
		$retHtml.='</dl>';
		$post = $oldpost;
		wp_reset_postdata();
		return $retHtml;
	}
	add_shortcode("news-custom", "getNewItems");



//ACF サイト設定のショートコード（法人の一人称）
function get_site_our() {
	$myshop = get_field('site_our', 'option');
	return $myshop;
}
add_shortcode('show_site_our', 'get_site_our');
