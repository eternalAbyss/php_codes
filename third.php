<?php
    $arr = ["Sunday", 1 , "Monday", 2];
    // $output = print_r($arr);
    // $output = var_dump($arr);
    // Printing statements
    // for ($i =0 ; $i < count($arr); $i++)
    // {
    //     // sleep(1);
    //     echo "<br><h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> $arr[$i] </h1>";
    // }

    // foreach($arr as $val)
    // {
    //     echo "<br><h1 style='padding:50px;font-family:Fira Code; background:coral;'> $val </h1>";
    // }
    
    // foreach($arr as $key => $val)
    // {
    //     echo "<br><h1 style='padding:50px;font-family:Fira Code; background:cornflowerblue;'> $key --> $val </h1>";
    // }




    /* 
     * key => value pairs 
    */

    // $ascarr = array('r1' => 11701796, 'r2' => 11701796 , 'r3' => 1172283);
    // $key = array_keys($ascarr);

    // for($i=0; $i < count($ascarr) ; $i++)
    // {
    //     // echo "<br><h1 style='padding:50px;font-family:Fira Code; background:coral;'> Key is : $key[$i] Value is: $ascarr[$key[$i]]</h1>";
    //     echo $key[$i]."The value is : ".$ascarr[$key[$i]];


    // }

    $dept = array(array("Sahil" ,11710176), array("Invalid",12212756),array("Theory",17152712));

    for ($i=0; $i< count($dept); $i++)
    {
        for ($j=0; $j<count($dept[0]); $j++)
        {
            echo "The Value of the pair is : ".$dept[$i][$j];
            echo "<br>";
        }
    }

    $str = "a b c d e";
    $arr1 = explode(" ", $str);
    foreach($arr1 as $value )
    {
        echo "  ";
        echo $value;
    }

    echo "<br>";
    $strm = implode("*",$arr1);
    echo $strm;

    $arr2 = array_flip($arr1);
    echo "<br>";
    foreach($arr2 as $value )
    {
        echo "  ";
        echo $value;
    } 
    echo "<br>";
    $arr3 = array_slice($arr1, 2,3);
    foreach($arr3 as $value )
    {
        echo "  ";
        echo $value;
    } 
    echo "<br>";

?>