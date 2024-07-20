<?php
    require_once("dbConnect.php");

    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "DELETE FROM salesinfo WHERE id = $id");
    header("Location:home.php");
?>