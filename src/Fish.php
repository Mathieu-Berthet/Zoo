<?php

namespace App;
class Fish extends Animal implements CanSwim
{
    protected function getNoise():string
    {
        return "bloubloublou \n";
    }
}