<div class="landing-page-band">
	<div class="landing-page-banner__headline">		
		<h1><?php the_title(); ?></h1>
		<h2><?php the_field('landing_page_sub_heading'); ?></h2>
	</div>
	<picture>
		<source media="(max-width:480px)" srcset="<?php the_field('landing_page_banner_mob'); ?>">
		<source media="(max-width:767px)" srcset="<?php the_field('landing_page_banner_tab'); ?>">
		<source media="(max-width:991px)" srcset="<?php the_field('landing_page_banner_desktop'); ?>">
		<img src="<?php the_field('landing_page_banner_default'); ?>" width="2700" height="852" />
	</picture>

</div>


	<section class="content-body">
		<p><?php the_field('landing_page_intro'); ?></p>
		<h2 class="tac"><?php the_field('landing_page_sub_heading_2'); ?></h2>
		<?php the_content(); ?>
	</section>
