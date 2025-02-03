<?php
/**
 * Setup Child Theme Styles
 */
function impakt_enqueue_styles() {
	wp_enqueue_style( 'impakt-style', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'impakt_enqueue_styles', 20 );


/**
 * Setup Child Theme Palettes
 *
 * @param string $palettes registered palette json.
 * @return string
 */
function impakt_change_palette_defaults( $palettes ) {
	$palettes = '{"palette":[{"color":"#ff6600","slug":"palette1","name":"Palette Color 1"},{"color":"#0b0e1c","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"second-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"third-palette":[{"color":"#2B6CB0","slug":"palette1","name":"Palette Color 1"},{"color":"#215387","slug":"palette2","name":"Palette Color 2"},{"color":"#1A202C","slug":"palette3","name":"Palette Color 3"},{"color":"#2D3748","slug":"palette4","name":"Palette Color 4"},{"color":"#4A5568","slug":"palette5","name":"Palette Color 5"},{"color":"#718096","slug":"palette6","name":"Palette Color 6"},{"color":"#EDF2F7","slug":"palette7","name":"Palette Color 7"},{"color":"#F7FAFC","slug":"palette8","name":"Palette Color 8"},{"color":"#ffffff","slug":"palette9","name":"Palette Color 9"}],"active":"palette"}';
	return $palettes;
}
add_filter( 'kadence_global_palette_defaults', 'impakt_change_palette_defaults', 20 );

/**
 * Setup Child Theme Defaults
 *
 * @param array $defaults registered option defaults with kadence theme.
 * @return array
 */
function impakt_change_option_defaults( $defaults ) {
	$new_defaults = '{"initial_version":"1.2.13","site_background":{"desktop":{"color":"palette2","type":"color","image":{"url":"https:\/\/impakt.quickcloud.dev\/wp-content\/uploads\/2023\/10\/background-god-of-war-impakt.png","repeat":"no-repeat","size":"cover"}},"flag":false},"page_title_layout":"normal","page_content_style":"boxed","page_feature":true,"content_background":{"desktop":{"color":"palette2","type":"color"},"flag":true},"base_font":{"size":{"desktop":17},"lineHeight":{"desktop":1.6},"family":"Outfit","google":true,"weight":"normal","variant":"regular","color":"palette4","sizeType":"px","lineType":"-","letterSpacing":{"desktop":""},"spacingType":"em","style":"normal","transform":"","fallback":"sans-serif","flag":true}}';
	$new_defaults = json_decode( $new_defaults, true );
	return wp_parse_args( $new_defaults, $defaults );
}
add_filter( 'kadence_theme_options_defaults', 'impakt_change_option_defaults', 20 );