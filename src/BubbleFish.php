<?php

namespace App;
class BubbleFish extends Animal
{
    protected function getNoise():string
    {
        return "bloubloublou \n";
    }
}