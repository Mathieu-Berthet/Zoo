<?php

namespace App;

class Zebra extends Animal implements CanWalk
{
    protected function getNoise():string // Le cri du zebre
    {
        return "hiiiii \n";
    }
}