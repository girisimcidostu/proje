<?php get_header();
/**
 * Template Name: Araçlar Sayfası
 */
if (have_posts()) :
    while (have_posts()) : the_post();
        GLOBAL $admin_opsiyon_panel;
// Filter except length to 35 words.
// tn custom excerpt length
        function tn_custom_excerpt_length( $length ) {
            return 3;
        }
        add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 10 );
        ?>
        <div class="layout-theme animated-css" data-header="sticky" data-header-top="200">
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
            <div class="container">
                <div class="row">
                    <section class="section-area">
                        <div class="section-bg_mod-a section-title-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h2 class="ui-title-block"><span class="ui-title-emphasis">ANA HİZMETLER</span>BİZ NELER SUNARIZ?</h2>
                                        <div class="decor-1"><i class='icon flaticon-delivery36'></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section-top-minus section_mod-d">
                            <div class="container">
                                <div class="row">
                                    <div id="lightgallery"   class="col-md-12">
                                        <?php
                                        $args = array('post_type' => 'arac_filosu');
                                        $slaytLoop = new WP_Query($args);
                                        if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                                        ?>
                                    <div  class="col-sm-3" data-responsive="<?php the_field("ek_resim"); ?>" data-src="<?php the_field("ek_resim"); ?>">
                                        <article class="post post_mod-b post_mod-b_mg-btn clearfix">
                                            <div class="entry-media" >
                                                <a  >
                                                    <img class="img-responsive img-150" src="<?php the_field("ek_resim"); ?>"
                                                         alt="<?php the_title() ?>">
                                                </a>
                                            </div>

                                            <div class="entry-main">
                                                <div class="entry-header">
                                                    <h2 class="entry-title ui-title-inner"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                                    <div class="decor-2 decor-2_mod-b"></div>
                                                </div>
                                                <div class="entry-content">
                                                    <p><?php the_content() ?></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                        <?php endwhile;endif;
                                        wp_reset_postdata(); ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </section>

                </div>
            </div>

        </div>

    <?php endwhile;endif;
wp_reset_postdata();
get_footer(); ?>
<script>
    $('#lightgallery').lightGallery();

</script>
