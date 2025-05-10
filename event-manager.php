<?php
/**
 * Plugin Name: Event Manager
 * Description: A full-featured WordPress Event Management System.
 */

define('EM_DIR', plugin_dir_path(__FILE__));
define('EM_URL', plugin_dir_url(__FILE__));

// Include Components
include_once EM_DIR . 'post-types.php';
include_once EM_DIR . 'taxonomies.php';
include_once EM_DIR . 'ajax-handler.php';
include_once EM_DIR . 'shortcodes.php';

// Enqueue Assets
function em_enqueue_scripts() {
    wp_enqueue_style('em-style', EM_URL . 'assets/css/event-manager.css');
    wp_enqueue_script('em-ajax', EM_URL . 'assets/js/ajax-filter.js', ['jquery'], null, true);
    wp_localize_script('em-ajax', 'em_ajax_obj', [
        'ajax_url' => admin_url('admin-ajax.php'),
    ]);
}
add_action('wp_enqueue_scripts', 'em_enqueue_scripts');
