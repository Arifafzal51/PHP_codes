<?php 
//Print Double digit number, 1 to 10 in table 
$count = 1;
echo "<table style ='border: 2px solid red;border-collapse:collapse'>";
for($row =0 ; $row <=10; $row++)
{
    echo "<tr>";
    for($col =0; $col<=10; $col++)
    {
        echo "<td style = 'border : 2px solid '>".$row.$col."</td>";
        $count++; 
    }
    echo"</tr>";
}
echo "</table>";
echo"<br>";
?>