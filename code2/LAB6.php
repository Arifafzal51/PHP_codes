<!-- Q1: wap php script having a function which reads a string value .
Inside the execution of function you have to change the given function into array and return the given array in ascending order -->

<?php

function name(){
    $val="PRATEEK";
    $val2=str_split($val);
    sort($val2);
    print_r($val2);
}

name();
echo"<br>";
echo"<br>";

// <!-- Write a php script to check weather a given number is ADOM or not using function as an argument concept  -->

function ADOM(int $val3){
    $num=$val3;
    $num=$num*$num;
    $num=strrev("$num");
    $num=sqrt((int)$num);
    $num=strrev("$num");
    if($num == $val3){
        echo "yes";
    }
    else{
        echo"no";
    }
}
ADOM(12);

echo"<br>";
echo"<br>";

// Write a php script which exe a loop from starting value to the ending value inside the working counter digit in the given formation.
// If the counter is multiple of 3 you have too display Nitesh instead of it's value. If the counter is multiple of 5 you have too display Kumar instead of it's value.
// If the counter is multiple of 3 and 5 you have too display Nitesh Kumar Tiwari instead of it's value. If the given multiple are not avalilable then print the value.

function Damn(int $start, int $end){
    for($i=$start; $i<=$end; $i++){
        if($i%3==0 && $i%5==0){
            echo "Nitish Kumar Tiwari";
            echo"<br>";
        }
        else if($i%5 == 0){
            echo "Kumar";
            echo"<br>";
        }
        else if($i%3==0){
            echo"Nitish";
            echo"<br>";
        }
        else{
            echo"$i";
        }
    }
}
Damn(1,15);

?>