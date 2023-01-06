<?php

namespace App;
class CatFish extends Animal implements CanSwim
{
    protected function getNoise():string // Le cri du poisson chat
    {
        return "bloubloublou \n";
    }
}