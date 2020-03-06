
<form method="POST">

    ID: <br>
    <input type="text" name="id"> <br>
    First Name: <br>
    <input type="text" name="fname"> <br>
    Last Name: <br>
    <input type="text" name="lname"> <br>
    Email: <br>
    <input type="email" name="email"> <br>
    
    <button type="submit">Update</button>

</form>

<?php

   if( $_SERVER["REQUEST_METHOD"] == "POST" ){

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
        
        $sql = " UPDATE employee SET `firstname`='$fname',`lastname`='$lname',`email`='$email' where `id`=$id ";
        if( mysqli_query($conn, $sql) ){
            echo "Record updated for id $id into employee";
        } else {
            echo "Error: " . mysqli_error($conn) . "<br>";
        }
    }

    mysqli_close($conn);
   }

?>