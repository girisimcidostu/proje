<?php get_header();
/**
 * Template Name: İletişim Sayfası
 */
if ( have_posts() ) :
while ( have_posts() ) : the_post();
GLOBAL $admin_opsiyon_panel;
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
    <div class="map"><iframe src="<?php echo $admin_opsiyon_panel['maplink']; ?>" class="mt50" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="section_mod-c">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="section-contacts-block">
                        <h3 class="contacts-block__title ui-title-inner">24/7 Express Logistics Services</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="contacts-block__description">SORULARINIZ VEYA İHTİYACINIZ VARSA, VIA TELEFON VEYA E-POSTA HER ZAMAN BİZE ULAŞIN.</div>
                        <div class="contacts-block clearfix">
                            <i class="icon flaticon-telephone114"></i>
                            <span class="contacts-block__inner">
										<span class="contacts-block__emphasis color-primary"><?php echo $admin_opsiyon_panel['telefon_no']; ?></span> 24/7 Ücretsiz Yardım Hattı</span>
                        </div>
                        <div class="contacts-block clearfix">
                            <i class="icon flaticon-mail45"></i>
                            <span class="contacts-block__inner">
										<a class="contacts-block__emphasis color-primary" href="mailto:ornek@deneme.com"><?php echo $admin_opsiyon_panel['email_adres']; ?></a> Biz genellikle 24 saat içinde cevap veriyoruz.</span>
                        </div>
                    </section><!-- end contacts-block -->

                    <section class="section-contacts-block">
                        <h3 class="contacts-block__title ui-title-inner">ZİYARET MERKEZİ</h3>
                        <div class="decor-2 decor-2_mod-b"></div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-location74"></i>
                            <span class="contacts-block__inner"><?php echo $admin_opsiyon_panel['adres']; ?></span>
                        </div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-print44"></i>
                            <span class="contacts-block__inner"><?php echo $admin_opsiyon_panel['telefon_no']; ?></span>
                        </div>
                        <div class="contacts-block contacts-block_mod-a clearfix">
                            <i class="icon flaticon-laptop118"></i>
                            <span class="contacts-block__inner">www.kavakharfiyat.org</span>
                        </div>
                    </section><!-- end contacts-block -->


                    <div class="contacts-block__social clearfix">
                        <div class="contacts-block__wrap-social">
                            <div class="decor-3"></div>
                            <a class="btn-link" >Bağlantılar</a>
                        </div>
                        <ul class="social-links social-links_mod-a social-links_mod-b list-inline">
                            <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['twitter']; ?>"><i class="icons fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['facebook']; ?>"><i class="icons fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['google']; ?>"><i class="icons fa fa-google"></i></a></li>
                            <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['instagram']; ?>"><i class="icons fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div><!-- end col -->


                <div class="col-md-7 col-md-offset-1">
                    <section class="section-form-request">
                        <div class="wrap-title-block wrap-title-block_mod-c">
                            <h3 class="ui-title-block ui-title-block_mod-c">Mesaj Gönder</h3>
                            <div class="decor-1 decor-1_mod-b"><i class="icon flaticon-delivery36"></i></div>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="285" title="İletişim Formu"] '); ?>


                    </section>
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div><!-- end section-area -->

<?php  endwhile;endif; wp_reset_postdata();  get_footer(); ?>
