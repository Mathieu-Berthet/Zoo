<?php

namespace App;
class Whale extends Animal implements CanSwim
{
    protected function getNoise():string
    {
        return "splash \n";
    }
}