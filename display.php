
<?php
// I connect to my database using my configuration file.
require_once 'dbconfig.php';

// I get all the grocery items from my table.
$sql = "SELECT * FROM grocery_items";

// I prepare and execute my query.
$stmt = $conn->prepare($sql);
$stmt->execute();

// I store the results so I can display them in a table.
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Italian Grocery Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #e8e8e8;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <h2>Italian Grocery Items</h2>

    <table>
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Grocery Item</th>
                <th>Brand Name</th>
                <th>Category</th>
                <th>Unit Size</th>
                <th>Estimated Price (€)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['item_id']) ?></td>
                    <td><?= htmlspecialchars($row['grocery_item']) ?></td>
                    <td><?= htmlspecialchars($row['brand_name']) ?></td>
                    <td><?= htmlspecialchars($row['category']) ?></td>
                    <td><?= htmlspecialchars($row['unit_size']) ?></td>
                    <td><?= htmlspecialchars($row['estimated_price']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
