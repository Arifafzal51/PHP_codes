<?php
echo"<table style='border:2px solid;border-collapse:collapse'>";
for($row=1;$row<=8;$row++)
{
    echo"<tr>";
    for($col=1;$col<=8;$col++)
    {
        $total=$row+$col;
        if($total%2==0)
        {
            echo"<td style='border:2px solid;background-color:black;width:100px;height:100px'></td>";
        }
        else
        {
            echo"<td style='border:2px solid;background-color:white;width:100px;height:100px'></td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
echo"<br>";
?>