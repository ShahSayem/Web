<?php

// Task-1

$courses = array("DS", "Web", "ML");
$courses[] = "OS";

array_push($courses, "Algo", "Java");

array_pop($courses);

unset($courses[1]);


$marks = array(82, 75, 80);
$marks[] = 75;


foreach($courses as $course){
    echo $course." ";
}
echo "<br>";


sort($marks);
foreach($marks as $mark){
    echo $mark." ";
}
echo "<br>";

print_r(array_merge($courses, $marks));
echo "<br>";

echo array_search("DS",$courses);
echo "<br>";

$tempStr = implode(", ",$courses);
echo $tempStr;
echo "<br>";

$tempArr = explode(" ",$tempStr);
foreach($tempArr as $curr){
    echo $curr." ";
}
echo "<br>";


// Task-2

$str = "heyLOL";

echo trim($str,"heL");
echo str_word_count($str);
echo strrev($str);
echo strtoupper($str);
echo strtolower($str);
echo str_replace("world","Peter","Hello world!");

