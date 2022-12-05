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

			<?php //wp_nav_menu( array(
				// 'theme_location'=>'gnav',
				// 'menu_class'    =>'header-nav__list',
				// 'container'       => 'nav',
				// 'container_class' => 'header-nav',
				// 'container_id'    => 'header-nav',
				// 'items_wrap'      => '<ul class="%2$s">%3$s</ul>',));
			?>

			<div class="header-nav">
				<div class="toggle-box">
					<div class="toggle-box__btn">
						<span></span><span></span><span></span><span>menu</span>
					</div>
					<span class="toggle-box__bg"></span>
				</div>
				<div class="header-nav__box">
				<div class="lang"><?php echo do_shortcode( '[bogo]' ); ?></div>
				<?php wp_nav_menu( array(
					'theme_location'=>'spnav',
					'menu_class'    =>'header-nav__list',
					'container'       => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',));
				?>
				</div>
			</div>


    </div>

  </div>



</header><!-- /header -->
<main><!-- /main -->
