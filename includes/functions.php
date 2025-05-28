<?php
/**
 * Helper functions for Ciphera Dashboard
 */

/**
 * Format a timestamp into a human-readable relative time string
 *
 * @param string|int $timestamp The timestamp to format
 * @return string Formatted relative time string
 */
function formatRelativeTime($timestamp) {
    if (is_string($timestamp)) {
        $timestamp = strtotime($timestamp);
    }
    
    $current = time();
    $diff = $current - $timestamp;
    
    if ($diff < 60) {
        return $diff . ' seconds ago';
    }
    
    $minutes = floor($diff / 60);
    if ($minutes < 60) {
        return $minutes . ' minute' . ($minutes != 1 ? 's' : '') . ' ago';
    }
    
    $hours = floor($minutes / 60);
    if ($hours < 24) {
        return $hours . ' hour' . ($hours != 1 ? 's' : '') . ' ago';
    }
    
    $days = floor($hours / 24);
    if ($days < 7) {
        return $days . ' day' . ($days != 1 ? 's' : '') . ' ago';
    }
    
    if ($days < 30) {
        $weeks = floor($days / 7);
        return $weeks . ' week' . ($weeks != 1 ? 's' : '') . ' ago';
    }
    
    $months = floor($days / 30);
    if ($months < 12) {
        return $months . ' month' . ($months != 1 ? 's' : '') . ' ago';
    }
    
    $years = floor($days / 365);
    return $years . ' year' . ($years != 1 ? 's' : '') . ' ago';
}

/**
 * Sanitize user input
 *
 * @param string $input The input to sanitize
 * @return string Sanitized input
 */
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

/**
 * Check if a user is logged in
 *
 * @return bool True if logged in, false otherwise
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Get the current user's ID
 *
 * @return int|null User ID if logged in, null otherwise
 */
function getCurrentUserId() {
    return isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
}

/**
 * Get the current user's role
 *
 * @return string|null User role if logged in, null otherwise
 */
function getCurrentUserRole() {
    return isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
}

/**
 * Check if the current user is an admin
 *
 * @return bool True if admin, false otherwise
 */
function isAdmin() {
    return getCurrentUserRole() === ROLE_ADMIN;
}

/**
 * Generate a random string
 *
 * @param int $length Length of the random string
 * @return string Random string
 */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

/**
 * Format a byte size into a human-readable string
 *
 * @param int $bytes The size in bytes
 * @param int $precision The number of decimal places to include
 * @return string Formatted size string
 */
function formatFileSize($bytes, $precision = 2) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    
    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);
    
    $bytes /= pow(1024, $pow);
    
    return round($bytes, $precision) . ' ' . $units[$pow];
}

/**
 * Get the current page name
 *
 * @return string Current page name
 */
function getCurrentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

/**
 * Check if the current page matches a given page
 *
 * @param string $page The page to check against
 * @return bool True if current page matches, false otherwise
 */
function isCurrentPage($page) {
    return getCurrentPage() === $page;
}

/**
 * Format a phone number
 *
 * @param string $phoneNumber The phone number to format
 * @return string Formatted phone number
 */
function formatPhoneNumber($phoneNumber) {
    // Remove all non-numeric characters
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
    
    // Format the number
    if (strlen($phoneNumber) === 10) {
        return '(' . substr($phoneNumber, 0, 3) . ') ' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
    } elseif (strlen($phoneNumber) === 11) {
        return '+' . substr($phoneNumber, 0, 1) . ' (' . substr($phoneNumber, 1, 3) . ') ' . substr($phoneNumber, 4, 3) . '-' . substr($phoneNumber, 7);
    }
    
    return $phoneNumber;
}

/**
 * Truncate a string to a specified length
 *
 * @param string $string The string to truncate
 * @param int $length Maximum length
 * @param string $append String to append if truncated
 * @return string Truncated string
 */
function truncateString($string, $length = 50, $append = '...') {
    if (strlen($string) > $length) {
        $string = substr($string, 0, $length) . $append;
    }
    return $string;
}