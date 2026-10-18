
<?php
// Include the database connection
require_once 'dbconfig.php';

// SQL query to insert a new grocery item
$sql = "INSERT INTO grocery_items
        (item_id, grocery_item, brand_name, category, unit_size, estimated_price)
        VALUES
        (:item_id, :grocery_item, :brand_name, :category, :unit_size, :estimated_price)";

// Prepare the SQL statement
$stmt = $conn->prepare($sql);

// Data for the new grocery item
$data = [
    'item_id' => 101,
    'grocery_item' => 'Olive Oil',
    'brand_name' => 'Bertolli',
    'category' => 'Oils & Condiments',
    'unit_size' => '500ml',
    'estimated_price' => 6.50
];

// Execute the INSERT statement
$stmt->execute($data);

// Display a success message
echo "New grocery item inserted successfully!";
?>
