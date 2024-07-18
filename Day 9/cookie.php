<?php 
    $cookie_name = "admin";
    $cookie_value = "John";
    setcookie($cookie_name, $cookie_value, time()) + (86400 * 1);
?>
<html>
    <head>
        <title>PHP Cookie</title>
    </head>
    <body>
        <?php 
            if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie name " . $cookie_name . " is not set.";
            } else {
                echo "Cookie name: " . $cookie_name . " is set. <br>";
                echo "Value is: " . $_COOKIE[$cookie_value];
            }
        ?>
    </body>
</html>