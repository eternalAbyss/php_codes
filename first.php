<?php
// Data types and data declaration
$name = "Codingcerebrum!";
$condition = false;
$array = array('a','b');
$array2 = ['a','b','c',5];
$output = "";
//------------------------------------------------------------------------------------------------------------------------//
/** 
 * Array can have heterogenous data 
*/

// Printing
echo "<h1 style='font-family:Fira Code'> Hello World! => $name</br></h1>";
// echo "<br> <h1 style='font-family:Fira Code'>$condition</h1>";
// echo "<br> <h1 style='font-family:Fira Code'>$array[0]</h1>";
// echo "<br> <h1 style='font-family:Fira Code'>$array2[3]</h1>";
// echo "<br> <h1 style='font-family:Fira Code'></h1>";
// To check the data type we can use var_dump
// var_dump($array2);   


/******************************************************* Classes **********************************************************/

class details{
    public $firstName = "Utkarsh";
    public $lastName = "Singh";
    function printName(){
        return $this->firstName." ".$this->lastName;
    }
}

$obj = new details;
// echo $obj->printName();

/************************************************* Constant declaration ***************************************************/
// define('uniName','Lovely Professional University');
// echo "<br>";
// echo uniName;

/************************************************** String Manipulation **************************************************/
$string = "funny people are liked by funny people.";
$string1 = str_replace("funny","boring",$string,$count);
$string2 = str_word_count($string);
$string3 = strlen($string);
$string4 = strrev($string);

echo "<br> <h3 style='font-family:Fira Code'><br>********************************************************************************************************************************************************************</h3>";
echo "<br> <h3 style='font-family:Fira Code'><br>The Original string is : $string</h3>";
echo "<br> <h3 style='font-family:Fira Code'>The manipulated string is : $string1</h3>";
echo "<br> <h3 style='font-family:Fira Code'><br>Word Count is : $string2</h3>";
echo "<br> <h3 style='font-family:Fira Code'><br>Length of the String is : $string3</h3>";
echo "<br> <h3 style='font-family:Fira Code'><br>The reversed string is : $string4</h3>";
echo "<br> <h3 style='font-family:Fira Code'><br>********************************************************************************************************************************************************************</h3>";

/************************************************** Data type manipulation **************************************************/

$integer = 1;
$strings = "This is a string.";
$float = 1.1;
$char = 'a';
$type = "";

echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $integer and the type is = $type</h3>";
$type = var_dump($integer);

echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $strings and the type is = $type</h3>";
$type = var_dump($strings);

echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $float and the type is = $type</h3>";
$type = var_dump($float);

$a = 8;
$b = 7;
$c = 0;

$a *= $b;
echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $a and the operation is = Multiplication</h3>";

$a += $b;
echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $a and the operation is = Addtion</h3>";

$a /= $b;
echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $a and the operation is = Division</h3>";

$a %= $b;
echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $a and the operation is = Modulus</h3>";

$a -= $b;
echo "<br> <h3 style='font-family:Fira Code'><br>The value is: $a and the operation is = Substraction</h3>";

//Loop  

for ($x=1; $x<10; $x++)
{
    if ($x>$c)
    {
        echo "<br> <h3 style='font-family:monospace'>Greater value</h3>";
    }
    else
    {
        echo "<br> <h3 style='font-family:sans'>Lesser value</h3>";
    }
    $c += $b;
}


?>
