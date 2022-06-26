<?php
class Student {
    public function newFunction(String $name, int $value){
        echo "$name"."<br>".$value;
    }
}
$student = new Student();

$student->newFunction('Dada',6700);

?>