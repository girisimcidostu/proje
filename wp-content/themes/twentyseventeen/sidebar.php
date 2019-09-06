<?php

add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 5 );
?>
<?php  $tags = get_tags(); ; ?>
<section class="widget">
    <h3 class="widget-title ui-title-inner">HİZMET KATEGORİLERİ</h3>
    <div class="decor-2 decor-2_mod-b"></div>
    <div class="widget-content">
        <ul class="list-widget list-unstyled">
            <?php
            $kategoriler = array();
            $kategoriler = get_terms(array(
                'taxonomy' =>'araclar_kategori',
                'hide_empty' => false,

            ));
            ?>
            <?php
            foreach ($kategoriler as $kategori):
                $terms = get_terms( $kategori->taxonomy, array( 'parent' => $kategori->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
                ?>

                <li  class="list-widget__item"><a class="list-widget__link"  href="<?php  echo get_term_link($kategori->slug,$kategori->taxonomy); ?>" title="<?php echo $kategori->name; ?>"><?php echo $kategori->name; ?></a></li>
            <?php endforeach;  ?>

        </ul>
    </div><!-- end widget-content -->
</section><!-- end widget -->
<section class="widget">
    <h3 class="widget-title ui-title-inner">YAKIN ZAMANDA PAYLAŞILANLAR</h3>
    <div class="decor-2 decor-2_mod-b"></div>
    <div class="widget-content">
        <?php

        $limit = 3;
        $counter = 0;
        $args = array('post_type' => 'haberler');
        $slaytLoop = new WP_Query($args);
        if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                if ($counter < $limit) {

                    ?>
                    <div class="post-widget clearfix">
                        <div class="post-widget__media"><a href="<?php the_permalink() ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url('kare') ?>" alt="<?php the_title() ?> "></a></div>
                        <div class="post-widget__inner">
                            <div class="post-widget__meta"><span class="post-widget__meta-inner"><time datetime="2012-10-27 15:20"><?php the_field("haber_tarih") ?></time></span></div>
                            <a class="post-widget__title" href="<?php the_permalink() ?>"><?php the_excerpt()?></a>
                        </div>
                    </div><!-- end post-widget -->
                    <?php $counter++;
                } endwhile; endif;
        wp_reset_postdata(); ?>
    </div><!-- end widget-content -->
</section><!-- end widget -->


<section class="widget">
    <h3 class="widget-title ui-title-inner">Etiketler</h3>
    <div class="decor-2 decor-2_mod-b"></div>
    <div class="widget-content">
        <ul class="list-tags">
            <?php
            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );  ?>
                <a class="tag-cloud" href="<?php echo $tag_link; ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name ?></a>
            <?php } ?>
        </ul>
    </div><!-- end widget-content -->
</section><!-- end widget -->
