<?php
abstract class Equipment {
    protected $id;
    protected $productionRate;

    public function __construct($id, $productionRate) {
        $this->id = $id;
        $this->productionRate = $productionRate;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductionRate() {
        return $this->productionRate;
    }
}

class ChocolateMachine extends Equipment {
    public function __construct($id) {
        parent::__construct($id, 10);
    }
}

class IceCreamMachine extends Equipment {
    public function __construct($id) {
        parent::__construct($id, 15);
    }
}

class CakeOven extends Equipment {
    public function __construct($id) {
        parent::__construct($id, 5);
    }
}