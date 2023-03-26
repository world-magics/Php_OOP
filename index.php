<?php
    use App\Kitchen\Table;
    use App\Html\Table as Htable; //as bu Table ni Htable qb ishlatsh dgani

    require 'classes/Dog.php';
    require 'classes/Fruit.php';
    require 'classes/Cat.php';
    require 'Html/Table.php';
    require 'Kitchen/Table.php';
    // $table=new App\Kitchen\Table();
    $table=new Table();

    $cat=new Cat();
    $cat->name='Kisa';
    // var_dump($cat->name);
    $cat2= clone $cat; //do will clone
    $cat->name='Kaya';


    var_dump($cat->name);

?>