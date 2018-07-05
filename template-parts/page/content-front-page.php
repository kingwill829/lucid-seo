<div class="landing-page-band">
	<div class="landing-page-banner__headline">		
		<h1><?php the_field('home_main_heading'); ?></h1>
		<h2><?php the_field('home_sub_heading'); ?></h2>
	</div>
	<picture>
		<source media="(max-width:480px)" srcset="<?php bloginfo('template_directory'); ?>/images/home/home-banner-480.jpg">
		<source media="(max-width:767px)" srcset="<?php bloginfo('template_directory'); ?>/images/home/home-banner-767.jpg">
		<source media="(max-width:991px)" srcset="<?php bloginfo('template_directory'); ?>/images/home/home-banner-991.jpg">
		<img src="<?php bloginfo('template_directory'); ?>/images/home/home-banner.jpg" width="2700" height="852" />
	</picture>

</div>


<div class="container">
	<section class="">

		<div class="home-content__intro"><?php the_field('home_intro_text'); ?></div>
		<h2 class="tac heading--side-borders"><?php the_field('home_services_heading'); ?></h2>
		
		<div class="col-md-4">
			<div class="content__sub-title">
				<span class="fa fa-cogs"></span>&nbsp;<h3><?php the_field('home_block_title_1'); ?></h3>
			</div>
			<p><?php the_field('home_block_text_1'); ?></p>
			<?php if( get_field('home_block_link_1') ): ?>
				<div class="tac">
					<a href="<?php the_field('home_block_link_1'); ?>">Learn More</a>
				</div>
			<?php endif; ?>

		</div>
		<div class="col-md-4">
			<div class="content__sub-title">
				<span class="fa fa-line-chart"></span>&nbsp;<h3><?php the_field('home_block_title_2'); ?></h3>
			</div>
			<p><?php the_field('home_block_text_2'); ?></p>
			<?php if( get_field('home_block_link_2') ): ?>
				<div class="tac">
					<a href="<?php the_field('home_block_link_2'); ?>">Learn More</a>
				</div>
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<div class="content__sub-title">
				<span class="fa fa-credit-card"></span>&nbsp;<h3><?php the_field('home_block_title_3'); ?></h3>
			</div>
			<p><?php the_field('home_block_text_3'); ?></p>
			<?php if( get_field('home_block_link_3') ): ?>
				<div class="tac">
					<a href="<?php the_field('home_block_link_3'); ?>">Learn More</a>
				</div>
			<?php endif; ?>
		</div>

		<div style="clear:both"></div>
	</section>
	<section>
		<hr />
		<h2 class="tac">Latest Blog Posts</h2>
		<div class="list-posts">
		<?php
			$query = 'posts_per_page=10';
			$queryObject = new WP_Query($query);
			// The Loop...
			if ($queryObject->have_posts()) {
				while ($queryObject->have_posts()) {
					$queryObject->the_post();
					get_template_part( 'template-parts/post/content', get_post_format() );
				}
			}
		?>
		</div>
	</section>
</div>

