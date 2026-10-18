
<?php
// Include the database connection
require_once 'dbconfig.php';

// SQL query to delete one grocery item
$sql = "DELETE FROM grocery_items WHERE item_id = :item_id";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Select the test record to delete
$item_id = 101;

// Here I Executed the DELETE query
$stmt->execute(['item_id' => $item_id]);

// Check if a record was deleted
if ($stmt->rowCount() > 0) {
    echo "Grocery item deleted successfully!";
} else {
    echo "No grocery item found with ID " . $item_id;
}
?>
