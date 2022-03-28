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
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MaterialDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header section-inner">
		<?php the_title( '<h1 class="entry-title mdc-typography mdc-typography--headline2 text-center">', '</h1>' ); ?>
		
		<?php
			$theParent = wp_get_post_parent_ID(get_the_ID());
			if($theParent){		
				?>
					<div class="btn-group text-white w-100" role="group">
						<a class="nav-link btn btn-secondary" href="<?php echo site_url('/paints') ?>">Paints</a>
						<a class="nav-link btn btn-secondary" href="<?php echo site_url('/paint-supplies') ?>">Paint Supplies</a>
						<a class="nav-link btn btn-secondary" href="<?php echo site_url('/interior-paints') ?>">Interior Paints</a>
						<a class="nav-link btn btn-secondary" href="<?php echo site_url('/exterior-paints') ?>">Exterior Paints</a>
					</div>	
			<?php } 
				elseif(get_the_title() === "Paints") {
					echo "<ul class='list-group-item list-group-item-action w-50 page-links d-flex mx-auto p-0 justify-content-between'>";
						if($theParent){
							$children = $theParent;
						}
						else{
							$children = get_the_ID();
						}
						wp_list_pages(array(
							'title_li' => NULL ,
							'child_of' => $children,
						));
					echo "</ul>";
				}
			?>	
			
	</header><!-- .entry-header -->

	<?php material_design_theme_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links mdc-typography mdc-typography--subtitle1">' . esc_html__( 'Pages:', 'material-design-google' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
