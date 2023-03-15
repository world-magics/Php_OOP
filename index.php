<?php

//Static method and Property
    class Dog{
        public $name;
        public static $weight='25 kg';


        public function bark(){
            $this->run();
            self::eat();
            return 'dog sounds';
        }
        public static function eat(){
            echo 'eating';
        }
        public function run(){
            echo 'running';
        }
    }
    class BullDog extends Dog {
        public function __construct()
        {
            parent::eat();
        }
    }

    // $bingo=new Dog();
    // $bingo->name="Bingo";

    // echo $bingo->bark();

    echo Dog::eat();
    echo Dog::$weight;
    
?>