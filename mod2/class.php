<?php
class stu{
   public $name = "Arif";
   private $ammount = 100;

   public function set(){
      $this -> name = "samar";
   }
}

$stu_new = new Stu;
$stu_two = new Stu;
$stu_th = new Stu;

$stu_new -> name = "sam";
echo $stu_new->name;
echo '<br>';
echo $stu_two->name;
echo '<br>';
echo $stu_th->name;
echo '<br>';
//$stu_new -> name = "sam";

//echo $stu_new->name;


//Methods



?>