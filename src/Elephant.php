<?php

namespace App;
class Elephant extends Animal implements CanWalk
{
    protected function getNoise():string
    {
        return "tooooooooout \n";
    }
}