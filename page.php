<?php
/**
 * @package MaterialDesign
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			 $theParent = wp_get_post_parent_ID(get_the_ID());
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/single', 'page' ); 
				
			endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
