<?php
  class Dog{
    public $name;
    public static $weight='25 kg';

    //congustants
    const BREED="Doberman";


    public function bark(){

        return self::BREED;
    }
    public static function eat(){
        echo 'eating';
    }
    public function run(){
        echo 'running';
    }
}
echo Dog::BREED;   
?>