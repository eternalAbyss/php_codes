<?php

    if( isset($_POST['remember']) ){

        if( isset($_POST['name']) ){
            $uname = $_POST['name'];
            setcookie("username",$uname,time()+3600);
            echo "Username cookies are set";
        }

        echo "<br>";
        
        if( isset($_POST['password']) ){
            $pass = $_POST['password'];
            setcookie("password",$pass,time()+3600);
            echo "Password cookies are set";
        }

    }
    else{
        setcookie("username","");
        setcookie("password","");
        echo "Cookies not set";
    }

?>
<br>
<a href="login.php"> Go back to login page </a>