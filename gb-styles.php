<?php
/**
 * Plugin Name: Gutenberg Styles
 * Plugin URI: https://GutenbergStyles.com
 * Description: CSS Variables manager for Gutenberg and Customizer
 * Version: 1.1.2
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * Author: Daniel Snell
 * Author URI: https://broke.dev
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: gb-styles
 */

if (!defined('ABSPATH')) {
    exit;
}

// Define constants
define('GB_STYLES_VERSION', '1.1.2');
define('GB_STYLES_DIR', WP_CONTENT_DIR . '/uploads/gb-styles');
define('GB_STYLES_URL', WP_CONTENT_URL . '/uploads/gb-styles');
define('GB_STYLES_FILE', __FILE__);
define('GB_STYLES_PATH', plugin_dir_path(GB_STYLES_FILE));
define('GB_STYLES_URL_PATH', plugin_dir_url(GB_STYLES_FILE));

// Utility functions
function gb_styles_get_file_version($file)
{
    return file_exists($file) ? filemtime($file) : GB_STYLES_VERSION;
}

// Init Activation
require_once GB_STYLES_PATH . '/activation.php';
