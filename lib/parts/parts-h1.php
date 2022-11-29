<?php if(is_tax('samplecat')): //特定のタクソノミー一覧 ?>
  <h1 class="page-ttl"><span><?php the_archive_title(); ?></span></h1>
<?php elseif (is_post_type_archive('sample')): //特定のカスタム投稿タイプのアーカイブページ ?>
  <h1 class="page-ttl"><span><?php the_archive_title(); ?></span></h1>
<?php elseif (is_archive()): ?>
  <h1 class="page-ttl"><span><?php the_archive_title(); ?></span></h1>
<?php elseif (is_search()): ?>
  <h1 class="page-ttl"><span>検索結果</span></h1>
<?php else:?>
  <h1 class="page-ttl"<?php if(get_field('page_ttl_bg')): ?> style="background-image: url(<?php the_field('page_ttl_bg'); ?>);"<?php endif; ?>><span><?php the_title(); ?></span></h1>
<?php endif; ?>