<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo(htmlentities($_SERVER['PHP_SELF'])); ?>" method="GET">
        <label>
            Search : <input type="text" name="search" />
        </label>
        <input type="submit" value="Go!">
    </form>
</body>
</html>