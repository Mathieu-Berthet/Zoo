<?php

namespace App;
class ClownFish extends Animal implements CanSwim
{
    protected function getNoise():string
    {
        return "bloubloublou \n";
    }
}