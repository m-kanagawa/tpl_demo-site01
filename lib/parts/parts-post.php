<section class="news-box">
	<h2 class="">新着情報</h2>
	<div class="news-box__inner">
		<ul class="news-box__tab">
			<li class="tab is-active">ALL</li>
			<li class="tab">お知らせ</li>
			<li class="tab">イベント</li>
			<li class="tab">メニュー1</li>
			<li class="tab">メニュー2</li>
			<li class="tab">メニュー3</li>
		</ul>

		<div class="news-box__panel">

			<div class="panel is-show">
				<dl>
					<?php
						$query = new WP_Query();
						$arg = array (
							'posts_per_page' => 5, // 表示する件数
							// すべて表示させる場合は必要のない設定
							'category__in' => array( 1,2,3,4,5 ), // 表示したいカテゴリーのスラッグを指定
							'lang' => 'ja' //日本語のみ出力
						);
						$posts = $query->query( $arg );
						foreach ( $posts as $post ): // ループの開始
						setup_postdata( $post ); // 記事データの取得
						// 記事のカテゴリー情報を取得する
						$cat = get_the_category();
						$cat_name = $cat[0]->cat_name; // カテゴリー名
						$cat_slug = $cat[0]->category_nicename; // カテゴリースラッグ
					?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd>
						<a href="<?php echo home_url(); ?>/category/<?php echo $cat_slug ?>/" class="cat <?php echo $cat_slug ?>"><?php echo $cat_name; ?></a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</dd>
					<?php endforeach; wp_reset_postdata(); // 直前のクエリを復元する ?>
				</dl>
			</div><!-- panel -->

			<div class="panel">
				<?php
					$query = new WP_Query();
					$arg = array(
						'posts_per_page' => 5, // 表示する件数
						'category_name' => 'news', // 表示したいカテゴリーのスラッグを指定
						'lang' => 'ja' //日本語のみ出力
					);
					$posts = $query->query( $arg );
					if( $posts ): ?>
				<dl>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd><a href="<?php echo home_url(); ?>/category/news/" class="cat news">お知らせ</a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
					<?php endif; wp_reset_postdata(); ?>
				</dl>
			</div><!-- ./panel -->

			<div class="panel">
				<?php
					$query = new WP_Query();
					$arg = array(
						'posts_per_page' => 5, // 表示する件数
						'category_name' => 'event', // 表示したいカテゴリーのスラッグを指定
						'lang' => 'ja' //日本語のみ出力
					);
					$posts = $query->query( $arg );
					if( $posts ): ?>
				<dl>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd><a href="<?php echo home_url(); ?>/category/event/" class="cat event">イベント</a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
					<?php endif; wp_reset_postdata(); ?>
				</dl>
			</div><!-- ./panel -->

			<div class="panel">
				<?php
					$query = new WP_Query();
					$arg = array(
						'posts_per_page' => 5, // 表示する件数
						'category_name' => 'menu1', // 表示したいカテゴリーのスラッグを指定
						'lang' => 'ja' //日本語のみ出力
					);
					$posts = $query->query( $arg );
					if( $posts ): ?>
				<dl>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd><a href="<?php echo home_url(); ?>/category/event/" class="cat menu1">メニュー1</a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
					<?php endif; wp_reset_postdata(); ?>
				</dl>
			</div><!-- ./panel -->

			<div class="panel">
				<?php
					$query = new WP_Query();
					$arg = array(
						'posts_per_page' => 5, // 表示する件数
						'category_name' => 'menu2', // 表示したいカテゴリーのスラッグを指定
						'lang' => 'ja' //日本語のみ出力
					);
					$posts = $query->query( $arg );
					if( $posts ): ?>
				<dl>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd><a href="<?php echo home_url(); ?>/category/event/" class="cat menu2">メニュー2</a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
					<?php endif; wp_reset_postdata(); ?>
				</dl>
			</div><!-- ./panel -->

			<div class="panel">
				<?php
					$query = new WP_Query();
					$arg = array(
						'posts_per_page' => 5, // 表示する件数
						'category_name' => 'menu3', // 表示したいカテゴリーのスラッグを指定
						'lang' => 'ja' //日本語のみ出力
					);
					$posts = $query->query( $arg );
					if( $posts ): ?>
				<dl>
					<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
					<dt><?php echo get_the_date(); ?></dt>
					<dd><a href="<?php echo home_url(); ?>/category/event/" class="cat menu3">メニュー3</a><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<?php endforeach; ?>
					<?php endif; wp_reset_postdata(); ?>
				</dl>
			</div><!-- ./panel -->

		</div>
	</div>
</section>