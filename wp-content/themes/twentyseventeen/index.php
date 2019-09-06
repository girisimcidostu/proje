<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
GLOBAL $admin_opsiyon_panel;

get_header(); ?>
    <div class="main-slider slider-pro wow" id="my-slider"
         data-slider-width="1600"
         data-slider-height="850">

        <div class="sp-slides">

            <!-- Slide 1 -->
            <?php
            $args = array('post_type' => 'slider');
            $slaytLoop = new WP_Query($args);
            if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                ?>
                <div class="sp-slide">
                    <img class="sp-image img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="slider">

                    <div class="sp-layer main-slider__title hidden-xs"
                         data-horizontal="0"
                         data-vertical="36%"
                         data-width="100%"
                         data-show-transition="left"
                         data-hide-transition="right"
                         data-show-duration="800"
                         data-show-delay="400"
                         data-hide-delay="400">
                        <div class="container">
                            <?php the_title(); ?>
                        </div>
                    </div>

                    <div class="sp-layer"
                         data-horizontal="0"
                         data-vertical="43%"
                         data-width="100%"
                         data-show-transition="right"
                         data-hide-transition="left"
                         data-show-duration="800"
                         data-show-delay="1000"
                         data-hide-delay="400">
                        <div class="container">
                            <div class="main-slider__subtitle"><?php the_field("baslik_devam"); ?>
                            </div>
                            <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                        </div>
                    </div>

                    <div class="sp-layer main-slider__text"
                         data-horizontal="0"
                         data-vertical="55%"
                         data-width="100%"
                         data-height="30%"
                         data-show-transition="up"
                         data-hide-transition="buttom"
                         data-show-duration="800"
                         data-show-delay="2000"
                         data-hide-delay="1200">
                        <div class="container">
                            <p class="hidden-xs"><?php the_content(); ?></p>
                            <a href="<?php echo the_field("buton_linki"); ?>" class="btn btn_mod-b btn-effect"><span
                                        class="btn__inner"><?php the_field("buton_metni"); ?></span></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;endif;
            wp_reset_postdata(); ?>
            <!-- end sp-slide -->


        </div>

        <div class="sp-thumbnails">
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-delivery22"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-boat17"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-airplane105"></i></span>
            </div>
            <div class="sp-thumbnail">
                <span class="sp-thumbnail-icon"><i class="icon flaticon-delivery33"></i></span>
            </div>
        </div>

        <!-- end sp-slides -->
    </div><!-- end main-slider -->


    <section class="section-area">
        <div class="section-bg_mod-a section-title-block wow">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">ULUSLARARASI NAKLİYE VE</span>
                            LOJİSTİK HİZMETLERİ
                        </h2>
                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    </div>
                </div>
            </div>
        </div>

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

                                <article onclick="location.href='<?php echo home_url("hizmetlerimiz") ?>'" class="post post_mod-b clearfix">
                                    <div class="entry-media">
                                        <a>
                                            <img class="img-responsive"
                                                 src="<?php the_post_thumbnail_url("homeservicessliderimg") ?>"
                                                 alt="<?php the_title() ?>">
                                        </a>
                                    </div>

                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title ui-title-inner"><a
                                                        ><?php the_title() ?></a></h2>
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
    </section><!-- end section-->
    <section class="section-default wow">
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

    <div class="container wow">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-progress clearfix">
                    <ul class="list-progress list-progress_mod-a list-progress_left list-unstyled">
                        <?php
                        $wp_query = new WP_Query(array('post_type' => 'anasayfa_ayarlari', 'ignore_sticky_posts' => 1, 'showposts' => 1, 'orderby' => 'ID', 'order' => 'ASC'));
                        if ($wp_query->have_posts()) :
                        while ($wp_query->have_posts()) :
                        $wp_query->the_post();
                        ?>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_1") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_1") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>

                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_3") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_3") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_5") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_5") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>
                    </ul><!-- end list-progress -->

                    <ul class="list-progress list-progress_mod-a list-progress_right list-unstyled">
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_2") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_2") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_4") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_4") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <li class="list-progress__item clearfix">
                            <div class="list-progress__inner">
                                <span class="list-progress__percent chart"
                                      data-percent="<?php the_field("sayi_6") ?>"><span
                                            class="percent"></span></span>
                                <span class="list-progress__name"><?php the_field("metin_6") ?></span>
                                <div class="decor-3"></div>
                            </div>
                        </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                    </ul><!-- end list-progress -->

                    <div class="progress-center">
                        <img class="center-block img-responsive img-random"
                             src="<?php the_field("sayilar_resim") ?>"
                             alt="background">
                        <a class="progress-center__link prettyPhoto" href="<?php the_field("video_linki") ?>"><i
                                    class="icon fa fa-play"></i></a>
                        <div class="progress-center__title ui-title-inner">VİDEOMUZU İZLEYİN</div>
                    </div>
                </div><!-- end section-progress -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->


    <div class="slider-thumbnails">
        <div id="slider-product" class="flexslider slider-thumbnails-main">
            <ul class="slides">
                <?php
                $args = array('post_type' => 'yaptiklarimiz_slider');
                $slaytLoop = new WP_Query($args);
                if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                    ?>
                    <li class="slider-thumbnails-main__item">
                        <div class="slider-thumbnails-main__img">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url('homeyaptiklarimizimg') ?>"
                                 alt="<?php the_title() ?>">
                        </div>
                        <div class="slider-thumbnails-main__info">
                            <img src="<?php the_field("ek_resim") ?>" alt="" class="width-100">
                            <div class="decor-2 decor-2_mod_white"></div>
                            <div class="slider-thumbsnails-main__text">
                                <p><?php the_content() ?></p>
                            </div>
                        </div>
                    </li>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>

        <div id="carousel-product" class="flexslider slider-thumbnails-nav">
            <ul class="slides">
                <?php
                $args = array('post_type' => 'yaptiklarimiz_slider');
                $slaytLoop = new WP_Query($args);
                if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                    ?>
                    <li class="slider-thumbnails-nav__item">
                        <div class="slider-thumbnails-nav__text"><span
                                    class="decor-3 decor-3_mod-a"></span><?php the_title() ?></div>
                        <span class="helper-2"></span>
                    </li>
                <?php endwhile;
                endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>

    <section class="section-default wow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">Neden BİZİ SEÇMELİSİNİZ
