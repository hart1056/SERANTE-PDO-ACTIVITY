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

    // Set PDO to throw exceptions when errors occur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Display a success message to confirm the connection
    echo "Connected successfully using PDO!";

} catch (PDOException $e) {
    // Display an error message if the connection fails
    die("Connection failed: " . $e->getMessage());
}
?>
```