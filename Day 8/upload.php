<?php
    $target_dir = "image/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ". <br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image. <br>";
            $uploadOk = 0;
        }
    }

    if(file_exists($target_file)) {
        echo "File already exists. <br>";
        $uploadOk = 0;
    }

    if($_FILES["fileToUpload"]["size"] > 50000000) {
        echo "File to large <br>";
        $uploadOk = 0;
    }
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Only JPG, PNG, JPEG & GIF files are allowed. <br>";
        $uploadOk = 0;
    }
    
    if($uploadOk == 0) {
        echo "File was not uploaded, please recheck again. <br>";
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded. <br>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
 ?>