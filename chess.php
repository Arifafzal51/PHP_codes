<?php
echo "<table style='border: 0px solid
black; border-collapse: collapse'>";

for ($i=1; $i<=8 ; $i++) 
{
    echo "<tr>";
    for ($j=1; $j <=8 ; $j++) 
    { 
      if (($i+$j)%2==0){
        echo "<td style='border: 2px solid
        black; height:100px; width:100px;background-color:black'></td>";

      }
     
      
      else {
        echo "<td style='border: 2px solid black; height:70px; width:70px background-color:
        white'>
        </td>";
      }
    }
  echo"  </tr>";
}
  echo"</table>";
?>