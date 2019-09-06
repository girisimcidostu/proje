
<?php get_header();
/**
 * Template Name: Galeri Sayfası
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


        <div class="container" style="padding-top: 60px">

            <div class="row portfolio">
                <ul id="lightgallery" class="list-unstyled">
                    <?php $x=0;
                    $args = array('post_type' => 'resim_galerisi');
                    $slaytLoop = new WP_Query($args);
                    if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                        ?>
                        <div class="col-sm-6 col-md-4" data-responsive="<?php the_post_thumbnail_url("gallerybigimg"); ?>" data-src="<?php the_post_thumbnail_url('gallerybigimg'); ?>">
                            <li class="thumbnail" >
                                    <img class="img-responsive" src="<?php the_post_thumbnail_url('galleryimg'); ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>">
                            </li>
                        </div>
                    <?php endwhile;endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <!-- Modal -->

        </div>


<?php
    endwhile;endif;
wp_reset_postdata();
get_footer(); ?>
<script>
    $('#lightgallery').lightGallery();

</script>
