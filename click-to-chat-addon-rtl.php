<?php
/*
Plugin Name: Click to Chat - Addon - RTL
Plugin URI:  https://github.com/holithemes/click-to-chat-addon-rtl
Description: This addon reverses the positions of elements for RTL (Right-to-Left) pages, ensuring that right is left and left is right.
Version:     1.0
Author:      HoliThemes
Author URI:  https://holithemes.com/plugins/click-to-chat/
License:     GPL-2.0+
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: click-to-chat-for-whatsapp
Domain Path: /languages
*/

// Prevent direct access to the file
if ( ! defined( 'WPINC' ) ) {
    die('Direct access not allowed');
}

// Include the main class for the addon
include_once 'inc/class-ht-ctc-addon-rtl.php';