
<?php
// I connect to my database using the configuration file.
require_once 'dbconfig.php';

// I chose to update the estimated price of one grocery item.
$sql = "UPDATE grocery_items
        SET estimated_price = :estimated_price
        WHERE item_id = :item_id";

// I prepare the query before executing it.
$stmt = $conn->prepare($sql);

// I set the item ID and the new estimated price.
$item_id = 1;
$new_price = 1.95;

// I execute the update using the values I selected.
$stmt->execute([
    'estimated_price' => $new_price,
    'item_id' => $item_id
]);

// I display a message to confirm the result.
if ($stmt->rowCount() > 0) {
    echo "Grocery item updated successfully!";
} else {
    echo "No changes were made to the selected grocery item.";
}
?>
