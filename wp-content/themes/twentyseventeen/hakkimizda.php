<?php get_header();
/**
 * Template Name: Hakkımızda Sayfası
 */
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        ?>
        <div class="section-title parallax-bg parallax-light">
            <ul class="bg-slideshow">
                <li>
                    <div style="background-image:url(<?php the_post_thumbnail_url() ?>)" class="bg-slide"></div>
                </li>
            </ul>
            <div class="section__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="ui-title-page"><?php the_title() ?></h1>
                            <div class="ui-subtitle-page"><?php the_content() ?></div>
                            <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section__inner -->
        </div><!-- end section-title -->
        <section class="section_mod-e mb-5">
            <div class="block-about">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="ui-title-block"><span class="ui-title-emphasis ui-title-emphasis_sm"><?php the_field("ana_baslik") ?></span><?php the_field("kalin_baslik") ?></h2>
                            <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                            <div class="ui-subtitle-block"><?php the_field("alt_baslik") ?></div>
                            <div class="block-about__description">
                                <p><?php the_field("alt_icerik") ?></p>
                            </div>
                        </div><!-- end col -->
                        <div class="col-sm-6">
                            <img class="block-about__img img-responsive img-487" src="<?php the_field("alt_resim") ?>" alt="<?php the_title() ?>">
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div>
        </section><!-- end section-default -->
        <section class="section-default">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block ui-title-block_mod-a">İş Misyonumuz <span
                                class="decor-4 decor-4_mod-a"><i
                                    class="icon flaticon-logistics3 color-primary"></i></span> Müşteri Memnuniyetidir
                        </h2>

                        <div class="owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"
                             data-pagination="false"
                             data-navigation="false"
                             data-single-item="true"
                             data-auto-play="7000"
                             data-transition-style="fade"
                             data-main-text-animation="true"
                             data-after-init-delay="3000"
                             data-after-move-delay="1000"
                             data-stop-on-hover="true">
                            <?php
                            $args = array('post_type' => 'yorumlar');
                            $slaytLoop = new WP_Query($args);
                            if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                                ?>
                                <div class="reviews">
                                    <div class="reviews__text"><?php the_content() ?>
                                    </div>
                                    <div class="reviews__author">
                                        <span class="reviews__author-title"><?php the_title() ?></span>
                                        <img class="reviews__signature img-responsive"
                                             src="<?php echo the_field("imza_resmi"); ?>"
                                             alt="signature">
                                    </div>
                                </div>
                            <?php endwhile;endif;
                            wp_reset_postdata(); ?>


                        </div><!-- end slider -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section-default -->
        <div class="section-bg_mod-d">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="owl-carousel owl-theme enable-owl-carousel"
                             data-min480="1"
                             data-min768="2"
                             data-min992="3"
                             data-min1200="3"
                             data-pagination="false"
                             data-navigation="true"
                             data-auto-play="4000"
                             data-stop-on-hover="true">
                            <?php
                            $args = array('post_type' => 'hizmetler_slider');
                            $slaytLoop = new WP_Query($args);
                            if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                            ?>

                            <article  class="post post_mod-b clearfix">
                                <div class="entry-media" >
                                    <a>
                                        <img class="img-responsive img-220" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                                    </a>
                                </div>

                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title ui-title-inner"><a href="<?php echo home_url("hizmetlerimiz") ?>"><?php the_title() ?></a></h2>
                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div class="entry-content">
                                        <p><?php the_content() ?></p>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile;endif;
                            wp_reset_postdata(); ?>


                        </div><!-- end slider -->
                    </div>
                </div>
            </div>
        </div>
        <section class="section_mod-c section-bg_mod-a">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">TARİHİMİZ</span>Nasıl Başardık?</h2>
                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                        <div class="ui-subtitle-block ui-subtitle-block_mod-a">Lorem ipsum dolor sit amet diial consectetur adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna cadso aliqua</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list-features list-features_mod-a list-features_left list-unstyled">
                            <li class="list-features__item">
                                <i class="list-features__icon flaticon-delivery56"></i>
                                <div class="list-features__inner">
                                    <h3 class="list-features__title ui-title-inner"><?php the_field("tarih_baslik") ?> - <span class="list-features__title-emphasis"><?php the_field("tarih") ?> </span></h3>
                                    <div class="list-features__description"><?php the_content() ?></div>
                                </div>
                            </li>
                            <li class="list-features__item">
                                <i class="list-features__icon flaticon-world77"></i>
                                <div class="list-features__inner">
                                    <h3 class="list-features__title ui-title-inner"><span class="list-features__title-emphasis"><?php the_field("tarih_1") ?> </span> - <?php the_field("tarih_baslik_1") ?></h3>
                                    <div class="list-features__description"><?php the_field("tarih_icerik_1") ?></div>
                                </div>
                            </li>
                            <li class="list-features__item">
                                <i class="list-features__icon flaticon-transport643"></i>
                                <div class="list-features__inner">
                                    <h3 class="list-features__title ui-title-inner"><?php the_field("tarih_baslik_2") ?> - <span class="list-features__title-emphasis"><?php the_field("tarih_2") ?></span></h3>
                                    <div class="list-features__description"><?php the_field("tarih_icerik_2") ?></div>
                                </div>
                            </li>
                            <li class="list-features__item">
                                <i class="list-features__icon flaticon-sticker1"></i>
                                <div class="list-features__inner">
                                    <h3 class="list-features__title ui-title-inner"><span class="list-features__title-emphasis"><?php the_field("tarih_3") ?></span> - <?php the_field("tarih_baslik_3") ?></h3>
                                    <div class="list-features__description"><?php the_field("tarih_icerik_3") ?></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <div class="section-default parallax-bg parallax-dark">
            <ul class="bg-slideshow">
                <li>
                    <div style="background-image:url(assets/media/bg/bg-6.jpg)" class="bg-slide"></div>
                </li>
            </ul>
            <div class="section__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="text-center">
                                <i class='list-progress__title-icon flaticon-delivery36'></i>
                                <h2 class="ui-title-block ui-title-block_mod_color">başaran gerçekler</h2>
                                <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                            </div>
                            <ul class="list-progress list-progress_mod-b list-unstyled">
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_1") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin_1") ?></span>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_2") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin__2") ?></span>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_3") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin_3") ?></span>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_4") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin_4") ?></span>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_5") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin_5") ?></span>
                                    </div>
                                </li>
                                <li class="list-progress__item clearfix">
                                    <div class="list-progress__inner">
                                        <span class="list-progress__percent chart" data-percent="<?php the_field("sayi_6") ?>"><span class="percent"></span></span>
                                        <div class="decor-3 decor-3_mod-a"></div>
                                        <span class="list-progress__name"><?php the_field("metin_6") ?></span>
                                    </div>
                                </li>
                            </ul><!-- end list-progress -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <section class="section-area">-->
