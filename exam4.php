<?php
//Print Floyd's Triangle
echo"<table style='border-collapse:collapse;'>";
$count=1;
for($row=0;$row<10;$row++)
{
    echo"<tr>";
    for($col=0;$col<=$row;$col++)
    {
        echo"<td style='border:2px solid;border-collapse:collapse;width:30px;height:30px;'>$count</td>";        
        $count++;
    }
    
    echo"</tr>";
}
echo"</table>";
echo"<br>";
?>