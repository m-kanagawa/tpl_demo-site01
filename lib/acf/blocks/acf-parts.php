<?php if( have_rows('parts_set') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>

<?php while ( have_rows('parts_set') ) : the_row(); //値のループ ?>

  <?php if(get_row_layout() == 'm_ttl_set') : ?><h2 class="style_ttl style_ttl_pin <?php if( the_sub_field('m_ttl_class') ): ?><?php the_sub_field('m_ttl_class'); ?><?php endif; ?>"><?php the_sub_field('m_ttl'); //中見出し（h2） ?></h2>
  <?php elseif(get_row_layout() == 's_ttl_set') : ?><h3 class="style_ttl style_ttl_pin <?php if( the_sub_field('s_ttl_class') ): ?><?php the_sub_field('s_ttl_class'); ?><?php endif; ?>"><?php the_sub_field('s_ttl'); //小見出し（h3） ?></h3>
  <?php elseif(get_row_layout() == 'ss_ttl_set') : ?><h4 class="style_ttl style_ttl_pin <?php if( the_sub_field('ss_ttl_class') ): ?><?php the_sub_field('ss_ttl_class'); ?><?php endif; ?>"><?php the_sub_field('ss_ttl'); //極小見出し（h4） ?></h4>


  <?php elseif(get_row_layout() == 'acf_container') : //コンテンツ ?>
    <div class="container<?php if(get_sub_field('acf_container_margin') == 'true'): ?> gutters<?php endif; ?><?php if(get_sub_field('acf_container_class')): ?> <?php the_sub_field('acf_container_class'); ?><?php endif; ?>">
      <div class="row<?php if(get_sub_field('acf_container_reverse') == 'true'): ?> reverse<?php else: ?><?php endif; ?><?php if(get_sub_field('acf_container_sp_col') == 'col2'): ?> sp_image_cols sp_col2<?php elseif(get_sub_field('acf_container_sp_col') == 'col3'): ?> sp_image_cols sp_col3<?php endif; ?>">

        <?php if(have_rows('acf_container_col')): ?>
        <?php while(have_rows('acf_container_col')): the_row(); ?>

        <div class="col <?php if(get_sub_field('acf_container_span') == 'span_1'): ?>span_1<?php elseif(get_sub_field('acf_container_span') == 'span_2'): ?>span_2<?php elseif(get_sub_field('acf_container_span') == 'span_3'): ?>span_3<?php elseif(get_sub_field('acf_container_span') == 'span_4'): ?>span_4<?php elseif(get_sub_field('acf_container_span') == 'span_5'): ?>span_5<?php elseif(get_sub_field('acf_container_span') == 'span_6'): ?>span_6<?php elseif(get_sub_field('acf_container_span') == 'span_7'): ?>span_7<?php elseif(get_sub_field('acf_container_span') == 'span_8'): ?>span_8<?php elseif(get_sub_field('acf_container_span') == 'span_9'): ?>span_9<?php elseif(get_sub_field('acf_container_span') == 'span_10'): ?>span_10<?php elseif(get_sub_field('acf_container_span') == 'span_11'): ?>span_11<?php else: ?>span_12<?php endif; ?><?php if(get_sub_field('acf_container_offset') == 'offset_1'): ?> offset_1<?php elseif(get_sub_field('acf_container_offset') == 'offset_2'): ?> offset_2<?php elseif(get_sub_field('acf_container_offset') == 'offset_3'): ?> offset_3<?php elseif(get_sub_field('acf_container_offset') == 'offset_4'): ?> offset_4<?php elseif(get_sub_field('acf_container_offset') == 'offset_5'): ?> offset_5<?php elseif(get_sub_field('acf_container_offset') == 'offset_6'): ?> offset_6<?php elseif(get_sub_field('acf_container_offset') == 'offset_7'): ?> offset_7<?php elseif(get_sub_field('acf_container_offset') == 'offset_8'): ?> offset_8<?php elseif(get_sub_field('acf_container_offset') == 'offset_9'): ?> offset_9<?php elseif(get_sub_field('acf_container_offset') == 'offset_10'): ?> offset_10<?php elseif(get_sub_field('acf_container_offset') == 'offset_11'): ?> offset_11<?php else: ?><?php endif; ?><?php if( get_sub_field('acf_container_break')): ?> break<?php endif; ?>">
        <?php if( have_rows('acf_container_parts') ): ?>
          <?php while ( have_rows('acf_container_parts') ) : the_row(); ?>
            <?php if(get_row_layout() == 'acf_container_h2_set') : ?><h2 class="style_ttl <?php if( the_sub_field('acf_container_h2_class') ): ?> <?php the_sub_field('acf_container_h2_class'); ?><?php endif; ?>"><?php the_sub_field('acf_container_h2'); //中見出し（h2） ?></h2>
            <?php elseif(get_row_layout() == 'acf_container_h3_set') : ?><h3 class="style_ttl <?php if( the_sub_field('acf_container_h3_class') ): ?> <?php the_sub_field('acf_container_h3_class'); ?><?php endif; ?>"><?php the_sub_field('acf_container_h3'); //小見出し（h3） ?></h3>
            <?php elseif(get_row_layout() == 'acf_container_h4_set') : ?><h4 class="style_ttl <?php if( the_sub_field('acf_container_h4_class') ): ?> <?php the_sub_field('acf_container_h3_class'); ?><?php endif; ?>"><?php the_sub_field('acf_container_h4'); //極小見出し（h4） ?></h4>
            <?php elseif(get_row_layout() == 'acf_container_text_set') : //本文 ?><div class="custom_txt"><?php the_sub_field('acf_container_text'); ?></div>
            <?php elseif(get_row_layout() == 'acf_container_img_set'): //画像 ?>
              <figure class="<?php if(get_sub_field('acf_container_img_position') == 'left'): ?>text-left<?php elseif(get_sub_field('acf_container_img_position') == 'center'): ?>text-center<?php else: ?>text-right<?php endif; ?>">
                <?php if(get_sub_field('acf_container_img_link') == 'true'): ?>
                <?php $link = get_sub_field('acf_container_img_url'); ?>
                <?php
                if( $link ):
                  $link_url = $link['url'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                <?php endif; ?>
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php elseif( get_sub_field('acf_container_img_lightbox')): ?>
                <a class="custom_gallery" href="<?php the_sub_field('acf_container_img'); ?>"<?php if( get_sub_field('acf_container_img_alt')): ?> title="<?php the_sub_field('acf_container_img_alt'); ?>"<?php endif; ?>>
                <?php endif; ?>
                <img src="<?php the_sub_field('acf_container_img'); ?>"<?php if( get_sub_field('acf_container_img_alt')): ?> alt="<?php the_sub_field('acf_container_img_alt'); ?>"<?php endif; ?> />
                <?php if(get_sub_field('acf_container_img_link') == 'true'): ?></a><?php elseif( get_sub_field('acf_container_img_lightbox')): ?></a><?php endif; ?>
              </figure>
            <?php elseif(get_row_layout() == 'acf_container_btn_set'): //ボタン ?>
              <?php $link = get_sub_field('acf_container_btn'); ?>
              <?php if( $link ): $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
              <?php endif; ?>
              <p class="parts_btn_type_a<?php if(get_sub_field('acf_container_btn_position') == 'left'): ?> text-left<?php elseif(get_sub_field('acf_container_btn_position') == 'center'): ?> text-center<?php else: ?> text-right<?php endif; ?>"><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
							<?php elseif(get_row_layout() == 'acf_container_source_set'): ?>
							<?php
								remove_filter('acf_the_content', 'wpautop');
								the_sub_field('acf_container_source');
								add_filter('acf_the_content', 'wpautop');
							?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>

        </div><!--/ col -->

        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

  <?php elseif(get_row_layout() == 'txt_set') : //本文 ?><div class="custom_txt custom_txt_pin"><?php the_sub_field('txt_honbun'); ?></div>

  <?php elseif(get_row_layout() == 'img_set'): //画像 ?>
    <?php //if ( wp_is_mobile() ) : ?>
      <?php if(get_sub_field('img_pc_or_sp') == 'sp'): //画像：スマホ ?>
        <p class="custom_img custom_img_pin sp-only <?php if(get_sub_field('img_position') == 'left'): ?>text-left<?php elseif(get_sub_field('img_position') == 'center'): ?>text-center<?php elseif(get_sub_field('img_position') == 'right'): ?>text-right<?php endif; ?>">
          <?php if(get_sub_field('img_link') == 'true'): ?>
            <a href="<?php the_sub_field('img_link_url'); ?>"<?php if(get_sub_field('img_link_target') == 'blank'): ?> target="_blank"<?php endif; ?>>
          <?php elseif( get_sub_field('img_lightbox')): ?>
            <a class="custom_gallery" href="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> title="<?php the_sub_field('img_alt'); ?>"<?php endif; ?>>
          <?php endif; ?>
          <img src="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> alt="<?php the_sub_field('img_alt'); ?>"<?php endif; ?> />
          <?php if(get_sub_field('img_link') == 'true'): ?></a><?php elseif( get_sub_field('img_lightbox')): ?></a><?php endif; ?></p>
      <?php endif; ?>
    <?php //else: ?>
      <?php if(get_sub_field('img_pc_or_sp') == 'pc'): //画像：PC ?>
        <p class="custom_img custom_img_pin pc-only <?php if(get_sub_field('img_position') == 'left'): ?>text-left<?php elseif(get_sub_field('img_position') == 'center'): ?>text-center<?php elseif(get_sub_field('img_position') == 'right'): ?>text-right<?php endif; ?>">
          <?php if(get_sub_field('img_link') == 'true'): ?>
            <a href="<?php the_sub_field('img_link_url'); ?>"<?php if(get_sub_field('img_link_target') == 'blank'): ?> target="_blank"<?php endif; ?>>
          <?php elseif( get_sub_field('img_lightbox')): ?>
            <a class="custom_gallery" href="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> title="<?php the_sub_field('img_alt'); ?>"<?php endif; ?>>
          <?php endif; ?>
          <img src="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> alt="<?php the_sub_field('img_alt'); ?>"<?php endif; ?> />
          <?php if(get_sub_field('img_link') == 'true'): ?></a><?php elseif( get_sub_field('img_lightbox')): ?></a><?php endif; ?></p>
      <?php endif; ?>
    <?php //endif; ?>
    <?php if(get_sub_field('img_pc_or_sp') == 'pcsp'): //画像：共通 ?>
      <p class="custom_img custom_img_pin <?php if(get_sub_field('img_position') == 'left'): ?>text-left<?php elseif(get_sub_field('img_position') == 'center'): ?>text-center<?php elseif(get_sub_field('img_position') == 'right'): ?>text-right<?php endif; ?>">
        <?php if(get_sub_field('img_link') == 'true'): ?>
          <a href="<?php the_sub_field('img_link_url'); ?>"<?php if(get_sub_field('img_link_target') == 'blank'): ?> target="_blank"<?php endif; ?>>
        <?php elseif( get_sub_field('img_lightbox')): ?>
          <a class="custom_gallery" href="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> title="<?php the_sub_field('img_alt'); ?>"<?php endif; ?>>
        <?php endif; ?>
        <img src="<?php the_sub_field('img_img'); ?>"<?php if( get_sub_field('img_alt')): ?> alt="<?php the_sub_field('img_alt'); ?>"<?php endif; ?> />
        <?php if(get_sub_field('img_link') == 'true'): ?></a><?php elseif( get_sub_field('img_lightbox')): ?></a><?php endif; ?></p>
    <?php endif; ?>


  <?php elseif(get_row_layout() == 'imgs_set'): //画像(複数) ?>
        <ul class="imgs-block<?php if(get_sub_field('imgs_set_img_num') == '3'): ?> set-3<?php elseif(get_sub_field('imgs_set_img_num') == '4'): ?> set-4<?php endif; ?><?php if(get_sub_field('imgs_set_img_display') == 'tate'): ?> imgs-block-sp-tate<?php elseif(get_sub_field('imgs_set_img_display') == 'tate2'): ?> imgs-block-sp-tate2<?php endif; ?>">
          <?php if(get_sub_field('imgs_set_img_01')): ?><li><p class="imgs-block-img"><?php if( get_sub_field('imgs_set_img_lightbox')): ?><a class="custom_gallery" href="<?php the_sub_field('imgs_set_img_01'); ?>"<?php if( get_sub_field('imgs_set_img_01_alt')): ?> title="<?php the_sub_field('imgs_set_img_01_alt'); ?>"<?php endif; ?>><?php endif; ?><img src="<?php the_sub_field('imgs_set_img_01'); ?>"<?php if( get_sub_field('imgs_set_img_01_alt')): ?> alt="<?php the_sub_field('imgs_set_img_01_alt'); ?>"<?php endif; ?> /><?php if( get_sub_field('imgs_set_img_lightbox')): ?></a><?php endif; ?></p>
            <?php if(get_sub_field('imgs_set_img_01_ttl')): ?><p class="imgs-block-ttl"><?php the_sub_field('imgs_set_img_01_ttl'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_01_txt')): ?><p class="imgs-block-txt"><?php the_sub_field('imgs_set_img_01_txt'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_01_btn')): ?><p class="imgs-block-btn"><a href="<?php the_sub_field('imgs_set_img_01_url'); ?>" title="<?php the_sub_field('imgs_set_img_01_btn'); ?>" <?php if(get_sub_field('imgs_set_img_01_target') == 'blank'): ?>target="_blank"<?php endif; ?>><?php the_sub_field('imgs_set_img_01_btn'); ?></a></p><?php endif; ?>
          </li><?php endif; ?>
          <?php if(get_sub_field('imgs_set_img_02')): ?>
            <li><p class="imgs-block-img"><?php if( get_sub_field('imgs_set_img_lightbox')): ?><a class="custom_gallery" href="<?php the_sub_field('imgs_set_img_02'); ?>"<?php if( get_sub_field('imgs_set_img_02_alt')): ?> title="<?php the_sub_field('imgs_set_img_02_alt'); ?>"<?php endif; ?>><?php endif; ?><img src="<?php the_sub_field('imgs_set_img_02'); ?>"<?php if( get_sub_field('imgs_set_img_02_alt')): ?> alt="<?php the_sub_field('imgs_set_img_02_alt'); ?>"<?php endif; ?> /><?php if( get_sub_field('imgs_set_img_lightbox')): ?></a><?php endif; ?></p>
            <?php if(get_sub_field('imgs_set_img_02_ttl')): ?><p class="imgs-block-ttl"><?php the_sub_field('imgs_set_img_02_ttl'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_02_txt')): ?><p class="imgs-block-txt"><?php the_sub_field('imgs_set_img_02_txt'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_02_btn')): ?><p class="imgs-block-btn"><a href="<?php the_sub_field('imgs_set_img_02_url'); ?>" title="<?php the_sub_field('imgs_set_img_02_btn'); ?>" <?php if(get_sub_field('imgs_set_img_02_target') == 'blank'): ?>target="_blank"<?php endif; ?>><?php the_sub_field('imgs_set_img_02_btn'); ?></a></p><?php endif; ?>
          </li><?php endif; ?>
          <?php if((get_sub_field('imgs_set_img_num') == '3') || (get_sub_field('imgs_set_img_num') == '4')): ?>
            <?php if(get_sub_field('imgs_set_img_03')): ?>
              <li><p class="imgs-block-img"><?php if( get_sub_field('imgs_set_img_lightbox')): ?><a class="custom_gallery" href="<?php the_sub_field('imgs_set_img_03'); ?>"<?php if( get_sub_field('imgs_set_img_03_alt')): ?> title="<?php the_sub_field('imgs_set_img_03_alt'); ?>"<?php endif; ?>><?php endif; ?><img src="<?php the_sub_field('imgs_set_img_03'); ?>"<?php if( get_sub_field('imgs_set_img_03_alt')): ?> alt="<?php the_sub_field('imgs_set_img_03_alt'); ?>"<?php endif; ?> /><?php if( get_sub_field('imgs_set_img_lightbox')): ?></a><?php endif; ?></p>
            <?php if(get_sub_field('imgs_set_img_03_ttl')): ?><p class="imgs-block-ttl"><?php the_sub_field('imgs_set_img_03_ttl'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_03_txt')): ?><p class="imgs-block-txt"><?php the_sub_field('imgs_set_img_03_txt'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_03_btn')): ?><p class="imgs-block-btn"><a href="<?php the_sub_field('imgs_set_img_03_url'); ?>" title="<?php the_sub_field('imgs_set_img_03_btn'); ?>" <?php if(get_sub_field('imgs_set_img_03_target') == 'blank'): ?>target="_blank"<?php endif; ?>><?php the_sub_field('imgs_set_img_03_btn'); ?></a></p><?php endif; ?>
            </li><?php endif; ?>
          <?php endif; ?>
          <?php if(get_sub_field('imgs_set_img_num') == '4'): ?>
            <?php if(get_sub_field('imgs_set_img_04')): ?>
              <li><p class="imgs-block-img"><?php if( get_sub_field('imgs_set_img_lightbox')): ?><a class="custom_gallery" href="<?php the_sub_field('imgs_set_img_04'); ?>"<?php if( get_sub_field('imgs_set_img_04_alt')): ?> title="<?php the_sub_field('imgs_set_img_04_alt'); ?>"<?php endif; ?>><?php endif; ?><img src="<?php the_sub_field('imgs_set_img_04'); ?>"<?php if( get_sub_field('imgs_set_img_04_alt')): ?> alt="<?php the_sub_field('imgs_set_img_04_alt'); ?>"<?php endif; ?> /><?php if( get_sub_field('imgs_set_img_lightbox')): ?></a><?php endif; ?></p>
            <?php if(get_sub_field('imgs_set_img_04_ttl')): ?><p class="imgs-block-ttl"><?php the_sub_field('imgs_set_img_04_ttl'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_04_txt')): ?><p class="imgs-block-txt"><?php the_sub_field('imgs_set_img_04_txt'); ?></p><?php endif; ?>
            <?php if(get_sub_field('imgs_set_img_04_btn')): ?><p class="imgs-block-btn"><a href="<?php the_sub_field('imgs_set_img_04_url'); ?>" title="<?php the_sub_field('imgs_set_img_04_btn'); ?>" <?php if(get_sub_field('imgs_set_img_04_target') == 'blank'): ?>target="_blank"<?php endif; ?>><?php the_sub_field('imgs_set_img_04_btn'); ?></a></p><?php endif; ?>
            </li><?php endif; ?>
          <?php endif; ?>
        </ul>

  <?php elseif(get_row_layout() == 'parts_btn'): //ボタン ?>
    <?php $link = get_sub_field('parts_btn_url'); ?>
    <?php if( $link ): $link_url = $link['url']; $link_title = $link['title']; $link_target = $link['target'] ? $link['target'] : '_self'; ?>
    <p class="<?php if(get_sub_field('parts_btn_type') == 'parts_btn_type_a'): ?>parts_btn_type_a<?php elseif(get_sub_field('parts_btn_type') == 'parts_btn_type_b'): ?>parts_btn_type_b<?php else: ?>parts_btn_type_c<?php endif; ?><?php if(get_sub_field('parts_btn_size') == 'small'): ?> btn_sm<?php elseif(get_sub_field('parts_btn_size') == 'large'): ?> btn_lg<?php endif; ?><?php if(get_sub_field('parts_btn_position') == 'left'): ?> text-left<?php elseif(get_sub_field('parts_btn_position') == 'center'): ?> text-center<?php elseif(get_sub_field('parts_btn_position') == 'right'): ?> text-right<?php endif; ?>"><a href="<?php echo esc_url($link_url); ?>" title="<?php echo esc_html($link_title); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
    <?php endif; ?>

		<?php elseif(get_row_layout() == 'list_faq') : //コンテンツ ?>
			<?php if(have_rows('list_faq_parts')): ?>
				<dl class="parts-faq">
				<?php while(have_rows('list_faq_parts')): the_row(); ?>
					<dt class="parts-faq__q"><?php the_sub_field('list_faq_q'); ?></dt>
					<dd class="parts-faq__a"><?php the_sub_field('list_faq_a'); ?></dd>
				<?php endwhile; ?>
				</dl>
			<?php endif; ?>

    <?php elseif(get_row_layout() == 'custom_video_set'): //埋込動画 ?>
      <div class="custom_video"><?php the_sub_field('custom_video_txt'); ?></div>
    <?php elseif(get_row_layout() == 'custom_google_map_set'): //GoogleMap ?>
      <div class="custom_google_map"><?php the_sub_field('custom_google_map_txt'); ?></div>

    <?php elseif(get_row_layout() == 'txt_img_set') : //本文＋画像 ?>
      <div class="<?php if(get_sub_field('txt_img_percent') == '1_9'): ?>row-1-9<?php elseif(get_sub_field('txt_img_percent') == '2_8'): ?>row-2-8<?php elseif(get_sub_field('txt_img_percent') == '4_6'): ?>row-4-6<?php elseif(get_sub_field('txt_img_percent') == '5_5'): ?>row-5-5<?php elseif(get_sub_field('txt_img_percent') == '6_4'): ?>row-6-4<?php elseif(get_sub_field('txt_img_percent') == '7_3'): ?>row-7-3<?php elseif(get_sub_field('txt_img_percent') == '8_2'): ?>row-8-2<?php elseif(get_sub_field('txt_img_percent') == '9_1'): ?>row-9-1<?php else: ?>row-3-7<?php endif; ?><?php if(get_sub_field('txt_img_position') == 'text_img'): ?> reverse<?php endif; ?>">
        <div class="<?php if(get_sub_field('txt_img_position') == 'img_text'): ?>left<?php else: ?>right<?php endif; ?>"><?php if( get_sub_field('txt_img_lightbox')): ?><a class="custom_gallery" href="<?php the_sub_field('txt_img_img'); ?>" title="<?php the_sub_field('txt_img_img_alt'); ?>"><?php endif; ?><img src="<?php the_sub_field('txt_img_img'); ?>" alt="<?php the_sub_field('txt_img_img_alt'); ?>" /><?php if( get_sub_field('txt_img_lightbox')): ?></a><?php endif; ?></div>
        <div class="<?php if(get_sub_field('txt_img_position') == 'text_img'): ?>left<?php else: ?>right<?php endif; ?>"><?php the_sub_field('txt_img_honbun'); ?></div>
      </div>
  <?php elseif(get_row_layout() == 'list_set'): ?>
    <div class="list-block">
      <?php if(get_sub_field('list_set_type')=='bulletize'): ?><ul><?php elseif(get_sub_field('list_set_type')=='number'): ?><ol><?php elseif(get_sub_field('list_set_type')=='check'): ?><ul class="check"><?php endif; ?>
        <?php while(the_repeater_field('list_set_repeater')): ?>
          <?php if(get_sub_field('list_set_repeater_text')!=''): ?>
            <li><?php the_sub_field('list_set_repeater_text'); ?></li>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php if(get_sub_field('list_set_type')=='number'): ?></ol><?php else: ?></ul><?php endif; ?>
    </div>
  <?php elseif(get_row_layout() == 'menu_table_start_set'): //テーブル：デザイン（開始） ?><table class="<?php if(get_sub_field('menu_table_class_set') == 'normal'): ?>normal_table<?php elseif(get_sub_field('menu_table_class_set') == 'menu'): ?>menu_table<?php endif; ?>">
  <?php elseif(get_row_layout() == 'menu_table_set'): //テーブル：行の追加（2列） ?>
    <?php if(get_sub_field('menu_table_set_in')): ?>
      <?php while(the_repeater_field('menu_table_set_in')): ?>
        <tr><?php if(get_sub_field('menu_table_set_left')): ?><th><?php the_sub_field('menu_table_set_left'); ?></th><?php endif; ?><?php if(get_sub_field('menu_table_set_right')): ?><td><?php the_sub_field('menu_table_set_right'); ?></td><?php endif; ?></tr>
      <?php endwhile; ?>
    <?php endif; ?>
  <?php elseif(get_row_layout() == 'menu_table_set_1'): //テーブル：行の追加（1列） ?>
    <tr><td colspan="2" class="td_cp2"><?php the_sub_field('menu_table_set_in_1'); ?></td></tr>
  <?php elseif(get_row_layout() == 'menu_table_end_set'): //テーブル：デザイン（終了） ?></table>

	<?php elseif(get_row_layout() == 'surround_start_set'): //囲みデザイン（開始） ?>
	<div<?php if(get_sub_field('surround_start_set_class')): ?> class="<?php the_sub_field('surround_start_set_class'); ?>"<?php endif; ?>>
		<?php if(get_sub_field('surround_start_set_inner')): ?><div class="inner"><?php endif; ?>
<?php elseif(get_row_layout() == 'surround_end_set'): //囲みデザイン（終了） ?>
	<?php if(get_sub_field('surround_end_set_inner')): ?></div><?php endif; ?>
	</div>

  <?php elseif(get_row_layout() == 'table_default_set'): //テーブル複数セル用 ?>
  <?php
  $table = get_sub_field( 'table_default' );
  if ( $table ) {
    echo '<p class="table_notes">← 下記の表は左右にスライドできます →</p>';
    echo '<div class="custom_table_scroll">';
    echo '<table class="normal_table custom_table">';
      if ( $table['header'] ) {
        echo '<thead>';
          echo '<tr>';
            foreach ( $table['header'] as $th ) {
              echo '<th>';
                echo $th['c'];
              echo '</th>';
            }
          echo '</tr>';
        echo '</thead>';
      }
      echo '<tbody>';
        foreach ( $table['body'] as $tr ) {
          echo '<tr>';
            foreach ( $tr as $td ) {
              echo '<td>';
                echo $td['c'];
              echo '</td>';
            }
          echo '</tr>';
        }
      echo '</tbody>';
    echo '</table>';
    echo '</div>';
  }
  ?>
  <?php elseif(get_row_layout() == 'acf_source'): ?>
		<?php
			remove_filter('acf_the_content', 'wpautop');
			the_sub_field('acf_source_set');
			add_filter('acf_the_content', 'wpautop');
		?>
  <?php endif; ?>

<?php endwhile; ?>

<?php endif; //parts_set?>
