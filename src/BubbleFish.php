<?php

namespace App;
class BubbleFish extends Animal implements CanSwim
{
    protected function getNoise():string
    {
        return "bloubloublou \n";
    }
}