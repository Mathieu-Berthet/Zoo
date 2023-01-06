<?php
namespace App;

class Enclosure
{
    public array $animals = [];


    //Ajoute un animal dans l'enclos adapté a ce dernier
    public function addAnimal(Animal $newAnimal):void
    {
        array_push($this->animals, $newAnimal);
    }

    //Retourne l'animal présent dans l'enclos et son cri.
    public function __toString():string
    {
        $nomEtCris = "";
        foreach($this->animals as $animal)
        {
            $nomEtCris .= "L'animal ".$animal->getName(). "fait : ".$animal->Noise();
        }
        return $nomEtCris;
    }
}