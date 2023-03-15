<?php

//Static method and Property
    class Dog{
        public $name;
        public static $weight='25 kg';


        public function bark(){
            $this->run();
            $this->eat();
            return 'dog sounds';
        }
        public static function eat(){
            echo 'eating';
        }
        public function run(){
            echo 'running';
        }
    }

    // $bingo=new Dog();
    // $bingo->name="Bingo";

    // echo $bingo->bark();

    echo Dog::eat();
    echo Dog::$weight;
    
?>