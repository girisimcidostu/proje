<?php
GLOBAL $admin_opsiyon_panel;

?>
<div class="section-area parallax-bg parallax-dark wow">
    <ul class="bg-slideshow">
        <li>
            <div style="background-image:url(<?php echo get_template_directory_uri() ?>/assets/media/bg/bg-footer.jpg)" class="bg-slide"></div>
        </li>
    </ul>
    <div class="section__inner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <footer class="footer">
                        <div class="footer-main">
                            <div class="section__inner">
                                <div class="row">
                                    <div class="col-lg-5 col-md-3">
                                        <div class="footer__section">
                                            <a class="footer__logo" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo"></a>
                                            <div class="footer__info">
                                                <p><?php echo $admin_opsiyon_panel['footerhakkimizda'] ?></p>
                                            </div>
                                            <ul class="social-links social-links_mod-a list-inline">
                                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['twitter'] ?>"><i class="icons fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['facebook'] ?>"><i class="icons fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['google'] ?>"><i class="icons fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['instagram'] ?>"><i class="icons fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-lg-2 col-md-3">
                                        <section class="footer__section">
                                            <h3 class="footer__title">SUNULAN HİZMETLER</h3>
                                            <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                                            <ul class="footer-list list-unstyled">
                                                <?php
                                                $args = array('post_type' => 'yaptiklarimiz_slider');
                                                $slaytLoop = new WP_Query($args);
                                                if ($slaytLoop->have_posts()) : while ($slaytLoop->have_posts()) : $slaytLoop->the_post();
                                                ?>
                                                <li class="footer-list__item" style="text-transform: capitalize;">
                                                    <a class="footer-list__link" style="text-transform: capitalize;" href="s<?php echo home_url("hizmetlerimiz")?>"><?php the_title() ?></a>
                                                </li>
                                                <?php endwhile;
                                                endif;
                                                wp_reset_postdata(); ?>
                                            </ul>
                                        </section>
                                    </div><!-- end col -->

                                    <div class="col-lg-2 col-md-3">
                                        <section class="footer__section">
                                            <h3 class="footer__title">HIZLI LİNKLER</h3>
                                            <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                                                <?php
                                                wp_nav_menu( array(
                                                    'theme_location' => '',
                                                    'container_class' => 'footer-list__item',
                                                    'menu_class' => 'footer-list list-unstyled') );
                                                ?>
                                        </section>
                                    </div><!-- end col -->

                                    <div class="col-md-3">
                                        <section class="footer__section">
                                            <h3 class="footer__title">İLETİŞİM Detayları</h3>
                                            <div class="decor-2 decor-2_mod-b decor-2_mod_white"></div>
                                            <div class="footer-contact">
                                                <div class="footer-contact__inner">
                                                    <div class="footer-contact__title">24/7 Express Logistics</div>
                                                    <div class="footer-contact__info"><?php echo $admin_opsiyon_panel['adres'] ?></div>
                                                    <div class="footer-contact__info">Telefon: <?php echo $admin_opsiyon_panel['telefon_no'] ?></div>
                                                    <div class="footer-contact__info">Email: <a href="mailto:ornek@deneme.com"><?php echo $admin_opsiyon_panel['email_adres'] ?></a></div>

                                                </div>
                                            </div><!-- end footer-contact -->
                                        </section>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end section__inner -->
                        </div><!-- end footer-main -->


                        <div class="copyright clearfix">
                            <div class="copyright__inner">© 2019 <a class="copyright__link" href="http://www.girisimcidostu.net">Girişimci Dostu</a> Tüm hakları saklıdır.</div>

                        </div><!-- end copyright -->
                    </footer><!-- end footer -->

                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section__inner -->
</div><!-- end section-area -->

</div><!-- end layout-theme -->


<!-- SCRIPTS MAIN -->

<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/waypoints.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/modernizr.custom.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/cssua.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/lightgallery.js"></script>


<!--SCRIPTS THEME-->

<!-- Home slider -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/slider-pro/dist/js/jquery.sliderPro.js"></script>
<!-- Sliders -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/flexslider/jquery.flexslider.js"></script>
<!-- Modal -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<!-- Select customization -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/bootstrap-select/dist/js/bootstrap-select.js"></script>
<!-- Chart -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<!-- Animation -->
<script src="<?php echo get_template_directory_uri() ?>/assets/plugins/scrollreveal/dist/scrollreveal.min.js"></script>
<!-- Menu for android-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/doubletaptogo.js"></script>

<!-- Custom -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/custom.js"></script>

</body>
</html>
<style>
    article.post.post_mod-a.clearfix {
        cursor: pointer;
    }
</style>
