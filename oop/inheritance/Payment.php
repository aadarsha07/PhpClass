<?php
class Payment{
    public function pay()
    {
        echo (new ReflectionClass($this))->getShortName()." Please Pay"."<br>";
    }
}

class Customer extends Payment{
    
    public function discount()
    {
        echo "Thanks for puchasing.you got 5% off"."<br>";
    }
}
class Staff extends Payment{
   
    public function discount()
    {
        echo "Thanks! you got 10% off"."<br>";
    }
    
}
$customer=new Customer();
$staff=new Staff();
$staff->pay();
$staff->discount();
$customer->pay();
$customer->discount();
