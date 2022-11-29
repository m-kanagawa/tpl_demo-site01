<section class="sec_sitemap">
  <div class="container gutters">
    <div class="row">
      <?php wp_nav_menu( array(
        'theme_location'=>'sitemap_nav',
        'container'       => 'div',
        'container_class' => 'sitemap_list',
        'menu_class'    =>'',
        'items_wrap'      => '<ul>%3$s</ul>',));
      ?>
    </div>
  </div>
</section>
