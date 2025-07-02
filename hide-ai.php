<?php
/*

	Hide AI - Hides AI buttons and links in the WordPress admin area
	Copyright (C) 2025 Andrew Hoyer

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <https://www.gnu.org/licenses/>.

	* Plugin Name:       Hide AI
	* Plugin URI:        https://andrewhoyer.com/hide-ai/
	* Description:       Hides AI buttons and links in the WordPress admin area
	* Version:           0.1
	* Author:            Andrew Hoyer
	* Author URI:        https://andrewhoyer.com
	* License:           GPL-3.0
	* License URI:       https://www.gnu.org/licenses/gpl-3.0.html#license-text
	* Text Domain:       hide-ai
	* Requires at least: 5.2
	* Requires PHP:      7.0

*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Add a specific CSS file for the admin area only
function hide_ai_styles_enqueue() {
    
    wp_enqueue_style(
        'hide-ai-styles',
        plugin_dir_url(__FILE__) . 'css/hide-ai-styles.css',
        array(),
        '0.1',
        'all'
    );
}
add_action('admin_enqueue_scripts', 'hide_ai_styles_enqueue');

?>
