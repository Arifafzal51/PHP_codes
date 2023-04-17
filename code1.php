<?php
$var1 = 9;//readline('Enter pahla Number: ');
$var2 = 6;//readline('Enter dusra Number: ');
$var3 = 7;//readline('Enter dusra Number: ');
$var4 = 8;//readline('Enter dusra Number: ');

$result1 = ($var1 > $var2) ? $var1 : $var2;
$result2 = ($var3 > $var4) ? $var3 : $var4;
$result3 = ($result1 > $result2) ? ($result1) : ($result2);
echo ($result3);


//= ($var1 > $var2 && $var1 > $var3 && $var1 > $var4) ? print("$var1 is greater") :
//     ($var2 > $var1 && $var2 > $var3 && $var2 > $var4) ? print("$var2 is greater") :
//     ($var3 > $var1 && $var3 > $var2 && $var3 > $var4) ? print("$var3 is greater") :
//     ($var4 > $var1 && $var4 > $var2 && $var4 > $var3) ? print("$var4 is greater") :

?>