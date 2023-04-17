<?php

function factorial(int $num){
    $fact = 1;
    for($count=1; $count<=$num; $count++){
        $fact = $fact * $count;
    }
    echo "$num! is $fact";
    return $fact;
}
factorial(6);

// for($sets=1; $sets<=5; $sets++){
//     for($data=1; $data<=5; $data++){
//         if($data==5){
//             continue;
//         }
//         echo "$sets$data ";
//     }
// }

?>