<?php
/*
 Template Name: Home
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>