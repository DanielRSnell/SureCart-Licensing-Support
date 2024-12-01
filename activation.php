<?php
/**
 * Licensing and Activation handler for GB Styles plugin
 *
 * @package GB_Styles
 */

// Direct access prevention
if (!defined('ABSPATH')) {
    exit;
}

// Include the SDK
if (!class_exists('SureCart\Licensing\Client')) {
    require_once __DIR__ . '/licensing/src/Client.php';
}

// Initialize client with plugin name and file path
$client = new \SureCart\Licensing\Client(
    'Gutenberg Styles',
    'pt_LZLETD5BgnD1zxWUBE2afYis',
    __FILE__
);

// Set textdomain
$client->set_textdomain('gb-styles');

// Add settings page
$client->settings()->add_page([
    'type' => 'submenu',
    'parent_slug' => 'options-general.php',
    'page_title' => 'Gutenberg Styles',
    'menu_title' => 'Gutenberg Styles',
    'capability' => 'manage_options',
    'menu_slug' => 'gb-styles-license',
    'activated_redirect' => admin_url('options-general.php?page=gb-styles-license'),
    'deactivated_redirect' => admin_url('options-general.php?page=gb-styles-license'),
]);
