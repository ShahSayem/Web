<?php

//array
$uni1 =['Lu','NSU','Du','Brac'];
$uni =array('Lu','NSU','Du','Brac',28,55.55);

//output
echo'<pre>';
var_dump($uni); //data type with value
/* 
array(6) {
  [0]=>
  string(2) "Lu"
  [1]=>
  string(3) "NSU"
  [2]=>
  string(2) "Du"
  [3]=>
  string(4) "Brac"
  [4]=>
  int(28)
  [5]=>
  float(55.55)
}
*/

// count
echo count($uni)."<br>";
echo count($uni1)."<br>";

//isset
echo isset($uni[1]); //defined(not null) => 1 or  null => Nothing
echo isset($uni[6]);

//push and pop 
echo var_dump(array_push($uni, "East West")); //push at begining
// echo'<pre>';
// var_dump($uni);
// echo'<pre>';
array_pop($uni); //removes the last item
echo'<pre>';
var_dump($uni);
echo'<pre>';

//Adding first and Remove first
array_unshift($uni,"East West"); //insert at begining
echo'<pre>';
var_dump($uni);
echo'<pre>';

array_shift($uni); //Remove the first element from an array
echo'<pre>';
var_dump($uni);
echo'<pre>';

//split 
$str ="Apple,banana,orange,25,5.05";
$newArr=explode(",",$str); //Split a string by a string
echo'<pre>';
var_dump($newArr);
echo'<pre>';

$str1=implode(",",$newArr); //Join array elements in a string
echo'<pre>';
var_dump($str1);
echo'<pre>';

//search
$search= array_search("Brac",$uni); //return index or key if found or false (blank)
echo'<pre>';
var_dump($search);
echo'<pre>';

//check returns true or false
$checkAnElement= in_array("Du",$uni); //true if needle is found in the array, false otherwise
echo'<pre>';
var_dump($checkAnElement);
echo'<pre>';

//merge
$merge=array_merge($uni,$uni1); //Merge one or more arrays
echo'<pre>';
var_dump($merge);
echo'<pre>';

//sort
sort($uni); 
echo'<pre>';
var_dump($uni); //Nums are in first then strings
echo'<pre>';

//Associative array

$favcolor=array(1=>"one",
                "cr"=>"red", 
               "section"=>"black",
               "digit"=>"12");
echo $favcolor["cr"]."<br>";

foreach($favcolor as $key=>$val){
    echo "Fav color of $key is $val <br>";
}

//for

for($i=0; $i<count($uni); $i++){
    echo $uni[$i]."  ";
}

//foreach

echo "<br>";
foreach($uni as $value){
    echo $value."  ";
}

//type casting
$a="11.23";
$num=(float)$a;
echo gettype($num);


