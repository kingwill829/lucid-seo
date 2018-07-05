<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

	<main>
		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'contact-page' );
			endwhile;
		endif; ?>
	</main>

<?php get_footer(); ?>