<?php
/**

 * @package MaterialDesign
 */

/**
 * The template for displaying all single posts
 * @package MaterialDesign
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/single', get_post_type() );

                    get_template_part( 'template-parts/post-nav-links' );
                endwhile; // End of the loop.
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
