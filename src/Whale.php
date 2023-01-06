<?php

namespace App;
class Whale extends Animal implements CanSwim
{
    protected function getNoise():string // Le cri de la baleine
    {
        return "splash \n";
    }
}