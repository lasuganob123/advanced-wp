<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "opt_lexander_redux";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => 'lexander-redux Theme Options',
        // Name that appears at the top of your panel
        'display_version'      => 'Version 1.0',
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'lexander-redux-redux' ),
        'page_title'           => __( 'Theme Options', 'lexander-redux-redux' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-docs',
//        'href'  => 'http://docs.reduxframework.com/',
//        'title' => __( 'Documentation', 'lexander-redux-redux' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        //'id'    => 'redux-support',
//        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
//        'title' => __( 'Support', 'lexander-redux-redux' ),
//    );
//
//    $args['admin_bar_links'][] = array(
//        'id'    => 'redux-extensions',
//        'href'  => 'reduxframework.com/extensions',
//        'title' => __( 'Extensions', 'lexander-redux-redux' ),
//    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
//    $args['share_icons'][] = array(
//        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
//        'title' => 'Visit us on GitHub',
//        'icon'  => 'el el-github'
//        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
//        'title' => 'Like us on Facebook',
//        'icon'  => 'el el-facebook'
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://twitter.com/reduxframework',
//        'title' => 'Follow us on Twitter',
//        'icon'  => 'el el-twitter'
//    );
//    $args['share_icons'][] = array(
//        'url'   => 'http://www.linkedin.com/company/redux-framework',
//        'title' => 'Find us on LinkedIn',
//        'icon'  => 'el el-linkedin'
//    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'lexander-redux-redux' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'lexander-redux-redux' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'lexander-redux-redux' );

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
            'title'   => __( 'Theme Information 1', 'lexander-redux-redux' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'lexander-redux-redux' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'lexander-redux-redux' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'lexander-redux-redux' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'lexander-redux-redux' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

 // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General', 'lexander-redux-redux' ),
        'id'               => 'general',
        'desc'             => __( 'General options', 'lexander-redux-redux' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Site Information', 'lexander-redux-redux' ),
        'id'               => 'site-info',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'site-title',
                'type'     => 'text',
                'title'    => __('Site Title', 'lexander-redux-redux'),
            ),
            array(
                'id'       => 'site-desc',
                'type'     => 'text',
                'title'    => __('Site Description', 'lexander-redux-redux'),
            ),
            array(
                'id'       => 'site-logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => __('Logo w/ URL', 'lexander-redux-redux'),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            )
        )
    ) );
	Redux::setSection( $opt_name, array(
        'title'            => __( 'Layout', 'lexander-redux-redux' ),
        'id'               => 'site-layout',
        'subsection'       => true,
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'site_boxed',
                'type'     => 'switch',
                'title'    => __('Boxed Version?', 'lexander-redux-redux'),
                'subtitle' => __('Do you want to enable boxed layout?', 'lexander-redux-redux'),
                'default'  => false,
            ),
            array(
                'id'       => 'page_layout',
                'type'     => 'button_set',
                'title'    => __( 'Page Layout', 'lexander-redux-redux' ),
                'subtitle' => __( 'Default page layout.', 'lexander-redux-redux' ),
                'options'  => array(
                    'left-sidebar'  => 'Left Sidebar',
                    'no-sidebar'    => 'No Sidebar',
                    'right-sidebar' => 'Right Sidebar'
                ),
                'default'  => 'right-sidebar'
            ),
            array(
                'id'       => 'archive_layout',
                'type'     => 'button_set',
                'title'    => __( 'Archive Layout', 'lexander-redux-redux' ),
                'subtitle' => __( 'Default archive layout ( front page, category, tag, search, author, archive ).', 'lexander-redux-redux' ),
                'options'  => array(
                    'left-sidebar'  => 'Left Sidebar',
                    'no-sidebar'    => 'No Sidebar',
                    'right-sidebar' => 'Right Sidebar'
                ),
                'default'  => 'right-sidebar'
            ),
            array(
                'id'       => 'blog_layout',
                'type'     => 'button_set',
                'title'    => __( 'Blog Layout', 'lexander-redux-redux' ),
                'subtitle' => __( 'Set your blog layout to display, include blog page and single blog post.', 'lexander-redux-redux' ),
                'options'  => array(
                    'left-sidebar'  => 'Left Sidebar',
                    'no-sidebar'    => 'No Sidebar',
                    'right-sidebar' => 'Right Sidebar'
                ),
                'default'  => 'right-sidebar'
            ),
            array(
                'id'       => 'single_shop_layout',
                'type'     => 'button_set',
                'title'    => __( 'Single WooCommerce Product Layout', 'lexander-redux-redux' ),
                'subtitle' => __( 'Layout for single product and products archive.', 'lexander-redux-redux' ),
                'options'  => array(
                    'left-sidebar'  => 'Left Sidebar',
                    'no-sidebar'    => 'No Sidebar',
                    'right-sidebar' => 'Right Sidebar'
                ),
                'default'  => 'right-sidebar'
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Social Media Links', 'lexander-redux' ),
        'id'               => 'social-media',
        'subsection'       => false,
        'icon'       => 'el-icon-address-book',
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       =>'twitter',
                'type'     => 'text',
                'title'    => __('Twitter', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Twitter URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'facebook',
                'type'     => 'text',
                'title'    => __('Facebook', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Facebook URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'linkedin',
                'type'     => 'text',
                'title'    => __('Linkedin', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Linkedin URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'pinterest',
                'type'     => 'text',
                'title'    => __('Pinterest', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Pinterest URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'google-plus',
                'type'     => 'text',
                'title'    => __('Google Plus', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Google Plus URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'instagram',
                'type'     => 'text',
                'title'    => __('Instagram', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Instagram URL.', 'lexander-redux-redux'),
            ),
            array(
                'id'       =>'youtube',
                'type'     => 'text',
                'title'    => __('Youtube', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Youtube URL.', 'lexander-redux-redux'),
            ),

            array(
                'id'       =>'envelope',
                'type'     => 'text',
                'title'    => __('Email', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your Email URL.', 'lexander-redux-redux'),
            ),

            array(
                'id'       =>'rss',
                'type'     => 'text',
                'title'    => __('RSS', 'lexander-redux-redux'),
                'subtitle' => '',
                'desc'     => __('Enter your website RSS URL.', 'lexander-redux-redux'),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer', 'lexander-redux' ),
        'id'               => 'Footer',
        'subsection'       => false,
        'icon'       => 'el-icon-photo',
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'footer_widgets',
                'type'     => 'switch',
                'title'    => __('Enable footer widgets area.', 'lexander-redux-redux'),
                'default'  => true,
            ),
            array(
                'id'      => 'footer_columns',
                'type'    => 'button_set',
                'title'   => __( 'Footer Columns', 'lexander-redux-redux' ),
                'desc'    => __( 'Select the number of columns you would like for your footer widgets area.', 'lexander-redux-redux' ),
                'type'    => 'button_set',
                'default' => '4',
                'required' => array('footer_widgets','=',true, ),
                'options' => array(
                    '1'   => __( '1 Columns', 'lexander-redux-redux' ),
                    '2'   => __( '2 Columns', 'lexander-redux-redux' ),
                    '3'   => __( '3 Columns', 'lexander-redux-redux' ),
                    '4'   => __( '4 Columns', 'lexander-redux-redux' ),
                ),
            ),
            array(
                'id'       =>'footer_copyright',
                'type'     => 'textarea',
                'title'    => __('Footer Copyright', 'lexander-redux-redux'),
                'subtitle' => __('Enter the copyright section text.', 'lexander-redux-redux'),
            ),

            array(
                'id'       => 'footer_custom_color',
                'type'     => 'switch',
                'title'    => __('Custom your footer style?.', 'lexander-redux-redux'),
                'default'  => false,
            ),
            array(
                'id'       => 'footer_bg',
                'type'     => 'background',
                'compiler' => true,
                'output'   => array('.site-footer'),
                'title'    => __('Footer Background', 'lexander-redux-redux'),
                'required' => array('footer_custom_color','=',true, ),
                'default'  => array(
                    'background-color' => '#111111',
                )
            ),
            array(
                'id'       => 'footer_widget_title_color',
                'type'     => 'color',
                'compiler' => true,
                'output'   => array('.site-footer .footer-columns .footer-column .widget .widget-title'),
                'title'    => __('Footer Widget Title Color', 'lexander-redux-redux'),
                'default'  => '#eeeeee',
                'required' => array('footer_custom_color','=',true, )
            ),
            array(
                'id'       => 'footer_text_color',
                'type'     => 'color',
                'compiler' => true,
                'output'   => array('.site-footer, .site-footer .widget, .site-footer p'),
                'title'    => __('Footer Text Color', 'lexander-redux-redux'),
                'default'  => '#999999',
                'required' => array('footer_custom_color','=',true, )
            ),
            array(
                'id'       => 'footer_link_color',
                'type'     => 'color',
                'compiler' => true,
                'output'   => array('.site-footer a, .site-footer .widget a'),
                'title'    => __('Footer Link Color', 'lexander-redux-redux'),
                'default'  => '#dddddd',
                'required' => array('footer_custom_color','=',true, )
            ),
            array(
                'id'       => 'footer_link_color_hover',
                'type'     => 'color',
                'compiler' => true,
                'output'   => array('.site-footer a:hover, .site-footer .widget a:hover'),
                'title'    => __('Footer Link Color Hover', 'lexander-redux-redux'),
                'default'  => '#ffffff',
                'required' => array('footer_custom_color','=',true, )
            ),
            array(
                'id'       => 'site_info_bg',
                'type'     => 'background',
                'compiler' => true,
                'output'   => array('.site-info-wrapper'),
                'title'    => __('Site Info Background', 'lexander-redux-redux'),
                'required' => array('footer_custom_color','=',true, ),
                'default'  => array(
                )

            ),
        )
    ));
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Custom CSS', 'lexander-redux' ),
        'id'               => 'custom-css',
        'subsection'       => false,
        'icon'             => 'el-icon-css',
        'customizer_width' => '450px',
        'fields'           => array(
            array(
                'id'       => 'site_css',
                'type'     => 'ace_editor',
                'title'    => __( 'CSS Code', 'lexander-redux' ),
                'subtitle' => __( 'Paste your custom CSS code here.', 'lexander-redux' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="'. esc_url( 'http://ace.c9.io' ) .'" target="_blank">'. esc_attr( 'http://ace.c9.io' ) .'</a>.',
                'default'  => ""
            ),
        )
    ));

    /*
     * <--- END SECTIONS
     */
