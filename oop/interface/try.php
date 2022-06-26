<?php
interface Lovers{
    public function loves();
}

class Aadarsha implements Lovers {
    public function loves(){
        echo "Aadarsha loves ABCD".'<br>';
    }

}
class Sahil implements Lovers{
    public function loves(){
        echo "Sahil loves XYZ".'<br>';
    }
}
class Aashish implements Lovers{
    public function loves(){
        echo "Aashish loves IJKL".'<br>';
    }
}
$aadarsha= new Aadarsha();
$sahil= new Sahil();
$aashish= new Aashish();
$lovers=array($aadarsha,$sahil,$aashish);

foreach($lovers as $lovers)
{
$lovers->loves();
}
