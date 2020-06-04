<?php
/**
 *Template Name: Main-page
 * @package unrealbarbershop
 */
get_header(); ?>
    <style>
/*     1  */
        .main-block-title{position: relative;}
        .main-block-title-subtitle{font-size: 20px;
            color: #404040;
            font-weight: bold;}
        .main-block-title img{width:100%}
        header{position: absolute;top:0;left:0;right:0;z-index: 1;
            display: flex;
            justify-content: space-around;}
        .main-block-title-text{position: absolute;bottom:20%;right:10%;padding:10px;border: 1px solid rgba(157, 157, 157, 0.24);
            border-radius: 5px;
            background: rgba(216, 216, 216, 0.53);}
        .main-block-title-text h1{    color: #fefefe;font-size:60px}
    /*  2  */
        .main-block-about{display:flex;padding:0 10%;margin-top:3%}
        .main-block-about-text{padding:0 10px; width:50%}
        .main-block-about-img{padding:15px 0}
    /*  3  */
        .main-block-pokazatel{padding:2% 10%;}
        .main-block-pokazatel-item-wrapper{display:flex;flex-wrap: wrap}
        .main-block-pokazatel-item{width:25%; text-align: center;padding:10px}
        .main-block-pokazatel h2{text-align:center;margin-bottom:50px}
        .main-block-pokazatel-item-value-value{font-size:28px;font-weight:bold}
        .main-block-pokazatel-item-value-text{font-size:24px;}
    /*  4  */
        .main-block-map{padding:2% 0;}
        .main-block-map h2{text-align:center;margin-bottom:30px}
        .main-block-map img{width:100%}
        .main-block-map-buttons{display:flex;justify-content: space-around; margin:25px 0}
        .main-block-map-buttons a{
            padding:10px;
            color:#fff;
            background: #00b9eb;
        }
    /*  5  */
        .slick-prev, .slick-next, .slick-prev:hover, .slick-next:hover{
            background: #6d6d6d;
            border-radius: 50%;
        }
        .slick-slide{text-align: center}
        .slick-slide img{margin:auto}
    </style>
    <div class="main-wrapper">

        <div class="main-block-title">
            <img src="<?php echo get_template_directory_uri().'/img/rating/test-background2.jpg'?>" alt="">
            <div class="main-block-title-text">
                <h1>Заголовок сайта про рейтинг автошкол</h1>
                <div class="main-block-title-subtitle">Подзаголовок айта про рейтинг автошкол. Подзаголовок айта про рейтинг автошкол</div>
            </div>
        </div>

        <div class="main-block-about">
            <div class="main-block-about-img">
                <img src="<?php echo get_template_directory_uri().'/img/rating/rating1-1.jpg'?>" alt="">
            </div>
            <div class="main-block-about-text">
                <h2>Заголовок сайта про рейтинг автошкол</h2>
                <div class="main-block-about-text-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos dolor inventore labore officia sequi sint vel. Cupiditate eligendi eos ex harum id modi necessitatibus obcaecati quibusdam quis quod. Ab, ad aliquid corporis dolores et excepturi fuga incidunt iste iure magni maiores nisi officia officiis omnis provident quod saepe velit veniam vitae voluptatum! Amet distinctio dolorem eaque hic laborum nam praesentium quasi recusandae ullam! Animi dolorum fuga labore, nobis nulla sed sunt voluptatem. Ad asperiores beatae consectetur, cum eos esse eveniet facilis illum incidunt itaque laboriosam natus necessitatibus nemo nesciunt nisi nulla omnis pariatur quia rem sed tenetur totam veritatis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos dolor inventore labore officia sequi sint vel. Cupiditate eligendi eos ex harum id modi necessitatibus obcaecati quibusdam quis quod. Ab, ad aliquid corporis dolores et excepturi fuga incidunt iste iure magni maiores nisi officia officiis omnis provident quod saepe velit veniam vitae voluptatum! Amet distinctio dolorem eaque hic laborum nam praesentium quasi recusandae ullam! Animi dolorum fuga labore, nobis nulla sed sunt voluptatem. Ad asperiores beatae consectetur, cum eos esse eveniet facilis illum incidunt itaque laboriosam natus necessitatibus nemo nesciunt nisi nulla omnis pariatur quia rem sed tenetur totam veritatis.
                </div>
            </div>
        </div>

        <div class="main-block-pokazatel">

            <h2>О нас в цифрах</h2>

            <div class="main-block-pokazatel-item-wrapper">

                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">100</div>
                        <div class="main-block-pokazatel-item-value-text">Автошкол</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">1000</div>
                        <div class="main-block-pokazatel-item-value-text">Инструкторов</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">10000</div>
                        <div class="main-block-pokazatel-item-value-text">Отзывов</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">100</div>
                        <div class="main-block-pokazatel-item-value-text">Наград</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">100</div>
                        <div class="main-block-pokazatel-item-value-text">Автошкол</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">10</div>
                        <div class="main-block-pokazatel-item-value-text">Попугаев</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">2</div>
                        <div class="main-block-pokazatel-item-value-text">Лемура</div>
                    </div>
                </div>
                <div class="main-block-pokazatel-item">
                    <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/rating/pokazatel.png'?>" alt=""></div>
                    <div class="main-block-pokazatel-item-value">
                        <div class="main-block-pokazatel-item-value-value">3</div>
                        <div class="main-block-pokazatel-item-value-text">ИТД</div>
                    </div>
                </div>

            </div>





        </div>

        <div class="main-block-map">
            <h2>Наша география</h2>
            <img src="<?php echo get_template_directory_uri().'/img/rating/map.png'?>" alt="">
            <div class="main-block-map-buttons">
                <a class="remodal-confirm" href="#modal-partner">Стать партнером</a>
                <a class="remodal-confirm" href="#">Рейтинг автошкол</a>
            </div>

            <div class="remodal" data-remodal-id="modal-partner" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Стать партнером</h2>
                </div>
<!--                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>-->
<!--                <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
            </div>

        </div>

        <div class="main-block-about">

            <div class="main-block-about-text">
                <h2>Заголовок про инструкторов</h2>
                <div class="main-block-about-text-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos dolor inventore labore officia sequi sint vel. Cupiditate eligendi eos ex harum id modi necessitatibus obcaecati quibusdam quis quod. Ab, ad aliquid corporis dolores et excepturi fuga incidunt iste iure magni maiores nisi officia officiis omnis provident quod saepe velit veniam vitae voluptatum! Amet distinctio dolorem eaque hic laborum nam praesentium quasi recusandae ullam! Animi dolorum fuga labore, nobis nulla sed sunt voluptatem. Ad asperiores beatae consectetur, cum eos esse eveniet facilis illum incidunt itaque laboriosam natus necessitatibus nemo nesciunt nisi nulla omnis pariatur quia rem sed tenetur totam veritatis.
                </div>
            </div>
            <div class="main-block-about-img">
                <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
            </div>

        </div>

        <div class="main-block-instruktor" style="padding:25px 50px">
            <h2 style="text-align: center">Лучшие инструктора</h2>
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
        </div>

        <div class="main-block-callback" style="padding:25px 50px">
            <h2 style="text-align: center">Недавние отзывы</h2>
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

            <div class="main-block-map-buttons">
                <a class="remodal-confirm" href="#modal-callback">Написать отзыв</a>
                <a class="remodal-confirm" href="#">Перейти к отзывам</a>
            </div>

            <div class="remodal" data-remodal-id="modal-callback" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Написать отзыв</h2>
                </div>
            </div>
        </div>

    </div>



<?php
get_footer();?>
<script>

    jQuery( document ).ready(function( $ ) {
        $('.main-block-instruktor-item-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 6000,
        });

        $('.main-block-callback-item-wrapper').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            arrows: true,
            autoplaySpeed: 6000,
        });
    });

</script>
