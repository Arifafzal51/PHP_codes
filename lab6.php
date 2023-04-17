<?php

// strstr("hhpp",)
// strtr("hii duniya",$arr);

 $arr =  [10,20,30,40,50,60];

for ($i=0; $i <sizeof($arr) ; $i++) { 
    echo "<br>";
    echo $arr[$i];
}
echo "<br>";

//for each loop in assosiativea array
//foreach($arr as)
$arr2 = ["a"=>1, "b"=>3, "c"=>4];

foreach($arr2 as $value=>$new ) {
    //echo "<font color='blue'>" . $new . "</font>";
  echo "number of gate <i style = 'color:blue; '>$value</b></i> : <i style = 'color:red; '>$new</i><br>";
  //echo $new
  echo "<br>";
}



//Array functions
array();
$arr3 =  [40,50,60];
// array_chunk($arr3 ,3);
print_r(array_chunk($arr3, 2));

echo "<br>";
$arr4 =  ["a"=>1, "b"=>3, "c"=>4];
print_r(array_change_key_case($arr4, 4));


echo "<br>";
//for multididimentional arrays
print_r(array_column($arr4, 4));
echo "<br>";
$arr5 =  ["arif","sam","aksh"];
$arr6 =  [40,24,50,60];
print_r(array_combine($arr5,$arr6));


echo "<br>";
$arr7 =  [40,24,50,60,50,60];
print_r(array_count_values($arr7));



echo "<br>";
echo count($arr7);
echo "<br>";
$arr7 =  [40,47,34,60];
$arr8 =  [40,60];
print_r(array_diff($arr7,$arr8));
?>