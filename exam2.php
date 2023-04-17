<?php
//Print table of 1 to 10 in table 
echo"<table style= 'border:1px solid;background-color:pink ;border-collapse:collapse'>";
for($row=0;$row<=10;$row++)
{
    echo"<tr>";
    for($col=0;$col<=10;$col++)
    {
        $result=$row*$col;
        echo"<td style='border:2px solid blue; '>$row*$col=$result</td>";
    }
    echo"</tr>";
}
echo"</table>";
echo"<br>";
?>