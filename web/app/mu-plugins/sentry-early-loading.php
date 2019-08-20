<?php
/**
 * Plugin Name: WordPress Sentry
 * Plugin URI: https://github.com/stayallive/wp-sentry
 * Description: A (unofficial) WordPress plugin to report PHP and JavaScript errors to Sentry.
 * Version: must-use-proxy
 * Author: Alex Bouma
 * Author URI: https://alex.bouma.me
 * License: MIT
 */

$wp_sentry = __DIR__ . '/../plugins/wp-sentry-integration/wp-sentry.php';

if ( ! file_exists($wp_sentry)) {
    return;
}

require $wp_sentry;

define('WP_SENTRY_MU_LOADED', true);