<!--            <div class="section-bg_mod-a section-title-block">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-xs-12">-->
<!--                            <h2 class="ui-title-block"><span class="ui-title-emphasis">Belirlenmiş ve profesyonel</span>EKİBİMİZLE TANIŞIN</h2>-->
<!--                            <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="section-top-minus section_mod-a">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="col-xs-12">-->
<!--                            <div class="owl-carousel owl-theme enable-owl-carousel"-->
<!--                                 data-min480="2"-->
<!--                                 data-min768="2"-->
<!--                                 data-min992="3"-->
<!--                                 data-min1200="4"-->
<!--                                 data-pagination="false"-->
<!--                                 data-navigation="false"-->
<!--                                 data-auto-play="4000"-->
<!--                                 data-stop-on-hover="true">-->
<!--                                --><?php
//                                $args = array('post_type' => 'kariyer_slider');
//                                $slaytLoop = new WP_Query($args);
//                                if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
//                                ?>
<!--                                <section class="list-staff">-->
<!--                                    <div class="list-staff__img"><img class="img-responsive img-h-w" src="--><?php //the_post_thumbnail_url() ?><!--" alt="--><?php //the_title() ?><!--"></div>-->
<!--                                    <div class="list-staff__categories">--><?php //the_title() ?><!--</div>-->
<!--                                    <h3 class="list-staff__name ui-title-inner">--><?php //the_field("ek_alan") ?><!--</h3>-->
<!--                                    <div class="decor-3"></div>-->
<!--                                    <div class="list-staff__description">--><?php //the_content() ?><!--</div>-->
<!--                                    <ul class="social-links list-inline">-->
<!--                                        <li><a target="_blank" href="https://twitter.com/"><i class="icon fa fa-twitter"></i></a></li>-->
<!--                                        <li><a target="_blank" href="https://www.facebook.com/"><i class="icon fa fa-facebook"></i></a></li>-->
<!--                                        <li><a target="_blank" href="https://instagram.com/"><i class="icon fa fa-linkedin"></i></a></li>-->
<!--                                        <li><a target="_blank" href="https://www.google.com/"><i class="icon fa fa-google"></i></a></li>-->
<!--                                    </ul>-->
<!--                                </section>-->
<!--                                --><?php //endwhile;endif;
//                                wp_reset_postdata(); ?>
<!--                            </div>
                       </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->

    <?php endwhile; endif; ?>

        <div class="section-clients section-bg_mod-a wow">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">
                        <div class="section-bg_mod-a section-title-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="ui-title-block"><span class="ui-title-emphasis">BİZİMLE Olan</span>Referanslar
                                        </h2>
                                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carusel-clients slider_mod-a owl-carousel owl-theme enable-owl-carousel"
                             data-min480="1"
                             data-min768="4"
                             data-min992="4"
                             data-min1200="4"
                             data-pagination="false"
                             data-navigation="false"
                             data-auto-play="4000"
                             data-stop-on-hover="true">
                            <?php $limit=6; $counter=0;

                            $wp_query = new WP_Query(array('post_type' => 'referanslar', 'ignore_sticky_posts' => 1, 'showposts' => -1, 'orderby' => 'ID', 'order' => 'ASC'));

                            if ($wp_query->have_posts()) :
                                while ($wp_query->have_posts()) : $wp_query->the_post();
                                    if($counter<$limit){

                                        ?>
                                        <a class="carusel-clients__item" href="<?php echo home_url("referanslar")?>">
                                            <img class="carusel-clients__img"
                                                 src="<?php the_post_thumbnail_url('homereferencesimg') ?>"
                                                 alt="<?php the_title() ?>">
                                            <span class="helper-2"></span>
                                        </a>

                                        <?php $counter++;}  endwhile;  endif;
                            wp_reset_postdata(); ?>

                        </div><!-- end  -->

                    </div><!-- end col -->

                </div><!-- end row -->

            </div><!-- end container -->
            <div class="entry-footer d-flexx">
                <div class="decor-3"></div>
                <a class="btn-link" href="<?php echo home_url("referanslar")?>">Tümünü Gör</a>
            </div>
        </div><!-- end section-clients -->

<?php  get_footer(); ?>
<script>
    $('#lightgallery').lightGallery();

</script>