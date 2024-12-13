<?php
// Define your database credentials
$host = 'localhost';
$dbname = 'umc';
$username = 'umc';
$password = '800179869';

try {
    // Create a new PDO instance
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Handle database connection error
    echo "Connection failed: " . $e->getMessage();
    exit; // Terminate script
}
?>
