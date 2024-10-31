<?php
/*

Plugin Name:  Remove 'Try Gutenberg' callout
Plugin URI:   https://wordpress.org/plugins/remove-try-gutenberg-callout/
Description:  Starting WordPress 4.9.8 a new 'Try Gutenberg' callout will be displayed, use this to disable such message. http://bit.ly/2nbVRv7
Version:      1.0.0
Author:       ❰ EVERSTONE ❱
Author URI:   https://everstonedev.com
Contributors: neojp


"Remove 'Try Gutenberg' callout" is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
"Remove 'Try Gutenberg' callout" is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with "Remove 'Try Gutenberg' callout". If not, see http://www.gnu.org/licenses/gpl-2.0.html

*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
