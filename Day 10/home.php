<?php
    require_once("dbConnect.php");
    $result = mysqli_query($mysqli, "SELECT * FROM salesinfo ORDER BY id ASC");
?>

<html>
    <head>
        <title>Sales Homepage</title>
    </head>
    <body>
        <h2>Sale Details</h2>
        <p>
            <a href="create.php">Add new data</a>
        </p>
        <table width='80%'>
            <tr>
                <td><strong>Product Name</strong></td>
                <td><strong>Description</strong></td>
                <td><strong>Count</strong></td>
                <td><strong>Seller Name</strong></td>
                <td><strong>Action</strong></td>
            </tr>
            <?php
                while($res = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $res['productName'] . "</td>";
                    echo "<td>" . $res['productDescription'] . "</td>";
                    echo "<td>" . $res['productCount'] . "</td>";
                    echo "<td>" . $res['sellerName'] . "</td>";
                    echo "<td><a href=\"update.php?id=" . $res['id'] . "\">Update</a> | 
                    <a href=\"delete.php?id=" . $res['id'] . "\" onClick=\"return confirm('Are you sure?')\">Delete</a></td>";
                }
            ?>
        </table>
    </body>
</html>