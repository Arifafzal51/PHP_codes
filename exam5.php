<?php
//User define function to find greatest number between three integers
function greatest_of_three(int $num_1, int $num_2, int $num_3)
{  
  switch ($num_1 > $num_2) {
    case 1:
      switch ($num_1 > $num_3) {
        case 1:
          echo $num_1 . " is greatest.";
          break;
        case 0:
          echo $num_3 . " is greatest.";
          break;
      }
      break;
    case 0:
      switch ($num_2 > $num_3) {
        case 1:
          echo $num_2 . " is greatest.";
          break;
        case 0:
          echo $num_3 . " is greatest.";
          break;
      }
      break;
  }
}
greatest_of_three(20,25,20);

?>