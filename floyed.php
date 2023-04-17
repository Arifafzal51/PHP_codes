<?php
//function for floyd triangle
function FloydTriangle($n){
    echo "<table style = 'border-collapse : collapse ; background-color:pink '>";
  $value = 1;
  for($i = 1; $i <= $n; $i++) {
    echo "<tr>";
    for($j = 1; $j <= $i; $j++) {
      echo "<td style = 'border : 2px solid blue  '>$value</td>"; 
      $value++;
    }
    echo "</tr>"; 
    echo "<br>"; 
  }
  echo "</table>";
}


FloydTriangle(9);


// function floyed(int $num){
//   $value=1;
//   echo "<table>";
//   for($start=1; $start<=$num; $start++){
//     echo "<tr>";
//     for($count=1; $count<=$start; $count++){
//       echo "$count ";
//       $value++;
//     }
//     echo "</tr>";
//     echo "<br>";
//   }
//   echo "</table>";
// }
// floyed(8);
// 
?>