<?php

namespace App;
class Dove extends Animal implements CanFly
{
    protected function getNoise():string
    {
        return "Rou rouuu \n";
    }
}