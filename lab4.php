<?php
$var = 78;
// $str_data = "hello class";
// $stu_data = "hello bhai";

// var_dump($var);
// var_dump($str_data);
// var_dump($stu_data);

// print "hello class";

// here document syntex
$str_dataset = <<< arif
hello' class' "welcome" $var
arif;

// var_dump($str_dataset);
echo "<br>";
echo $str_dataset;
// echo "<br>";
// print($str_dataset);

// now document syntex
$str_dataset2 = <<< sam
hello' class' "welcome" $var
sam;
echo "<br>$str_dataset";



echo get_current_user()
?>