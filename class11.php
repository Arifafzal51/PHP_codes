<?php
$array1 = [1, 2, 3, 4, 5, 6, 7, 8];
$array2 = [ 5, 6, 9, 81, 2, 4, 4];

// array_flip();
// array_keys();
// array_key_exists();
// array_multisort();
// array_pad();
// array_push();
// array_pop();
// unset($array1["2"]);
// array_product();
// array_search();
// array_shift();
// array_slice();
// range();

print_r(array_slice($array1, 3));
echo "<br>";
print_r(array_slice($array1, 3,4));
echo "<br>";
print_r(array_splice($array2, 1,2)); // return the elents of perticular index
echo "<br>";
$arr_rep = [80, 90,];
print_r(array_splice($array2,1,2,$arr_rep));  /// perform the changes in main memory
echo "<br>";

// SHORTING FUNCTIONS " PERFORM the changes in main memory"

print_r($array2);  // work in indexed array   format // sort in assending order
echo "<br>";
print_r($array1); // sort in descending order
echo "<br>";
//array_multisort([10, 34, 67, 34, 4, 23, 212],SORT_DESC[234,45,45,]);

    //DECISION STATEMENT

?>