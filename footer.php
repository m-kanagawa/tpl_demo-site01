	<?php get_template_part("lib/parts/content-footer"); ?>
</main>
<footer class="footer">
  <p class="page_top"><a href="#">
		<svg version="1.1" id="page_top_arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="9.2px" viewBox="0 0 17 9.2">
		<rect x="-1.3" y="4.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.2578 4.4498)" class="st0" width="11" height="1"/>
		<rect x="8.8" y="-0.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 2.3384 6.3534)" class="st0" width="0" height="1"/>
		<polygon class="st0" points="17,8.5 9.2,0.7 8.5,0 8.5,0 7.8,0.7 7.8,0.7 8.5,1.4 16.3,9.2 "/>
		</svg>
	</a></p>
	<?php get_template_part("lib/parts/parts-footer-floating"); ?>
  <?php wp_nav_menu( array(
    'theme_location'=>'fnav',
    'container'       => 'div',
    'container_class' => 'footer__nav',
    'menu_class'    =>'',
    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',));
  ?>
  <p class="copyright"><small>&copy; 2022 <?php bloginfo('name'); ?></small></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
