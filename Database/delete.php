
<form method="POST">

ID: <br>
<input type="text" name="id"> <br>

<button type="submit">Delete</button>

</form>

<?php

if( $_SERVER["REQUEST_METHOD"] == "POST" ){

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "myDB";

    $id = $_POST["id"];


    $conn = mysqli_connect($server,$user,$pass,$db);
    if( !$conn ){
        die( "Error in db connection" );
    }
    else{
        echo "Connected successfully <br>";
        
        $sql = " DELETE FROM employee where `id`=$id ";
        if( mysqli_query($conn, $sql) ){
            echo "Record deleted for id $id";
        } else {
            echo "Error: " . mysqli_error($conn) . "<br>";
        }
    }

    mysqli_close($conn);
}

?>