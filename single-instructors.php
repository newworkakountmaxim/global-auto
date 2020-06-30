<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package global-auto
 */

get_header();
?>
    <style>
        header {
            position: static;
            background: rgba(155, 4, 4, 0.01);
        }
        main{width:90%;margin:auto}
    </style>
    <main id="primary" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

            var_dump(get_field('autoschool'));

            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'global-auto' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'global-auto' ) . '</span> <span class="nav-title">%title</span>',
                )
            );



        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
