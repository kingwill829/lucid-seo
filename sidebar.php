	<aside class="col-md-4 sidebar">
		<?php if( is_home() ) : ?>		
			<?php dynamic_sidebar ('Home Text'); ?>
		<?php endif; ?>

		<?php if ( !is_home() ) : ?>
			<?php dynamic_sidebar ('Home Sidebar'); ?>
		<?php endif; ?>
	</aside>