<?php
//Compare four numbers.
$value1 = 10;
$value2 = 30;
$value3 = 500;
$value4 = 20;

$ans1 = ($value1 > $value2) ? ($value1) : ($value2);
$ans2 = ($value3 > $value4) ? ($value3) : ($value4);
$ans3 = ($ans1 > $ans2) ? ($ans1) : ($ans2);
echo ($ans3);
echo ("<br>");
echo ("<br>");

//Arithematic Operator in php.
printf ($value1 + $value2);
echo ("<br>");
printf ($value1 - $value2);
echo ("<br>");
printf ($value1 / $value2);
echo ("<br>");
printf ($value1 * $value2);
echo ("<br>");
printf ($value1 % $value2);
echo ("<br>");
echo ("<br>");

//Associative array.
$prateek = ["eng"=>20, "maths"=>10, "sst"=>30, "php"=>40, "comp"=>50];
print_r($prateek);

$arr = [10, 2, 3, 5];
$arr2 = [10, 45, 9, 3];
print_r($arr);
echo ("<br>");
print_r($arr2);
echo ("<br>");
var_dump($arr != $arr2);
echo ("<br>");
var_dump($arr + $arr2);


?>