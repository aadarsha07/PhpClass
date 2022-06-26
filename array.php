<?php
$cars = [
    ["Name" => "Bugati", "Price" => 20000],
    ["Name" => "Lamborghini", "Price" => 35000],
    ["Name" => "Ferrari", "Price" => 20000],

];
$a=sizeof($cars);
for($i=0;$i<$a;$i++){
echo ($cars[$i]["Name"]).' '."$".($cars[$i]["Price"])."<br>";
}

?>