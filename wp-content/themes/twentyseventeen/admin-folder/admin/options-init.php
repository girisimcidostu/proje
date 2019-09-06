<?php

    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "admin_opsiyon_panel";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'admin_opsiyon_panel',
        'use_cdn' => TRUE,
        'display_name' => 'TR Avukat Kontrol Paneli',
        'display_version' => 'V 3.0',
        'page_slug' => 'travukat_admin_kontrol',
        'page_title' => 'Kontrol Paneli',
        'update_notice' => TRUE,
        'intro_text' => 'Merhaba, tema yönetim paneline hoşgeldiniz.
        Bu panel vasıtası ile iletişim bilgilerinizi girebilirsiniz.',
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'Menü',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'admin_folder' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'admin_folder' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */



    Redux::setSection( $opt_name, array(
        'title' => __( 'Tema Kontrol', 'redux-framework-demo' ),
        'id'    => 'basic',
        'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
        'icon'  => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'İletişim Bilgileri', 'redux-framework-demo' ),
        'desc'       => __( ''),
        'id'         => 'opt-text-subsection',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'telefon_no',
                'type'     => 'text',
                'title'    => __( 'Telefon Numarası', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Telefon Numaranız',
            ),
       
            array(
                'id'       => 'adres',
                'type'     => 'text',
                'title'    => __( 'Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Adres Detayları',
            ),
             array(
                'id'       => 'keywords',
                'type'     => 'text',
                'title'    => __( 'Site Keywords', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Site Keywords',
            ),
            array(
                'id'       => 'description',
                'type'     => 'text',
                'title'    => __( 'Site Description', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Site Description',
            ),
            array(
                'id'       => 'email_adres',
                'type'     => 'text',
                'title'    => __( 'Email Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Email Adresiniz',
            ),
           
         
            array(
                'id'       => 'facebook',
                'type'     => 'text',
                'title'    => __( 'Facebook Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Facebook Adresiniz',
            ),
            array(
                'id'       => 'twitter',
                'type'     => 'text',
                'title'    => __( 'Twitter Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Twitter Adresiniz',
            ),
            array(
                'id'       => 'instagram',
                'type'     => 'text',
                'title'    => __( 'Instagram Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Instagram Adresiniz',
            ),
            array(
                'id'       => 'youtube',
                'type'     => 'text',
                'title'    => __( 'Youtube Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Youtube Adresiniz',
            ),
            array(
                'id'       => 'google',
                'type'     => 'text',
                'title'    => __( 'Google Adresiniz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Google Adresiniz',
            ),
            array(
                'id'       => 'mojoaydinlatma',
                'type'     => 'text',
                'title'    => __( 'Hakkımızda', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Mojo Aydınlatma',
            ),
             array(
                'id'       => 'projeuygulama',
                'type'     => 'text',
                'title'    => __( 'Vizyonumuz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Proje Uygulama',
            ),
             array(
                'id'       => 'sanatgalerisi',
                'type'     => 'text',
                'title'    => __( 'Misyonumuz', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Sanat Galerisi',
            ),
             array(
                'id'       => 'footerhakkimizda',
                'type'     => 'text',
                'title'    => __( 'Footer Hakkımızda', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Footer Hakkımızda',
            ),
             array(
                'id'       => 'maplink',
                'type'     => 'text',
                'title'    => __( 'Adres Harita Linki', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 'Adres Harita Linki',
            )

        )
    ) );



    /*
     * <--- END SECTIONS
     */
