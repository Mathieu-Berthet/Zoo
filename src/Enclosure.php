<?php
namespace App;

class Enclosure
{
    public array $animals = [];


    //Ajoute un animal
    public function addAnimal(Animal $newAnimal):void
    {
        array_push($this->animals, $newAnimal);
    }

    public function toString(Animal $myAnimal):string
    {
        return "L'animal ".$myAnimal->getName(). "fait : ".$myAnimal->Noise();
    }
}