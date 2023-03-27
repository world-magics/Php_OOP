<?php
    use App\Kitchen\Table;
    use App\Html\Table as Htable; //as bu Table ni Htable qb ishlatsh dgani

    require 'classes/Dog.php';
    require 'classes/Fruit.php';
    require 'classes/Cat.php';
    require 'classes/Car.php';
    require 'Html/Table.php';
    require 'Kitchen/Table.php';
   

    $audi=new Car();
    $audi->setModel("Audi");
    $audi->setYear("20.12.2023");

    echo "</br>".$audi->getModel();
    echo "</br>".$audi->getYear();

?>