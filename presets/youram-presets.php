<?php	



	//todo: migrate active to upgrade function
	function youram_activate() { 

        $youram_default_preset = array(
            "startup_mode" => "single-list-gallery",
            "video_embed_link" => "https://www.youtube.com/watch?v=zJU_Bp-Yp1c",
			"source_links" => "TED==https://www.youtube.com/playlist?list=UUAuUUnT6oDeKwE6v1NGQxug",
			"source_ids" => '[{"sourceIndex":0,"sourceName":"TED","tabId":"youtube-playlist-videos-UUAuUUnT6oDeKwE6v1NGQxug"}]',
			"single_video_embed" => "https://www.youtube.com/watch?v=zJU_Bp-Yp1c",
			"single_list_gallery_link" => "https://www.youtube.com/playlist?list=UUAuUUnT6oDeKwE6v1NGQxug",
			
            "youtube_api_key" => "AIzaSyAi7-B3koOAEuIRgaI03txTZC4bFbGeDO4",
            "vimeo_access_token" => "15922f50beee6dbab0ec74c7cde13fb4",
            "video_display_mode" => "popup",
            "auto_scroll_to_inline_embed" => "on",
            "auto_play" => "on",
            "show_fullscreen_button" => "on",
            "show_embed_player_data" => "on",
            "show_more_button" => "on",
            "player_text_align" => "left",
            "player_description_height" => "1.5",
            "youram_font_family" => "Roboto",
            "youram_background_color" => "#ffffff",
            "youram_border_color" => "#e2e2e2",
            "show_youram_padding" => "on",
            "show_youram_body_padding" => "",
			"youram_padding" => "0.9",
            "max_results" => "6",
            "max_rows" => "2",
            "thumbnail_display_mode" => "grid",
            "grid_thumbnail_type" => "full-data",
            "item_background_color" => "#ffffff",
            "show_fixed_play_icon" => "on",
            "show_hover_animation" => "on",
            "icon_shape" => "circle",
            "border_type_thumbnails" => "outline",
            "border_type_thumb_image" => "none",
            "title_color" => "#383838",
            "title_font_size" => "0.85",
            "title_font_weight" => "700",
            "thumbnail_text_align" => "left",
            "video_title_max_height" => "2.8",
            "description_color" => "#686868",
            "description_link_color" => "#ff9800",
            "description_font_size" => "0.8",
            "description_font_weight" => "500",
            "video_title_desc_max_height" => "4.7",
            "tabs_highlight_color" => "#9575cd",
            "tabs_hover_color" => "#fbaf3c",
            "tabs_background_color" => "#ff9800",
            "tabs_text_color" => "#ffffff",
            "tabs_font_size" => "0.85",
            "tabs_font_weight" => "500",
            "tabs_spacing" => "0",
            "border_type_tabs" => "none",
            "loading_mechanism" => "prev-next",
            "show_page_count" => "on",
            "fixed_height_item_container" => "on",
            "controls_background_color" => "#ffffff",
            "controls_hover_color" => "#fdd496",
            "controls_text_color" => "#383838",
            "controls_font_size" => "0.9",
            "controls_font_weight" => "700",
            "prev_button_text" => "Prev",
            "next_button_text" => "Next",
            "load_more_text" => "Load more videos..",
            "border_type_loading" => "outline",
            "duration_color" => "#383838",
            "duration_background_color" => "#ffffff",
            "auto_build_cache_duration" => "0",
            "cache_location" => wp_upload_dir()['baseurl'].'/'.YOURAM_CACHE_FOLDER,
            "responsive_breakpoints" => "[500,700,900,1200]", //[450,600,800,1000]
            "show_youtube_subscribe_button" => "on",
            "youtube_subscribe_channel" => "https://www.youtube.com/@BuddhismInEnglish",
            "youtube_subscribe_text" => "YT Subscribe",
            "custom_extra_css" => "",
            "youram_asset_location" => plugins_url( '../assets', __FILE__ ),
            "display_first_video_on_load" => "",
            "mute_play" => "",
            "loop_play" => "on",
            "video_title_fixed_height" => "",
            "hide_tabs" => "",
            "show_remaining_video_count" => "",
            "join_prev_next_buttons" => "",
            "hide_loading_mechanism" => "",
            "hide_duration" => "",
            "hide_duration_icon" => "on",
            "wait_for_full_cache_to_build" => "",
            "hide_statistics_icon" => "",
			"duration_font_size" => "0.75",
			"full_width_tab_container" => "",
			
			
        );
	
	
		$youram_single_video_preset = array_merge(array(), $youram_default_preset); 
		$youram_single_video_preset["show_youtube_subscribe_button"] = "";
		$youram_single_video_preset["startup_mode"] = "single-video-embed";
		$youram_single_video_preset["show_youram_padding"] = "";
		$youram_single_video_preset["show_youram_body_padding"] = "on";


		$youram_single_video_subscribe_preset = array_merge(array(), $youram_default_preset); 
		$youram_single_video_subscribe_preset["show_youtube_subscribe_button"] = "on";
		$youram_single_video_subscribe_preset["startup_mode"] = "single-video-embed";
		$youram_single_video_subscribe_preset["show_youram_padding"] = "";
		$youram_single_video_subscribe_preset["show_youram_body_padding"] = "on";

		
		$youram_single_video_color_preset = array_merge(array(), $youram_default_preset); 
		$youram_single_video_color_preset["show_youtube_subscribe_button"] = "";
		$youram_single_video_color_preset["startup_mode"] = "single-video-embed";
		$youram_single_video_color_preset["show_youram_padding"] = "on";
		$youram_single_video_color_preset["youram_padding"] = "0.8";
		$youram_single_video_color_preset["youram_background_color"] = "#d6ecc1";
		$youram_single_video_color_preset["youram_border_color"] = "#a1a1a1";
		$youram_single_video_color_preset["tabs_background_color"] = "#698251";
		
		

		$youram_gallery_list_preset = array_merge(array(), $youram_default_preset); 		
		$youram_gallery_list_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_list_preset["video_display_mode"] = "inline";
		$youram_gallery_list_preset["max_rows"] = "2";
		$youram_gallery_list_preset["display_first_video_on_load"] = "on";
		$youram_gallery_list_preset["border_type_thumbnails"] = "none";
		$youram_gallery_list_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_list_preset["grid_thumbnail_type"] = "full-all";
		$youram_gallery_list_preset["player_text_align"] = "left";
		$youram_gallery_list_preset["thumbnail_text_align"] = "left";
		$youram_gallery_list_preset["hide_tabs"] = "on";
		$youram_gallery_list_preset["title_font_size"] = "0.9";
		$youram_gallery_list_preset["video_title_desc_max_height"] = "8";
		$youram_gallery_list_preset["thumbnail_display_mode"] = "list";

		
		
		
		$youram_gallery_grid_preset = array_merge(array(), $youram_default_preset); 		
		$youram_gallery_grid_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_grid_preset["video_display_mode"] = "inline";
		$youram_gallery_grid_preset["max_rows"] = "2";
		$youram_gallery_grid_preset["display_first_video_on_load"] = "on";
		$youram_gallery_grid_preset["border_type_thumbnails"] = "none";
		$youram_gallery_grid_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_grid_preset["grid_thumbnail_type"] = "neat-date";
		$youram_gallery_grid_preset["player_text_align"] = "left";
		$youram_gallery_grid_preset["thumbnail_text_align"] = "left";
		$youram_gallery_grid_preset["hide_tabs"] = "on";
		$youram_gallery_grid_preset["loading_mechanism"] = "load-more";

		
		$youram_gallery_popup_preset = array_merge(array(), $youram_default_preset); 	
		$youram_gallery_popup_preset["single_list_gallery_link"] = "https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw";
		$youram_gallery_popup_preset["source_ids"] = '[{"sourceIndex":0,"sourceName":"TED","tabId":"youtube-playlist-videos-UUE_M8A5yxnLfW0KghEeajjw"}]';
		$youram_gallery_popup_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_popup_preset["video_display_mode"] = "popup";
		$youram_gallery_popup_preset["max_rows"] = "2";
		$youram_gallery_popup_preset["border_type_thumbnails"] = "none";
		$youram_gallery_popup_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_popup_preset["grid_thumbnail_type"] = "simple-all";
		$youram_gallery_popup_preset["player_text_align"] = "center";
		$youram_gallery_popup_preset["thumbnail_text_align"] = "center";
		$youram_gallery_popup_preset["hide_tabs"] = "on";
		
		
		
		$youram_gallery_4columns_preset = array_merge(array(), $youram_default_preset); 
		$youram_gallery_4columns_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_4columns_preset["single_list_gallery_link"] = "https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw";
		$youram_gallery_4columns_preset["source_ids"] = '[{"sourceIndex":0,"sourceName":"Apple","tabId":"youtube-playlist-videos-UUE_M8A5yxnLfW0KghEeajjw"}]';
		$youram_gallery_4columns_preset["video_display_mode"] = "inline";
		$youram_gallery_4columns_preset["max_rows"] = "2";
		$youram_gallery_4columns_preset["display_first_video_on_load"] = "on";
		$youram_gallery_4columns_preset["border_type_thumbnails"] = "none";
		$youram_gallery_4columns_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_4columns_preset["grid_thumbnail_type"] = "simple-all";
		$youram_gallery_4columns_preset["player_text_align"] = "left";
		$youram_gallery_4columns_preset["thumbnail_text_align"] = "left";
		$youram_gallery_4columns_preset["hide_tabs"] = "on";
		$youram_gallery_4columns_preset["title_font_weight"] = "500";
		$youram_gallery_4columns_preset["title_font_size"] = "0.8";
		$youram_gallery_4columns_preset["show_remaining_video_count"] = "on";
		$youram_gallery_4columns_preset["show_page_count"] = "";
		$youram_gallery_4columns_preset["join_prev_next_buttons"] = "on";
		$youram_gallery_4columns_preset["controls_font_size"] = "0.8";
		$youram_gallery_4columns_preset["controls_font_weight"] = "500";
		$youram_gallery_4columns_preset["show_more_button"] = "";
		$youram_gallery_4columns_preset["responsive_breakpoints"] = "[450,550,700,900]";
		$youram_gallery_4columns_preset["show_youram_padding"] = "";
		$youram_gallery_4columns_preset["show_youram_body_padding"] = "on";
		$youram_gallery_4columns_preset["duration_font_size"] = "0.68";
		$youram_gallery_4columns_preset["custom_extra_css"] = "#youram_gallery-4columns .yl-play-overlay-fixed{font-size: 0.9em;}";
		
		
		
		$youram_gallery_color_preset = array_merge(array(), $youram_default_preset); 
		$youram_gallery_color_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_color_preset["video_display_mode"] = "inline";
		$youram_gallery_color_preset["max_rows"] = "3";
		$youram_gallery_color_preset["display_first_video_on_load"] = "on";
		$youram_gallery_color_preset["border_type_thumbnails"] = "none";
		$youram_gallery_color_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_color_preset["grid_thumbnail_type"] = "simple-all";
		$youram_gallery_color_preset["player_text_align"] = "center";
		$youram_gallery_color_preset["thumbnail_text_align"] = "center";
		$youram_gallery_color_preset["hide_tabs"] = "on";
		$youram_gallery_color_preset["title_font_weight"] = "500";
		$youram_gallery_color_preset["title_font_size"] = "0.8";
		$youram_gallery_color_preset["show_remaining_video_count"] = "";
		$youram_gallery_color_preset["show_page_count"] = "on";
		$youram_gallery_color_preset["join_prev_next_buttons"] = "";
		$youram_gallery_color_preset["controls_font_size"] = "0.8";
		$youram_gallery_color_preset["controls_font_weight"] = "500";
		$youram_gallery_color_preset["responsive_breakpoints"] = "[450,550,700,900]";
		$youram_gallery_color_preset["custom_extra_css"] = "#youram_gallery-color .yl-play-overlay-fixed{font-size: 0.9em;}";
		$youram_gallery_color_preset["show_fixed_play_icon"] = "";
		$youram_gallery_color_preset["show_hover_animation"] = "";
		$youram_gallery_color_preset["youram_border_color"] = "#d6d6d6";
		$youram_gallery_color_preset["show_youram_padding"] = "";
		$youram_gallery_color_preset["show_youram_body_padding"] = "on";
		$youram_gallery_color_preset["youram_background_color"] = "#fff0f0";
		$youram_gallery_color_preset["item_background_color"] = "#fff0f0";
		$youram_gallery_color_preset["youram_padding"] = "0.8";
		$youram_gallery_color_preset["duration_font_size"] = "0.68";
		
		
		
		$youram_gallery_only_images_preset = array_merge(array(), $youram_default_preset); 		
		$youram_gallery_only_images_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_only_images_preset["video_display_mode"] = "inline";
		$youram_gallery_only_images_preset["max_results"] = "9";
		$youram_gallery_only_images_preset["display_first_video_on_load"] = "on";
		$youram_gallery_only_images_preset["border_type_thumbnails"] = "none";
		$youram_gallery_only_images_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_only_images_preset["grid_thumbnail_type"] = "simple-image";
		$youram_gallery_only_images_preset["show_embed_player_data"] = "";
		$youram_gallery_only_images_preset["hide_tabs"] = "on";
		$youram_gallery_only_images_preset["loading_mechanism"] = "load-more";
		$youram_gallery_only_images_preset["show_remaining_video_count"] = "on";
		$youram_gallery_only_images_preset["show_youtube_subscribe_button"] = "";
		$youram_gallery_only_images_preset["hide_duration_icon"] = "";
		

		$youram_gallery_cards_preset = array_merge(array(), $youram_default_preset); 
		$youram_gallery_cards_preset["startup_mode"] = "single-list-gallery";
		$youram_gallery_cards_preset["single_list_gallery_link"] = "https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw";
		$youram_gallery_cards_preset["source_ids"] = '[{"sourceIndex":0,"sourceName":"Apple","tabId":"youtube-playlist-videos-UUE_M8A5yxnLfW0KghEeajjw"}]';
		$youram_gallery_cards_preset["video_display_mode"] = "inline";
		$youram_gallery_cards_preset["max_rows"] = "2";
		$youram_gallery_cards_preset["display_first_video_on_load"] = "on";
		$youram_gallery_cards_preset["border_type_thumbnails"] = "outline";
		$youram_gallery_cards_preset["border_type_thumb_image"] = "none";
		$youram_gallery_cards_preset["grid_thumbnail_type"] = "full-all";
		$youram_gallery_cards_preset["player_text_align"] = "center";
		$youram_gallery_cards_preset["thumbnail_text_align"] = "left";
		$youram_gallery_cards_preset["hide_tabs"] = "on";
		$youram_gallery_cards_preset["title_font_weight"] = "500";
		$youram_gallery_cards_preset["title_font_size"] = "0.8";
		$youram_gallery_cards_preset["show_remaining_video_count"] = "";
		$youram_gallery_cards_preset["show_page_count"] = "on";
		$youram_gallery_cards_preset["join_prev_next_buttons"] = "";
		$youram_gallery_cards_preset["controls_font_size"] = "0.8";
		$youram_gallery_cards_preset["controls_font_weight"] = "500";
		$youram_gallery_cards_preset["show_fixed_play_icon"] = "";
		$youram_gallery_cards_preset["show_hover_animation"] = "";
		$youram_gallery_cards_preset["youram_border_color"] = "#ffffff";
		$youram_gallery_cards_preset["show_youram_padding"] = "on";
		$youram_gallery_cards_preset["show_youram_body_padding"] = "";

		
		
		

		$youram_gallery_tabs_preset = array_merge(array(), $youram_default_preset); 
		$youram_gallery_tabs_preset["startup_mode"] = "multi-list-gallery";
		$youram_gallery_tabs_preset["video_display_mode"] = "popup";
		$youram_gallery_tabs_preset["loading_mechanism"] = "load-more";
		$youram_gallery_tabs_preset["show_remaining_video_count"] = "on";
		$youram_gallery_tabs_preset["video_title_desc_max_height"] = "3.5";
		$youram_gallery_tabs_preset["border_type_thumbnails"] = "none";
		$youram_gallery_tabs_preset["border_type_thumb_image"] = "outline";
		$youram_gallery_tabs_preset["source_links"] = "Silver Surfer==https://www.youtube.com/playlist?list=PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb
X-Men==https://www.youtube.com/playlist?list=PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX
Duck Tales==https://www.youtube.com/playlist?list=PLiv1IUQDVSNIiIVKNlmTNeuDsPZf5ODea
Vimeo==https://vimeo.com/joakimrissveds";
		$youram_gallery_tabs_preset["source_ids"] = '[{"sourceIndex":0,"sourceName":"Silver Surfer","tabId":"youtube-playlist-videos-PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb"},{"sourceIndex":1,"sourceName":"X-Men","tabId":"youtube-playlist-videos-PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX"},{"sourceIndex":2,"sourceName":"Duck Tales","tabId":"youtube-playlist-videos-PLiv1IUQDVSNIiIVKNlmTNeuDsPZf5ODea"},{"sourceIndex":3,"sourceName":"Vimeo","tabId":"vimeo-user-videos-joakimrissveds"}]';
		$youram_gallery_tabs_preset["tabs_highlight_color"] = "#ff5722";
		$youram_gallery_tabs_preset["tabs_hover_color"] = "#b8b8b8";
		$youram_gallery_tabs_preset["tabs_background_color"] = "#858585";



		$youram_gallery_tabs_cards_preset = array_merge(array(), $youram_default_preset); 
		$youram_gallery_tabs_cards_preset["startup_mode"] = "multi-list-gallery";
		$youram_gallery_tabs_cards_preset["video_display_mode"] = "popup";
		$youram_gallery_tabs_cards_preset["loading_mechanism"] = "load-more";
		$youram_gallery_tabs_cards_preset["show_remaining_video_count"] = "on";
		$youram_gallery_tabs_cards_preset["border_type_tabs"] = "outline";
		$youram_gallery_tabs_cards_preset["video_title_desc_max_height"] = "3.5";
		$youram_gallery_tabs_cards_preset["grid_thumbnail_type"] = "full-all";
		$youram_gallery_tabs_cards_preset["tabs_highlight_color"] = "#95d666";
		$youram_gallery_tabs_cards_preset["tabs_hover_color"] = "#e2f5cc";
		$youram_gallery_tabs_cards_preset["tabs_background_color"] = "#eeffdb";
		$youram_gallery_tabs_cards_preset["tabs_text_color"]= "#000000";
		$youram_gallery_tabs_cards_preset["tabs_font_weight"]= "700";
		$youram_gallery_tabs_cards_preset["controls_background_color"] = "#eeffdb";
		$youram_gallery_tabs_cards_preset["controls_hover_color"] = "#e2f5cc";
		$youram_gallery_tabs_cards_preset["controls_text_color"] = "#000000";
		$youram_gallery_tabs_cards_preset["item_background_color"] = "#f1fded";
		$youram_gallery_tabs_cards_preset["full_width_tab_container"] = "on";
		$youram_gallery_tabs_cards_preset["custom_extra_css"] = "";
		$youram_gallery_tabs_cards_preset["source_links"] = "He-Man==https://www.youtube.com/playlist?list=PLkiXH7NXzBmF_XbuEz7TmYLMYhKuJ3TVe
Silver Surfer==https://www.youtube.com/playlist?list=PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb
X-Men==https://www.youtube.com/playlist?list=PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX";
		$youram_gallery_tabs_cards_preset["source_ids"] = '[{"sourceIndex":0,"sourceName":"He-Man","tabId":"youtube-playlist-videos-PLkiXH7NXzBmF_XbuEz7TmYLMYhKuJ3TVe"},{"sourceIndex":1,"sourceName":"Silver Surfer","tabId":"youtube-playlist-videos-PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb"},{"sourceIndex":2,"sourceName":"X-Men","tabId":"youtube-playlist-videos-PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX"}]';

		


		$youram_multi_list_gallery_inline_preset = array_merge(array(), $youram_default_preset); 
		$youram_multi_list_gallery_inline_preset["startup_mode"] = "multi-list-gallery";
		$youram_multi_list_gallery_inline_preset["video_display_mode"] = "inline";
		$youram_multi_list_gallery_inline_preset["max_rows"] = "1";
		$youram_multi_list_gallery_inline_preset["display_first_video_on_load"] = "on";
		$youram_multi_list_gallery_inline_preset["source_links"] = "Meditation Music==https://www.youtube.com/@positiveenergymeditationmusic/videos
Healing Music==https://www.youtube.com/watch?v=KPQh6eTWzT8&list=PLqxOk5-J3bJOWKuWX9bdfAkRW9PqZTpWl";
		$youram_multi_list_gallery_inline_preset["grid_thumbnail_type"] = "simple-all";
		$youram_multi_list_gallery_inline_preset["border_type_thumbnails"] = "none";
		$youram_multi_list_gallery_inline_preset["border_type_thumb_image"] = "outline";

		
		
		




		$youram_preview_preset = array_merge(array(), $youram_default_preset); 
		$youram_preview_preset["startup_mode"] = "single-list-gallery";
		$youram_preview_preset["video_display_mode"] = "inline";
		$youram_preview_preset["max_rows"] = "3";
		$youram_preview_preset["display_first_video_on_load"] = "on";
		$youram_preview_preset["border_type_thumbnails"] = "none";
		$youram_preview_preset["border_type_thumb_image"] = "outline";
		$youram_preview_preset["grid_thumbnail_type"] = "simple-all";
		$youram_preview_preset["player_text_align"] = "center";
		$youram_preview_preset["thumbnail_text_align"] = "center";
		$youram_preview_preset["hide_tabs"] = "on";
		$youram_preview_preset["title_font_weight"] = "500";
		$youram_preview_preset["title_font_size"] = "0.8";
		$youram_preview_preset["show_remaining_video_count"] = "";
		$youram_preview_preset["show_page_count"] = "on";
		$youram_preview_preset["join_prev_next_buttons"] = "";
		$youram_preview_preset["controls_font_size"] = "0.8";
		$youram_preview_preset["controls_font_weight"] = "500";
		//$youram_preview_preset["responsive_breakpoints"] = "[450,550,700,900]";
		//$youram_preview_preset["custom_extra_css"] = "#youram_preview .yl-play-overlay-fixed{font-size: 0.9em;}";
		$youram_preview_preset["show_fixed_play_icon"] = "";
		$youram_preview_preset["show_hover_animation"] = "";
		$youram_preview_preset["youram_border_color"] = "#ffffff";
		$youram_preview_preset["show_youram_padding"] = "on";
		$youram_preview_preset["youram_padding"] = "0.7";
		$youram_preview_preset["hide_duration_icon"] = "on";
		$youram_preview_preset["show_youram_body_padding"] = "";

		




        add_option('youram_preview',$youram_preview_preset);
        add_option('youram_gallery-cards',$youram_gallery_cards_preset);
        add_option('youram_gallery-color',$youram_gallery_color_preset);
        add_option('youram_single-video',$youram_single_video_preset);
        add_option('youram_single-video-subscribe',$youram_single_video_subscribe_preset);
        add_option('youram_gallery-with-tabs',$youram_gallery_tabs_preset);
        add_option('youram_multi-list-gallery-inline',$youram_multi_list_gallery_inline_preset);
        add_option('youram_gallery-popup',$youram_gallery_popup_preset);
        add_option('youram_gallery-grid-view',$youram_gallery_grid_preset);
        add_option('youram_gallery-4columns',$youram_gallery_4columns_preset);
        add_option('youram_gallery-tabs-cards',$youram_gallery_tabs_cards_preset);
        add_option('youram_single-video-color',$youram_single_video_color_preset);
        add_option('youram_gallery-only-images',$youram_gallery_only_images_preset);
        add_option('youram_gallery-list-view',$youram_gallery_list_preset);
		
		
		
		//move cache files to uploads during activation
		$cacheSrcFolder = YOURAM_PLUGIN_DIR.'/'.YOURAM_CACHE_FOLDER.'/';
		$cacheDestFolder = wp_upload_dir()['basedir'].'/'.YOURAM_CACHE_FOLDER.'/';
		if(!is_dir($cacheDestFolder)){
			mkdir($cacheDestFolder, 0777);
		}
		$cacheSourceFiles = scandir($cacheSrcFolder);
		foreach($cacheSourceFiles as $cacheFile){
			if($cacheFile == '.' || $cacheFile == '..') {
				continue;
			} else {
				rename($cacheSrcFolder.$cacheFile, $cacheDestFolder.$cacheFile);
			}
		}
		
		
		/*
		//purpose: move youram option to youram_preview option 
		//to become compatible with new versions
		$youram_settings = get_option('youram');
		if(is_null($youram_settings) || empty($youram_settings)) {
			//youram option is not already present
			//probably a fresh installation
			return;
		} else {
			$youram_preview_settings = get_option('youram_preview');
			if(is_null($youram_preview_settings) || empty($youram_settings)) {
				//youram options was present 
				//youram_preview option was not preset so move youram=>youram_preview
				add_option('youram_preview',$youram_settings);
			} else {
				//both youram and youram_preview options were present so leave it.
			}
		}*/
	}

?>