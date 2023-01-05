<?php
namespace App {
    abstract class Animal
    {
        private $name = "";

        public function getName()
        {
            return $this->name;
        }


        protected abstract function getNoise():string;

        public function Noise()
        {
            return getNoise();
        }
    }

    class Fish extends Animal
    {
        protected function getNoise():string
        {
            return "bloubloublou \n";
        }
    }

    class BubbleFish extends Animal
    {
        protected function getNoise():string
        {
            return "bloubloublou \n";
        }
    }

    class CatFish extends Animal
    {
        protected function getNoise():string
        {
            return "bloubloublou \n";
        }
    }

    class ClownFish extends Animal
    {
        protected function getNoise():string
        {
            return "bloubloublou \n";
        }
    }

    class Whale extends Animal
    {
        protected function getNoise():string
        {
            return "splash \n";
        }
    }

    class Zebra extends Animal
    {
        protected function getNoise():string
        {
            return "hiiiii \n";
        }
    }

    class Elephant extends Animal
    {
        protected function getNoise():string
        {
            return "tooooooooout \n";
        }
    }

    class Parrot extends Animal
    {
        protected function getNoise():string
        {
            return "coco \n";
        }
    }

    class Dove extends Animal
    {
        protected function getNoise():string
        {
            return "Rou rouuu \n";
        }
    }

}