<?php
$a = 5;
$b = 2;
$name = "XYZ"; //string
$age = 24; //Integer
$weight = 40.05; //double
$isfemale = true; //bool
$salary = 45000;
$num = 450000.00;

echo $isfemale . "<br>";  //1 or Nothing
echo $salary . "<br>";

//variable checking function
echo gettype($age) . "<br>"; //integer
echo gettype($salary) . "<br>";
echo is_string($name) . "<br>"; //1 or Nothing
echo is_int($age) . "<br>";
echo is_double($weight) . "<br>";
echo is_bool($isfemale) . "<br>";
echo is_numeric($num) . "<br>";

//constant declare
define("PI", 3.1416);
echo PI . "<br>";

// variable details return
echo var_dump($name) . "<br>"; //string(3) "XYZ"
echo var_dump($age) . "<br>"; //int(24)
echo var_dump($isfemale) . "<br>"; //bool(true)

//Arithmatic operator
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a % $b . "<br>";

//assignment operator
echo ($a += $b) . "<br>"; //$a=$a+$b => 7

//increment operator
$a = 5;
$a++;
echo $a++ . "<br>"; //6
echo ++$a . "<br>"; //8

//function of numbers
echo pow(2, 3) . "<br>";
echo sqrt(16) . "<br>";
echo max(2, 3) . "<br>";
echo min(2, 3) . "<br>";
echo round(2.5) . "<br>"; //3
echo round(-2.5) . "<br>"; //-3
echo floor(2.6) . "<br>";
echo ceil(2.4) . "<br>";

//Number Formatting
$number = 450000000.56877686893485;
echo number_format($number, 5, '.', ',') . "<br>"; //set precision 5, decimal point is ., thousand separator is ,

//single and double Quotation 
$str5 = 'I am $name'; //single Quotation doesn't support declaring variables
$str6 = "I am $name";
echo $str5 . "<br>";
echo $str6 . "<br>";

//string function
$str = "Leading university bd  ";
echo $str . "trim" . "<br>";
echo trim($str, "Ldb") . "<br>"; //trim from both sides (start & end)
echo str_word_count($str) . "<br>";
echo strrev($str) . "<br>";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo ucfirst($str) . "<br>";
echo lcfirst($str) . "<br>";
echo ucwords($str) . "<br>";
echo str_replace("Bd", "bangladesh", $str) . "<br>";
echo str_ireplace("bd", "bangladesh", $str) . "<br>";
