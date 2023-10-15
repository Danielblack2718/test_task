<?php

require 'src/ConfectioneryFactory.php';

// создаем фабрику
$factory = new ConfectioneryFactory();

// добавляем оборудование
$factory->addEquipment(new ChocolateMachine(1));
$factory->addEquipment(new ChocolateMachine(2));
$factory->addEquipment(new IceCreamMachine(3));
$factory->addEquipment(new IceCreamMachine(4));
$factory->addEquipment(new IceCreamMachine(5));
$factory->addEquipment(new CakeOven(6));

// выводим информацию о количестве каждого типа оборудования на фабрике
print_r($factory->getEquipmentCount());

// производим продукцию 12 часов
$factory->produce(12);

// выводим информацию о продукции
print_r($factory->getProducts());

// добавляем дополнительное оборудование
$factory->addEquipment(new IceCreamMachine(7));
$factory->addEquipment(new CakeOven(8));

// выводим информацию о количестве каждого типа оборудования на фабрике
print_r($factory->getEquipmentCount());

// производим продукцию еще 12 часов
$factory->produce(12);

// выводим информацию о продукции
print_r($factory->getProducts());
