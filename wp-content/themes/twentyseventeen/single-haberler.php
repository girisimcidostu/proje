<?php get_header();

if (have_posts()) :
while (have_posts()) :
the_post();
GLOBAL $admin_opsiyon_panel;
// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 10 );
?>


    <div class="section-title parallax-bg parallax-light">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(<?php the_field("haber_ana_resim") ?>)" class="bg-slide"></div>
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


<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8">
            <div class="section-default section-posts">
                <article class="post post_mod-c post_main clearfix">
                    <div class="entry-media">
                        <img class="img-responsive" src="<?php the_post_thumbnail_url('newsdetailimg') ?> "
                             alt="<?php the_title() ?>">
                        <div class="entry-date"><a ><span
                                        class="entry-date__inner"><?php the_field("haber_tarih") ?></span><i
                                        class="icon fa fa-picture-o"></i></a></div>
                    </div>

                    <div class="entry-main">
                        <div class="entry-header">
                            <h2 class="entry-title ui-title-inner">Lorem ipsum dolor sit amet adipisicing elit</h2>
                        </div>
                        <div class="entry-content">
                            <p><?php the_content() ?></p>
                            <div class="row">
                                <?php if (get_field('haber_resmi')) { ?>

                                    <div class="col-md-6"><img class="post-img img-responsive img-395"
                                                               src="<?php the_field("haber_resmi") ?>"
                                                               alt="<?php the_title() ?>"></div>
                                <?php } ?>
                                                                <?php if (get_field('haber_resmi_1')) { ?>

                                <div class="col-md-6"><img class="post-img img-responsive img-395"
                                                           src="<?php the_field("haber_resmi_1") ?>"
                                                           alt="<?php the_title() ?>"></div>
                                                                <?php } ?>

                            </div><!-- end row -->
                            <blockquote class="blockquote blockquote_mod-a typography-blockquote">
                                <p>“ Lorem ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua enim veniam quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip exea commodo consequat duis aute dolor
                                    reprehenderit.”</p>
                            </blockquote>
                        </div>
                        <footer class="entry-footer clearfix">
                            <div class="entry-footer__wrap-link">
                                <div class="decor-3"></div>
                                <a class="btn-link">Bu Gönderiyi Paylaş</a>
                            </div>
                            <ul class="social-links social-links_mod-a social-links_mod-b list-inline">
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['twitter'] ?>"><i class="icons fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['facebook'] ?>"><i class="icons fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['google'] ?>"><i class="icons fa fa-google"></i></a></li>
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['instagram'] ?>"><i class="icons fa fa-instagram"></i></a></li>
                            </ul>
                        </footer>
                    </div>
                </article>

            </div>
        </div>


        <div class="col-md-3 col-sm-4">
            <aside class="sidebar">
                <div class="widget widget_searce">
                </div><!-- end widget -->

                <?php get_sidebar() ?>

                <?php endwhile;
                endif; ?>


            </aside>
        </div>
    </div>
</div>
<?php get_footer(); ?>
