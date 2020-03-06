<?php

/**
 * Function for finding out that the given year is a leap year or not.
 */

function leap($year)
{
    if (($year%400 == 0) || ($year%4 == 0 && $year%100!=0))
    {
        return "<h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> $year is a leap year!</h1>";
    }else{
        return "<h1 style='padding:50px;font-family:Fira Code; background:coral;'> $year is not a leap year!</h1>";
    }
}
echo leap(2090);

/*
 * Increment and decrement operators.
 */

$temp = 10;
echo "<br><h1 style='padding:50px ;font-family:Fira Code; background:lightgreen;'> The original value of X is : $temp</h1>";
$temp++;
echo "<br><h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> post increment: $temp</h1>";
$temp--;
echo "<br><h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> post decrement: $temp</h1>";
--$temp;
echo "<br><h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> pre decrement: $temp</h1>";
++$temp;

/*
 * Concatenation implementation
 */

$temp1 = "Hello ";
$temp2 ="LPU!";
$temp3 = $temp1.$temp2;
echo "<br><h1 style='padding:50px;font-family:Fira Code; background:lightgreen;'> $temp3</h1>";

//array comparisons

echo "<br>";
$arr1 = array(1,2);
$arr2 = array('1','2');

var_dump($arr1 <> $arr2);
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

echo "<br>";

for($i=1;$i<21;$i++)
{
    echo "<br>";
    if($i % 3 == 0 && $i % 5 == 0)
    {
        echo "<br><h3 style='padding:50px;font-family:Fira Code; background:lightgreen;'> HI! MY </h3>";  
    } else if($i % 3 == 0) {
        echo "<br><h3 style='padding:50px;font-family:Fira Code; background:lightgreen;'> HI! </h3>";
    } else if($i % 5 == 0){
        echo "<br><h3 style='padding:50px;font-family:Fira Code; background:lightgreen;'> MY </h3>";
    }else { 
        echo "<br><h3 style='padding:50px;font-family:Fira Code; background:lightgreen;'> $i </h3>";
    }
    
}
 echo "<br>";
 $iter =1;
 do{
    if($iter == 10)
    {
        echo " $iter ";  
    }
    else{
        echo " $iter - ";
    }
    
    $iter++;
 }while($iter<11);
?>