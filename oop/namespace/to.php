<?php
namespace fromfile;
require 'from.php';
use fromfile\From;

class To{
    public function display(){
        echo (new From())->getInfo()."<br>";
        echo (new From())->sendInfo();
    }
}
$obj=new To();
$obj->display();
