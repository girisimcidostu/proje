<?php get_header();
/**
 * Template Name: Referanslar Sayfası
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


       <!-- <div class="container" style="padding-top: 60px">

            <div class="row portfolio">
                <ul id="lightgallery3" class="list-unstyled">
                    <?php $x = 0;
                    $args = array('post_type' => 'referanslar');
                    $slaytLoop = new WP_Query($args);
                    if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                        ?>
                        <div class="col-sm-6 col-md-4" data-responsive="<?php the_post_thumbnail_url(); ?>"
                             data-src="<?php the_post_thumbnail_url(); ?>">
                            <li class="thumbnail">
                                <img class="img-responsive img-300" src="<?php the_post_thumbnail_url(); ?>"
                                     alt="<?php the_title() ?>" title="<?php the_title() ?>">
                            </li>
                        </div>
                    <?php endwhile;endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
-->
        </div>

    <div class="mt-5">
<div class="d-flex">
        <ul class="nav nav-pills  mb-3" id="pills-tab" role="tablist">
            <li class="nav-item  boone active">
                <a class="br-rd-left nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                   aria-controls="pills-home" aria-selected="true">Yaptıklarımız</a>
            </li>
            <li class="nav-item bootwo">
                <a class="br-rd-right nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                   aria-controls="pills-profile" aria-selected="false">Yapacaklarımız</a>
            </li>

        </ul>
</div>

        <div class="tab-content container" id="pills-tabContent" style="padding-top: 60px">
            <div class="tab-pane fade  active row portfolio" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <ul id="lightgallery" class="list-unstyled">
                    <?php $x = 0;
                    $args = array('post_type' => 'yaptiklarimiz');
                    $slaytLoop = new WP_Query($args);
                    if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                        ?>
                    <div class="col-sm-6 col-md-4" data-responsive="<?php the_post_thumbnail_url('referencebigimg'); ?>"
                         data-src="<?php the_post_thumbnail_url('referencebigimg'); ?>">
                        <li class="thumbnail">
                            <a>
                                <img class="img-responsive mb-0" src="<?php the_post_thumbnail_url("referenceimg"); ?>"
                                     alt="<?php the_title() ?>" title="<?php the_title() ?>">
                            </a>
                        </li>
                    </div>
                        <?php $x++; endwhile;endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="tab-pane fade row portfolio" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <ul id="lightgallery2" class="list-unstyled">
                    <?php $x = 0;
                    $args = array('post_type' => 'yapacaklarimiz');
                    $slaytLoop = new WP_Query($args);
                    if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                        ?>
                    <div class="col-sm-6 col-md-4" data-responsive="<?php the_post_thumbnail_url('referencebigimg'); ?>"
                         data-src="<?php the_post_thumbnail_url('referencebigimg'); ?>">
                        <li class="thumbnail">
                            <a >
                                <img class="img-responsive  mb-0" src="<?php the_post_thumbnail_url("referenceimg"); ?>"
                                     alt="<?php the_title() ?>" title="<?php the_title() ?>">
                            </a>
                        </li>
                    </div>
                    <?php endwhile;endif;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </div>



    <?php
    endwhile;endif;
wp_reset_postdata();
get_footer(); ?>
<script>
    $('#lightgallery').lightGallery();
    $('#lightgallery2').lightGallery();
    $('#lightgallery3').lightGallery();
    $('.tab-pane:eq(0)').removeClass('fade');

</script>

