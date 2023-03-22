<?php

/**
 * Plugin Name:		YouRam - YouTube Embed Gallery WordPress Plugin
 * Description: 	YouTube Playlist Gallery, Vimeo Gallery | YouRam
 * Version: 		10.3
 * Author: 			HanuCodes
 * Author URI: 		https://dailydhyaan.com/
 */
class YouRamAdmin
{
    public function youram_freemius()
    {
        
        if ( !function_exists( 'yram_fs' ) ) {
            // Create a helper function for easy SDK access.
            function yram_fs()
            {
                global  $yram_fs ;
                
                if ( !isset( $yram_fs ) ) {
                    // Include Freemius SDK.
                    require_once dirname( __FILE__ ) . '/freemius/start.php';
                    $yram_fs = fs_dynamic_init( array(
                        'id'             => '12040',
                        'slug'           => 'youram-youtube-embed',
                        'type'           => 'plugin',
                        'public_key'     => 'pk_d57db109c38903044dc42532703bb',
                        'is_premium'     => false,
                        'premium_suffix' => 'Premium',
                        'has_addons'     => false,
                        'has_paid_plans' => true,
                        'trial'          => array(
                        'days'               => 7,
                        'is_require_payment' => false,
                    ),
                        'menu'           => array(
                        'slug'    => 'youram',
                        'support' => false,
                    ),
                        'is_live'        => true,
                    ) );
                }
                
                return $yram_fs;
            }
            
            // Init Freemius.
            yram_fs();
            // Signal that SDK was initiated.
            do_action( 'yram_fs_loaded' );
        }
    
    }
    
