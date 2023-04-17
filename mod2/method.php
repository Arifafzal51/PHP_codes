<?php
class stu{
    public $name = "Arif";
    public function data(){
        echo $this->name;
        echo '<br>';

        $this -> name = "Samar";
    }
 }
 $obj = new stu;
 $obj -> data();
 $obj_two=new stu  ;

 echo $obj -> name;
 echo '<br>';
 echo $obj_two -> name;


?>