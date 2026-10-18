```php
<?php
// Include the database configuration file :)
require_once 'dbconfig.php';

// Prepare an SQL query to select one grocery item
$sql = "SELECT * FROM grocery_items WHERE item_id = :item_id";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Set the item ID to retrieve
$item_id = 1;

// Execute the query with the specified item ID
$stmt->execute(['item_id' => $item_id]);

// Fetch one record as an associative array
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Display the result using print_r() inside <pre> tags
echo "<pre>";
print_r($result);
echo "</pre>";
?>
```