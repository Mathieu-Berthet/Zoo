<?php
namespace App;

class Enclosure
{
    public array $animals = [];

    //Ajoute un animal dans l'enclos adapté a ce dernier
    public function addAnimal(Animal $newAnimal):void
    {
        //$this->animals[] = $newAnimal; // Version plus simple
        array_push($this->animals, $newAnimal);
    }

    //Retourne l'animal présent dans l'enclos et son cri.
    public function __toString():string
    {
        $nomEtCris = "";
        foreach($this->animals as $animal)
        {
            $nomEtCris .= "L'animal ".$animal->getName(). "qui fait : ".$animal->Noise();
        }
        return $nomEtCris;
    }
}