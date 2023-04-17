<?php
$arif = ["English"=> 50,"Hindi"=> 80,"php"=> 80,"Math"=> 80];
// echo "</br>";
// var_dump($arif);
// echo "</br>";
// echo $arif["English"];
// echo "</br>";
// var_dump($arif);

$prateek = ["English" => 50, "Hindi" => 80, "php" => 80, "Math" => 80];
$result=$arif+$prateek;
echo "</br>";
var_dump($result);
$result1=$arif=$prateek;
echo "</br>";
var_dump($result1);
$result2=$arif==$prateek;
echo "</br>";
var_dump($result2);
$result3=$arif===$prateek;
echo "</br>";
var_dump($result3);
$result4=$arif!=$prateek;
var_dump($result4);
echo "</br>";
var_dump($arif =   $prateek);
echo "</br>";
var_dump($arif ==  $prateek);
echo "</br>";
var_dump($arif === $prateek);
echo "</br>";
var_dump($arif != $prateek);
?>