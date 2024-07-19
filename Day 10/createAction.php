<html>
    <head>
        <title>Create Data</title>
    </head>
    <body>
        <?php
            require_once("dbConnect.php");
            if(isset($_POST['submit'])) {
                $productName = mysqli_real_escape_string($mysqli, $_POST['productName']);
                $productDescription = mysqli_real_escape_string($mysqli, $_POST['productDescription']);
                $productCount = mysqli_real_escape_string($mysqli, $_POST['productCount']);
                $sellerName = mysqli_real_escape_string($mysqli, $_POST['sellerName']);

                if(empty($productName) || empty($productDescription) || empty($productCount) || empty($sellerName)) {
                    if(empty($productName)) {
                        echo "<font color='red'>Product Name is empty.</font><br/>";
                    }
                    if(empty($productDescription)) {
                        echo "<font color='red'>Description is empty.</font><br/>";
                    }
                    if(empty($productCount)) {
                        echo "<font color='red'>Count is empty.</font><br/>";
                    }
                    if(empty($sellerName)) {
                        echo "<font color='red'>Seller Name is empty.</font><br/>";
                    }

                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                } else {
                    $result = mysqli_query($mysqli, "INSERT INTO salesinfo (`productName`, `productDescription`, `productCount`, `sellerName`)
                    VALUES ('$productName', '$productDescription', '$productCount', '$sellerName')");

                    echo "<p><font color='green'>Data added successfully</p>";
                    echo "<a href='home.php'>View Result</a>";
                }
            }
        ?>
    </body>
</html>