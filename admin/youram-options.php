<?php

$youram_options = array(
	'youram'	=> array(
		'page_title'	=> __( 'YouRam', 'youram-domain' ),
		'menu_title'	=> __( 'YouRam', 'youram-domain' ),
		'menu_slug'	=> __( 'youram', 'youram-domain' ),
		'icon_url'		=> __( 'dashicons-video-alt3', 'youram-domain' ),
		'sections'		=> array(

			'startup-options-section'	=> array(
				'title'			=> __( 'Startup Mode', 'youram-domain' ),
				'fields'		=> array(
				
					'startup_mode'=> array(
						'title'			=> __( 'YouRam Mode <br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'startup_mode', 'youram-domain' ),
						'title_attr'	=> __( 'YouRam Mode', 'youram-domain' ),
						'text'			=> __( '' ),
						'type'			=> 'radio',
						'value'			=> 'gallery',
						'choices'		=> array(
							'single-video-embed'	=> __( '[Single] Video Embed', 'youram-domain' ),
							'single-list-gallery'	=> __( '[Single] Channel Uploads / Playlist Gallery', 'youram-domain' ),
							'multi-list-gallery'	=> __( '[Multiple Tabs] Channel Uploads / Playlist Gallery', 'youram-domain' ),
						),
						'class'			=> 'youram-admin-for-gallery youram-admin-for-singleembed youram-admin-optgroup-startup'
					),
					'video_embed_link'		=> array(
						'title'			=> __( 'YouTube Video Link <br> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'video_embed_link', 'youram-domain' ),
						'type'			=> 'text',
						'title_attr'	=> __( 'YouTube Video Link', 'youram-domain' ),						
						'value'			=> 'https://www.youtube.com/watch?v=JuG5EMWo3l0',
						'text'			=> __( '<span class="youram-admin-example">Example YT Video Link: <br/>https://www.youtube.com/watch?v=zJU_Bp-Yp1c</span>' ),
						'sanitize'		=> false,
						'class'			=> 'regular-text'

					),
					'single_list_gallery_link'		=> array(
						'title'			=> __( 'YouTube Channel / Playlist Link <br> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'single_list_gallery_link', 'youram-domain' ),
						'type'			=> 'text',
						'title_attr'	=> __( 'YouTube Channel / Playlist Link', 'youram-domain' ),						
						'value'			=> 'https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw',
						'text'			=> __( '<span class="youram-admin-example">Example YT Playlist Link: <br/>https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw <br><br>Example YT Channel Link:<br/> https://www.youtube.com/@Apple</span>' ),
						'sanitize'		=> false,
						'class'			=> 'regular-text'

					),
					'source_links'		=> array(
						'title'			=> __( 'YouTube Channel / PlayList Links <br> <span class="youram-field-desc">Format: <br>TabName1==Link1<br>TabName2==Link2<br>TabName3==Link3</span>', 'youram-domain' ),
						'id'			=> __( 'source_links', 'youram-domain' ),
						'type'			=> 'textarea',
						'title_attr'	=> __( 'Source Links', 'youram-domain' ),						
						'value'			=> 'Duck Tales==https://www.youtube.com/playlist?list=PLiv1IUQDVSNIiIVKNlmTNeuDsPZf5ODea&#13;&#10;Silver Surfer==https://www.youtube.com/watch?v=3DmWb4GvHpI&list=PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb&#13;&#10;X-Men==https://www.youtube.com/watch?v=aanU9sgb4-Y&list=PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX&#13;&#10;Vimeo==https://vimeo.com/joakimrissveds',
						'text'			=> __( '<span class="youram-admin-example">Example YT Playlist Link: <br/>https://www.youtube.com/playlist?list=UUE_M8A5yxnLfW0KghEeajjw <br><br>Example YT Channel Link:<br/> https://www.youtube.com/@Apple</span>' ),
						'sanitize'		=> false,
						'class'			=> 'large-text'

					),
					'source_ids'		=> array(
						'title'			=> __( 'Source IDs - Internal <br> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'source_ids', 'youram-domain' ),
						'type'			=> 'textarea',
						'title_attr'	=> __( 'Source IDs', 'youram-domain' ),						
						'value'			=> '',
						'text'			=> __( '' ),
						'sanitize'		=> false,
						'class'			=> 'regular-text youram-admin-internal-option'

					),


					
				),
			),

/*
			'videosource-options-section'	=> array(
				'title'			=> __( 'Single Video Link', 'youram-domain' ),
				'fields'		=> array(

					'video_embed_link'		=> array(
						'title'			=> __( 'YouTube Video Link <br> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'video_embed_link', 'youram-domain' ),
						'type'			=> 'text',
						'title_attr'	=> __( 'YouTube Video Link', 'youram-domain' ),						
						'value'			=> 'https://www.youtube.com/watch?v=JuG5EMWo3l0',
						'text'			=> __( 'YouTube Video' ),
						'sanitize'		=> false,
						'class'			=> 'regular-text youram-admin-optgroup-videosource youram-admin-for-singleembed'

					),
					
				),
			),

			'gallerysource-options-section'	=> array(
				'title'			=> __( 'Gallery Playlist Links', 'youram-domain' ),
				'fields'		=> array(

					'source_links'		=> array(
						'title'			=> __( 'YouTube Channel / PlayList Links <br> <span class="youram-field-desc">Format: <br>TabName1==Link1<br>TabName2==Link2<br>TabName3==Link3</span>', 'youram-domain' ),
						'id'			=> __( 'source_links', 'youram-domain' ),
						'type'			=> 'textarea',
						'title_attr'	=> __( 'Source Links', 'youram-domain' ),						
						'value'			=> 'Duck Tales==https://www.youtube.com/playlist?list=PLiv1IUQDVSNIiIVKNlmTNeuDsPZf5ODea&#13;&#10;Silver Surfer==https://www.youtube.com/watch?v=3DmWb4GvHpI&list=PLLhOnau-tupSw18S4cuGd-2qz2pNFzFcb&#13;&#10;X-Men==https://www.youtube.com/watch?v=aanU9sgb4-Y&list=PLLhOnau-tupQMX1uvJYnYM0Z2ZbE33_AX&#13;&#10;Vimeo==https://vimeo.com/joakimrissveds',
						'text'			=> __( 'YouTube Channel / YouTube Playlist / Vimeo User' ),
						'sanitize'		=> false,
						'class'			=> 'large-text youram-admin-optgroup-gallerysource  youram-admin-for-gallery'

					),
					'source_ids'		=> array(
						'title'			=> __( 'Source IDs - Internal <br> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'source_ids', 'youram-domain' ),
						'type'			=> 'textarea',
						'title_attr'	=> __( 'Source IDs', 'youram-domain' ),						
						'value'			=> '',
						'text'			=> __( '' ),
						'sanitize'		=> false,
						'class'			=> 'regular-text youram-admin-internal-option'

					),
					
				),
			),
			*/
			
			'apikey-options-section'	=> array(
				'title'			=> __( 'API Keys', 'youram-domain' ),
				'fields'		=> array(
					'youtube_api_key'	=> array(
						'title'			=> __( 'YouTube API Key * <br/> <span class="youram-field-desc">Generate your API Key <a target="_blank" href="https://blog.hubspot.com/website/how-to-get-youtube-api-key">Steps</a></span>', 'youram-domain' ),
						'id'			=> __( 'youtube_api_key', 'youram-domain' ),
						'title_attr'	=> __( 'YouTube API Key', 'youram-domain' ),
						'value'			=> 'AIzaSyAi7-B3koOAEuIRgaI03txTZC4bFbGeDO4',
						'class'			=> 'regular-text youram-admin-optgroup-apikey youram-admin-for-gallery youram-admin-for-singleembed'
					),
					'vimeo_access_token'	=> array(
						'title'			=> __( 'Vimeo Access Token* <br/> <span class="youram-field-desc">Generate your Un-Authenticated Vimeo Access Token <a target="_blank" href="https://vimeo.zendesk.com/hc/en-us/articles/360042445032-How-do-I-generate-a-personal-access-token-">Steps</a></span>', 'youram-domain' ),
						'id'			=> __( 'vimeo_access_token', 'youram-domain' ),
						'title_attr'	=> __( 'Vimeo Access Token', 'youram-domain' ),
						'value'			=> '15922f50beee6dbab0ec74c7cde13fb4',
					),
				),
			),
			
			
			'player-options-section'	=> array(
				'title'			=> __( 'Video Player', 'youram-domain' ),
				'fields'		=> array(
				
					'video_display_mode'=> array(
						'title'			=> __( 'Video Player Display Mode', 'youram-domain' ),
						'type'			=> 'select',
						'id'			=> __( 'video_display_mode', 'youram-domain' ),
						'title_attr'	=> __( 'Video Player Display Mode', 'youram-domain' ),
						'value'			=> 'inline',
						'choices'		=> array(
							'popup'		=> __( 'Popup', 'youram-domain' ),
							'inline'	=> __( 'Inline Top', 'youram-domain' ),
							'link'		=> __( 'Link to Source', 'youram-domain' ),
						),
						'class'			=> 'youram-admin-optgroup-player youram-admin-for-gallery youram-admin-for-singleembed'
					),
					'display_first_video_on_load'=> array(
						'title'			=> __( 'Load First Video in Player', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'only for Inline player mode above..' ),
						'id'			=> __( 'display_first_video_on_load', 'youram-domain' ),
						'title_attr'	=> __( 'Load First Video in Player', 'youram-domain' ),
						'checked'		=> true,
					),
					'auto_scroll_to_inline_embed'=> array(
						'title'			=> __( 'Automatic Scroll to Inline Embed Player', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'page will scroll automatically to Inline Embed Video Player when thumbnail is clicked.' ),
						'id'			=> __( 'auto_scroll_to_inline_embed', 'youram-domain' ),
						'title_attr'	=> __( 'Automatic Scroll to Inline Embed Player', 'youram-domain' ),
						'checked'		=> true,
						'class'			=> ''	
					),
					'auto_play'=> array(
						'title'			=> __( 'Auto Play Video in Player', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'auto_play', 'youram-domain' ),
						'title_attr'	=> __( 'Auto Play Video Embed', 'youram-domain' ),
						'checked'		=> true,
					),
					'mute_play'=> array(
						'title'			=> __( 'Mute Player Video ', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '<br/><strong>Browser Policy:</strong> <br/>1. Muted autoplay is always allowed. <br/>2. Autoplay with sound is allowed if the user has interacted with the domain (click, tap, etc.)' ),
						'id'			=> __( 'mute_play', 'youram-domain' ),
						'title_attr'	=> __( 'Mute Player Video', 'youram-domain' ),
						'checked'		=> false,
					),
					'loop_play'=> array(
						'title'			=> __( 'Play Video in Loop', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'loop_play', 'youram-domain' ),
						'title_attr'	=> __( 'Play Video in Loop', 'youram-domain' ),
						'checked'		=> false,
					),
					
					'show_fullscreen_button'=> array(
						'title'			=> __( 'Show Fullscreen Button', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'show_fullscreen_button', 'youram-domain' ),
						'title_attr'	=> __( 'Show Fullscreen Button', 'youram-domain' ),
						'checked'		=> true,
					),
					
					
					

					

				),
			),
			
			'playerdata-options-section'	=> array(
				'title'			=> __( 'Player Data', 'youram-domain' ),
				'fields'		=> array(
					'show_embed_player_data'=> array(
						'title'			=> __( 'Display Title + Description <br/> <span class="youram-field-desc"> below Video Player</span>', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'for inline and popup mode' ),
						'id'			=> __( 'show_embed_player_data', 'youram-domain' ),
						'title_attr'	=> __( 'Display Title / Description with Video Player', 'youram-domain' ),
						'checked'		=> true,
						'class'			=> 'youram-admin-optgroup-playerdata youram-admin-for-gallery youram-admin-for-singleembed'

					),
					'show_more_button'=> array(
						'title'			=> __( 'Display - Show More button<br/> <span class="youram-field-desc"> this button will expand to display full description below video player</span>', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'show_more_button', 'youram-domain' ),
						'title_attr'	=> __( 'Display - Show More button', 'youram-domain' ),
						'checked'		=> true,
						'class'			=> 'youram-admin-optgroup-playerdata youram-admin-for-gallery youram-admin-for-singleembed'

					),					'player_text_align'=> array(
						'title'			=> __( 'Text Align <br/> <span class="youram-field-desc">for all data shown below Video Player - title | description</span>', 'youram-domain' ),
						'type'			=> 'select',
						'id'			=> __( 'player_text_align', 'youram-domain' ),
						'title_attr'	=> __( 'Text Align - for all data shown below Video Player', 'youram-domain' ),
						'value'			=> 'left',
						'choices'		=> array(
							'left'		=> __( 'Left', 'youram-domain' ),
							'center'	=> __( 'Center', 'youram-domain' ),
							'right'		=> __( 'Right', 'youram-domain' ),
						),
						'class'			=> ''
					),
					'player_description_height'		=> array(
						'title'			=> __( 'Initial Description Height<br/> <span class="youram-field-desc">to show some amount of description below video player</span>', 'youram-domain' ),
						'id'			=> __( 'player_description_height', 'youram-domain' ),
						'title_attr'	=> __( 'Height of Description to be shown below Video Player', 'youram-domain' ),
						'type'			=> 'text',
						'value'			=> 1.5,
						'text'			=> __( 'initially a small portion of video description will be shown below video player. User can be expand this with "show more" button.' ),

						'class'			=> ''
					),

					

				),
			),
			
			
			'styling-options-section'	=> array(
				'title'			=> __( 'Overall Styles', 'youram-domain' ),
				'fields'		=> array(
					'youram_font_family'=> array(
						'title'			=> __( 'Font Family Type <br/> <span class="youram-field-desc">Text Font type </span>', 'youram-domain' ),
						'id'			=> __( 'youram_font_family', 'youram-domain' ),
						'title_attr'	=> __( 'Font Family', 'youram-domain' ),
						'text'			=> __( 'HTML font types - inherit will continue with your page font type' ),
						'type'			=> 'select',
						'value'			=> 'inherit',
						'choices'		=> array(
							'inherit'	=> __( 'Inherit from Page', 'youram-domain' ),
							'Roboto'	=> __( 'Roboto', 'youram-domain' ),
							'Open Sans'	=> __( 'Open Sans', 'youram-domain' ),
							'B612'		=> __( 'B612', 'youram-domain' ),
							'Calibri'	=> __( 'Calibri', 'youram-domain' ),
							'Arial'		=> __( 'Arial', 'youram-domain' ),
							'Tahoma'	=> __( 'Tahoma', 'youram-domain' ),
							'Verdana'	=> __( 'Verdana', 'youram-domain' ),
						),
						'class'			=> 'youram-admin-optgroup-styles youram-admin-for-gallery youram-admin-for-singleembed'
					),
					'youram_background_color'	=> array(
						'title'			=> __( 'Youram Background Color <br/> <span class="youram-field-desc">YouRam background color</span>', 'youram-domain' ),
						'id'			=> __( 'youram_background_color', 'youram-domain' ),
						'title_attr'	=> __( 'Plugin Background Color', 'youram-domain' ),
						'value'			=> '#ffffff',
						'type'			=> 'color',
					),
					'youram_border_color'	=> array(
						'title'			=> __( 'Youram Border Color <br/> <span class="youram-field-desc">to remove border, keep same color as background</span>', 'youram-domain' ),
						'id'			=> __( 'youram_border_color', 'youram-domain' ),
						'title_attr'	=> __( 'Youram Border Color', 'youram-domain' ),
						'value'			=> '#e2e2e2',
						'type'			=> 'color',
					),
					'show_youram_padding' => array(						
						'title'			=> __( 'Show Padding around full Gallery<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'show_youram_padding', 'youram-domain' ),
						'title_attr'	=> __( 'Show Padding in Gallery border', 'youram-domain' ),
						'checked'		=> true,
						
					),					
					'show_youram_body_padding' => array(						
						'title'			=> __( 'Show Padding around Thumbnail Grid<br/> <span class="youram-field-desc">add spacing around everything below the inline video player</span>', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( '' ),
						'id'			=> __( 'show_youram_body_padding', 'youram-domain' ),
						'title_attr'	=> __( 'Show Padding in YouRam border', 'youram-domain' ),
						'checked'		=> false,
						
					),	
					'youram_padding'		=> array(
						'title'			=> __( 'Padding Amount<br/> <span class="youram-field-desc">Spacing around Gallery & Thumbnails</span>', 'youram-domain' ),
						'id'			=> __( 'youram_padding', 'youram-domain' ),
						'title_attr'	=> __( 'Padding around Gallery', 'youram-domain' ),
						'type'			=> 'text',
						'value'			=> 0.9,
						'class'			=> ''
					),
					
					
					
				),
			),
			
			'thumbnails-options-section'	=> array(
				'title'			=> __( 'Thumbnails', 'youram-domain' ),
				'fields'		=> array(
					'thumbnail_display_mode'=> array(
						'title'			=> __( 'Thumbnail View <br/> <span class="youram-field-desc"> </span>', 'youram-domain' ),
						'id'			=> __( 'thumbnail_display_mode', 'youram-domain' ),
						'title_attr'	=> __( 'Thumbnail View', 'youram-domain' ),
						'text'			=> __( '' ),
						'type'			=> 'select',
						'value'			=> 'grid',
						'choices'		=> array(
							'grid'	=> __( 'Grid', 'youram-domain' ),
							'list'	=> __( 'List', 'youram-domain' ),
						),
						'class'			=> 'youram-admin-optgroup-thumbnails youram-admin-for-gallery'
					),
					'grid_thumbnail_type'=> array(
						'title'			=> __( 'Thumbnail Type <br/> <span class="youram-field-desc"> </span>', 'youram-domain' ),
						'id'			=> __( 'grid_thumbnail_type', 'youram-domain' ),
						'title_attr'	=> __( 'Thumbnail Type', 'youram-domain' ),
						'text'			=> __( '' ),
						'type'			=> 'select',
						'value'			=> 'full-data',
						'choices'		=> array(
							'simple-image'	=> __( 'Only Image', 'youram-domain' ),
							'simple-all'	=> __( 'Title', 'youram-domain' ),
							'neat-views'	=> __( 'Title + Views', 'youram-domain' ),
							'neat-date'		=> __( 'Title + Date', 'youram-domain' ),
							'neat-all'		=> __( 'Title + Views + Date', 'youram-domain' ),
							'full-data'		=> __( 'Title + Description', 'youram-domain' ),
							'full-views'	=> __( 'Title + Description + Views', 'youram-domain' ),
							'full-date'		=> __( 'Title + Description + Date', 'youram-domain' ),
							'full-all'		=> __( 'Title + Description + Views + Date', 'youram-domain' ),
						),
					),
					'max_results'		=> array(
						'title'			=> __( 'Videos per Load<br/> <span class="youram-field-desc">only for Load-More Button Mode</span>', 'youram-domain' ),
						'id'			=> __( 'max_results', 'youram-domain' ),
						'title_attr'	=> __( 'Video Thumbnails per Load', 'youram-domain' ),
						'type'			=> 'text',
						'value'			=> 9,
						'class'			=> ''
					),
					'max_rows'			=> array(
						'title'			=> __( 'Rows<br/> <span class="youram-field-desc">only for Prev-Next Button Mode</span>', 'youram-domain' ),
						'id'			=> __( 'max_rows', 'youram-domain' ),
						'title_attr'	=> __( 'Item per Load', 'youram-domain' ),
						'type'			=> 'text',
						'value'			=> 2,
						'class'			=> ''
					),

					'item_background_color'	=> array(
						'title'			=> __( 'Background Color<br/> <span class="youram-field-desc">for Thumbnail Text</span>', 'youram-domain' ),
						'id'			=> __( 'item_background_color', 'youram-domain' ),
						'title_attr'	=> __( 'Background Color for Text', 'youram-domain' ),
						'value'			=> '#ffffff',
						'type'			=> 'color',
					),
					
					'fixed_height_item_container' => array(
						'title'			=> __( 'Fixed Height Thumbnail Container<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'fixed_height_item_container', 'youram-domain' ),
						'title_attr'	=> __( 'Fixed Height Thumbnail Container', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> true,
						'text'			=> __( 'only for Prev-Next Button Mode' ),
						'class'			=> ''	
					),


				
					'show_fixed_play_icon' => array(
						'title'			=> __( 'Show Play Icon', 'youram-domain' ),
						'id'			=> __( 'show_fixed_play_icon', 'youram-domain' ),
						'title_attr'	=> __( 'Show Play Icon', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'over video thumbnails' ),
						'checked'		=> true,
					),
					'show_hover_animation' => array(
						'title'			=> __( 'Show Hover Animations', 'youram-domain' ),
						'id'			=> __( 'show_hover_animation', 'youram-domain' ),
						'title_attr'	=> __( 'Show Hover Animations', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'on video thumbnails' ),
						'checked'		=> true,
					),
					'icon_shape'	=> array(
						'title'			=> __( 'Play Icon Type', 'youram-domain' ),
						'id'			=> __( 'icon_shape', 'youram-domain' ),
						'title_attr'	=> __( 'Play Icon Type', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'circle',
						'choices'		=> array(
							'circle'	=> __( 'Circle', 'youram-domain' ),
							'square'	=> __( 'Square', 'youram-domain' ),
						),
						'class'			=> ''
					),

					'border_type_thumbnails'	=> array(
						'title'			=> __( 'Border Type - Thumb Box<br/> <span class="youram-field-desc">for Thumbnail Boxes - covering image and text</span>', 'youram-domain' ),
						'id'			=> __( 'border_type_thumbnails', 'youram-domain' ),
						'title_attr'	=> __( 'Border Type - Thumbnail Boxes', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'outline',
						'choices'		=> array(
							'outline'	=> __( 'Outline', 'youram-domain' ),
							'shadow'	=> __( 'Shadow 3D', 'youram-domain' ),
							'outline-shadow'	=> __( 'Outline with Shadow', 'youram-domain' ),
							'none'	=> __( 'No Border', 'youram-domain' ),
						),
						'class'			=> ''
					),					
					'border_type_thumb_image'	=> array(
						'title'			=> __( 'Border Type - Thumb Image<br/> <span class="youram-field-desc">for Thumbnail Image only</span>', 'youram-domain' ),
						'id'			=> __( 'border_type_thumb_image', 'youram-domain' ),
						'title_attr'	=> __( 'Border Type - Thumbnail Image', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'none',
						'choices'		=> array(
							'outline'	=> __( 'Outline', 'youram-domain' ),
							'shadow'	=> __( 'Shadow 3D', 'youram-domain' ),
							'outline-shadow'	=> __( 'Outline with Shadow', 'youram-domain' ),
							'none'	=> __( 'No Border', 'youram-domain' ),
						),
						'class'			=> ''
					),					


				),
			),
			
			
			'title-options-section'	=> array(
				'title'			=> __( 'Title', 'youram-domain' ),
				'fields'		=> array(

					'title_color'	=> array(
						'title'			=> __( 'Title Text Color <br/> <span class="youram-field-desc">text color for video title</span>', 'youram-domain' ),
						'id'			=> __( 'title_color', 'youram-domain' ),
						'title_attr'	=> __( 'Video Title Text Color', 'youram-domain' ),
						'value'			=> '#383838',
						'type'			=> 'color',
						'class'			=> 'youram-admin-optgroup-title youram-admin-for-gallery'						
					),
					'title_font_size'	=> array(
						'title'			=> __( 'Title Font Size <br/> <span class="youram-field-desc">font size of video title text</span>', 'youram-domain' ),
						'id'			=> __( 'title_font_size', 'youram-domain' ),
						'title_attr'	=> __( 'Title Font Size', 'youram-domain' ),
						'value'			=> '0.85',
						'text'			=> __( 'range 0.5 to 3.0' ),	
						'class'			=> ''
					),
					'title_font_weight'	=> array(
						'title'			=> __( 'Title Font Weight <br/> <span class="youram-field-desc">font weight of video title text</span>', 'youram-domain' ),
						'id'			=> __( 'title_font_weight', 'youram-domain' ),
						'title_attr'	=> __( 'Title Font Weight', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> '700',
						'choices'		=> array(
							'400'		=> __( 'Normal', 'youram-domain' ),
							'500'		=> __( 'Medium', 'youram-domain' ),
							'700'		=> __( 'Bold', 'youram-domain' ),
						),
						'class'			=> ''
					),
					'thumbnail_text_align'	=> array(
						'title'			=> __( 'Text Align <br/> <span class="youram-field-desc">for all text below thumbnails - title | description | date | views</span>', 'youram-domain' ),
						'id'			=> __( 'thumbnail_text_align', 'youram-domain' ),
						'title_attr'	=> __( 'Text Align', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'left',
						'choices'		=> array(
							'left'		=> __( 'Left', 'youram-domain' ),
							'center'	=> __( 'Center', 'youram-domain' ),
							'right'		=> __( 'Right', 'youram-domain' ),
						),
						'class'			=> ''
					),
					'video_title_max_height' => array(
						'title'			=> __( 'Title Max Height <br/> <span class="youram-field-desc">this is the maximum height of video title displayed below thumbnails. </span>', 'youram-domain' ),
						'id'			=> __( 'video_title_max_height', 'youram-domain' ),
						'title_attr'	=> __( 'Video Title Height', 'youram-domain' ),
						'value'			=> '2.8',
						'text'			=> __( '"auto" means full video title will be displayed. Or specify an height in the range 2.5 to 6.0 <br> This height can control if video title will be shown upto 1/2/3/more lines or "auto" height' ),
						'class'			=> ''
					),
					'video_title_fixed_height' => array(						
						'title'			=> __( 'Title - Fixed Height?<br/> <span class="youram-field-desc">title can have fixed height or variable height. </span>', 'youram-domain' ),
						'type'			=> 'checkbox',
						'text'			=> __( 'keep uncheck when you need Description with Title in Thumbnails' ),
						'id'			=> __( 'video_title_fixed_height', 'youram-domain' ),
						'title_attr'	=> __( 'Video Title Fixed Height', 'youram-domain' ),
						'checked'		=> false,
						
					),
					

				),
			),

			'description-options-section'	=> array(
				'title'			=> __( 'Description', 'youram-domain' ),
				'fields'		=> array(
					'description_color'	=> array(
						'title'			=> __( 'Description Text Color <br/> <span class="youram-field-desc">text color for video description, likes, date</span>', 'youram-domain' ),
						'id'			=> __( 'description_color', 'youram-domain' ),
						'title_attr'	=> __( 'Video Description Color', 'youram-domain' ),
						'value'			=> '#686868',
						'type'			=> 'color',
						'class'			=> 'youram-admin-optgroup-desc youram-admin-for-gallery'						
					),
					'description_link_color'	=> array(
						'title'			=> __( 'Description Link Color <br/> <span class="youram-field-desc">text color for video description, likes, date</span>', 'youram-domain' ),
						'id'			=> __( 'description_link_color', 'youram-domain' ),
						'title_attr'	=> __( 'Description Link Color', 'youram-domain' ),
						'value'			=> '#ff9800',
						'type'			=> 'color',
						'class'			=> ''						
					),
					'description_font_size'	=> array(
						'title'			=> __( 'Description Font Size <br/> <span class="youram-field-desc">font size of video description</span>', 'youram-domain' ),
						'id'			=> __( 'description_font_size', 'youram-domain' ),
						'title_attr'	=> __( 'Description Font Size', 'youram-domain' ),
						'value'			=> '0.8',
						'text'			=> __( 'range 0.5 to 3.0' ),
						'class'			=> ''	
					),
					'description_font_weight'	=> array(
						'title'			=> __( 'Description Font Weight <br/> <span class="youram-field-desc">font weight of video description text</span>', 'youram-domain' ),
						'id'			=> __( 'description_font_weight', 'youram-domain' ),
						'title_attr'	=> __( 'Description Font Weight', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> '500',
						'choices'		=> array(
							'400'		=> __( 'Normal', 'youram-domain' ),
							'500'		=> __( 'Medium', 'youram-domain' ),
							'700'		=> __( 'Bold', 'youram-domain' ),
						),
						'class'			=> ''	
					),
					'video_title_desc_max_height' => array(
						'title'			=> __( 'Title+Description Height <br/> <span class="youram-field-desc">this is the maximum height of video title with description displayed below thumbnails. </span>', 'youram-domain' ),
						'id'			=> __( 'video_title_desc_max_height', 'youram-domain' ),
						'title_attr'	=> __( 'Video Title+Description Height', 'youram-domain' ),
						'value'			=> '4.7',
						'text'			=> __( 'Specify an height in the range 5.5 to 10.0 <br> This height controls 3/4/5/6/7/8/more combined lines of title and description shown' ),
						'class'			=> ''	
					),

					
				),
			),

			'tabs-options-section'	=> array(
				'title'			=> __( 'Tabs', 'youram-domain' ),
				'fields'		=> array(
					'hide_tabs' => array(
						'title'			=> __( 'Hide Tabs', 'youram-domain' ),
						'id'			=> __( 'hide_tabs', 'youram-domain' ),
						'title_attr'	=> __( 'Hide Tabs', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
					),

					'tabs_highlight_color'		=> array(
						'title'			=> __( 'Background Color Highlight<br/> <span class="youram-field-desc">for Selected Tab</span>', 'youram-domain' ),
						'id'			=> __( 'tabs_highlight_color', 'youram-domain' ),
						'title_attr'	=> __( 'Selected Tab Color', 'youram-domain' ),
						'value'			=> '#9575cd',
						'type'			=> 'color',
						'class'			=> 'youram-admin-optgroup-taabs youram-admin-for-gallery'
					),
					'tabs_hover_color'		=> array(
						'title'			=> __( 'Background Color Hover<br/> <span class="youram-field-desc">when mouse is hovered over Tabs</span>', 'youram-domain' ),
						'id'			=> __( 'tabs_hover_color', 'youram-domain' ),
						'title_attr'	=> __( 'Selected Tab Color', 'youram-domain' ),
						'value'			=> '#fbaf3c',
						'type'			=> 'color',
					),
					'tabs_background_color'	=> array(
						'title'			=> __( 'Background Color<br/> <span class="youram-field-desc">for tabs</span>', 'youram-domain' ),
						'id'			=> __( 'tabs_background_color', 'youram-domain' ),
						'title_attr'	=> __( 'Background Color for Tabs', 'youram-domain' ),
						'value'			=> '#ff9800',
						'type'			=> 'color',
					),
					'tabs_text_color'	=> array(
						'title'			=> __( 'Text Color<br/> <span class="youram-field-desc">for tabs</span>', 'youram-domain' ),
						'id'			=> __( 'tabs_text_color', 'youram-domain' ),
						'title_attr'	=> __( 'Tabs Text Color', 'youram-domain' ),
						'value'			=> '#ffffff',
						'type'			=> 'color',
					),
					'tabs_font_size'	=> array(
						'title'			=> __( 'Font Size<br/> <span class="youram-field-desc">for tabs</span>', 'youram-domain' ),
						'id'			=> __( 'tabs_font_size', 'youram-domain' ),
						'title_attr'	=> __( 'Tabs Font Size', 'youram-domain' ),
						'value'			=> '0.85',
						'text'			=> __( 'range 0.5 to 3.0' ),
						'class'			=> ''
					),
					'tabs_font_weight'	=> array(
						'title'			=> __( 'Font Weight<br/> <span class="youram-field-desc">for tabs</span></span>', 'youram-domain' ),
						'id'			=> __( 'tabs_font_weight', 'youram-domain' ),
						'title_attr'	=> __( 'Tabs Font Weight', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> '500',
						'choices'		=> array(
							'400'		=> __( 'Normal', 'youram-domain' ),
							'500'		=> __( 'Medium', 'youram-domain' ),
							'700'		=> __( 'Bold', 'youram-domain' ),
						),
						'class'			=> ''
					),
					'tabs_spacing'	=> array(
						'title'			=> __( 'Spacing between Tabs<br/> <span class="youram-field-desc">for tabs</span></span>', 'youram-domain' ),
						'id'			=> __( 'tabs_spacing', 'youram-domain' ),
						'title_attr'	=> __( 'Spacing between Tabs', 'youram-domain' ),
						'value'			=> '0',
						'text'			=> __( 'range 0 to 0.8' ),
						'class'			=> ''
					),
					'border_type_tabs'	=> array(
						'title'			=> __( 'Border for Tabs Container', 'youram-domain' ),
						'id'			=> __( 'border_type_tabs', 'youram-domain' ),
						'title_attr'	=> __( 'Border for Tabs Container', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'none',
						'choices'		=> array(
							'outline'	=> __( 'Outline', 'youram-domain' ),
							'shadow'	=> __( 'Shadow 3D', 'youram-domain' ),
							'outline-shadow'	=> __( 'Outline with Shadow', 'youram-domain' ),
							'none'	=> __( 'No Border', 'youram-domain' ),
						),
						'class'			=> ''
					),
					
					'full_width_tab_container' => array(
						'title'			=> __( 'Show Full Width Tabs', 'youram-domain' ),
						'id'			=> __( 'full_width_tab_container', 'youram-domain' ),
						'title_attr'	=> __( 'Show Full Width Tabs', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
					),
					
					

					
				),
			),
			
			'loadmore-options-section'	=> array(
				'title'			=> __( 'Load More', 'youram-domain' ),
				'fields'		=> array(
					'hide_loading_mechanism' => array(
						'title'			=> __( 'Hide Loading Buttons', 'youram-domain' ),
						'id'			=> __( 'hide_loading_mechanism', 'youram-domain' ),
						'title_attr'	=> __( 'Hide Load More Button', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
						'text'			=> 'LoadMore and PrevNext Buttons',
						'class'			=> 'youram-admin-optgroup-loadmore youram-admin-for-gallery'	
					),
					'loading_mechanism'	=> array(
						'title'			=> __( 'Load More Mechanism<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'loading_mechanism', 'youram-domain' ),
						'title_attr'	=> __( 'Load More Mechanism', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'prev-next',
						'choices'		=> array(
							'load-more'		=> __( 'Load More Button', 'youram-domain' ),
							'prev-next'		=> __( 'Previous Next Buttons', 'youram-domain' ),
						),
						'class'			=> ''
					),
					'show_remaining_video_count' => array(
						'title'			=> __( 'Show Remaining Video Counts<br/> <span class="youram-field-desc">on Load-More and Prev-Next Buttons.</span>', 'youram-domain' ),
						'id'			=> __( 'show_remaining_video_count', 'youram-domain' ),
						'title_attr'	=> __( 'Show Remaining Video Counts', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
						'text'			=> __( 'Ex:&nbsp;&nbsp; || + Load More (30) || &nbsp;&nbsp;&nbsp;&nbsp; || < Prev (10) || &nbsp;&nbsp;&nbsp;&nbsp; || (20) Next > ||' ),
						'class'			=> ''	
					),
					'show_page_count' => array(
						'title'			=> __( 'Show Page Number - Pagination<br/> <span class="youram-field-desc">only with Prev-Next Buttons. </span>', 'youram-domain' ),
						'id'			=> __( 'show_page_count', 'youram-domain' ),
						'title_attr'	=> __( 'Show Remaining Video Counts', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> true,
						'text'			=> __( 'Ex:&nbsp;&nbsp; || < Prev || &nbsp; 2/10 &nbsp; || Next > ||' ),
						'class'			=> ''	
					),
					'join_prev_next_buttons' => array(
						'title'			=> __( 'Join Previous Next Buttons', 'youram-domain' ),
						'id'			=> __( 'join_prev_next_buttons', 'youram-domain' ),
						'title_attr'	=> __( 'Join Previous Next Buttons', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
						'text'			=> 'no space between Prev-Next Buttons',
						'class'			=> ''	
					),
					'controls_background_color'	=> array(
						'title'			=> __( 'Background Color<br/> <span class="youram-field-desc">of loading buttons</span>', 'youram-domain' ),
						'id'			=> __( 'controls_background_color', 'youram-domain' ),
						'title_attr'	=> __( 'Background Color for Text', 'youram-domain' ),
						'value'			=> '#ffffff',
						'type'			=> 'color',
					),
					'controls_hover_color'		=> array(
						'title'			=> __( 'Hover Color <br><span class="youram-field-desc">loading buttons</span>', 'youram-domain' ),
						'id'			=> __( 'controls_hover_color', 'youram-domain' ),
						'title_attr'	=> __( 'Selected Tab Color', 'youram-domain' ),
						'value'			=> '#fdd496',
						'type'			=> 'color',
					),

					'controls_text_color'	=> array(
						'title'			=> __( 'Text Color<br/> <span class="youram-field-desc">loading buttons</span>', 'youram-domain' ),
						'id'			=> __( 'controls_text_color', 'youram-domain' ),
						'title_attr'	=> __( 'Controls Text Color', 'youram-domain' ),
						'value'			=> '#383838',
						'type'			=> 'color',
					),
					'controls_font_size'	=> array(
						'title'			=> __( 'Font Size<br/> <span class="youram-field-desc">loading buttons</span>', 'youram-domain' ),
						'id'			=> __( 'controls_font_size', 'youram-domain' ),
						'title_attr'	=> __( 'Controls Font Size', 'youram-domain' ),
						'value'			=> '0.9',
						'text'			=> __( 'range 0.5 to 3.0' ),
						'class'			=> ''
					),
					'controls_font_weight'	=> array(
						'title'			=> __( 'Font Weight<br/> <span class="youram-field-desc">loading buttons</span>', 'youram-domain' ),
						'id'			=> __( 'controls_font_weight', 'youram-domain' ),
						'title_attr'	=> __( 'Controls Font Weight', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> '700',
						'choices'		=> array(
							'400'		=> __( 'Normal', 'youram-domain' ),
							'500'		=> __( 'Medium', 'youram-domain' ),
							'700'		=> __( 'Bold', 'youram-domain' ),
						),
						'class'			=> ''
					),
					
					'prev_button_text'	=> array(
						'title'			=> __( 'Previous Button Text <br/> <span class="youram-field-desc">text shown on load more button</span>', 'youram-domain' ),
						'id'			=> __( 'prev_button_text', 'youram-domain' ),
						'title_attr'	=> __( 'Previous Button Text', 'youram-domain' ),
						'value'			=> 'Prev',						
					),
					'next_button_text'	=> array(
						'title'			=> __( 'Next Button Text <br/> <span class="youram-field-desc">text shown on load more button</span>', 'youram-domain' ),
						'id'			=> __( 'next_button_text', 'youram-domain' ),
						'title_attr'	=> __( 'Next Button Text', 'youram-domain' ),
						'value'			=> 'Next',						
					),
					'load_more_text'	=> array(
						'title'			=> __( 'Load More Buton Text <br/> <span class="youram-field-desc">text shown on load more button</span>', 'youram-domain' ),
						'id'			=> __( 'load_more_text', 'youram-domain' ),
						'title_attr'	=> __( 'Load More Text', 'youram-domain' ),
						'value'			=> 'Load more videos..',						
					),
					/*'all_done_text'	=> array(
						'title'			=> __( 'All Done Text <br/> <span class="youram-field-desc">text shown on load more button when no more videos remain</span>', 'youram-domain' ),
						'id'			=> __( 'all_done_text', 'youram-domain' ),
						'title_attr'	=> __( 'All Done Text', 'youram-domain' ),
						'value'			=> 'All done..',
						
					),*/
					'border_type_loading'	=> array(
						'title'			=> __( 'Border Type <br/> <span class="youram-field-desc">for load more button </span>', 'youram-domain' ),
						'id'			=> __( 'border_type_loading', 'youram-domain' ),
						'title_attr'	=> __( 'Border Type - Loading Buttons', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> 'outline',
						'choices'		=> array(
							'outline'	=> __( 'Outline', 'youram-domain' ),
							'shadow'	=> __( 'Shadow 3D', 'youram-domain' ),
							'outline-shadow'	=> __( 'Outline with Shadow', 'youram-domain' ),
							'none'	=> __( 'No Border', 'youram-domain' ),
						),
						'class'			=> ''
					),
					
				),
			),
			

			'duration-options-section'	=> array(
				'title'			=> __( 'Duration', 'youram-domain' ),
				'fields'		=> array(
					
					'duration_color'		=> array(
						'title'			=> __( 'Duration Text Color <br/> <span class="youram-field-desc">for video duration text</span>', 'youram-domain' ),
						'id'			=> __( 'duration_color', 'youram-domain' ),
						'title_attr'	=> __( 'Duration Text Color', 'youram-domain' ),
						'value'			=> '#383838',
						'type'			=> 'color',
						'class'			=> 'youram-admin-optgroup-durtn youram-admin-for-gallery'	
					),
					'duration_background_color'		=> array(
						'title'			=> __( 'Duration Background Color <br/> <span class="youram-field-desc">for video duration background</span>', 'youram-domain' ),
						'id'			=> __( 'duration_background_color', 'youram-domain' ),
						'title_attr'	=> __( 'Duration Background Color', 'youram-domain' ),
						'value'			=> '#ffffff',
						'type'			=> 'color',
					),
					'duration_font_size'	=> array(
						'title'			=> __( 'Duration Size<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'duration_font_size', 'youram-domain' ),
						'title_attr'	=> __( 'Duration Font Size', 'youram-domain' ),
						'value'			=> '0.7',
						'text'			=> __( 'range 0.5 to 3.0' ),
						'class'			=> ''
					),
					'hide_duration' => array(
						'title'			=> __( 'Hide Duration', 'youram-domain' ),
						'id'			=> __( 'hide_duration', 'youram-domain' ),
						'title_attr'	=> __( 'Hide Duration', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
					),

					'hide_duration_icon' => array(
						'title'			=> __( 'Hide Duration Icon', 'youram-domain' ),
						'id'			=> __( 'hide_duration_icon', 'youram-domain' ),
						'title_attr'	=> __( 'Hide Duration Icon', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
					),





				),
			),
			
			'caching-options-section'	=> array(
				'title'			=> __( 'Caching', 'youram-domain' ),
				'fields'		=> array(
					'build_cache'		=> array(
						'title'			=> __( 'Build Cache <br/> <span class="youram-field-desc">to save YouTube API data in the YouRam cache</span>', 'youram-domain' ),
						'id'			=> __( 'build_cache', 'youram-domain' ),
						'title_attr'	=> __( 'Build Cache', 'youram-domain' ),
						'type'			=> 'notice',
						'value'			=> 'YouRam Cache is always Enabled!',
						'text'			=> __( '<br>YouTube provides only 10,000 API calls/day to all users.<br><br>So, YouRam plugin creates a small cache to avoid multiple API calls to YouTube/Vimeo. ' ),
						'class'			=> 'youram-admin-optgroup-cache youram-admin-for-gallery youram-admin-for-singleembed'	
					),
					
					/*<br>Once cache is built it can be used forever with high speed.<br><br>Note: Cache will only save the data like title, description, links etc. The video will be streamed from YouTube only.<br><br><strong>Auto-Build Cache: </strong>Cache will be automatically built if no cache found. Cache will also re-build, if change in Source Links is detected during preview.<br><br><strong>Manual-Build Cache: </strong>Only Visible in WP Admin as "Re-Build Cache" button.<br/>Provided on the Youram frontend. <br/><br/>Manual Build Cache can be used when source links are changed - to force a re-building of cache.*/
					
					'auto_build_cache_duration'	=> array(
						'title'			=> __( 'Auto Re-build Cache Interval <br/> <span class="youram-field-desc">Cache will be re-built in background after selected interval.</span>', 'youram-domain' ),
						'id'			=> __( 'auto_build_cache_duration', 'youram-domain' ),
						'title_attr'	=> __( 'Description Font Weight', 'youram-domain' ),
						'type'			=> 'select',
						'value'			=> '0',
						'choices'		=> array(
							'1'			=> __( 'Daily - Once Every 1 Day', 'youram-domain' ),
							'2'			=> __( 'TriWeekly - Once Every 2 Days', 'youram-domain' ),
							'7'			=> __( 'Weekly - Once Every 7 Days', 'youram-domain' ),
							'30'		=> __( 'Monthly - Once Every 30 Days', 'youram-domain' ),
							'0'			=> __( 'Never - No Automatic Re-build of Cache', 'youram-domain' ),
						),
						'text'			=> __( '<br><strong>Auto-Build Cache: </strong>Cache will be automatically built if no cache found. Cache will also re-build once, if change in Source Links is detected during preview.<br><br><strong>Manual-Build Cache: </strong>Only Visible in WP Admin as "Re-Build Cache" button.<br/>Provided on the Youram frontend. <br/><br/>Manual Build Cache can be used when source links are changed - to force a re-building of cache.' ),
						'class'			=> 'youram-admin-premium-option'	
						),
					'cache_location'	=> array(
						'title'			=> __( 'Cache Folder Location <br/> <span class="youram-field-desc">Folder where Youram cache files will be saved. Do not change.</span>', 'youram-domain' ),
						'id'			=> __( 'cache_location', 'youram-domain' ),
						'title_attr'	=> __( 'Cache Folder Link', 'youram-domain' ),
						'value'			=> wp_upload_dir()['baseurl'].'/'.YOURAM_CACHE_FOLDER,
						'class'			=> 'regular-text youram-admin-internal-option',
						//'attributes'	=> array('disabled'		=> true)
						
					),
					'wait_for_full_cache_to_build' => array(
						'title'			=> __( 'Wait for All Playlist Sources to be Loaded into Cache', 'youram-domain' ),
						'id'			=> __( 'wait_for_full_cache_to_build', 'youram-domain' ),
						'title_attr'	=> __( 'Wait for All Playlist Sources to Build' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
						'class'			=> 'youram-admin-internal-option',
						'text'			=> 'Keep <strong>Un-checked</strong> for Fast Display. Only used during Manual Re-Build of Cache.<br><br> If Checked, then you can see the green(success)/red(fail) status in the loader - corresponding to every source playlist. After the complete cache is built, then YouRam will display the UI.'
					),

				),
			),

			'responsive-options-section'	=> array(
				'title'			=> __( 'Columns', 'youram-domain' ),
				'fields'		=> array(
					'responsive_breakpoints' => array(
						'title'			=> __( 'Responsive Breakpoints <br/> <span class="youram-field-desc">grid columns will change depending on width specified</span>', 'youram-domain' ),
						'id'			=> __( 'responsive_breakpoints', 'youram-domain' ),
						'title_attr'	=> __( 'Responsive Breakpoints', 'youram-domain' ),
						'value'			=> '[500,700,1050,1200]',
						'text'			=> __( 'Example:<br>1-column layout below 500 screen width <br>2-column layout between 500 to 700 screen width <br>3-column layout between 700 to 1050 screen width <br>4-column layout between 1050 to 1200 screen width <br>5-column layout above 1200 screen width' ),
						//'checked'		=> false,
						'class'			=> 'youram-admin-optgroup-respo youram-admin-for-gallery'	
					),
					


					

				),
			),
			
			'subscribe-options-section'	=> array(
				'title'			=> __( 'Subscribe', 'youram-domain' ),
				'fields'		=> array(
					'show_youtube_subscribe_button' => array(
						'title'			=> __( 'Show YouTube Subscribe Button', 'youram-domain' ),
						'id'			=> __( 'show_youtube_subscribe_button', 'youram-domain' ),
						'title_attr'	=> __( 'Show YouTube Subscribe Button' ),
						'type'			=> 'checkbox',
						'checked'		=> true,
						'class'			=> 'youram-admin-optgroup-subscribe youram-admin-for-gallery youram-admin-for-singleembed',
					),
					'youtube_subscribe_channel' => array(
						'title'			=> __( 'YouTube Subscribe Channel Link<br/> <span class="youram-field-desc">do not use Short URLs</span>', 'youram-domain' ),
						'id'			=> __( 'youtube_subscribe_channel', 'youram-domain' ),
						'title_attr'	=> __( 'YouTube Subscribe Channel Link', 'youram-domain' ),
						'value'			=> 'https://www.youtube.com/@BuddhismInEnglish',
						'text'			=> __( 'If no link is provided, button will not be displayed' ),
						'class'			=> 'regular-text'	
					),
					'youtube_subscribe_text' => array(
						'title'			=> __( 'YouTube Subscribe Button Text<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'youtube_subscribe_text', 'youram-domain' ),
						'title_attr'	=> __( 'YouTube Subscribe Button Text', 'youram-domain' ),
						'value'			=> 'YT Subscribe',
						'text'			=> __( '' ),
						'class'			=> ''	
					),
					
				),
			),
			
			'stats-options-section'	=> array(
				'title'			=> __( 'View+Date', 'youram-domain' ),
				'fields'		=> array(
					
					'hide_statistics_icon' => array(
						'title'			=> __( 'Hide View+Date Icon', 'youram-domain' ),
						'id'			=> __( 'hide_statistics_icon', 'youram-domain' ),
						'title_attr'	=> __( 'Hide View+Date Icon', 'youram-domain' ),
						'type'			=> 'checkbox',
						'checked'		=> false,
						'class'			=> 'youram-admin-optgroup-stats youram-admin-for-gallery',

					),

				),
			),
			
			'extra-options-section'	=> array(
				'title'			=> __( 'Custom CSS', 'youram-domain' ),
				'fields'		=> array(
					
					'custom_extra_css'	=> array(
						'title'			=> __( 'Extra Custom CSS Styles<br/> <span class="youram-field-desc">Use !important to override existing styles</span>', 'youram-domain' ),
						'id'			=> __( 'custom_extra_css', 'youram-domain' ),
						'title_attr'	=> __( 'Extra Custom CSS', 'youram-domain' ),
						'value'			=> '',
						///* this is a comment &#13;&#10;.yl-tab,.yl-tab-icon{&#13;&#10;padding:0.6em 0.8em !important;&#13;&#10;}&#13;&#10;*/
						'type'			=> 'textarea',
						'class'			=> 'large-text youram-admin-optgroup-extra youram-admin-for-gallery youram-admin-for-singleembed',
						'sanitize'		=> false,
					),
					
					'youram_asset_location' => array(
						'title'			=> __( 'Youram Asset Location<br/> <span class="youram-field-desc"></span>', 'youram-domain' ),
						'id'			=> __( 'youram_asset_location', 'youram-domain' ),
						'title_attr'	=> __( 'Youram Asset Location', 'youram-domain' ),
						'value'			=> plugins_url( '../assets', __FILE__ ),
						'text'			=> __( '' ),
						'class'			=> 'regular-text youram-admin-internal-option'	
					),
				),
			),


		),
	),
);
$youram_option_page = new YouRamOptionGenerator( $youram_options );

?>