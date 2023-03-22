(function ( blocks, element,data, blockEditor ) {
	var el = element.createElement;
	
	var useBlockProps = blockEditor.useBlockProps;
	//var useSelect = data.useSelect;
	
	blocks.registerBlockType( 'youram/instance-selector-block', {
		
	/*edit: function ( props ) {
		var blockProps = blockEditor.useBlockProps();
		return el(
			'p',
			blockProps,
			'Hello World (from the editor, in green).'
		);
	},*/
		
		
	attributes: {
		instance: {
			type: 'string',
			default:'preview'
		},
	},
		
		
	edit: function ( props ) {
		var blockProps = useBlockProps();
		//var content = props.attributes.content;
		function onChangeInstance( event ) {
			props.setAttributes( { instance: event.target.value } );
		}

		return el( 'div',blockProps,
			el( 'div', {className: 'youram-block-holder'},
				el( 'h5',{className: 'youram-block-instance-title'},"YouRam"),
				el( 'span',{className: 'youram-block-instance-subtitle'},"YouTube | Embed | Gallery"),
				el('br',{}),
				el( 'span',{className: 'youram-block-instance-name'},"Select a Gallery Instance to be displayed: "),
				el( 'select',
					{
						className: 'youram-block-instance-select',
						value: props.attributes.instance,
						onChange: onChangeInstance
						
					},
					el("option", {value: "preview"}, "preview"),
					el("option", {value: "single-video" }, "single-video"),
					el("option", {value: "single-video-subscribe" }, "single-video-subscribe"),
					el("option", {value: "single-video-color" }, "single-video-color"),
					el("option", {value: "gallery-list-view"}, "gallery-list-view"),
					el("option", {value: "gallery-grid-view"}, "gallery-grid-view"),
					el("option", {value: "gallery-popup" }, "gallery-popup"),
					el("option", {value: "gallery-4columns" }, "gallery-4columns"),
					el("option", {value: "gallery-color" }, "gallery-color"),
					el("option", {value: "gallery-only-images" }, "gallery-only-images"),
					el("option", {value: "gallery-cards" }, "gallery-cards"),
					el("option", {value: "gallery-with-tabs" }, "gallery-with-tabs"),
					el("option", {value: "gallery-tabs-cards" }, "gallery-tabs-cards"),
				
				),
				el('br',{}),
				el( 'i',{className: 'youram-block-instance-note'},"Publish this post / page and view your Gallery on your page link!"),
				el('br',{}),
				el( 'a',
					{
						className: 'youram-block-instance-editlink',
						href:'./admin.php?page=youram&instance='+props.attributes.instance,
						target:'blank'
					},"Edit / Preview this Gallery here.."),
			)
		);
	},
		
		

	
	save: function (props) {
		var blockProps = blockEditor.useBlockProps.save();
		return el(
			'div',
			blockProps,
			'[youram instance="'+props.attributes.instance+'"]'
		);
	},
		
		/*save: function ( props ) {
			var blockProps = useBlockProps.save();
			return el(
				blockEditor.RichText.Content,
				Object.assign( blockProps, {
					tagName: 'p',
					value: props.attributes.content,
				} )
			);
		},*/
		
		
		
	});
})( window.wp.blocks, window.wp.element, window.wp.data, window.wp.blockEditor );