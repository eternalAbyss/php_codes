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
        
        $sql = "SELECT id,firstname,lastname,email FROM employee WHERE `id`=123";
        // $sql = "SELECT id,firstname,lastname,email FROM employee ORDER BY firstname DESC";
        $results = mysqli_query($conn, $sql);
        if( mysqli_num_rows($results) > 0 ){
            while( $row = mysqli_fetch_assoc($results) ){
                echo " id: ".$row['id']." Name: ".$row["firstname"]." ".$row["lastname"]." Email: ".$row["email"]."<br>";
            }
        } else{
            echo "0 results";
        }
    }
    mysqli_close($conn);

?>