<?php 

abstract class Product {
    protected $expirationDate;
    protected $cost;
    protected $productionTime;

    public function __construct($expirationDate, $cost, $productionTime) {
        $this->expirationDate = $expirationDate;
        $this->cost = $cost;
        $this->productionTime = $productionTime;
    }

    public function getCost() {
        return $this->cost;
    }

    public function getProductionTime() {
        return $this->productionTime;
    }
}

class Chocolate extends Product {
    public function __construct() {
        parent::__construct(30, 5, 1);
    }
}

class IceCream extends Product {
    public function __construct() {
        parent::__construct(7, 2, 2);
    }
}

class Cake extends Product {
    public function __construct() {
        parent::__construct(15, 10, 3);
    }
}