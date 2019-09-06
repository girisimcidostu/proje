<?php get_header();
/**
 * Template Name: Hizmetlerimiz Sayfası
 */
if (have_posts()) :
while (have_posts()) :
the_post();

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

                                <article  class="post post_mod-b clearfix">
                                    <div class="entry-media" >
                                        <a>
                                            <img class="img-responsive" src="<?php the_post_thumbnail_url("homeservicessliderimg") ?>" alt="<?php the_title() ?>">
                                        </a>
                                    </div>

                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title ui-title-inner"><a ><?php the_title() ?></a></h2>
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
                            <img class="img-responsive" src="<?php the_post_thumbnail_url('homeyaptiklarimizimg') ?>" alt="<?php the_title() ?>">
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

    <section class="section-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-emphasis">Daha fazla TEKLİF</span>EKSTRA HİZMETLER
                    </h2>
                    <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-hotairballoon1"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_1") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_1") ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-delivery36"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_2") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_2") ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-smartphone4"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_3") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_3") ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-transport643"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_4") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_4") ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-hour14"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_5") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_5") ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="list-features-2">
                        <i class="list-features-2__icon flaticon-boxes40"></i>
                        <div class="list-features-2__inner">
                            <h3 class="list-features-2__title ui-title-inner"><?php the_field("metin_6") ?></h3>
                            <div class="list-features-2__description"><?php the_field("icerik_6") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bg">
        <div class="parallax-bg parallax-primary">
            <ul class="bg-slideshow">
                <li>
                    <div style="background-image:url(assets/media/bg/bg-7.jpg)" class="bg-slide"></div>
                </li>
            </ul>
        </div>
        <div class="section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="block-download clearfix">
                            <div class="block-download__inner">
                                <h2 class="block-download__title">HİZMET BROŞÜRLERİMİZİ İNDİRİN</h2>
                                <div class="block-download__description">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit douis eiusmod tempor incididunt sed
                                </div>
                            </div>
                            <div class="block-download__btn">
                                <a class="btn btn_mod-c btn-sm btn-effect" ><span
                                            class="btn__inner">ŞİMDİ İNDİR</span></a>
                            </div>
                            <i class="block-download__icon flaticon-map2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section_mod-a section_mod-e">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="ui-title-block"><span class="ui-title-emphasis">Neden BİZİ SEÇMELİSİNİZ</span>Ana ÖZELLİKLER
                </h2>
                <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                <div class="ui-subtitle-block ui-subtitle-block_mod-a">Lorem ipsum dolor sit amet diial consectetur
                    adipisicing elit sed eiusmod tempor incididunt ut labore et dolore magna cadso aliqua
                </div>
            </div>
        </div>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
        <?php
        $wp_query = new WP_Query(array('post_type' => 'anasayfa_ayarlari', 'ignore_sticky_posts' => 1, 'showposts' => 1, 'orderby' => 'ID', 'order' => 'ASC'));
        if ($wp_query->have_posts()) :
            while ($wp_query->have_posts()) :
                $wp_query->the_post();
                ?>
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
                             src="<?php the_field("secimler_resim") ?>" alt="<?php the_title() ?>">
                    </div>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>
</section>
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
                        <div class="text-center"><a class="btn-link btn-link_lg" href="<?php echo  home_url("iletisim") ?>">TEMASTA KALIN</a>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>
</div><!-- end section -->

<?php

get_footer(); ?>

