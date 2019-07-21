<?php
/**
 * The main template file.
 *
 * @package Plane
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ) {

            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content/content' );
            }

            plane_content_nav( 'nav-below' );

        } else {

            get_template_part( 'template-parts/content/content', 'none' );

        }
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
