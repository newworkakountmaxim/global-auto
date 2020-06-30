<?php
/**
 *Template Name: Main-page
 * @package unrealbarbershop
 */
get_header(); ?>
    <style>
    .bg-ligth {
        box-shadow: 0 0 2px #292929;
        color: #272727;
    }
    .bg-dark {
        box-shadow: 0 0 2px white;
        color: #ececec;
    }
    a:visited {
        color: #e0e0e0;
    }
    h2{ text-align:center; margin-bottom:50px; font-family: Play; font-style: normal;
            font-weight: bold;
            font-size: 32px;
            line-height: 37px;
            text-align: center;
            text-transform: uppercase;
            color: #000000;}
/*     1  */
        .main-block-title{position: relative;background-size: cover; background-repeat: no-repeat; background-position: center;
            display: flex; justify-content: flex-end;}
        .main-block-title-subtitle{font-size: 20px; color: #efefef; font-weight: 400; text-transform: uppercase;}
        .main-block-title img{width: 60%; padding: 80px 0px 128px 0;}
        .main-block-title-text{ position: absolute; bottom: 37%; width: 30%; right: 61%; padding: 10px;}
        .main-block-title-text h1{width: 550px;height: 194px;font-family: 'Play', sans-serif;font-style: normal;
            font-weight: 700;font-size: 56px;line-height: 65px;letter-spacing: 0.01em;text-transform: uppercase;color: #F3F3F3;}
    /*  2  */
        .main-block-pokazatel{padding: 2% 5% 5% 5%; background-size: cover;}
        .main-block-pokazatel-item-wrapper{display:flex;flex-wrap: wrap; justify-content: center;}
        .main-block-pokazatel-item{width:30%; text-align: center; padding:46px 10px}
        .main-block-pokazatel-item-img img {max-width: 40%; border-radius: 100px; border: 5px solid rgba(255, 255, 255, 0.70);
            box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);}
        .main-block-pokazatel h2{text-align:center;margin-bottom:105px;font-family: Play; font-style: normal;
            font-weight: bold;
            font-size: 32px;
            line-height: 37px;
            text-align: center;
            text-transform: uppercase;
            color: #000000;
        }
        .main-block-pokazatel-item-value-value{font-family: 'Roboto', sans-serif; font-size:35px;font-weight:900; color: #5a5a5a;}
        .main-block-pokazatel-item-value-text{font-family: 'Roboto', sans-serif; font-size:21px;font-weight:400; text-transform: uppercase;}
    /*  3  */
        .main-block-about{display:flex; padding: 0px 120px 0px 0px; background-size: cover; background-position: center}
        .main-block-about-text h2 {text-align:left; color: #fffffff0;}
        .main-block-about-text{padding: 185px 10px 0px 235px; width: 54%; color: #fffffff0; font-family: 'Roboto', sans-serif;
            font-weight: 300; font-size: 14px; line-height: 24px; text-transform: uppercase; color: rgba(255, 255, 255, 0.8);}
        .main-block-about-text-content {padding-bottom: 50px; color:}
        .main-block-about-img{padding: 15px 0; width: 36%; height: 830px; background-size: cover; margin: 115px 0px 30px 0px;}

    /*  4  */
        .main-block-map{display:flex; flex-direction: row; padding:6% 4%;}
        .main-block-map-left {display:flex; flex-direction: column; width: 35%; padding-right: 5%;}
        .main-block-map h2{text-align: left; margin-bottom:30px; margin-top:0}
        div#map_canvas {width: 65%; box-shadow: 0 0 1px #00000070;}
        /* .main-block-map img{width:100%} */
        .main-block-map-buttons{display:flex; justify-content: space-around; margin:25px 0}
        /* .main-block-map-buttons a{ padding:10px; color:#fff; background: #00b9eb;} */
        a.remodal-confirm { text-transform: uppercase; width: 216px; height: 63px; padding-top: 20px; background: transparent;
            font-family: 'Play', sans-serif; font-size: 18px}
            a.remodal-confirm:hover {background: #f5f5f5; color: #5f5f5f;}
            .instructor-wrapper {padding: 0px 120px 42px 120px;}
            .instructor-img {width: 70%; height: 814px;}
            .instructor-content {padding: 141px 0px 0px 120px;}
            .instructor-text {padding: 201px 0px 0px 156px;}
    /*  5  */
        .slick-prev, .slick-next, .slick-prev:hover, .slick-next:hover{background: #6d6d6d; border-radius: 50%; }
        .slick-slide{text-align: center}
        .slick-slide img{margin:auto}

		/*media*/
		@media screen and (max-width: 1366px) {

		/*1*/
		header {padding: 7px 7px 0px 113px;}
		.site-branding {margin-right: 21%;}
		.site-branding svg {width:175px}
		.main-block-title-text {bottom: 30%;}
		/*3*/
		.main-block-about-text {
			padding: 137px 10px 0px 122px;
			width: 64%;
			}
		}
		@media screen and (max-width: 414px){
			header {padding: 7px 7px 0px 0px;}
		}
    </style>
    <div class="main-wrapper">

        <div class="main-block-title" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/title-blur.jpg'?>);">
            <img src="<?php echo get_template_directory_uri().'/img/bg/title.jpg'?>" alt="">
            <div class="main-block-title-text">
                <h1>Заголовок сайта про рейтинг автошкол</h1>
                <div class="main-block-title-subtitle">Подзаголовок cайта про рейтинг автошкол. Подзаголовок айта про рейтинг автошкол</div>
            </div>
        </div>
        <div class="main-block-pokazatel" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/stat.jpg'?>);">

        <h2>О нас в цифрах</h2>

        <div class="main-block-pokazatel-item-wrapper">

            <div class="main-block-pokazatel-item">
                <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/stat/autoschool.jpg'?>" alt=""></div>
                <div class="main-block-pokazatel-item-value">
                    <div class="main-block-pokazatel-item-value-value">100</div>
                    <div class="main-block-pokazatel-item-value-text">Автошкол</div>
                </div>
            </div>
            <div class="main-block-pokazatel-item">
                <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/stat/instructor.jpg'?>" alt=""></div>
                <div class="main-block-pokazatel-item-value">
                    <div class="main-block-pokazatel-item-value-value">1000</div>
                    <div class="main-block-pokazatel-item-value-text">Инструкторов</div>
                </div>
            </div>
            <div class="main-block-pokazatel-item">
                <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/stat/students.jpg'?>" alt=""></div>
                <div class="main-block-pokazatel-item-value">
                    <div class="main-block-pokazatel-item-value-value">31140</div>
                    <div class="main-block-pokazatel-item-value-text">Выпускников</div>
                </div>
            </div>
            <div class="main-block-pokazatel-item">
                <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/stat/prize.jpg'?>" alt=""></div>
                <div class="main-block-pokazatel-item-value">
                    <div class="main-block-pokazatel-item-value-value">80</div>
                    <div class="main-block-pokazatel-item-value-text">Наград</div>
                </div>
            </div>
            <div class="main-block-pokazatel-item">
                <div class="main-block-pokazatel-item-img"><img src="<?php echo get_template_directory_uri().'/img/stat/reviews.jpg'?>" alt=""></div>
                <div class="main-block-pokazatel-item-value">
                    <div class="main-block-pokazatel-item-value-value">10050</div>
                    <div class="main-block-pokazatel-item-value-text">Отзывов</div>
                </div>
            </div>
        </div>

        </div>

        <div class="main-block-about" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/ratings-blur.jpg'?>);">
            <div class="main-block-about-img" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/ratings.jpg'?>)">
                <!-- <img src="<?php echo get_template_directory_uri().'/img/bg/ratings.jpg'?>" alt=""> -->
            </div>
            <div class="main-block-about-text">
                <h2>Заголовок сайта про рейтинг автошкол</h2>
                <div class="main-block-about-text-content">
                    Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании модели развития. Не следует, однако забывать, что новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт рамки и место обучения кадров в значительной степени обуславливает создание дальнейших направлений развития. Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании форм развития.
                </div>
                <a class="remodal-confirm bg-dark" href="#">Рейтинг автошкол</a>
            </div>
        </div>

        <div class="main-block-map" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/map.jpg'?>);">
            <div class="main-block-map-left">
                <h2>Наша география</h2>
                <div class="main-block-about-text-content">
                    Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании модели развития. Не следует, однако забывать, что новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт рамки и место обучения кадров в значительной степени обуславливает создание дальнейших направлений развития. Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании соответствующий условий активизации. Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании форм развития.
                </div>
                <a class="remodal-confirm bg-ligth" href="#modal-partner">Стать партнером</a>
            </div>
            <div id="map_canvas"></div>

            <!-- <img src="<?php echo get_template_directory_uri().'/img/rating/map.png'?>" alt=""> -->
            <!-- <div class="main-block-map-buttons">    -->
                <!-- <a class="remodal-confirm" href="#">Рейтинг автошкол</a> -->
            <!-- </div> -->

            <div class="remodal" data-remodal-id="modal-partner" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Стать партнером</h2>
                </div>
<!--                <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>-->
<!--                <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
            </div>

        </div>

        <!-- instructor -->
        <div class="main-block-about instructor-wrapper" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/instructor-blur.jpg'?>);">
            <div class="main-block-about-img instructor-img" style="background-image: url(<?php echo get_template_directory_uri().'/img/bg/instructor.jpg'?>)">
                <!-- <img src="<?php echo get_template_directory_uri().'/img/bg/ratings.jpg'?>" alt=""> -->
            </div>
            <div class="main-block-about-text instructor-text">
                <h2>Заголовок сайта про инструкторов</h2>
                <div class="main-block-about-text-content instructor-contant">
                    Разнообразный и богатый опыт постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации системы обучения кадров, соответствует насущным потребностям. Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности играет важную роль в формировании модели развития. Не следует, однако забывать, что новая модель организационной деятельности требуют определения и уточнения позиций, занимаемых участниками в отношении поставленных задач.
                </div>
                <a class="remodal-confirm bg-dark" href="#">Стать инструктором</a>
            </div>
        </div>

        <div class="main-block-instruktor" style="padding:25px 50px">
            <h2 style="text-align: center">Лучшие автошколы</h2>
            <div class="main-block-instruktor-item-wrapper">
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Автошкола1</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-years">Запорожье</div>
                    <div class="main-block-instruktor-item-years">5 филиалов</div>
                    <div class="main-block-instruktor-item-exp">10000 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет работы</div>
                    <div class="main-block-instruktor-item-years">10 инструкторов</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Автошкола2</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-years">Запорожье</div>
                    <div class="main-block-instruktor-item-years">5 филиалов</div>
                    <div class="main-block-instruktor-item-exp">10000 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет работы</div>
                    <div class="main-block-instruktor-item-years">10 инструкторов</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Автошкола3</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-years">Запорожье</div>
                    <div class="main-block-instruktor-item-years">5 филиалов</div>
                    <div class="main-block-instruktor-item-exp">10000 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет работы</div>
                    <div class="main-block-instruktor-item-years">10 инструкторов</div>
                </div>
                <div class="main-block-instruktor-item">
                    <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
                    <div class="main-block-instruktor-item-name">Автошкола4</div>
                    <div class="main-block-instruktor-item-rating">
                        <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor-rating.jpg'?>" alt="" style="width:100px">
                    </div>
                    <div class="main-block-instruktor-item-years">Запорожье</div>
                    <div class="main-block-instruktor-item-years">5 филиалов</div>
                    <div class="main-block-instruktor-item-exp">10000 учеников</div>
                    <div class="main-block-instruktor-item-years">5 лет работы</div>
                    <div class="main-block-instruktor-item-years">10 инструкторов</div>
                </div>
            </div>

        <!-- <div class="main-block-about">

            <div class="main-block-about-text">
                <h2>Заголовок про инструкторов</h2>
                <div class="main-block-about-text-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos dolor inventore labore officia sequi sint vel. Cupiditate eligendi eos ex harum id modi necessitatibus obcaecati quibusdam quis quod. Ab, ad aliquid corporis dolores et excepturi fuga incidunt iste iure magni maiores nisi officia officiis omnis provident quod saepe velit veniam vitae voluptatum! Amet distinctio dolorem eaque hic laborum nam praesentium quasi recusandae ullam! Animi dolorum fuga labore, nobis nulla sed sunt voluptatem. Ad asperiores beatae consectetur, cum eos esse eveniet facilis illum incidunt itaque laboriosam natus necessitatibus nemo nesciunt nisi nulla omnis pariatur quia rem sed tenetur totam veritatis.
                </div>
            </div>
            <div class="main-block-about-img">
                <img src="<?php echo get_template_directory_uri().'/img/rating/instruktor.jpg'?>" alt="">
            </div>

        </div> -->

        <!-- <div class="main-block-instruktor" style="padding:25px 50px">
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
            </div> -->

            <!-- <div class="remodal" data-remodal-id="modal-instruktor" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                <div>
                    <h2 id="modal1Title">Стать инструктором</h2>
                </div>
            </div> -->
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
<script async src="<?php echo get_template_directory_uri().'/js/branches-map.js'?>"></script>
<script>

    jQuery( document ).ready(function( $ ) {
        $('.main-block-instruktor-item-wrapper').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            arrows: true,
            autoplaySpeed: 6000,
            dots: true
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