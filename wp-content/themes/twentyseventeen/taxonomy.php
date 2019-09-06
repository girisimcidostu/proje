<?php get_header();
$tax_term = get_queried_object();
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
                            <div class="ui-subtitle-page"><?php echo  $tax_term->name ?></div>
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
                                <div id="lightgallery" class="col-md-9">
                                    <?php
                                    $args = array(
                                        'post_type' => 'arac_filosu',
                                        'showposts' =>-1,

                                        'tax_query' =>
                                            array('relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'araclar_kategori',
                                                    'field' => 'term_id',
                                                    'terms' =>  $tax_term->term_id
                                                )
                                            )
                                    );

                                    ?>
                                    <?php
                                    $altKatPostLoop = new WP_Query($args);
                                    while($altKatPostLoop->have_posts()) : $altKatPostLoop->the_post(); ?>
                                        <div data-responsive="<?php the_field("ek_resim") ?>" data-src="<?php the_field("ek_resim") ?>" class="col-sm-4">
                                            <article class="post post_mod-b post_mod-b_mg-btn clearfix">
                                                <div class="entry-media">
                                                    <a>
                                                        <img class="img-responsive img-150" src="<?php the_field("ek_resim") ?>"
                                                             alt="<?php the_title() ?>">
                                                    </a>
                                                </div>

                                                <div class="entry-main">
                                                    <div class="entry-header">
                                                        <h2 class="entry-title ui-title-inner"><a href="<?php the_permalink() ?>"><?php echo  $tax_term->name ?></a></h2>
                                                        <div class="decor-2 decor-2_mod-b"></div>
                                                    </div>
                                                    <div class="entry-content">
                                                        <p><?php the_content() ?></p>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    <?php  endwhile;   ?>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <aside class="sidebar">
                                        <div class="widget widget_searce">
                                            <form class="form-search" method="get" id="search-global-form">
                                                <input class="form-search__input form-control" type="text" placeholder="search blog....">
                                                <button class="form-search__btn"><i class="form-search__btn-inner icon fa fa-search"></i></button>
                                            </form>
                                        </div><!-- end widget -->
                                        <?php get_sidebar() ?>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>

    </div>


<?php get_footer(); ?>
<script>
    $('#lightgallery').lightGallery();

</script>