    public function __construct()
    {
        if ( !defined( 'ABSPATH' ) ) {
            exit;
        }
        
        if ( function_exists( 'yram_fs' ) ) {
            yram_fs()->set_basename( false, __FILE__ );
        } else {
            $this->youram_freemius();
            define( 'YOURAM_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
            define( 'YOURAM_CACHE_FOLDER', 'youram-cache' );
            define( 'YOURAM_VERSION', '10.3' );
            
            if ( is_admin() ) {
                require_once YOURAM_PLUGIN_DIR . '/admin/youram-option-generator.php';
                require_once YOURAM_PLUGIN_DIR . '/admin/youram-options.php';
                require_once YOURAM_PLUGIN_DIR . '/presets/youram-presets.php';
            }
            
            register_activation_hook( __FILE__, 'youram_activate' );
            add_action( 'wp_ajax_youram_server', array( $this, 'youram_server' ) );
            add_action( 'wp_ajax_nopriv_youram_server', array( $this, 'youram_server' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'youram_load_scripts' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'youram_load_admin_scripts' ) );
            add_shortcode( 'youram', array( $this, 'youram_init' ) );
            register_uninstall_hook( __FILE__, 'youram_uninstall' );
            add_action( 'init', array( $this, 'youram_register_block' ) );
        }
        
        yram_fs()->add_filter( 'connect-header', array( $this, 'yram_fs_custom_connect_header' ) );
        yram_fs()->add_filter(
            'connect_message',
            array( $this, 'yram_fs_custom_connect_message' ),
            10,
            6
        );
        //yram_fs()->add_filter( 'connect-header_on-update', array( $this, 'yram_fs_custom_connect_header_on_update') );
        yram_fs()->add_filter(
            'connect_message_on_update',
            array( $this, 'yram_fs_custom_connect_message_on_update' ),
            10,
            6
        );
    }
    
    function youram_register_block()
    {
        register_block_type( __DIR__ . '/block' );
    }
    
    public function yram_fs_custom_connect_header( $header_html )
    {
        $user = wp_get_current_user();
        return sprintf( __( '<h2>Automatically Create your YouRam Account</h2>', 'my-text-domain' ), $user->user_firstname );
    }
    
    public function yram_fs_custom_connect_message(
        $message,
        $user_first_name,
        $product_title,
        $user_login,
        $site_link,
        $freemius_link
    )
    {
        return sprintf(
            __( 'You will be be able to manage %2$s version, licence, premium trials etc. under WP Admin > YouRam > Account. <br><br>Some basic WP environment info will be required. You might recieve few security + feature updates via email. If you skip this, that\'s okay! %2$s will still work just fine.', 'my-text-domain' ),
            $user_first_name,
            '<b>YouRam</b>',
            '<b>' . $user_login . '</b>',
            $site_link,
            $freemius_link
        );
    }
    
    /*public function yram_fs_custom_connect_header_on_update( $header_html ) {
    		$user = wp_get_current_user();
    		return sprintf(
    		__( 'Thanks %s for updating to our latest release!', 'my-text-domain' ),
    						$user->user_firstname
    				);
        }*/
    public function yram_fs_custom_connect_message_on_update(
        $message,
        $user_first_name,
        $product_title,
        $user_login,
        $site_link,
        $freemius_link
    )
    {
        return sprintf(
            __( 'Allow us to automatically create your YouRam Account. Then, You will be be able to manage %2$s version, licence, premium trials etc. under WP Admin > YouRam > Account. <br><br>Some basic WP environment info will be required. You will also recieve security + feature updates via email. If you skip this, that\'s okay! %2$s will still work just fine.', 'my-text-domain' ),
            $user_first_name,
            '<b>YouRam</b>',
            '<b>' . $user_login . '</b>',
            $site_link,
            $freemius_link
        );
    }
    
    function youram_uninstall()
    {
        $cacheLocation = wp_upload_dir()['basedir'] . '/' . YOURAM_CACHE_FOLDER;
        //$youram_settings = get_option( 'youram' )
        //$cacheLocation = $youram_settings['cache_location'];
        
        if ( is_dir( $cacheLocation ) ) {
            $cacheFiles = glob( $cacheLocation . '/*' );
            foreach ( $cacheFiles as $file ) {
                if ( is_file( $file ) ) {
                    unlink( $file );
                }
            }
            rmdir( $cacheLocation );
        }
        
        $option_name = 'youram';
        //delete_option( $option_name );
        //Dont delete saved options for now - just to be safe.
    }
    
    function youram_update_channel_link( $youramId, $tabArray )
    {
        $youram_settings = get_option( $youramId );
        
        if ( is_null( $youram_settings ) || empty($youram_settings) ) {
            return;
        } else {
            $source_links_setting = $youram_settings['source_links'];
            foreach ( $tabArray as $tabElement ) {
                $sourceLink = $tabElement->sourceLink;
                $tabId = $tabElement->tabId;
                
                if ( str_contains( $tabId, "youtube-channel-uploads-" ) ) {
                    $uploadsPlaylistId = str_replace( "youtube-channel-uploads-", "", $tabId );
                    $playlistLink = "https://www.youtube.com/playlist?list=" . $uploadsPlaylistId;
                    $source_links_setting = str_replace( $sourceLink, $playlistLink, $source_links_setting );
                }
            
            }
            $youram_settings['source_links'] = $source_links_setting;
            update_option( $youramId, $youram_settings );
        }
    
    }
    
    public function youram_server()
    {
        check_ajax_referer( 'youram-nonce', 'nonce' );
        $youramErrorPrefix = "YOURAM_SERVER_VALIDATION_FAILED: ";
        $youramIdValidator = "youram_";
        $youramCacheItem = "";
        $youramId = "";
        //get data
        if ( isset( $_POST['youramCacheItem'] ) ) {
            $youramCacheItem = sanitize_text_field( $_POST['youramCacheItem'] );
        }
        if ( isset( $_POST['youramId'] ) ) {
            $youramId = sanitize_text_field( $_POST['youramId'] );
        }
        //sanitize for json
        $youramCacheItem = stripslashes_deep( $youramCacheItem );
        $youramCacheItemJson = json_decode( $youramCacheItem );
        //$youramSourceIndex = $youramCacheItemJson->sourceIndex;
        $youramSourceID = $youramCacheItemJson->tabId;
        //validate
        
        if ( substr_compare(
            $youramId,
            $youramIdValidator,
            0,
            strlen( $youramIdValidator )
        ) != 0 ) {
            //error_log($youramErrorPrefix."Incorrect YouRam Container ID recieved", 3,"./youram_error_log");
            echo  $youramErrorPrefix . "Incorrect YouRam Container ID recieved" ;
            wp_die();
        }
        
        /*if(is_null($youramSourceIndex) || !is_numeric($youramSourceIndex)) {
        			error_log($youramErrorPrefix."Incorrect YouRam Source Index recieved", 3,"./youram_error_log");
        			echo($youramErrorPrefix."Incorrect YouRam Source Index recieved");
        			wp_die();
        		}*/
        
        if ( is_null( $youramSourceID ) ) {
            //error_log($youramErrorPrefix."Incorrect YouRam Source Name recieved", 3,"./youram_error_log");
            echo  $youramErrorPrefix . "Incorrect YouRam Source Name recieved" ;
            wp_die();
        }
        
        //save cache
        $cacheLocation = wp_upload_dir()['basedir'] . '/' . YOURAM_CACHE_FOLDER . '/';
        //$youram_settings = get_option( 'youram' );
        //$cacheLocation = $youram_settings['cache_location'];
        if ( !is_dir( $cacheLocation ) ) {
            mkdir( $cacheLocation, 0777 );
        }
        $filename = $cacheLocation . "/" . $youramSourceID . ".txt";
        file_put_contents( $filename, $youramCacheItem );
        //$filename = $youramId."-cache-item-".$youramSourceID.".txt";
        //$upload_result = wp_upload_bits($filename, null, $youramCacheItem);
        //move_uploaded_file( $filename, $cacheLocation.$filename );
        //error_log(print_r($upload_result,true));
        //update search based channel links with normal links to minimize quota
        //removing link update to avoid user confusion
        if ( $youramSourceID == "tabs" ) {
            //$this->youram_update_channel_link($youramId,$youramCacheItemJson->tabs);
        }
        echo  esc_attr( $youramSourceID ) ;
        //wp_die();
    }
    
    public function youram_load_admin_scripts( $hook )
    {
        //enqueue only on youram admin page
        
        if ( strpos( $hook, "youram" ) !== false ) {
            $this->youram_load_scripts();
            //$this->youram_load_admin_source_scripts();
            $this->youram_load_admin_minified_scripts();
        }
    
    }
    
    public function youram_load_admin_minified_scripts()
    {
        wp_register_style(
            'youram-admin-css',
            plugins_url( 'admin/css/youram-admin.min.css', __FILE__ ),
            array(),
            YOURAM_VERSION
        );
        if ( !wp_script_is( 'youram-admin-js', 'registered' ) ) {
            wp_register_script(
                'youram-admin-js',
                plugins_url( 'admin/js/youram-admin.min.js', __FILE__ ),
                array( 'jquery' ),
                YOURAM_VERSION,
                true
            );
        }
        //Enqueue scripts
        wp_enqueue_script( 'youram-admin-js' );
        wp_enqueue_style( 'youram-admin-css' );
    }
    
    public function youram_load_admin_source_scripts()
    {
        wp_enqueue_script( 'youram-admin-js', plugins_url( 'admin/js/src/youram-admin.js', __FILE__ ), true );
        wp_enqueue_style( 'youram-admin-css', plugins_url( 'admin/css/src/youram-admin.css', __FILE__ ), true );
    }
    
    public function youram_load_scripts()
    {
        //global $post;
        //if (is_a($post,'WP_Post')&&has_shortcode($post->post_content,'youram')) {
        //$this->youram_load_source_scripts();
        $this->youram_load_minified_scripts();
        $is_premium = "no";
        $in_admin_screen = "no";
        if ( is_admin() ) {
            $in_admin_screen = "yes";
        }
        wp_localize_script( 'youram-base-js', 'youram_wp_ajax_object', array(
            'ajaxurl'         => admin_url( 'admin-ajax.php' ),
            'nonce'           => wp_create_nonce( 'youram-nonce' ),
            'is_premium'      => $is_premium,
            'in_admin_screen' => $in_admin_screen,
        ) );
        //}
    }
    
    public function youram_load_source_scripts()
    {
        wp_register_style(
            'youram-base-css',
            plugins_url( 'css/src/youram.css', __FILE__ ),
            array(),
            '1.0'
        );
        wp_register_style(
            'youram-popup-css',
            plugins_url( 'css/src/youram-popup.css', __FILE__ ),
            array(),
            '1.0'
        );
        
        if ( !wp_script_is( 'youram-base-js', 'registered' ) ) {
            wp_register_script(
                'youram-base-js',
                plugins_url( 'js/src/youram.js', __FILE__ ),
                array( 'jquery' ),
                '2.0',
                true
            );
            wp_register_script(
                'youram-popup-js',
                plugins_url( 'js/src/youram-popup.js', __FILE__ ),
                array( 'jquery' ),
                '1.0',
                true
            );
            wp_register_script(
                'youram-call-js',
                plugins_url( 'js/src/youram-call.js', __FILE__ ),
                array( 'jquery' ),
                '1.0',
                true
            );
        }
        
        //Enqueue scripts
        wp_enqueue_script( 'youram-base-js' );
        wp_enqueue_script( 'youram-popup-js' );
        wp_enqueue_script( 'youram-call-js' );
        //Enqueue styles
        wp_enqueue_style( 'youram-popup-css' );
        wp_enqueue_style( 'youram-base-css' );
    }
    
    public function youram_load_minified_scripts()
    {
        wp_register_style(
            'youram-base-css',
            plugins_url( 'css/youram.min.css', __FILE__ ),
            array(),
            YOURAM_VERSION
        );
        if ( !wp_script_is( 'youram-base-js', 'registered' ) ) {
            wp_register_script(
                'youram-base-js',
                plugins_url( 'js/youram.min.js', __FILE__ ),
                array( 'jquery' ),
                YOURAM_VERSION,
                true
            );
        }
        //Enqueue scripts
        wp_enqueue_script( 'youram-base-js' );
        wp_enqueue_style( 'youram-base-css' );
    }
    
    public function youram_init( $atts, $content = null )
    {
        // normalize attribute keys, lowercase
        $atts = array_change_key_case( (array) $atts, CASE_LOWER );
        //override default attributes with user attributes
        $youram_instance_name = $atts['instance'];
        if ( is_null( $youram_instance_name ) || empty($youram_instance_name) ) {
            $youram_instance_name = 'preview';
        }
        $youram_option_name = 'youram_' . $youram_instance_name;
        //get all settings
        $youram_settings = get_option( $youram_option_name );
        // Array of All Options
        if ( is_null( $youram_settings ) || empty($youram_settings) ) {
            return "<div><strong>YouRam</strong>: Please click 'Save' button in WP Admin > YouRam > Instance Name: [" . $youram_instance_name . "]</div>";
        }
        $source_links_setting = $youram_settings['source_links'];
        $source_links_setting = $this->youram_process_source_links_settings( $source_links_setting );
        $hide_reload_cache_button_setting = 'true';
        /*if(is_admin() && ( current_user_can('editor') || current_user_can('administrator') ) ){
        			$hide_reload_cache_button_setting = 'false';
        		}*/
        //remove line breaks from custom_extra_css
        $custom_extra_css = $youram_settings['custom_extra_css'];
        $custom_extra_css = str_replace( PHP_EOL, ' ', $custom_extra_css );
        $custom_extra_css = str_replace( array( "\n\r", "\n", "\r" ), '', $custom_extra_css );
        //combine settings
        $youram_args = shortcode_atts( array(
            'instance'                      => 'preview',
            'youtube_api_key'               => $youram_settings['youtube_api_key'],
            'vimeo_access_token'            => $youram_settings['vimeo_access_token'],
            'source_ids'                    => $youram_settings['source_ids'],
            'source_links'                  => $source_links_setting,
            'video_embed_link'              => $youram_settings['video_embed_link'],
            'startup_mode'                  => $youram_settings['startup_mode'],
            'max_results'                   => $youram_settings['max_results'],
            'max_rows'                      => $youram_settings['max_rows'],
            'loading_mechanism'             => $youram_settings['loading_mechanism'],
            'video_display_mode'            => $youram_settings['video_display_mode'],
            'thumbnail_display_mode'        => $youram_settings['thumbnail_display_mode'],
            'grid_thumbnail_type'           => $youram_settings['grid_thumbnail_type'],
            'youram_padding'                => $youram_settings['youram_padding'],
            'show_youram_padding'           => ( isset( $youram_settings['show_youram_padding'] ) ? ( $youram_settings['show_youram_padding'] ? 'true' : 'false' ) : 'false' ),
            'show_youram_body_padding'      => ( isset( $youram_settings['show_youram_body_padding'] ) ? ( $youram_settings['show_youram_body_padding'] ? 'true' : 'false' ) : 'false' ),
            'display_first_video_on_load'   => ( isset( $youram_settings['display_first_video_on_load'] ) ? ( $youram_settings['display_first_video_on_load'] ? 'true' : 'false' ) : 'false' ),
            'auto_scroll_to_inline_embed'   => ( isset( $youram_settings['auto_scroll_to_inline_embed'] ) ? ( $youram_settings['auto_scroll_to_inline_embed'] ? 'true' : 'false' ) : 'false' ),
            'auto_play'                     => ( isset( $youram_settings['auto_play'] ) ? ( $youram_settings['auto_play'] ? 'true' : 'false' ) : 'false' ),
            'mute_play'                     => ( isset( $youram_settings['mute_play'] ) ? ( $youram_settings['mute_play'] ? 'true' : 'false' ) : 'false' ),
            'loop_play'                     => ( isset( $youram_settings['loop_play'] ) ? ( $youram_settings['loop_play'] ? 'true' : 'false' ) : 'false' ),
            'show_fullscreen_button'        => ( isset( $youram_settings['show_fullscreen_button'] ) ? ( $youram_settings['show_fullscreen_button'] ? 'true' : 'false' ) : 'false' ),
            'show_embed_player_data'        => ( isset( $youram_settings['show_embed_player_data'] ) ? ( $youram_settings['show_embed_player_data'] ? 'true' : 'false' ) : 'false' ),
            'show_more_button'              => ( isset( $youram_settings['show_more_button'] ) ? ( $youram_settings['show_more_button'] ? 'true' : 'false' ) : 'false' ),
            'player_text_align'             => $youram_settings['player_text_align'],
            'player_description_height'     => $youram_settings['player_description_height'],
            'tabs_highlight_color'          => $youram_settings['tabs_highlight_color'],
            'tabs_hover_color'              => $youram_settings['tabs_hover_color'],
            'youram_background_color'       => $youram_settings['youram_background_color'],
            'youram_border_color'           => $youram_settings['youram_border_color'],
            'item_background_color'         => $youram_settings['item_background_color'],
            'tabs_background_color'         => $youram_settings['tabs_background_color'],
            'title_color'                   => $youram_settings['title_color'],
            'controls_text_color'           => $youram_settings['controls_text_color'],
            'controls_background_color'     => $youram_settings['controls_background_color'],
            'controls_hover_color'          => $youram_settings['controls_hover_color'],
            'tabs_text_color'               => $youram_settings['tabs_text_color'],
            'youram_font_family'            => $youram_settings['youram_font_family'],
            'title_font_size'               => $youram_settings['title_font_size'],
            'thumbnail_text_align'          => $youram_settings['thumbnail_text_align'],
            'title_font_weight'             => $youram_settings['title_font_weight'],
            'controls_font_size'            => $youram_settings['controls_font_size'],
            'controls_font_weight'          => $youram_settings['controls_font_weight'],
            'tabs_font_size'                => $youram_settings['tabs_font_size'],
            'tabs_font_weight'              => $youram_settings['tabs_font_weight'],
            'tabs_spacing'                  => $youram_settings['tabs_spacing'],
            'video_title_max_height'        => $youram_settings['video_title_max_height'],
            'video_title_fixed_height'      => ( isset( $youram_settings['video_title_fixed_height'] ) ? ( $youram_settings['video_title_fixed_height'] ? 'true' : 'false' ) : 'false' ),
            'description_color'             => $youram_settings['description_color'],
            'description_link_color'        => $youram_settings['description_link_color'],
            'description_font_size'         => $youram_settings['description_font_size'],
            'description_font_weight'       => $youram_settings['description_font_weight'],
            'video_title_desc_max_height'   => $youram_settings['video_title_desc_max_height'],
            'duration_color'                => $youram_settings['duration_color'],
            'duration_background_color'     => $youram_settings['duration_background_color'],
            'duration_font_size'            => $youram_settings['duration_font_size'],
            'build_cache'                   => 'false',
            'cache_location'                => $youram_settings['cache_location'],
            'auto_build_cache_duration'     => $youram_settings['auto_build_cache_duration'],
            'youram_asset_location'         => $youram_settings['youram_asset_location'],
            'show_youtube_subscribe_button' => ( isset( $youram_settings['show_youtube_subscribe_button'] ) ? ( $youram_settings['show_youtube_subscribe_button'] ? 'true' : 'false' ) : 'false' ),
            'youtube_subscribe_channel'     => $youram_settings['youtube_subscribe_channel'],
            'youtube_subscribe_text'        => $youram_settings['youtube_subscribe_text'],
            'responsive_breakpoints'        => $youram_settings['responsive_breakpoints'],
            'load_more_text'                => $youram_settings['load_more_text'],
            'prev_button_text'              => $youram_settings['prev_button_text'],
            'next_button_text'              => $youram_settings['next_button_text'],
            'fixed_height_item_container'   => ( isset( $youram_settings['fixed_height_item_container'] ) ? ( $youram_settings['fixed_height_item_container'] ? 'true' : 'false' ) : 'false' ),
            'show_fixed_play_icon'          => ( isset( $youram_settings['show_fixed_play_icon'] ) ? ( $youram_settings['show_fixed_play_icon'] ? 'true' : 'false' ) : 'false' ),
            'show_hover_animation'          => ( isset( $youram_settings['show_hover_animation'] ) ? ( $youram_settings['show_hover_animation'] ? 'true' : 'false' ) : 'false' ),
            'icon_shape'                    => $youram_settings['icon_shape'],
            'show_remaining_video_count'    => ( isset( $youram_settings['show_remaining_video_count'] ) ? ( $youram_settings['show_remaining_video_count'] ? 'true' : 'false' ) : 'false' ),
            'show_page_count'               => ( isset( $youram_settings['show_page_count'] ) ? ( $youram_settings['show_page_count'] ? 'true' : 'false' ) : 'false' ),
            'join_prev_next_buttons'        => ( isset( $youram_settings['join_prev_next_buttons'] ) ? ( $youram_settings['join_prev_next_buttons'] ? 'true' : 'false' ) : 'false' ),
            'hide_loading_mechanism'        => ( isset( $youram_settings['hide_loading_mechanism'] ) ? ( $youram_settings['hide_loading_mechanism'] ? 'true' : 'false' ) : 'false' ),
            'hide_duration'                 => ( isset( $youram_settings['hide_duration'] ) ? ( $youram_settings['hide_duration'] ? 'true' : 'false' ) : 'false' ),
            'hide_duration_icon'            => ( isset( $youram_settings['hide_duration_icon'] ) ? ( $youram_settings['hide_duration_icon'] ? 'true' : 'false' ) : 'false' ),
            'hide_statistics_icon'          => ( isset( $youram_settings['hide_statistics_icon'] ) ? ( $youram_settings['hide_statistics_icon'] ? 'true' : 'false' ) : 'false' ),
            'hide_tabs'                     => ( isset( $youram_settings['hide_tabs'] ) ? ( $youram_settings['hide_tabs'] ? 'true' : 'false' ) : 'false' ),
            'full_width_tab_container'      => ( isset( $youram_settings['full_width_tab_container'] ) ? ( $youram_settings['full_width_tab_container'] ? 'true' : 'false' ) : 'false' ),
            'wait_for_full_cache_to_build'  => ( isset( $youram_settings['wait_for_full_cache_to_build'] ) ? ( $youram_settings['wait_for_full_cache_to_build'] ? 'true' : 'false' ) : 'false' ),
            'border_type_tabs'              => $youram_settings['border_type_tabs'],
            'border_type_loading'           => $youram_settings['border_type_loading'],
            'border_type_thumbnails'        => $youram_settings['border_type_thumbnails'],
            'border_type_thumb_image'       => $youram_settings['border_type_thumb_image'],
            'custom_extra_css'              => $custom_extra_css,
            'hide_reload_cache_button'      => $hide_reload_cache_button_setting,
        ), $atts, 'youram' );
        $youramData = '{';
        foreach ( $youram_args as $key => $value ) {
            $pluginParameter = $this->youram_snake_to_camel_case( $key );
            
            if ( $value == "true" || $value == "false" || $this->youram_starts_with( $value, '[' ) && $this->youram_ends_with( $value, ']' ) ) {
                $stringQuote = '';
            } else {
                $stringQuote = '"';
            }
            
            $youramData = $youramData . '"' . $pluginParameter . '":' . $stringQuote . $value . $stringQuote . ',';
        }
        $youramData = rtrim( $youramData, ',' );
        $youramData = $youramData . '}';
        //escape spaces
        $youramData = esc_attr( $youramData );
        $youramData = str_replace( ' ', '%20', $youramData );
        //$this->youram_load_scripts();
        //Insert Youmax HTML
        return '<div id="' . $youram_option_name . '" class="youram" data-youram-options=' . $youramData . '></div>';
    }
    
    protected function youram_process_source_links_settings( $source_links_setting )
    {
        $source_links_setting = trim( $source_links_setting );
        //$source_links_setting = trim($source_links_setting, "\r\n");
        $source_links_setting_array = explode( PHP_EOL, $source_links_setting );
        $source_links_setting = '[';
        foreach ( $source_links_setting_array as $source_element ) {
            //var_dump($source_element."<br><br>");
            $source_element = trim( $source_element );
            if ( !empty($source_element) ) {
                $source_links_setting = $source_links_setting . '"' . $source_element . '",';
            }
        }
        $source_links_setting = rtrim( $source_links_setting, ',' );
        $source_links_setting = $source_links_setting . ']';
        return $source_links_setting;
    }
    
    protected function youram_snake_to_camel_case( $string, $capitalizeFirstCharacter = false )
    {
        $str = str_replace( ' ', '', ucwords( str_replace( '_', ' ', $string ) ) );
        if ( !$capitalizeFirstCharacter ) {
            $str[0] = strtolower( $str[0] );
        }
        return $str;
    }
    
    protected function youram_starts_with( $haystack, $needle )
    {
        return substr_compare(
            $haystack,
            $needle,
            0,
            strlen( $needle )
        ) === 0;
    }
    
    protected function youram_ends_with( $haystack, $needle )
    {
        return substr_compare( $haystack, $needle, -strlen( $needle ) ) === 0;
    }

}
$youramAdmin = new YouRamAdmin();