<?php get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        GLOBAL $admin_opsiyon_panel;
// Filter except length to 35 words.
// tn custom excerpt length
        function tn_custom_excerpt_length( $length ) {
            return 3;
        }
        add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 10 );
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
                            <div class="ui-subtitle-page"><?php the_field("baslik_detay") ?></div>
                            <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section__inner -->
        </div><!-- end section-title -->
<div class="wrap">

	<?php get_sidebar(); ?>
</div><!-- .wrap -->

    <?php endwhile;endif;
wp_reset_postdata();  get_footer(); ?>