<?php
$conn = mysqli_connect("127.0.0.1", "gdes261_2024_cspencer", "cspencer912", "welearnd_gdes261_2024_cspencer");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

$sql = "SELECT * FROM products.items";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles.css">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>"; 
            echo "<td>" . $row['price'] . "</td>"; 
            echo "</tr>";
        }
        ?>

    </table>

</body>
</html>
