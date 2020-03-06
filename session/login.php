<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="check.php" method="POST">
        Name: <br>
        <input type="text" 
                name="name" 
                value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username']; } ?>">
        <br>
        Password: <br>
        <input type="password" 
                name="password"
                value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; } ?>" >
        <br>
        <input type="checkbox" name="remember"> Remember me
        <br>
        <button type="submit">Submit</button>
    </form>

    <br>

    <?php
        if(isset($_COOKIE['username']) || isset($_COOKIE['password']) )
        {
            ?>
            <form action="destroy.php" method="POST">
                <button type="submit"
                        style="background:tomato;color:white;border:none;padding:10px 5px;cursor:pointer;"
                        >Logout</button>
            </form>
            <?php
        }        

    ?>

</body>
</html>