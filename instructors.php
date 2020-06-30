<?php
/**
 *Template Name: Instructors-page
 * @package globalauto
 */
get_header(); ?>
    <style>
        header {position: static;background: rgba(155, 4, 4, 0.01);}
        .autoschools-wrapper{width:90%;margin:auto}
        .autoschools-wrapper h1{text-align: center}
        .autoschool-item-wrapper{display:flex;flex-wrap:wrap}
        .autoschool-item{width:50%;padding:10px}

    </style>


    <div class="autoschools-wrapper">
        <h1><?php the_title(); ?></h1>
        <div class="autoschools-wrapper-filters">
            <div class="autoschools-wrapper-filters-search">
                <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
            </div>
            <div class="autoschools-wrapper-filters-other=filters">

            </div>
        </div>
        <div class="autoschool-item-wrapper">
            <?php
            $args = array(
                'post_type' => 'instructors',
                'posts_per_page' => -1,
                'order' => 'ASC');
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="autoschool-item">
                    <a href="<?php the_permalink();?>">
                        <h2 class="autoschool-item-title"><?php the_title(); ?></h2>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
<?php
get_footer();
