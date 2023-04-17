<?php
$var1 = 'Arif';
$var3 = 'sam';
$var4 = NULL;
$var5 = 'This is the fifth string value.';
$var6 = '';

//Check the value of the variables
$result1 = $var1 ?? $var2;
echo "<h2 style='color:blue'>$result1</h2>";

//Check the value of the variables
$result2 = $var2 ?? $var3;
echo "<h2 style='color:red'>$result2</h2>";

//Check the value of the variables
$result3 = $var4 ?? $var5;
echo "<h2 style='color:green'>$result3</h2>";

//Check the value of the variables
$result4= $var4 ?? $var6;
echo "<h2 style='color:yellow'>$result4</h2>";
?>