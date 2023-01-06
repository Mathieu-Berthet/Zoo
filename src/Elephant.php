<?php

namespace App;
class Elephant extends Animal implements CanWalk
{
    protected function getNoise():string // Le cri de l'Elephant
    {
        return "tooooooooout \n";
    }
}