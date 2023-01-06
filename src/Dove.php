<?php

namespace App;
class Dove extends Animal implements CanFly
{
    protected function getNoise():string // Le cri de la colombe
    {
        return "Rou rouuu \n";
    }
}