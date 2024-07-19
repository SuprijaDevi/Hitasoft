<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hitasoft";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully <br>";

    //Create table
    $sql = "CREATE TABLE product (
    prodName VARCHAR(30) NOT NULL,
    prodDescription VARCHAR(30),
    prodCount INT,
    sellerName VARCHAR(30)
    )";

    if($conn->query($sql) == TRUE) {
        echo "Table Product created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    //Insert values
    $insertsql = "INSERT INTO product (prodName, prodDescription, prodCount, sellerName)
    VALUES ('Dell', 'pad', 12, 'Ron')";

    if($conn->query($insertsql) == TRUE) {
        echo "New record created <br>";
    } else {
        echo "Error: " . $insertsql . "<br>" . $conn->error;
    }

    //Read values
    $selectsql = "SELECT prodName, prodDescription, prodCount, sellerName FROM product";
    $result = $conn->query($selectsql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Product name: " . $row["prodName"] . ", " .
            "Description: " . $row["prodDescription"] . ", " .
            "Count: " . $row["prodCount"] . ", " .
            "Seller name: " . $row["sellerName"] . "<br>";
        }
    } else {
        echo "0 results.";
    }

    //Ubdate values
    $updatesql = "UPDATE product SET prodCount = 13 WHERE prodName = 'Dell'";
    if($conn->query($updatesql) != TRUE) {
        echo "Error updating record: " . $conn->error;
    }

    //Delete values
    $deletesql = "DELETE FROM product WHERE prodName = 'Dell'";
    if($conn->query($deletesql) != TRUE) {
        echo "Error deleting the value: " . $conn->error;
    }

    $conn->close();
?>