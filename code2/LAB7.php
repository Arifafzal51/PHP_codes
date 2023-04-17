<?php

$num_one = $_POST['fname'];
$num_two = $_POST['sname'];
if(isset($_POST['add'])){
    echo "addition of two number $num_one and $num_two is: ".$num_one + $num_two;
}
if(isset($_POST['sub'])){
    echo "addition of two number $num_one and $num_two is: ".$num_one - $num_two;
}
else if(isset($_POST['multi'])){
    echo "addition of two number $num_one and $num_two is: ".$num_one * $num_two;
}
else if(isset($_POST['divide'])){
    echo "addition of two number $num_one and $num_two is: ".$num_one / $num_two;
}
else if(isset($_POST['mod'])){
    echo "addition of two number $num_one and $num_two is: ".$num_one % $num_two;
}


?>