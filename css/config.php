<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');  // Change as needed
define('DB_PASS', '');      // Add your password
define('DB_NAME', 'doctor_appointments');

// Chatbot configuration
define('CHATBOT_ENABLED', true);
define('CHATBOT_POSITION', 'bottom-right'); // bottom-right, bottom-left, top-right, top-left
define('CHATBOT_AUTO_OPEN', false);
define('CHATBOT_PRIMARY_COLOR', '#667eea');
define('CHATBOT_SECONDARY_COLOR', '#764ba2');

// Ollama configuration
define('OLLAMA_ENABLED', true);
define('OLLAMA_URL', 'http://localhost:11434');
define('OLLAMA_MODEL', 'mistral:7b-instruct');
define('OLLAMA_TIMEOUT', 60);

// Session configuration
session_start();

// Create database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8mb4");

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// Timezone
date_default_timezone_set('UTC');

// Security headers
header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
?>