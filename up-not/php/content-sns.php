<div class="share_button">
  <ul>
    <li class="btn_facebook"><!-- Facebook -->
      <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="#">シェア</a></div>
    </li>
    <li class="btn_twitter"><!-- Twitter -->
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </li>
    <li class="btn_line"><!-- LINE -->
    <div class="line-it-button" data-lang="ja" data-type="share-a" data-url="<?php the_permalink(); ?>" style="display: none;"></div>
        <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
    </li>
  </ul>
</div>