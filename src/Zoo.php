<?php
namespace App;


use Composer\Autoload\PhpFileCleaner;

class Zoo
{
    private static Enclosure $aquarium;
    private static Enclosure $aviary;
    private static Enclosure $fence;

    public function __construct()
    {
        self::$aquarium = new Enclosure();
        self::$aviary = new Enclosure();
        self::$fence = new Enclosure();
    }

    public function getAquarium():Enclosure
    {
        return self::$aquarium;
    }

    public function getAviary():Enclosure
    {
        return self::$aviary;
    }

    public function getFence():Enclosure
    {
        return self::$fence;
    }

    //Ajoute les animaux dans leurs enclos respectifs
    public function addAnimal(Animal $animal):void
    {
        if($animal instanceof CanSwim)
        {
            $this->getAquarium()->addAnimal($animal);
        }
        else if($animal instanceof CanFly)
        {
            $this->getAviary()->addAnimal($animal);
        }
        else if($animal instanceof CanWalk)
        {
            $this->getFence()->addAnimal($animal);
        }
    }

    //Affiche les animaux présents dans les enclos
    public function visitTheZoo():void
    {
        if(count($this->getFence()->animals) > 0)
        {
            echo "L'enclos contient : \n";
            foreach($this->getFence()->animals as $animal)
            {
                echo $this->getFence()->toString($animal);
            }
        }
        else
        {
            echo "Il n'y a pas d'animaux dans l'enclos\n";
        }

        if(count($this->getAquarium()->animals) > 0)
        {
            echo "L'aquarium contient : \n";
            foreach($this->getAquarium()->animals as $animal)
            {
                echo $this->getAquarium()->toString($animal);
            }
        }
        else
        {
            echo "Il n'y a pas d'animaux dans l'Aquarium\n";
        }

        if(count($this->getAviary()->animals) > 0)
        {
            echo "La volière contient : \n";
            foreach($this->getAviary()->animals as $animal)
            {
                echo $this->getAviary()->toString($animal);
            }
        }
        else
        {
            echo "Il n'y a pas d'animaux dans la volière\n";
        }
    }
}