<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "myDB";

    $conn = mysqli_connect($server,$user,$pass,$db);
    if( !$conn ){
        die( "Error in db connection" );
    }
    else{
        echo "Connected successfully <br>";
        $sql = "CREATE DATABASE myDB";
        if( mysqli_query($conn, $sql) ){
            echo "Database 'myDB' created successfully <br>";
        } else {
            echo "Error : " . mysqli_error($conn) . "<br>";
        }
    }

    $sql = "CREATE TABLE employee(
        id INT(6) PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )";

    if( mysqli_query($conn, $sql) ){
        echo "Table 'employee' created successfully";
    } else {
        echo "Error: " . mysqli_error($conn) . "<br>";
    }

    mysqli_close($conn);

?>