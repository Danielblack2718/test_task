<?php

require_once 'Equipment.php';
require_once 'Product.php';

class ConfectioneryFactory {
    private $equipment;
    private $products;

    public function __construct() {
        $this->equipment = [];
        $this->products = [];
    }

    public function addEquipment($equipment) {
        $this->equipment[] = $equipment;
    }

    public function produce($hours) {
        foreach ($this->equipment as $equipment) {
            $type = get_class($equipment);
            if ($type == "ChocolateMachine") {
                $product = new Chocolate();
            } elseif ($type == "IceCreamMachine") {
                $product = new IceCream();
            } elseif ($type == "CakeOven") {
                $product = new Cake();
            }

            $productionAmount = $hours * $equipment->getProductionRate();
            $productName = get_class($product);

            if (!array_key_exists($productName, $this->products)) {
                $this->products[$productName] = [
                    "amount" => 0,
                    "cost" => 0,
                    "totalCost" => 0
                ];
            }

            $this->products[$productName]["amount"] += $productionAmount;
            $this->products[$productName]["cost"] = $product->getCost();
            $this->products[$productName]["totalCost"] += $product->getCost() * $productionAmount;
        }
    }

    public function getEquipmentCount() {
        $count = [];
        foreach ($this->equipment as $equipment) {
            $type = get_class($equipment);
            if (!array_key_exists($type, $count)) {
                $count[$type] = 0;
            }
            $count[$type]++;
        }
        return $count;
    }

    public function getProducts() {
        return $this->products;
    }
}
