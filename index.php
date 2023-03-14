<?php
//Trait
//bitta funksiyani bir nechta clasda ishlatish manoni bildiradi


trait AnimalTrait{
    public function eat(){
        return 'Cat eat meat and fat';
    }
    public function sleep(){
        return 'sleeping';
    }
}
trait Walking{
    public function walking(){
            return 'walking';
    }
}

   interface Animal{
        public function makeSound();
        public function eat();

   }
   //interface ishlatish boshqa clasda implements suzi orqali buladi
   //shu interfaceni ishlatgan har bitta clasda shu interface ichidagi funksiya bulshi shart dgani
   //interfaceda faqat funsiyala yozsh mmk atribut yoshb bumydi

   class Dog implements Animal{
        public function makeSound(){
            return 'Dog Sound';
        }
        use AnimalTrait;
       
   }
   class Cat implements Animal{
    public function makeSound(){
        return 'Cat sound';
    }
    use AnimalTrait;
   
   }
   class Kitten extends Cat {
        use AnimalTrait,Walking;
   }
   $dog =new Dog;
   $cat=new kitten;

   var_dump($cat->walking());
   var_dump($dog->makeSound());
   var_dump($dog->eat());
   var_dump($dog->sleep());
    
?>