<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <h3>
        Name:
        </h3>
        <input type="text" >
        
        <h3>
        Email:
        </h3>
        <input type="email" name="" id="">
        
        <h3>
        Address: 
        </h3>
        <input type="text" name="" id="">

        <h3>
        Gender:
        </h3>
        <span>
        Male: 
        <input type="radio" name="gender" id="">
         Female: 
        <input type="radio" name="gender" id="">
        </span>

        <h3>
        Select one option: 
        </h3>
        <select name="option" id="">
            <option value="">--select--</option>
            <option value="1">Integer 1</option>
            <option value="2">Integer 2</option>
            <option value="3">Integer 3</option>
        </select>

        <h3>
        Agree or not?  
        </h3>
        <input type="checkbox" name="" id="">


        <br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>