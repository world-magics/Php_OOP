<?php
    use App\Kitchen\Table;
    use App\Html\Table as Htable; //as bu Table ni Htable qb ishlatsh dgani

    require 'classes/Dog.php';
    require 'classes/Fruit.php';
    require 'Html/Table.php';
    require 'Kitchen/Table.php';
    // $table=new App\Kitchen\Table();
    $table=new Table();


    var_dump($table);

?>