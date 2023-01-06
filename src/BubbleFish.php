<?php

namespace App;
class BubbleFish extends Animal implements CanSwim
{
    protected function getNoise():string // Le cri du poisson bulle
    {
        return "bloubloublou \n";
    }
}