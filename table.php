<?php
declare(strict_types = 1);
function tab(int $start, int $stop){
    for($i=$start; $i<=$stop; $i++){
        for($j=1; $j<=10; $j++){
            echo $i." x ".$j." = ".$i*$j."<br>";
        }
        echo "<br>";
    }
    
}
tab(2,10);
?>