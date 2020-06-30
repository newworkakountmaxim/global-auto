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
        <h1><?php the_title(); ?></h1>
        <div style="display:flex">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <div style="padding: 10px 50px; font-size:20px">
                <div class="main-block-instruktor-item-years">Запорожье</div>
                <div class="main-block-instruktor-item-years">5 филиалов</div>
                <div class="main-block-instruktor-item-exp">10000 учеников</div>
                <div class="main-block-instruktor-item-years">5 лет работы</div>
                <div class="main-block-instruktor-item-years">10 инструкторов</div>
            </div>
        </div>
        
        <?php
        //while ( have_posts() ) :
            the_post();
            the_content();

            echo '<h2>Инструкторы</h2>';
            //var_dump(get_field('instructor')); ?>

            <div class="main-block-map-buttons">
                <a class="remodal-confirm" href="#modal-instruktor">Стать инструктором</a>
                <a class="remodal-confirm" href="#">Рейтинг инструкторов</a>
            </div>

            <div class="remodal" data-remodal-id="modal-instruktor" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Стать инструктором</h2>
                </div>
            </div>

            <div class="main-block-instruktor" style="padding:25px 50px">
            <h2 style="text-align: center">Инструктора</h2>
            <div class="main-block-instruktor-item-wrapper">
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Александра</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-exp">100 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет опыта</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Александра</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-exp">100 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет опыта</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Александра</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-exp">100 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет опыта</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Александра</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-exp">100 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет опыта</div>
                </div>
            </div>    


            <div class="main-block-callback" style="padding:25px 50px">
            <h2 style="text-align: center">Отзывы</h2>
            <div class="main-block-map-buttons">
                <a class="remodal-confirm" href="#modal-callback">Написать отзыв</a>
                
            </div>
            <div class="remodal" data-remodal-id="modal-callback" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Написать отзыв</h2>
                </div>
            </div>
            <div class="main-block-callback-item-wrapper">
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
                <div class="main-block-callback-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/callback.png'?>" alt="">
                    <div class="main-block-callback-item-name" style="font-size:24px;font-weight:bold">Отзыв1</div>
                    <div class="main-block-callback-item-text" style="border:1px solid #444;border-radius: 5px; padding:5px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cum deleniti deserunt dicta dolor eius eveniet repudiandae sapiente similique voluptatibus.
                    </div>
                </div>
            </div>


            <?php 
            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'global-auto' ) . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'global-auto' ) . '</span> <span class="nav-title">%title</span>',
                )
            );



        //endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
?>
<script>

    jQuery( document ).ready(function( $ ) {
        $('.main-block-instruktor-item-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 6000,
        });

        // $('.main-block-callback-item-wrapper').slick({
        //     slidesToShow: 5,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     arrows: true,
        //     autoplaySpeed: 6000,
        // });
    });

</script>