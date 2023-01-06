<?php

namespace App;
class CatFish extends Animal implements CanSwim
{
    protected function getNoise():string
    {
        return "bloubloublou \n";
    }
}