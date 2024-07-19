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

    $insertsql = "INSERT INTO product (prodName, prodDescription, prodCount, sellerName)
    VALUES ('Dell', 'pad', 12, 'Ron')";

    if($conn->query($insertsql) == TRUE) {
        echo "New record created";
    } else {
        echo "Error: " . $insertsql . "<br>" . $conn->error;
    }

    $conn->close();
?>