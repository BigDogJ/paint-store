<?php
/**
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package MaterialDesign
 */

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MaterialDesign
 */

get_header();

$max_width  = get_theme_mod( 'archive_width', 'normal' );
$class_name = sprintf( 'material-archive__%s', $max_width );
?>

	<div id="primary" class="content-area <?php echo esc_attr( $class_name ); ?>">
		<main id="main" class="site-main">
        
        <!-- <div>This is our main site</div> -->
        <div id="carouselExampleSlidesOnly" class="carousel carousel-dark slide" data-bs-ride="carousel">

			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_theme_file_uri('assets\images\customizer\starter-content\products\hoodie-with-logo.jpg') ?>" class="d-block mx-auto">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_theme_file_uri("assets\images\customizer\starter-content\products\cap.jpg")?>" class="d-block mx-auto">
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_theme_file_uri("assets\images\customizer\starter-content\products\polo.jpg")?>" class="d-block mx-auto">
				</div>
			</div>

			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
        
        <!--  
		<?php
        /* 
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			?>

				<div class="site-main__inner">
					<?php get_template_part( 'template-parts/archive' ); ?>
				</div>

			<?php
			get_template_part( 'template-parts/posts-navigation' );

		else :

			get_template_part( 'template-parts/content', 'none' );


		endif; */
		?>
        -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
