<?php
//Interfaces
//interfaceda hamma metodla public bulshi kk
//interface da funksiyala public buladi doim
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
        public function eat(){
            return 'Dog eat meat';
        }
   }
   class Cat implements Animal{
    public function makeSound(){
        return 'Cat sound';
    }
    public function eat(){
        return 'Cat drink milk';
    }
   }
    
?>