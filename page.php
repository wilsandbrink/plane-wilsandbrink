<?php
/**
 * The template for displaying all pages.
 *
 * @package Plane
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) {
            the_post();

            get_template_part( 'template-parts/content/content', 'page' );

            if ( comments_open() || '0' != get_comments_number() ) {
                comments_template();
            }
        }
        ?>

        </main>
    </div><!-- .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
