<article class="content-footer">
	<div class="content-footer__inner">
		<div class="col2-box">
			<?php if(get_field('site_shopimg', 'option')): ?>
			<div class="col2-box__left"><figure><img src="<?php the_field('site_shopimg', 'option'); ?>" alt="<?php the_field('site_shopname', 'option'); ?>"></figure></div>
			<?php endif; ?>
			<div class="col2-box__right" id="schedule">
				<?php if(get_field('site_address', 'option')): ?><p><?php if(get_field('site_postcode', 'option')): ?>〒<?php the_field('site_postcode', 'option'); ?> <?php endif; ?><?php the_field('site_address', 'option'); ?></p><?php endif; ?>
				<?php if(get_field('site_tel', 'option')): ?><p class="tel"><a href="tel:<?php the_field('site_tel', 'option'); ?>"><?php the_field('site_tel', 'option'); ?></a></p><?php endif; ?>
				<?php if(get_field('site_time', 'option')): ?><p>営業時間:<?php the_field('site_time', 'option'); ?></p><?php endif; ?>
				<?php if(get_field('site_holiday', 'option')): ?><p>休診日:<?php the_field('site_holiday', 'option'); ?></p><?php endif; ?>
				<?php if(get_field('site_access', 'option')): ?><p class="access"><?php the_field('site_access', 'option'); ?></p><?php endif; ?>
					<table class="table_schedule">
						<thead>
							<tr>
								<th>診療時間</th>
								<th>月</th>
								<th>火</th>
								<th>水</th>
								<th>木</th>
								<th>金</th>
								<th>土</th>
								<th>日・祝</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>9:30～12:30</th>
								<td>○</td>
								<td>／</td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
								<td>／</td>
								<td>／</td>
							</tr>
							<tr>
								<th>13:30～18:30</th>
								<td>○</td>
								<td>／</td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
								<td>／</td>
								<td>／</td>
							</tr>
						</tbody>
					</table>
			</div>
		</div><!-- /.col2-box -->
		<div class="content-footer__map">
			<?php if(get_field('site_googlemapiframe', 'option')): ?><?php the_field('site_googlemapiframe', 'option'); ?><?php endif; ?>
		</div>
  </div>
</article>
