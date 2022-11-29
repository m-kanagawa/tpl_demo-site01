<div class="top_contact">
  <div class="inner">
    <h2 class="style_ttl">お問い合わせ<span>Contact</span></h2>
    <div class="custom_txt">
      <p>ご質問・ご相談などございましたら、お電話やメールフォームよりお受けしています。<br>
      お気軽にお問い合わせください。</p>
       <?php if(get_field('site_tel', 'option')): ?><p class="info_top_tel">TEL:<a href="tel:<?php if(get_field('site_sptel', 'option')): ?><?php the_field('site_sptel', 'option'); ?><?php endif; ?>" class="tel-link"><?php the_field('site_tel', 'option'); ?></a></p><?php endif; ?>

      <?php if(get_field('site_address', 'option')): ?><p><?php if(get_field('site_postcode', 'option')): ?>〒<?php the_field('site_postcode', 'option'); ?> <?php endif; ?><?php the_field('site_address', 'option'); ?></p><?php endif; ?>
    </div>
    <p class="parts_btn_type_a text_center"><a href="<?php echo home_url(); ?>/contact/" title="お問い合わせはこちら">お問い合わせはこちら</a></p>
  </div>
 <?php if(get_field('site_googlemapiframe', 'option')): ?>
  <div class="custom_google_map">
    <?php the_field('site_googlemapiframe', 'option'); ?>
  </div>
  <?php endif; ?>
</div>