<?php 
    require_once("dbConnect.php");

    if(isset($_POST['update'])) {
        $id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
        } else {
            $result = mysqli_query($mysqli, "UPDATE salesinfo SET productName = '$productName', productDescription = '$productDescription', productCount = '$productCount', sellerName = '$sellerName' WHERE id = '$id'");

            if($result) {
                echo "<p><font color='green'>Updated Successfully</font></p>";
                echo "<a href='home.php'>View Result</a>";
            } else {
                echo "<font color='red'>Update Failed: " . mysqli_error($mysqli) . "</font><br/>";
            }
        }
    }
?>
