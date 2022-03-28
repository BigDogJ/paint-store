<?php
    /**
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package MaterialDesign
    */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class( 'mdc-typography' ); ?>>
        <?php wp_body_open(); ?>

            <div id="page" class="site">
                <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'material-design-google' ); ?></a>

                <?php get_template_part( 'template-parts/drawer' ); ?>

                <?php get_template_part( 'template-parts/header', 'navigation' ); ?>

                <div id="content" class="site-content">
