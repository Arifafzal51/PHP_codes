<?php
$num = 10;
$den = 0;

class myExeption extends Exception{
    function sandesh(){
        echo "non zero value req";

    }
}

try{
    if ($den == 0){
        throw new Exception("zero se bada number dede");
    }
    else{
        echo $num/$den;
        throw new Exception("sahi number hai ");
    }

}
catch (myException $mass){
    echo $mass -> getMessage();
}
?>

