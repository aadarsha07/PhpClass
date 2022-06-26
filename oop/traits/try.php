<?php
trait Address {
    public function add() {
        echo "Enter your address";
    }
}

trait Items{
    public function add() {
        echo "Add items you want".'<br>';
    }
}

class Delivery {

    use Address, Items {
        Items::add insteadof Address;
    }

    public function cancel() {
        echo "cancel your order";
    }
}

$delivery = new Delivery();
$delivery->add();
$delivery->cancel();