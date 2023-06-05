<?php
/**
 * Plugin Name: Manifest Destiny
 * Plugin URI: https://www.littlebizzy.com/plugins/manifest-destiny
 * Description: Optimize PWA manifest config
 * Version: 1.0.0
 * Author: LittleBizzy
 * Author URI: https://www.littlebizzy.com
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * GitHub Plugin URI: littlebizzy/manifest-destiny
 * Primary Branch: master
 * Prefix: MANDES
 * Text Domain: manifest-destiny
 * Domain Path: /languages/
 */


function my_web_app_manifest( $manifest ) {

	$manifest['short_name'] = 'My App';
	$manifest['background_color'] = '#00000';
	$manifest['theme_color'] = '#000000';
	$manifest['display'] = 'standalone';
	$manifest['icons'] = array (
			array (
      'purpose' => 'maskable',
      'src' => 'https://example.com/icon.png',
      'sizes' => '512x512',
      'type' => 'image/png'
				),
		array (
			'purpose' => 'any',
      'src' => 'https://example.com/icon.png',
      'sizes' => '512x512',
      'type' => 'image/png'
			)
		);

	
	return $manifest;
}
add_filter( 'web_app_manifest', 'my_web_app_manifest' );

// https://1-go--around-de.translate.goog/blog/pwa-google-play-store/
