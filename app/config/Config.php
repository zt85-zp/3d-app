<?php

/**
 * Database Configuration
 */
define("DB_HOST", "localhost");
define("DB_USER", "username");
define("DB_PASS", "password");
define("DB_NAME", "database");

/**
 * Base URL Configuration
 */
$isHttps = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
$protocol = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
$url = $protocol . '://' . $host . $uri;
$assignmentIndex = strpos($url, 'assignment');
if ($assignmentIndex !== false) {
    $extractedUrl = substr($url, 0, $assignmentIndex + strlen('assignment'));
    define("BASEURL", $extractedUrl);
    define("LINKURL", $extractedUrl."/index.php");
}

?>
