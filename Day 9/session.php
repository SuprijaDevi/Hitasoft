<?php 
    session_start();
?>
<html>
    <head>
        <title>PHP Session</title>
    </head>
    <body>
        <?php 
            $_SESSION["favcolor"] = "red";
            $_SESSION["favanimal"] = "elephant";
            echo "Session variables are set. <br>";

            //Get Session values
            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favourite animal is " . $_SESSION["favanimal"] . ".<br>";

            //Another way to show session variables
            print_r($_SESSION);
            echo "<br>";

            //To change session variable just overwrite
            $_SESSION["favcolor"] = "yellow";
            print_r($_SESSION);
            echo "<br>";

            //Remove all sessionn variables
            session_unset();

            //Destroy the session
            session_destroy();
            echo "Session destroyed";
        ?>
    </body>
</html>