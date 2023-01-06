<?php

namespace App;

class Zebra extends Animal implements CanWalk
{
    protected function getNoise():string
    {
        return "hiiiii \n";
    }
}