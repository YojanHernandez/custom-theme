<?php
/**
 * The main template file
 *
 * @package Custom_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container mb-5">
            <?php
            while ( have_posts() ) :
                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
                endif;
                the_post();

            endwhile;
            ?>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_footer();
