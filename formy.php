<?php

/**
 * Plugin Name:       formly
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       formy is a custom plugin specially created for this project
 * Version:           1.0.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            walid moultamiss @atlastrip
 * Author URI:        https://www.linkedin.com/in/walid-moultamiss-56142b1aa/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

wp_register_style('prefix_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
wp_enqueue_style('prefix_bootstrap');

wp_register_style('prefix_fontAwsome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css');
wp_enqueue_style('prefix_fontAwsome');

add_action('admin_menu', 'admin_menu');

function admin_menu()
{
    $messages = getMails();
    add_menu_page('Formly', 'Formly', 'manage_options', 'my-menu', 'settings_page', 'dashicons-align-center', 1);
    add_submenu_page('my-menu', 'all form', 'Create New Form', 'manage_options', 'my-menu');
    // add_submenu_page('my-menu', 'all form', 'inbox', 'manage_options', 'mana','inbox');
    add_submenu_page('my-menu', 'all form', sprintf('Contact Forms <span class="awaiting-mod">%d</span>', $messages), 'manage_options', 'mana', 'inbox');
}

if (isset($_POST['submit'])) {
    header("location: " . $_SERVER['REQUEST_URI']);
}

function getMails()
{
    global $wpdb;
    $myforms = $wpdb->get_results("SELECT * FROM wp_formy_values");
    return count($myforms);
}

function inbox()
{
    return include 'includes/data.php';
}

function settings_page()
{

    return include 'includes/settings.php';
}

add_shortcode('FORMLY', 'wporg_shortcode');

function wporg_shortcode($atts = [], $content = null)
{
    return include_once 'app.php';
}

function createtable()
{
    global $wpdb;
    $sql = "CREATE TABLE wp_formy_fields (
      id INT,
      options VARCHAR(255),
      buttonSubmit VARCHAR(255)
      )";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    maybe_create_table('wp_formy_fields', $sql);
}

function createtableValues()
{
    global $wpdb;
    $sql = "CREATE TABLE wp_formy_values (
      id INT PRIMARY KEY AUTO_INCREMENT,
      nom VARCHAR(255) DEFAULT NULL,
      prenom VARCHAR(255) DEFAULT NULL,
      coffret VARCHAR(255) DEFAULT NULL,
      age VARCHAR(255) DEFAULT NULL,
      email VARCHAR(255) DEFAULT NULL,
      phone VARCHAR(255) DEFAULT NULL,
      creation_time     DATETIME DEFAULT CURRENT_TIMESTAMP,
      modification_time DATETIME ON UPDATE CURRENT_TIMESTAMP
      )";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    maybe_create_table('wp_formy_values', $sql);
}

function insert()
{
    global $wpdb;

    $wpdb->insert(
        'wp_formy_fields',
        [
            'id' => 1,
            'options' => 'on',
            'buttonSubmit' => 'SUBMIT',
        ]
    );
}

register_activation_hook(__FILE__, 'createtable');
register_activation_hook(__FILE__, 'insert');
register_activation_hook(__FILE__, 'createtableValues');
