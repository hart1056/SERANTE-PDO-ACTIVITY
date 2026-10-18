```php
<?php
// Include the database connection
require_once 'dbconfig.php';

// SQL query to retrieve all grocery items
$sql = "SELECT * FROM grocery_items";

// Prepare and execute the SQL query
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch all records as an associative array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display all records using print_r() and <pre>
echo "<pre>";
print_r($results);
echo "</pre>";
?>
```