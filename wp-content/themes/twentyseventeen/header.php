<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
GLOBAL $admin_opsiyon_panel;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title><?php echo bloginfo(); ?>   <?php  wp_title(); ?></title>

    <link href="favicon.png" type="image/x-icon" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/master.css" rel="stylesheet">

    <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/modernizr.custom.js"></script>
</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">


    <!-- HEADER -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <header class="header">
                    <div class="header__wrap">
                        <div class="header-top clearfix">
                            <div class="header-top__inner">
                                <span class="header-top__contacts">Telefon :  <?php echo $admin_opsiyon_panel['telefon_no'] ?></span>
                                <span class="header-top__contacts">Email : <a class="header-top__contacts-link" href="mailto:inquiry@domain.com"> <?php echo $admin_opsiyon_panel['email_adres'] ?></a></span>
                                <span class="header-top__contacts">Pzt  -  Paz :  12:00  -  12:00</span>
                            </div>

                            <ul class="social-links list-inline">
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['twitter'] ?>"><i class="icons fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['facebook'] ?>"><i class="icons fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="<?php echo $admin_opsiyon_panel['google'] ?>"><i class="icons fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>

                        <a class="logo" href="<?php echo home_url() ?>"><img class="logo__img" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Hafriyat"></a>

                        <div class="header__inner clearfix">
                            <nav class="navbar yamm">
                                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo home_url() ?>">ANASAYFA</a></li>
                                        <li><a href="<?php echo home_url("hakkimizda") ?>">HAKKIMIZDA</a></li>
                                        <li><a href="<?php echo home_url("hizmetlerimiz") ?>">HİZMETLER</a></li>
                                        <li><a href="<?php echo home_url("haberler") ?>">HABERLER</a></li>
                                        <li><a href="<?php echo home_url("galeri") ?>">GALERİ</a></li>
                                        <li><a href="<?php echo home_url("referanslar") ?>">REFERANSLAR</a></li>
                                        <li><a href="<?php echo home_url("araclar") ?>">ARAÇLAR</a></li>

                                    </ul>
                                </div>
                            </nav>
                            <a class="header__btn btn btn-primary btn-sm btn-effect-2" href="<?php echo home_url("iletisim") ?>">İLETİŞİM</a>
                        </div>
                    </div>
                </header><!-- end header-->
            </div><!-- end col-->
        </div><!-- end row-->
    </div><!-- end container-->
