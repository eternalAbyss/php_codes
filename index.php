<?php

// setcookie("user1","user1",time()+1*60);
setcookie("user1", "user1", time() - 1*60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE["user1"])){
            echo "Sorry, Cookie is not found!";
        } else {
            echo "<br/>Cookie value: ".$_COOKIE["user1"];
        }
    ?>
</body>
</html>
