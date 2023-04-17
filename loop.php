<?php
// <style>
// background color : #FFFFFF;
// <\style>
echo "<table style='border:2px solid black ;border-collapse:collapse'>";

echo '<table style="background-color:black">';
        echo '<text style="text-color:white">';
        echo '<span style="color:#FFFFFF;text-align:center;">hiiiiiii</span>';

for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $count+=1;
        echo "<td style='border:2px solid white '>$count</td>";
        echo "<br>";
    }echo"</tr>";
}
echo"</tr></table>"; 


?>