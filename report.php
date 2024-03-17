<?php
try {
    // Connect to the database (using PDO)
include "connection.php";

    // Retrieve data from tables
    $sql = "SELECT * FROM supplier";
    $suppliers = $mysqli->query($sql)->fetchAll(mysqli::FETCH_ASSOC);

    $sql = "SELECT * FROM product";
    $products = $mysqli->query($sql)->fetchAll(mysqli::FETCH_ASSOC);

    // ... Retrieve data from other tables (stock_in, stock_out) ...

    // Generate the report (example: HTML table)
    echo '<table>';
    echo '<tr><th>Product Name</th><th>Quantity</th><th>Price</th></tr>';
    foreach ($products as $product) {
        // Calculate stock quantities and prices
        // Example: Get stock_in and stock_out data for each product
        // ...

        echo '<tr>';
        echo '<td>' . $product['product_name'] . '</td>';
        echo '<td>' . $calculated_quantity . '</td>';
        echo '<td>' . $calculated_price . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} catch (PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
}
?>
