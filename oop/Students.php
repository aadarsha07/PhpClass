<?php
class Students{
    public string $name;
    public $roll;
    public string $email;
    public function __construct($roll,$name="aada",$email)
    {
        $this->name=$name;
        $this->roll=$roll;
        $this->email=$email;

    }
    /*public function getInfo(int $roll, String $name)
    {
        $this->name=$name;
        $this->roll=$roll;

    }
    */
    function displayInfo()
    {
        echo $this->name.'<br> '.$this->roll."<br>".$this->email;

    }
}
$Info=new Students(NULL,'Aadarsha',"hi@gmail.com");
//$Info->getInfo(1,"Aadarsha");
$Info->displayInfo();

?>