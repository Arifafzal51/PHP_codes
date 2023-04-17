<?php
$ginti = 407;

$pura = 0;

$temp = $ginti;

while ($temp!=0){
    $rem = $temp%10;
    $pura= $pura+$rem+$rem+$rem;
    $temp=$temp/10;
}

if ($ginti==$pura){
    echo 'Armstrong hai';
}
else{ 
    echo 'Armstrong nahi hai';
}



?>