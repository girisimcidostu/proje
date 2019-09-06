<?php get_header();
/**
 * Template Name: Haberler Sayfası
 */
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        GLOBAL $admin_opsiyon_panel;
// Filter except length to 35 words.
// tn custom excerpt length
        function tn_custom_excerpt_length( $length ) {
            return 30;
        }
        add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 30 );


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

<?php  endwhile;endif; wp_reset_postdata();  ?>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="section-default section-posts">
                        <?php

                        $wp_query = new WP_Query(array('post_type' => 'haberler', 'ignore_sticky_posts' => 1, 'showposts' => -1, 'orderby' => 'ID', 'order' => 'ASC'));


                        if ($wp_query->have_posts()) :

                        while ($wp_query->have_posts()) : $wp_query->the_post();

                        ?>

                        <article onclick="location.href='<?php the_permalink() ?>'" class="post post_mod-c clearfix">
                            <div class="entry-media">
                                <img class="img-responsive" src="<?php the_post_thumbnail_url('newsimg') ?>" alt="<?php the_title() ?>">
                                <div class="entry-date"><a href="<?php the_permalink() ?>"><span class="entry-date__inner"><?php the_field("haber_tarih") ?></span><i class="icon fa fa-picture-o"></i></a></div>
                            </div>


                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title ui-title-inner"><?php the_title() ?></h2>
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
                        <?php endwhile;endif;
                        wp_reset_postdata(); ?>


                    </div>
                </div>

                <div class="col-md-3 col-sm-4">
                    <aside class="sidebar">
                        <div class="widget widget_searce">

                        </div><!-- end widget -->
                        <?php get_sidebar() ?>
                    </aside>
                </div>

            </div>
        </div>
<style>
    article.post.post_mod-c.clearfix {
        cursor: pointer;
    }
</style>



    <?php

    get_footer(); ?>

