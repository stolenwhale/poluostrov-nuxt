<?
add_shortcode( 'columns-1', 'columns1_func' );
function columns1_func( $atts, $content = null ) {
	return '<div class="typography-content_columns"><div class="typography-content_columns-1">' . $content . '</div>';
}

add_shortcode( 'columns-2', 'columns2_func' );
function columns2_func( $atts, $content = null ) {
	return '<div class="typography-content_columns-2">' . $content . '</div></div>';
}

add_shortcode( 'descriptor', 'descriptor_func' );
function descriptor_func( $atts, $content = null ) {
	return '<div class="typography-descriptor">' . $content . '</div>';
}

add_shortcode( 'quote', 'quote_func' );
function quote_func( $atts, $content = null ) {
	return '<div class="typography-quote">' . $content . '</div>';
}

add_shortcode( 'subtitle', 'subtitle_func' );
function subtitle_func( $atts, $content = null ) {
	return '<div class="typography-subtitle">' . $content . '</div>';
}

add_shortcode( 'slider', 'slider_func' );
function slider_func( $atts, $content = null ) {
	return '<div class="js-typography-slider typography-slider"><div class="swiper-wrapper">' . $content . '</div>
	<div class="js-typography-slider-pagination swiper-pagination"></div>
	</div>';
}

add_shortcode( 'images', 'images_func' );
function images_func( $atts = null, $content = null ) {
	$atts = shortcode_atts( [
		'type' => 'single',
	], $atts );

	if ($atts['type'] == 'full') {
		return '<div class="typography-images typography-images_full">' . $content . '</div>';
	} else if($atts['type'] == 'twice') {
		return '<div class="typography-images typography-images_twice">' . $content . '</div>';
	} else if($atts['type'] == 'single') {
		return '<div class="typography-images typography-images_single">' . $content . '</div>';
	} else {
		return '<div class="typography-images typography-images_single">' . $content . '</div>';
	}
}

add_shortcode( 'photos_block', 'photos_block_func' );
function photos_block_func( $atts = null, $content = null ) {
	$atts = shortcode_atts( [
		'slides' => '1',
		'mb' => '0',
	], $atts );

	return '<div class="photo-block__slider js-photos-block" data-slides="' . $atts['slides'] . '" style="margin-bottom: ' . $atts['mb'] . 'px">
		<div class="swiper-wrapper">
		' . $content . '
		</div>
	</div>';
}

?>