<?php

    class Car{
        public $model;
        protected $year;
        private $km;

        public function __construct($model, $year,$km){
            $this->model=$model;
            $this->year=$year;
            $this->km=$km;
        }

        public function drive(){
            return 'driving';
        }
        // public function getFuel(){
        //     return 'fueling';
        // }

        public function setModel($model){
            $this->model=$model;
        }
        public function setYear($year){
            $this->year=$year;
        }
        public function getYear(){
            return $this->year;
        }
        public function getKm(){
            return $this->km;
        }

        protected function reverse(){
            return 'reverse drive';

        }
        private function sell(){
            return 'selling';
        }




    }

    $cherry=new Car('chevrolet',2019,180000);
    echo $cherry->getKm('125000');

    echo('</br>');


    echo $cherry->getYear('2020');



class ElectricCar extends Car{
    public $km;
    public function getYear(){
        return $this->year;
    }
    public function getKm(){
        return $this->km;
    }
    public function getReverse(){
        return $this->reverse();
    }
}

$tesla=new ElectricCar('tesla','2020','2644684');

echo '</br>'.$tesla->getReverse();

echo '</br>'.$tesla->getYear();


    // class ElectricCar extends Car{
    //     public $battery;

    //     public function charge(){
    //         return 'charging';
    //     }
    //     //overrise method drive in ElectricCar after Car class in drive method
    //     public function drive(){ 
    //         return 'electric driving';
    //     }

    // }
    // class RaceCar extends Car{

    // }
    // class PublicCar extends Car{

    // }
    // $tesla=new ElectricCar('Tesla','2025-11-25');
    // $tesla->battery='5000';
    // var_dump($tesla->drive());

    // $bmw=new Car('bmw','2023-23-12');

    // $audi=new Car('Audi','2025-23-23');
    // var_dump($bmw);
    // echo('</br>');
    // echo('</br>');
    // var_dump($audi);
    
    
?>