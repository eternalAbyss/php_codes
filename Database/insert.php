<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "myDB";

    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $conn = mysqli_connect($server,$user,$pass,$db);
    if( !$conn ){
        die( "Error in db connection" );
    }
    else{
        echo "Connected successfully <br>";
        
        $sql = "INSERT INTO employee (id,firstname,lastname,email) VALUES ($id,'$fname','$lname','$email')";
        if( mysqli_query($conn, $sql) ){
            echo "New record inserted into employee";
        } else {
            echo "Error: " . mysqli_error($conn) . "<br>";
        }
    }


    mysqli_close($conn);

?>