<?php 
    require_once("dbConnect.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM salesinfo WHERE id = $id");

    $resultData = mysqli_fetch_assoc($result);

    $productName = $resultData['productName'];
    $productDescription = $resultData['productDescription'];
    $productCount = $resultData['productCount'];
    $sellerName = $resultData['sellerName'];
?>
<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <h2>Update Data</h2>
        <p>
            <a href="home.php">Home</a>
        </p>
        <form name="update" method="post" action="updateAction.php">
            <table border="0">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="productName" value="<?php echo $productName; ?>"></td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td><input type="text" name="productDescription" value="<?php echo $productDescription; ?>"></td>
                </tr>
                <tr>
                    <td>Product Count</td>
                    <td><input type="text" name="productCount" value="<?php echo $productCount; ?>"></td>
                </tr>
                <tr>
                    <td>Seller Name</td>
                    <td><input type="text" name="sellerName" value="<?php echo $sellerName; ?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>