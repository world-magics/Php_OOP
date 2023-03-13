<?php

    class Car{
        public $model;
        public $year;

        public function __construct($model, $year){
            $this->model=$model;
            $this->year=$year;
        }

        public function drive(){
            return 'driving';
        }
        public function getFuel(){
            return 'fueling';
        }

        public function setModel($model){
            $this->model=$model;
        }
        public function setYear($year){
            $this->year=$year;
        }


    }

    $bmw=new Car('bmw','2023-23-12');

    var_dump($bmw);
    
    
?>