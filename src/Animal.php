<?php
namespace App;
abstract class Animal
{
    private string $name = ""; // Le nom de l'animal

    public function getName():string // Permet de récupérer son nom
    {
        return $this->name;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected abstract function getNoise():string;

    public function Noise():string // Retourne le cri de l'animal
    {
        return $this->getNoise();
    }
}