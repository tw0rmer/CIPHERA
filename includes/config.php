<?php
/**
 * Configuration file for Ciphera Dashboard
 * Contains global settings and constants
 */

// Error reporting (disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Session configuration
session_start();

// Database configuration (placeholder - not used in this implementation)
define('DB_HOST', 'localhost');
define('DB_USER', 'ciphera_user');
define('DB_PASS', 'secure_password');
define('DB_NAME', 'ciphera_db');

// Application settings
define('APP_NAME', 'Ciphera');
define('APP_VERSION', '21.5');
define('APP_URL', 'http://localhost');

// Time zone
date_default_timezone_set('UTC');

// User roles
define('ROLE_ADMIN', 'admin');
define('ROLE_USER', 'user');

// Path definitions
define('ROOT_PATH', dirname(__DIR__));
define('COMPONENTS_PATH', ROOT_PATH . '/components');
define('CSS_PATH', ROOT_PATH . '/css');
define('JS_PATH', ROOT_PATH . '/js');
define('INCLUDES_PATH', ROOT_PATH . '/includes');
?>