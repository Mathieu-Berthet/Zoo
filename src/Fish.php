<?php

namespace App;
class Fish extends Animal implements CanSwim
{
    protected function getNoise():string // Le cri du poisson
    {
        return "bloubloublou \n";
    }
}