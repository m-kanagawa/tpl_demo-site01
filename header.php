<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<script src="https://kit.fontawesome.com/b7ba98895f.js" crossorigin="anonymous"></script>
<?php if(get_field('site_tag_head', 'option')): ?><?php the_field('site_tag_head', 'option'); ?><?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('site_tag_body', 'option')): ?><?php the_field('site_tag_body', 'option'); ?><?php endif; ?>
<header class="header">
  <div class="header__inner">
    <?php if ( is_home() || is_front_page() ) : ?>
      <h1 class="header__logo"><a href="<?php echo esc_url(home_url()); ?>" rel="home"><img src="<?php the_field('site_logo', 'option'); ?>" alt="<?php the_field('site_shopname', 'option'); ?>" class="mk pc-only"><img src="<?php the_field('site_logo_sp', 'option'); ?>" alt="<?php the_field('site_shopname', 'option'); ?>" class="mk sp-only"></a></h1>
    <?php else : ?>
      <p class="header__logo"><a href="<?php echo esc_url(home_url()); ?>" rel="home"><img src="<?php the_field('site_logo', 'option'); ?>" alt="<?php the_field('site_shopname', 'option'); ?>" class="mk pc-only"><img src="<?php the_field('site_logo_sp', 'option'); ?>" alt="<?php the_field('site_shopname', 'option'); ?>" class="mk sp-only"></a></p>
    <?php endif; ?>
    <div class="header__right">
      <ul class="header__address">
        <?php if(get_field('site_tel', 'option')): ?>
        <li class="header__address-tel">
        <a href="tel:<?php if(get_field('site_tel', 'option')): ?><?php the_field('site_tel', 'option'); ?><?php endif; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('site_tel', 'option'); ?></a></li>
        <?php endif; ?>
        <?php if(get_field('site_postcode', 'option')): ?>
        <li class="header__address-text">〒<?php the_field('site_postcode', 'option'); ?> <?php the_field('site_address', 'option'); ?></li>
        <?php endif; ?>
      </ul>
    </div>
    <?php //get_search_form(); ?>
  </div>
	<?php if ( is_home() || is_front_page() ) : ?>
		<?php if( have_rows('top_slider_img', 'option') ): ?>
		<div class="mv">
			<div class="mv__inner mv__fade">
			<?php while( have_rows('top_slider_img', 'option') ): the_row(); ?>
				<div>
					<?php if(get_sub_field('top_slider_link01', 'option') == 'true'): ?>
						<a href="<?php the_sub_field('top_slider_url01', 'option'); ?>" <?php if(get_sub_field('top_slider_target01', 'option') == 'blank'): ?>target="_blank"<?php endif; ?>><?php endif; ?>
						<img src="<?php the_sub_field('top_slider_img01'); ?>" alt="<?php the_sub_field('top_slider_alt01'); ?>" class="pc-only">
						<img src="<?php the_sub_field('top_slider_img01_sp'); ?>" alt="<?php the_sub_field('top_slider_alt01'); ?>" class="sp-only">
						<?php if(get_sub_field('top_slider_copy')): ?><p class="mv__copy"><img src="<?php the_sub_field('top_slider_copy'); ?>" alt="<?php the_sub_field('top_slider_copy_alt'); ?>"></p><?php endif; ?><?php if(get_sub_field('top_slider_link01', 'option') == 'true'): ?>
						</a><?php endif; ?>
				</div>
			<?php endwhile; ?>
			</div>
			<?php if(get_field('top_mv_copy01', 'option')): ?>
			<div class="mv__copy01">
				<p class="mv__copy01--img"><img src="<?php the_field('top_mv_copy01', 'option'); ?>" alt="<?php the_field('top_mv_copy01_alt', 'option'); ?>"></p>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php wp_nav_menu( array(
		'theme_location'=>'gnav',
		'menu_class'    =>'header-nav__list',
		'container'       => 'nav',
		'container_class' => 'header-nav',
		'container_id'    => 'header-nav',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',));
	?>
  <div class="toggle_nav_box">
    <div class="toggle_nav">
      <span></span><span></span><span></span><span>menu</span>
    </div>
    <span class="toggle_nav_bg"></span>
  </div>
  <div class="drawer">
  <?php wp_nav_menu( array(
    'theme_location'=>'spnav',
    'menu_class'    =>'drawer_menu',
    'container'       => '',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',));
  ?>
  </div>

</header><!-- /header -->
<main><!-- /main -->