</span>ANA ÖZELLİKLER
                    </h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    <div class="ui-subtitle-block ui-subtitle-block_mod-a">Lorem ipsum dolor sit amet diial consectetur
                        adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna cadso aliqua
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-7">
                    <ul class="list-features list-features_mod-b list-unstyled">
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-head39"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><?php the_field("secim_baslik") ?></h3>
                                <div class="list-features__description"><?php the_field("secim_icerik") ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-delivery56"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><?php the_field("secim_baslik_2") ?></h3>
                                <div class="list-features__description"><?php the_field("secim_icerik_2") ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-world77"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><?php the_field("secim_baslik_3") ?></h3>
                                <div class="list-features__description"><?php the_field("secim_icerik_3") ?>
                                </div>
                            </div>
                        </li>
                        <li class="list-features__item">
                            <i class="list-features__icon flaticon-transport643"></i>
                            <div class="list-features__inner">
                                <h3 class="list-features__title ui-title-inner"><?php the_field("secim_baslik_4") ?></h3>
                                <div class="list-features__description"><?php the_field("secim_icerik_4") ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-sm-5">
                    <img class="img-responsive img-549 radius-28"
                         src="<?php the_field("secimler_resim") ?>"
                         alt="<?php the_title() ?>">
                </div>
            </div>
        </div>
    </section><!-- end section -->


    <div class="section-bg_mod-b section_mod-a wow">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-first"><span
                                    class="ui-title-block__inner">BİR TEKLİF İSTEĞİ</span></h2>
                        <?php echo do_shortcode('[contact-form-7 id="286" title="Teklif Formu"]'); ?>
                    </section>
                    <div class="decor-4 decor-4_mod-b"><i class="icon flaticon-logistics3 color-primary"></i></div>
                </div>

                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-last ui-title-block_w_bg-primary">
                            <span class="ui-title-block__inner">GENEL SSS</span></h2>

                        <div class="block_left_pad">
                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i><span
                                                    class="helper-2"></span></a>
                                        <h3 class="panel-title ui-title-inner"><?php the_field("sss_baslik") ?></h3>
                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php the_field("sss_icerik") ?></p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1"
                                           href="#collapse-2"><i class="icon"></i><span class="helper-2"></span></a>
                                        <h3 class="panel-title ui-title-inner"><?php the_field("sss_baslik_1") ?></h3>
                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p><?php the_field("sss_icerik_1") ?></p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i><span
                                                    class="helper-2"></span></a>
                                        <h3 class="panel-title ui-title-inner"><?php the_field("sss_baslik_2") ?></h3>
                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php the_field("sss_icerik_2") ?></p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i><span
                                                    class="helper-2"></span></a>
                                        <h3 class="panel-title ui-title-inner"><?php the_field("sss_baslik_3") ?></h3>
                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><?php the_field("sss_icerik_3") ?></p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->
                            </div><!-- end accordion -->
                            <div class="note text-center">Sorunuzun cevabını burada bulamadıysanız, Bize ulaşın
                                <br>& temsilcimiz size en kısa sürede cevap verecektir, genellikle 24 saat içinde!
                            </div>
                            <div class="decor-3 text-center"></div>
                            <div class="text-center"><a class="btn-link btn-link_lg"
                                                        href="<?php echo home_url("iletisim") ?>">Temasta Kalın</a>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div><!-- end section -->
    <section class="section-area wow">
        <div class="section-bg_mod-a section-title-block">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="ui-title-block"><span class="ui-title-emphasis">En Son</span>ŞİRKET
                            HABERLERİ</h2>
                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-top-minus section_mod-a">
            <div class="container">
                <div class="row">
                    <?php
                    $wp_query = new WP_Query(array('post_type' => 'haberler', 'ignore_sticky_posts' => 1, 'showposts' => -1, 'orderby' => 'ID', 'order' => 'ASC'));
                    if ($wp_query->have_posts()) :
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <div class="col-sm-4" onclick="location.href='<?php the_permalink() ?>'">
                                <article class="post post_mod-a clearfix">
                                    <a href="<?php the_permalink() ?>">
                                        <div class="entry-media">
                                            <img class="img-responsive"
                                                 src="<?php the_post_thumbnail_url('homenewssimg') ?>"
                                                 alt="<?php the_title() ?>">
                                            <div class="entry-date"><a href="<?php the_permalink() ?>"><span
                                                            class="entry-date__inner"><?php the_field("haber_tarih") ?></span><i
                                                            class="icon fa fa-picture-o"></i></a></div>
                                        </div>
                                    </a>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <a href="<?php the_permalink() ?>"><h2
                                                        class="entry-title ui-title-inner"><?php the_title() ?></h2></a>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php the_excerpt() ?></p>
                                        </div>
                                        <div class="entry-footer">
                                            <div class="decor-3"></div>
                                            <a class="btn-link" href="<?php the_permalink() ?>">Daha Fazla Oku</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile;endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        </a>
    </section><!-- end section -->


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
                        <?php $limit = 6;
                        $counter = 0;

                        $wp_query = new WP_Query(array('post_type' => 'referanslar', 'ignore_sticky_posts' => 1, 'showposts' => -1, 'orderby' => 'ID', 'order' => 'ASC'));

                        if ($wp_query->have_posts()) :
                            while ($wp_query->have_posts()) : $wp_query->the_post();
                                if ($counter < $limit) {

                                    ?>
                                    <a class="carusel-clients__item" href="<?php echo home_url("referanslar") ?>">
                                        <img class="carusel-clients__img"
                                             src="<?php the_post_thumbnail_url('homereferencesimg') ?>"
                                             alt="<?php the_title() ?>">
                                        <span class="helper-2"></span>
                                    </a>

                                    <?php $counter++;
                                } endwhile; endif;
                        wp_reset_postdata(); ?>

                    </div><!-- end  -->

                </div><!-- end col -->

            </div><!-- end row -->

        </div><!-- end container -->
        <div class="entry-footer d-flexx">
            <div class="decor-3"></div>
            <a class="btn-link" href="<?php echo home_url("referanslar") ?>">Tümünü Gör</a>
        </div>
    </div><!-- end section-clients -->


    <div class="section-default section-bg_mod-c wow">
        <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="block-contacts">
                            <div class="block-contacts__title-1">ŞİMDİ BİZİ ARAYIN</div>
                            <div class="block-contacts__title-2"><i class="icon flaticon-telephone114"></i><span
                                        class="color-primary color-pri"><?php echo $admin_opsiyon_panel['telefon_no'] ?></span>
                            </div>
                            <div class="block-contacts__title-3">YARDIM İÇİN 7/24 AÇIK</div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
    </div><!-- end section-default -->

<?php
get_footer();
