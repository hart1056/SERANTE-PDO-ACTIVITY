```php
<?php
// Database Configuration
// This file connects the PHP application to the MySQL database.

// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "italy_grocery_table";

try {
    // Create a PDO connection
    $conn = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $username,
        $password
    );

    // Enable PDO error reporting
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Display success message
    echo "Connected successfully using PDO!";

} catch (PDOException $e) {
    // Display an error if the connection fails
    die("Connection failed: " . $e->getMessage());
}
?>
```