<?php get_header(); ?>

<div class="container">
	<main class="col-md-12">
		
		<div class="list-posts">
			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/post/content', get_post_format() );

				endwhile;
			else : ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif;
			?>

		</div>
	</main>



</div>



<?php get_footer(); ?>