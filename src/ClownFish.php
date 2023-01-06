<?php

namespace App;
class ClownFish extends Animal implements CanSwim
{
    protected function getNoise():string // Le cri du poisson clown
    {
        return "bloubloublou \n";
    }
}