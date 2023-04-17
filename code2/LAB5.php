<?php

//while
//do-while
//for

//entry controlled loop :- prefer the testing condition before innitiating the loop Ex:- for loop
//exit loop :- run atleast one time Ex:- while loop

//loop counter :- varible 
//testing condition :-  condition to be tested 
//loop counter update :- i++

//horizontal
// echo "<table style='border: 2px solid blue; border-collapse:collapse; background-color:aqua'>";
// echo "<tr>";
// for ($count = 1; $count <= 100; $count++){
//     echo "<td style='border:2px solid blue'>$count</td>";
// }
// echo "</tr></table>";

//vertical
// echo "<table style='border: 2px solid blue; border-collapse:collapse; background-color:aqua'>";
// for ($count = 1; $count <= 10; $count++){
//     echo "<tr>";
//     echo "<td style='border:2px solid blue'>$count</td>";
//     echo "</tr>";

// }
// echo "</tr></table>";

echo "<table style='border:2px solid black'>";
$num=0;
for($count=1;$count<=10;$count++) {
    echo"<tr>";
    for($couni=1;$couni<=10;$couni++) {
        $num+=1;
        $product = $couni*$num;
    echo "<td style='border:2px solid black '>$num * $couni = $product</td>";
    
    }
    echo"</tr>";
}

// $num = 9;  
// for($i=1; $i<=10; $i++)   
// {
// $product = $i*$num;
// echo "$num * $i = $product" ;   
// echo '<br>';	 
// } 


?>
